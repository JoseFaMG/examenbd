<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen sobre Ubuntu y su terminal</title>
    <style>
        *{
            margin: 0;

        }
        #particles-js{
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            z-index: -1;
            background: rgba(34, 11, 47, 0.7);

        }
    </style>
    <link rel="stylesheet" href="../styles.css">
    
</head>
<body>
<main id="principal">
<div id="particles-js"></div>
<h1>Examen sobre Ubuntu y su terminal</h1>
    <div class="contenedor">
        <article>
        <?php
        session_start();
        if (isset($_SESSION['usuario_id'])) {
            echo "<h1>Perfil de Usuario</h1><br>";
            echo "<h2>Matrícula: " . $_SESSION['matricula'] . "</h2>";
            echo "<h2>Carrera: " . $_SESSION['carrera'] . "</h2>";
            echo "<h2>Nombre: " . $_SESSION['nombre'] . "</h2>";
            echo "<h2>Cuatrimestre: " . $_SESSION['cuatrimestre'] . "</h2>";
        }else{
            header("Location: ../login.html");
            exit();
        }
        ?>
        </article>
    </div>
    <div class="contenedor">
        <article>
<form action="procesar.php" method="post">


    <h2>Preguntas</h2>
            <hr>
            <p><b><font size="5">1. ¿Cuál es el comando para instalar un paquete en Ubuntu?</font></b></p>
    <input type="radio" name="pregunta1" value="apt install" checked> apt install
    <br>
    <input type="radio" name="pregunta1" value="yum install"> yum install
    <br>
    <input type="radio" name="pregunta1" value="dnf install"> dnf install
    <br>
    <br>
            <p><b><font size="5">2. ¿Cómo se cambia el directorio de trabajo en la terminal?</font></b></p>
    <input type="radio" name="pregunta2" value="cd"> cd
    <br>
    <input type="radio" name="pregunta2" value="mv"> mv
    <br>
    <input type="radio" name="pregunta2" value="pwd"> pwd
            <br>
            <br>
            <p><b><font size="5">3. ¿Cómo se crea un nuevo archivo?</font></b></p>
    <input type="radio" name="pregunta3" value="touch"> touch
    <br>
    <input type="radio" name="pregunta3" value="mkdir"> mkdir
    <br>
    <input type="radio" name="pregunta3" value="vim"> vim
            <br>
            <br>
            <p><b><font size="5">4. ¿Cómo se edita un archivo de texto con el editor nano?</font></b></p>
    <input type="radio" name="pregunta4" value="nano"> nano
    <br>
    <input type="radio" name="pregunta4" value="vim"> vim
    <br>
    <input type="radio" name="pregunta4" value="gedit"> gedit
            <br>
            <br>
            <p><b><font size="5">5. ¿Cómo se ejecuta un script en la terminal?</font></b></p>
    <input type="radio" name="pregunta5" value="./script.sh"> ./script.sh
    <br>
    <input type="radio" name="pregunta5" value="sh script.sh"> sh script.sh
    <br>
    <input type="radio" name="pregunta5" value="bash script.sh"> bash script.sh
            <br>
            <br>
            <p><b><font size="5">6. ¿Cómo se muestran los permisos de un archivo?</font></b></p>
    <input type="radio" name="pregunta6" value="ls -l"> ls -l
    <br>
    <input type="radio" name="pregunta6" value="chmod"> chmod
    <br>
    <input type="radio" name="pregunta6" value="chown"> chown
            <br>
            <br>
            <p><b><font size="5">**7. ¿Cómo se cambia el nombre de un archivo?</font></b></p>
    <input type="radio" name="pregunta7" value="mv archivo1 archivo2"> mv archivo1 archivo2
    <br>
    <input type="radio" name="pregunta7" value="rename archivo1 archivo2"> rename archivo1 archivo2
    <br>
    <input type="radio" name="pregunta7" value="cp archivo1 archivo2"> cp archivo1 archivo2
            <br>
            <br>
            <p><b><font size="5">8. ¿Cómo se elimina un archivo?</font></b></p>
    <input type="radio" name="pregunta8" value="rm archivo"> rm archivo
    <br>
    <input type="radio" name="pregunta8" value="rmdir directorio"> rmdir directorio
    <br>
    <input type="radio" name="pregunta8" value="rm -rf directorio"> rm -rf directorio
            <br>
            <br>
            <p><b><font size="5">9. ¿Cómo se crea un directorio?</font></b></p>
    <input type="radio" name="pregunta9" value="mkdir directorio"> mkdir directorio
    <br>
    <input type="radio" name="pregunta9" value="cd directorio"> cd directorio
    <br>
    <input type="radio" name="pregunta9" value="pwd"> pwd
            <br>
            <br>
            <p><b><font size="5">10. ¿Cómo se copia un archivo?</font></b></p>
    <input type="radio" name="pregunta10" value="cp archivo1 archivo2"> cp archivo1 archivo2 (Copiar un solo archivo)
    <br>
    <input type="radio" name="pregunta10" value="cp -r directorio1 directorio2"> cp -r directorio1 directorio2 (Copiar un directorio completo y su contenido)
    <br>
    <input type="radio" name="pregunta10" value="cp -p archivo1 archivo2"> cp -p archivo1 archivo2 (Copiar un archivo y conservar sus permisos)
            <br>
            <br>
            <p><b><font size="5">11. ¿Cómo se mueve un archivo?</font></b></p>
    <input type="radio" name="pregunta11" value="mv archivo1 archivo2"> mv archivo1 archivo2
    <br>
    <input type="radio" name="pregunta11" value="cp -r directorio1 directorio2"> cp -r directorio1 directorio2
    <br>
    <input type="radio" name="pregunta11" value="rm archivo1"> rm archivo1
            <br>
            <br>
            <p><b><font size="5">12. ¿Cómo se busca un archivo?</font></b></p>
    <input type="radio" name="pregunta12" value="find archivo"> find archivo
    <br>
    <input type="radio" name="pregunta12" value="locate archivo"> locate archivo
    <br>
    <input type="radio" name="pregunta12" value="which comando"> which comando
            <br>
            <br>
            <p><b><font size="5">13. ¿Cómo se muestra el contenido de un archivo?</font></b></p>
    <input type="radio" name="pregunta13" value="cat archivo"> cat archivo
    <br>
    <input type="radio" name="pregunta13" value="more archivo"> more archivo
    <br>
    <input type="radio" name="pregunta13" value="less archivo"> less archivo
            <br>
            <br>
            <p><b><font size="5">14. ¿Cómo se filtra el contenido de un archivo?</font></b></p>
    <input type="radio" name="pregunta14" value="grep "palabra archivo> grep "palabra" archivo
    <br>
    <input type="radio" name="pregunta14" value="sort archivo"> sort archivo
    <br>
    <input type="radio" name="pregunta14" value="uniq archivo"> uniq archivo
            <br>
            <br>
            <p><b><font size="5">15. ¿Cómo se redirecciona la salida de un comando?</font></b></p>
    <input type="radio" name="pregunta15" value="comando > archivo"> comando > archivo
    <br>
    <input type="radio" name="pregunta15" value="comando >> archivo"> comando >> archivo
    <br>
    <input type="radio" name="pregunta15" value="comando | comando"> comando | comando
            <br>
            <br>
            <p><b><font size="5">16. ¿Cómo se programan tareas en segundo plano?</font></b></p>
    <input type="radio" name="pregunta16" value="nohup comando &"> nohup comando &
    <br>
    <input type="radio" name="pregunta16" value="at hora comando"> at hora comando
    <br>
    <input type="radio" name="pregunta16" value="crontab -e"> crontab -e
            <br>
            <br>
            <p><b><font size="5">17. ¿Cómo se automatizan tareas con scripts?</font></b></p>
    <input type="radio" name="pregunta17" value="#!/bin/bash"> #!/bin/bash
    <br>
    <input type="radio" name="pregunta17" value="echo "Hola mundo> echo "Hola mundo"
    <br>
    <input type="radio" name="pregunta17" value="exit 0"> exit 0
            <br>
            <br>
            <p><b><font size="5">18. ¿Cómo se utiliza el condicional if?</font></b></p>
    <input type="radio" name="pregunta18" value="if condición; then comando; fi"> if condición; then comando; fi
    <br>
    <input type="radio" name="pregunta18" value="elif condición; then comando; fi"> elif condición; then comando; fi
    <br>
    <input type="radio" name="pregunta18" value="else comando; fi"> else comando; fi
            <br>
            <br>
            <p><b><font size="5">19. ¿Cómo se utiliza el bucle for?</font></b></p>
    <input type="radio" name="pregunta19" value="for i in lista; do comando; done"> for i in lista; do comando; done
    <br>
    <input type="radio" name="pregunta19" value="for i in lista; do echo $i - $i; done"> for i in lista; do echo $i - $i; done (Recorrer una lista e imprimir el índice y el elemento)
    <br>
    <input type="radio" name="pregunta19" value="for i in lista; do if [[ $i > 10 ]]; then echo $i; fi; done"> for i in lista; do if [[ $i > 10 ]]; then echo $i; fi; done (Recorrer una lista e imprimir el elemento solo si cumple una condición)
            <br>
            <br>
            <p><b><font size="5"> 20. ¿Cómo se edita un archivo de texto con el editor nano?</font></b></p>
    <input type="radio" name="pregunta20" value="nano"> nano
    <br>
    <input type="radio" name="pregunta20" value="vim"> vim
    <br>
    <input type="radio" name="pregunta20" value="gedit"> gedit
    <br>
    <input type="submit" value="Enviar">

</form>
        </article>

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
</main>
</body>
</html>
