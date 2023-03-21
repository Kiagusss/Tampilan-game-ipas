// Scene, Camera, Renderer
let renderer = new THREE.WebGLRenderer();
let scene = new THREE.Scene();
let aspect = window.innerWidth / window.innerHeight;
let camera = new THREE.PerspectiveCamera(45, aspect, 0.1, 1500);
let cameraRotation = 0;
let cameraRotationSpeed = 0.001;
let cameraAutoRotation = true;
let orbitControls = new THREE.OrbitControls(camera);

// Lights
let spotLight = new THREE.SpotLight(0xffffff, 1, 0, 10, 2);

// Texture Loader


// Planet Proto
let planetProto = {
  sphere: function (size) {
    let sphere = new THREE.SphereGeometry(size, 32, 32);

    return sphere;
  },
  material: function (options) {
    let material = new THREE.MeshPhongMaterial();
    if (options) {
      for (var property in options) {
        material[property] = options[property];
      }
    }

    return material;
  },
  glowMaterial: function (intensity, fade, color) {
    // Custom glow shader from https://github.com/stemkoski/stemkoski.github.com/tree/master/Three.js
    let glowMaterial = new THREE.ShaderMaterial({
      uniforms: {
        'c': {
          type: 'f',
          value: intensity },

        'p': {
          type: 'f',
          value: fade },

        glowColor: {
          type: 'c',
          value: new THREE.Color(color) },

        viewVector: {
          type: 'v3',
          value: camera.position } },


      vertexShader: `
        uniform vec3 viewVector;
        uniform float c;
        uniform float p;
        varying float intensity;
        void main() {
          vec3 vNormal = normalize( normalMatrix * normal );
          vec3 vNormel = normalize( normalMatrix * viewVector );
          intensity = pow( c - dot(vNormal, vNormel), p );
          gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }`,

      fragmentShader: `
        uniform vec3 glowColor;
        varying float intensity;
        void main() 
        {
          vec3 glow = glowColor * intensity;
          gl_FragColor = vec4( glow, 1.0 );
        }`,

      side: THREE.BackSide,
      blending: THREE.AdditiveBlending,
      transparent: true });


    return glowMaterial;
  },
  texture: function (material, property, uri) {
    let textureLoader = new THREE.TextureLoader();
    textureLoader.crossOrigin = true;
    textureLoader.load(
    uri,
    function (texture) {
      material[property] = texture;
      material.needsUpdate = true;
    });

  } };


let createPlanet = function (options) {
  // Create the planet's Surface
  let surfaceGeometry = planetProto.sphere(options.surface.size);
  let surfaceMaterial = planetProto.material(options.surface.material);
  let surface = new THREE.Mesh(surfaceGeometry, surfaceMaterial);

  // Create the planet's Atmosphere
  let atmosphereGeometry = planetProto.sphere(options.surface.size + options.atmosphere.size);
  let atmosphereMaterialDefaults = {
    side: THREE.DoubleSide,
    transparent: true };

  let atmosphereMaterialOptions = Object.assign(atmosphereMaterialDefaults, options.atmosphere.material);
  let atmosphereMaterial = planetProto.material(atmosphereMaterialOptions);
  let atmosphere = new THREE.Mesh(atmosphereGeometry, atmosphereMaterial);

  // Create the planet's Atmospheric glow
  let atmosphericGlowGeometry = planetProto.sphere(options.surface.size + options.atmosphere.size + options.atmosphere.glow.size);
  let atmosphericGlowMaterial = planetProto.glowMaterial(options.atmosphere.glow.intensity, options.atmosphere.glow.fade, options.atmosphere.glow.color);
  let atmosphericGlow = new THREE.Mesh(atmosphericGlowGeometry, atmosphericGlowMaterial);

  // Nest the planet's Surface and Atmosphere into a planet object
  let planet = new THREE.Object3D();
  surface.name = 'surface';
  atmosphere.name = 'atmosphere';
  atmosphericGlow.name = 'atmosphericGlow';
  planet.add(surface);
  planet.add(atmosphere);
  planet.add(atmosphericGlow);

  // Load the Surface's textures
  for (let textureProperty in options.surface.textures) {
    planetProto.texture(
    surfaceMaterial,
    textureProperty,
    options.surface.textures[textureProperty]);

  }

  // Load the Atmosphere's texture
  for (let textureProperty in options.atmosphere.textures) {
    planetProto.texture(
    atmosphereMaterial,
    textureProperty,
    options.atmosphere.textures[textureProperty]);

  }

  return planet;
};

let earth = createPlanet({
  surface: {
    size: 0.5,
    material: {
      bumpScale: 0.05,
      specular: new THREE.Color('grey'),
      shininess: 10 },

    textures: {
      map: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/141228/earthmap1k.jpg',
      bumpMap: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/141228/earthbump1k.jpg',
      specularMap: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/141228/earthspec1k.jpg' } },


  atmosphere: {
    size: 0.003,
    material: {
      opacity: 0.8 },

    textures: {
      map: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/141228/earthcloudmap.jpg',
      alphaMap: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/141228/earthcloudmaptrans.jpg' },

    glow: {
      size: 0.02,
      intensity: 0.7,
      fade: 7,
      color: 0x93cfef } } 
    
    });




// Marker Proto
let markerProto = {
  latLongToVector3: function latLongToVector3(latitude, longitude, radius, height) {
    var phi = latitude * Math.PI / 180;
    var theta = (longitude - 180) * Math.PI / 180;

    var x = -(radius + height) * Math.cos(phi) * Math.cos(theta);
    var y = (radius + height) * Math.sin(phi);
    var z = (radius + height) * Math.cos(phi) * Math.sin(theta);

    return new THREE.Vector3(x, y, z);
  },
  marker: function marker(size, color, vector3Position) {
    let markerGeometry = new THREE.SphereGeometry(size);
    let markerMaterial = new THREE.MeshLambertMaterial({
      color: color });

    let markerMesh = new THREE.Mesh(markerGeometry, markerMaterial);
    markerMesh.position.copy(vector3Position);

    return markerMesh;
    
  } };


// Place Marker
let placeMarker = function (object, options) {
  let position = markerProto.latLongToVector3(options.latitude, options.longitude, options.radius, options.height);
  let marker = markerProto.marker(options.size, options.color, position);
  object.add(marker);
};

// Place Marker At Address
let placeMarkerAtAddress = function (address, color) {
  let encodedLocation = address.replace(/\s/g, '+');
  let httpRequest = new XMLHttpRequest();

  httpRequest.open('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address=' + encodedLocation);
  httpRequest.send(null);
  httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState == 4 && httpRequest.status == 200) {
      let result = JSON.parse(httpRequest.responseText);

      if (result.results.length > 0) {
        let latitude = result.results[0].geometry.location.lat;
        let longitude = result.results[0].geometry.location.lng;

        placeMarker(earth.getObjectByName('surface'), {
          latitude: latitude,
          longitude: longitude,
          radius: 0.5,
          height: 0,
          size: 0.01,
          color: color });

      }
    }
  };
};

// Galaxy



// Scene, Camera, Renderer Configuration
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

camera.position.set(1, 1, 1);
orbitControls.enabled = !cameraAutoRotation;

scene.add(camera);
scene.add(spotLight);
scene.add(earth);

// Light Configurations
spotLight.position.set(2, 0, 1);

// Mesh Configurations
earth.receiveShadow = true;
earth.castShadow = true;
earth.getObjectByName('surface').geometry.center();

// On window resize, adjust camera aspect ratio and renderer size
window.addEventListener('resize', function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});

// Main render function
let render = function () {
  earth.getObjectByName('surface').rotation.y += 1 / 32 * 0.01;
  earth.getObjectByName('atmosphere').rotation.y += 1 / 16 * 0.01;
  if (cameraAutoRotation) {
    cameraRotation += cameraRotationSpeed;
    camera.position.y = 0;
    camera.position.x = 2 * Math.sin(cameraRotation);
    camera.position.z = 2 * Math.cos(cameraRotation);
    camera.lookAt(earth.position);
  }
  requestAnimationFrame(render);
  renderer.render(scene, camera);
};



render();

document.querySelector("canvas").style.zIndex = "-100";
var d = document.querySelector("canvas");
d.className += "animate__animated animate__fadeIn animate__slower";



(function($) { "use strict";

        //Page cursors
    
        document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
            t.style.left = n.clientX + "px", 
            t.style.top = n.clientY + "px", 
            e.style.left = n.clientX + "px", 
            e.style.top = n.clientY + "px", 
            i.style.left = n.clientX + "px", 
            i.style.top = n.clientY + "px"
        });
        var t = document.getElementById("cursor"),
            e = document.getElementById("cursor2"),
            i = document.getElementById("cursor3");
        function n(t) {
            e.classList.add("hover"), i.classList.add("hover")
        }
        function s(t) {
            e.classList.remove("hover"), i.classList.remove("hover")
        }
        s();
        for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
            o(r[a])
        }
        function o(t) {
            t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
        }
        
        //Navigation
    
        var app = function () {
            var body = undefined;
            var menu = undefined;
            var menuItems = undefined;
            var init = function init() {
                body = document.querySelector('body');
                menu = document.querySelector('.menu-icon');
                menuItems = document.querySelectorAll('.nav__list-item');
                applyListeners();
            };
            var applyListeners = function applyListeners() {
                menu.addEventListener('click', function () {
                    return toggleClass(body, 'nav-active');
                });
            };
            var toggleClass = function toggleClass(element, stringClass) {
                if (element.classList.contains(stringClass)) element.classList.remove(stringClass);else element.classList.add(stringClass);
            };
            init();
        }();
    
        
        //Switch light/dark
        
        $("#switch").on('click', function () {
            if ($("body").hasClass("light")) {
                $("body").removeClass("light");
                $("#switch").removeClass("switched");
            }
            else {
                $("body").addClass("light");
                $("#switch").addClass("switched");
            }
        });          
                  
    })(jQuery); 


    