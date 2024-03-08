<?php

// Obtener datos del alumno
$nombre = $_POST['nombre'];
$carrera = $_POST['carrera'];
$cuatrimestre = $_POST['cuatrimestre'];

// Respuestas correctas
$correctas = array(
    "pregunta1" => "apt install",
    "pregunta2" => "cd",
    "pregunta3" => "touch",
    "pregunta4" => "nano",
    "pregunta5" => "./script.sh",
    "pregunta6" => "ls -l",
    "pregunta7" => "mv archivo1 archivo2",
    "pregunta8" => "rm archivo",
    "pregunta9" => "mkdir directorio",
    "pregunta10" => "cp archivo1 archivo2",
    "pregunta11" => "mv archivo1 archivo2",
    "pregunta12" => "find archivo",
    "pregunta13" => "cat archivo",
    "pregunta14" => "grep \"palabra\" archivo",
    "pregunta15" => "comando > archivo",
    "pregunta16" => "nohup comando &",
    "pregunta17" => "#!/bin/bash",
    "pregunta18" => "if condición; then comando; fi",
    "pregunta19" => "for i in lista; do comando; done",
    "pregunta20" => "nano"
);

// Respuestas del alumno
$respuestas = $_POST;

// Calcular respuestas correctas e incorrectas
$puntuacion = 0;
foreach ($correctas as $pregunta => $respuesta_correcta) {
    if ($respuestas[$pregunta] === $respuesta_correcta) {
        $puntuacion++;
    }
}

$incorrectas = count($correctas) - $puntuacion;

// Calcular promedio
$promedio = round(($puntuacion / count($correctas)) * 100, 2);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Resultados del Examen</title>
    <style>
   
    #particles-js{
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            z-index: -1;
            background: rgba(34, 11, 47, 0.7);
        }
        body {
               font-family: 'Arial', sans-serif;
               margin: 20px;
               color: #333333;
               background: url("img.jpg");
               background-repeat: repeat;
               background-attachment: fixed;

        }

        h2 {
            color: #ffffff;
        }

        p {
            margin-bottom: 10px;
            color:#ffffff;
        }

        .resultados {
            background: rgba(26, 67, 229, 0.7);
            padding: 20px;
            border-radius: 8px;
            box-shadow:0 5px 5px 3px rgba(0, 0, 0, 0.25);
            
        }

        .correctas {
            color: #4caf50;
        }

        .incorrectas {
            color: #f44336;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="resultados">
        <h2>Resultados del Examen</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
        <p><strong>Cuatrimestre:</strong> <?php echo $cuatrimestre; ?></p>
        <p><strong>Respuestas correctas:</strong> <span class="correctas"><?php echo $puntuacion; ?></span></p>
        <p><strong>Respuestas incorrectas:</strong> <span class="incorrectas"><?php echo $incorrectas; ?></span></p>
        <p><strong>Promedio:</strong> <?php echo $promedio; ?>%</p>
    </div>
    <script src="../particles.min.js"></script>
<script>
    particlesJS(
        {
            "particles": {
                "number": {
                    "value": 100,
                    "density": {
                        "enable": true,
                        "value_area": 552.4033491425909
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 1,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 3.1565905665290903,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }
    )
</script>
</body>
</html>

