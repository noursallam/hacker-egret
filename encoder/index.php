<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacker Egret</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: black;
            position: relative;
        }

        canvas {
            display: block;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #f4427d;
            font-size: 6rem;
            z-index: 9999;
            color: white;
            font-family: "Anton", sans-serif;
            font-weight: 400;
            font-style: normal;
            transition: z-index 0.3s;
        }

        .navbar {
            position: relative;
            z-index: 1;
        }

        .navbar-open .text-overlay {
            z-index: -1;
        }
    </style>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="pics/1.png" width="50" height="40"  href="index.php">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="coders.php">coders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="codee.php">hash</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  active" href="myip.php">what my ip </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  active" href="geoip.php">ip geolocation </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link active " href="pwned.php">have i been pwned </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <canvas id="c"></canvas>

    <div class="text-overlay">Hacker Egret</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script>
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");

        c.height = window.innerHeight;
        c.width = window.innerWidth;

        var matrix = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%+-/~{[|`]}";
        matrix = matrix.split("");

        var font_size = 10;
        var columns = c.width / font_size;
        var drops = [];
        for (var x = 0; x < columns; x++)
            drops[x] = 1;

        function draw() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
            ctx.fillRect(0, 0, c.width, c.height);

            ctx.fillStyle = "#fa9930";
            ctx.font = font_size + "px arial";
            for (var i = 0; i < drops.length; i++) {
                var text = matrix[Math.floor(Math.random() * matrix.length)];
                ctx.fillText(text, i * font_size, drops[i] * font_size);

                if (drops[i] * font_size > c.height && Math.random() > 0.975)
                    drops[i] = 0;

                drops[i]++;
            }
        }

        setInterval(draw, 35);

        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            document.body.classList.toggle('navbar-open');
        });

    </script>

    <?php
    require ('des/footer.php');
    ?>

</body>

</html>