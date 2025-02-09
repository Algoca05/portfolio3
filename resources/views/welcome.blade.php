<!-- resources/views/cv.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vitae - Alejandro Gómez</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .contact-info, .skills, .languages, .education, .experience, .certifications {
            list-style: none;
            padding: 0;
        }
        .contact-info li, .skills li, .languages li, .education li, .experience li, .certifications li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alejandro Gómez</h1>
        <p><strong>Diseño de aplicaciones web (DAW)</strong></p>
        <p>Extrovertido, Capacidad de aprendizaje, Proactivo, Autoconfianza, Trabajo en equipo, Entusiasta</p>
        
        <div class="section">
            <h2 class="section-title">Contacto</h2>
            <ul class="contact-info">
                <li>Email: a.gomezcapilla@gmail.com</li>
                <li>Teléfono: 644979381</li>
                <li>LinkedIn: <a href="https://www.linkedin.com/in/algoca">www.linkedin.com/in/algoca</a></li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title">Sobre Mí</h2>
            <p>Soy un apasionado de la programación, concretamente del desarrollo de aplicaciones web en full-stack. Me gusta trabajar en equipo y encontrar soluciones a problemas complejos.</p>
        </div>

        <div class="section">
            <h2 class="section-title">Idiomas</h2>
            <ul class="languages">
                <li>Catalán: Nativo</li>
                <li>Español: Nativo</li>
                <li>Inglés: Hablado y escrito</li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title">Formación Académica</h2>
            <ul class="education">
                <li>Centro de estudios Monlau-FP (2023-presente)</li>
                <li>Bachillerato científico y tecnológico, Centro de estudios Montseny (2021-2023)</li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title">Experiencia Laboral</h2>
            <ul class="experience">
                <li>Monitor de ocio infantil, Centro de formación Júpiter, curso de CET 10 (2023)</li>
                <li>Monitor Campus Quiralia (Baobab Besós escola Eduard Marquina)</li>
                <li>Monitor Campus Brot (Baobab Besós escola Eduard Marquina)</li>
                <li>Monitor Campus Cet10 (cor Maria de Sabastida)</li>
                <li>Campo de trabajo, Campo de trabajo de la Generalitat de Cataluña (voluntariado)</li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title">Habilidades</h2>
            <ul class="skills">
                <li>Python</li>
                <li>C++</li>
                <li>Java</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>PHP</li>
                <li>JavaScript</li>
                <li>SQL-PL/SQL</li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title">Certificaciones</h2>
            <ul class="certifications">
                <li>Administración de Sistemas Operativos Linux</li>
                <li>Linux Profesional Institute</li>
                <li>Administración de Windows 10, Microsoft Imagine Academy</li>
                <li>Conceptos Fundamentales SQL Oracle 11g, Oracle Academy</li>
                <li>Java SE Fundamentals, Oracle Academy</li>
                <li>Programación PL/SQL Oracle 11g, Oracle Academy</li>
            </ul>
        </div>
    </div>
</body>
</html>