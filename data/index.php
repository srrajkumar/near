<?php include('../includes/_config.php');
$meta_title="Smart Environments | Ambient Data | Location Data | Spend Data | DaaS API | Consumer Insights | Omni-Channel Marketing | SaaS Audience Product | Weather Data | Data Partners ";
$meta_desc="The Near ambient intelligence platform processes massive data from smart environments to understand consumer behaviour at a global scale. Contact us today to know how Near's SaaS audience product, Allspark can visualise, engage and analyze your audience in real-time.";
$meta_keywords="Ambient intelligence, Location intelligence, Data products, Data analytics, Consumer insights, Location-based targeting, Offline attribution, Attribution measurement, ROI measurement, Brands and Enterprise, SAAS product, Retail Analytics, Telco insights, Data convergence, Consumer dynamics, Data driven marketing, Cross-screen data, Spend data, CRM Onboarding, OOH Analytics, Omni-channel Marketing, Smart Environments, DaaS API, Data partners, Real-time data";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
 
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">

</head>
<body  class="the-data">
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('container.php'); ?>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
    <script src="<?php JS('build/three.js'); ?>"></script>

    <script src="<?php JS('build/Projector.js'); ?>"></script>
    <script src="<?php JS('build/CanvasRenderer.js'); ?>"></script>
        <script>

        var $anchors = $('.icon-anim .icon_hover'), counter = 0;
        setInterval(function(){
          $anchors.removeClass('active');
          $anchors.eq(counter++ % $anchors.length).addClass('active');

        }, 3000);
        $anchors.hover(
          function () {
            $anchors.removeClass('active');
            $(this).addClass("active");
        },
        );

    
    </script>
 <script type="x-shader/x-vertex" id="vertexshader">

    attribute float size;
    attribute vec3 customColor;
    varying vec3 vColor;

    void main() {
        vColor = customColor;
        vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
        gl_PointSize = size * ( 10.0 / length( mvPosition.xyz ) );
        gl_Position = projectionMatrix * mvPosition;
    }
</script>

<script type="x-shader/x-fragment" id="fragmentshader">
    uniform vec3 color;
    uniform sampler2D texture;
    varying vec3 vColor;
    void main() {
        gl_FragColor = vec4( color * vColor, 1.0 );
        gl_FragColor = gl_FragColor * texture2D( texture, gl_PointCoord );
        if ( gl_FragColor.a < ALPHATEST ) discard;
    }
</script>
    <script>

      function start() {
    container = document.createElement("div"), document.getElementById("particles1").appendChild(container), camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 1e4), camera.position.z = 300, scene = new THREE.Scene;
    var lineMaterial = new THREE.LineBasicMaterial({
        color: 7039851
      }),
      distance = 500;
    for (geometry = new THREE.Geometry, geometryLine = new THREE.Geometry, i = 0; 75 > i; i++) {
      var vertex = new THREE.Vector3,
        theta = THREE.Math.randFloatSpread(100),
        phi = THREE.Math.randFloatSpread(10);
      do vertex.x = 2e3 * Math.random() - 1e3, vertex.y = 2e3 * Math.random() - 1e3, vertex.z = 2e3 * Math.random() - 1e3; while (vertex.length() > 200);
      geometry.vertices.push(vertex), geometryLine.vertices.push(vertex)
    }
    new THREE.Line(geometryLine, lineMaterial);

    attributes = {
      size: {
        type: "f",
        value: []
      },
      customColor: {
        type: "c",
        value: []
      }
    }, uniforms = {
      color: {
        type: "c",
        value: new THREE.Color(16777215)
      },
      texture: {
        type: "t",

        value: THREE.ImageUtils.loadTexture("../assets/images/data/disc.png")
      }
    };
    var shaderMaterial = new THREE.BufferGeometry({
      uniforms: uniforms,
      attributes: attributes,
      vertexShader: document.getElementById("vertexshader").textContent,
      fragmentShader: document.getElementById("fragmentshader").textContent,
      alphaTest: .9
    });
    materials[0] = new THREE.PointsMaterial({
      size: 6,
      color: 7039851
    }), particles = new THREE.Points(geometry, shaderMaterial);
    for (var values_size = attributes.size.value, values_color = attributes.customColor.value, vertices = particles.geometry.vertices, v = 0, vl = vertices.length; vl > v; v++) values_size[v] = PARTICLE_SIZE, values_color[v] = (new THREE.Color).setHSL(0, 0, .1 + .01 * v * (2 / vl));
    scene.add(particles);
    var material = new THREE.MeshBasicMaterial({
      color: 6710886,
      wireframe: !0,
      wireframeLinewidth: 1
    });
    Ico = new THREE.Mesh(new THREE.SphereGeometry(140,7, 7 ,0,6.3,0,3.1 ), material), Ico.position.x = 160, scene.add(Ico),THREE.ImageUtils.crossOrigin = '',  dotLime = THREE.ImageUtils.loadTexture("../assets/images/data/omni.png"), dotLBlue = THREE.ImageUtils.loadTexture("../assets/images/data/campaign.png"), dotSunset = THREE.ImageUtils.loadTexture("../assets/images/data/audience.png"), dotOrange = THREE.ImageUtils.loadTexture("../assets/images/data/insights.png"), dotVelvet = THREE.ImageUtils.loadTexture("../assets/images/data/location.png"),dotWifi = THREE.ImageUtils.loadTexture("../assets/images/data/wifi.png"),dottransaction = THREE.ImageUtils.loadTexture("../assets/images/data/transaction.png"),dotweather = THREE.ImageUtils.loadTexture("../assets/images/data/weather.png");

    var dots = [dotLime, dotLBlue, dotSunset, dotOrange, dotVelvet,dotWifi, dottransaction, dotweather];
    distance = 100;
    var shadeMaterial = new THREE.BufferGeometry({
      uniforms: {
        texture: {
          type: "t",
          value: THREE.ImageUtils.loadTexture("../assets/images/data/disc.png")
        },
        color: {
          type: "c",
          value: new THREE.Color(16777215)
        }
      },
      attributes: {
        customColor: {
          type: "c",
          value: [new THREE.Color(7039851)]
        },
        size: {
          type: "f",
          value: [4]
        }
      },
      vertexShader: document.getElementById("vertexshader").textContent,
      fragmentShader: document.getElementById("fragmentshader").textContent,
      alphaTest: .9
    });
    for (i = 0; i < Ico.geometry.vertices.length; i++) {
      geometry2 = new THREE.Geometry;
      var vertex = new THREE.Vector3;
      vertex.x = Ico.geometry.vertices[i].x, vertex.y = Ico.geometry.vertices[i].y, vertex.z = Ico.geometry.vertices[i].z, geometry2.vertices.push(vertex);
      new THREE.PointsMaterial({
        opacity: 1,
        size: 70,
        segments: 3,
        transparent: !0,
        color: 6710886
      });
      particles2 = new THREE.Points(geometry2, shadeMaterial), particles2.position.x = 160, particles2.name = "bubbles", scene.add(particles2)
    }
    for (i = 0; 8 > i; i++) {
      geometry2 = new THREE.Geometry;
      var vertex = new THREE.Vector3,
        theta = THREE.Math.randFloatSpread(360),
        phi = THREE.Math.randFloatSpread(360);
      distance = 80, vertex.x = distance * Math.sin(theta) * Math.cos(phi), vertex.y = distance * Math.sin(theta) * Math.sin(phi), vertex.z = distance * Math.cos(theta), geometry2.vertices.push(vertex), materials2[i] = new THREE.PointsMaterial({
        opacity: 1,
        size: 70,
        segments: 2,
        map: dots[i],
        alphaTest: .5,
        transparent: !0
      }), particles2 = new THREE.Points(geometry2, materials2[i]), particles2.name = "colors", particles2.rotation.x += .005 * Math.random(), particles2.rotation.y += .007 * Math.random(), particles2.rotation.z += .003 * Math.random(), particles2.position.x = 200, scene.add(particles2)
    }
    renderer = new THREE.WebGLRenderer({
      alpha: !0
    }), renderer.setPixelRatio(window.devicePixelRatio), renderer.setSize(window.innerWidth, window.innerHeight), container.appendChild(renderer.domElement), mouse = new THREE.Vector2, document.addEventListener("mousemove", onDocumentMouseMove, !1), window.addEventListener("scroll", onWindowScroll, !1), window.addEventListener("resize", onWindowResize, !1)
  }

  function onWindowResize() {
    windowHalfX = window.innerWidth / 2, windowHalfY = window.innerHeight / 2, camera.aspect = window.innerWidth / window.innerHeight, camera.updateProjectionMatrix(), renderer.setSize(window.innerWidth, window.innerHeight)
  }

  function onWindowScroll(event) {
    var doc = document.documentElement,
      top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
    topScroll = top
  }

  function onDocumentMouseMove(event) {
    mouseX = event.clientX - windowHalfX, mouseY = event.clientY - windowHalfY, mouse.x = event.clientX / window.innerWidth * 2 - 1, mouse.y = 2 * -(event.clientY / window.innerHeight) + 1
  }

  function animate() {
    requestAnimationFrame(animate), render()
  }

  function render() {
    for (camera.position.x += .05 * (.2 * mouseX - camera.position.x), camera.position.y += .05 * (-(.2 * mouseY) - camera.position.y), camera.lookAt(scene.position), particles.rotation.x += .001, particles.rotation.y += .001, Ico.rotation.x += .005, Ico.rotation.y += .005, Ico.position.y = topScroll, i = 0; i < scene.children.length; i++) {
      var object = scene.children[i];
      object instanceof THREE.PointCloud && "bubbles" === object.name && (object.rotation.x += .005, object.rotation.y += .005, object.position.y = topScroll), "colors" === object.name && (object.rotation.x -= .005, object.rotation.y -= .005, object.rotation.z -= .005, object.position.y = topScroll)
    }
    renderer.setClearColor(0, 0), renderer.render(scene, camera)
  }
  
  var container, camera, scene, renderer, particles, geometry, geometry2, i, mouse, uniforms, attributes, Ico, materials = [],
    materials2 = [],
    topScroll = 0,
    PARTICLE_SIZE = 15,
    mouseX = 0,
    mouseY = 0,
    windowHalfX = window.innerWidth / 2,
    windowHalfY = window.innerHeight / 2;
  start(), animate()

    </script>
  
</body>
</html>


