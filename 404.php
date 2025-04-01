<?php
    http_response_code(404); // Set the HTTP status code to 404
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/body.css"/>
    
    <title>404 - Page Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%; /* Full height for the page */
            display: flex;
            flex-direction: column; /* Stack header, content, and footer */
            font-family: "PT Serif", serif;
        }

        body {
            cursor: default;
            line-height: 1.5;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            background: url(https://static-dm.ubisoft.com/assassins-creed/franchise/prod/2784113ec2bd7b74f83b96e706433356.jpg) 50%/cover no-repeat;
            background-size: cover;
            min-height: 100vh; /* Full screen height */
            display: flex;
            flex-direction: column; /* Ensure the layout is a column */
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            text-align: center;
            color: white;
            font-size: 1.5em;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            padding: 10px;
            margin-top: auto; /* Push the footer to the bottom */
            color: white;
        }

        .notFound {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1; /* Allow the content to take up available space */
            flex-direction: column; /* Align elements vertically */
            text-align: center;
        }

        .notFound__wrapper {
            text-align: center;
            color: white;
            padding: 20px;
        }

        .notFound__wrapper__media {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 8px;
        }

        .notFound__wrapper__content {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .notFound__wrapper__content h2 {
            font-size: 3em;
            margin: 0;
        }

        .notFound__wrapper__content h3 {
            font-size: 1.5em;
            margin: 10px 0;
            margin-bottom: 30px;
        }

        .notFound__wrapper__content .btn {
            background-color: rgb(255, 255, 255);
            color: rgb(80, 80, 80);
            padding: 10px 20px;
            font-size: 1.2em;
            font-weight: 600;
            border-radius: 5px;
            font-family: sans-serif;
            text-decoration: none;
            display: inline-block;
            margin-top: 0px;
        }

        .notFound__wrapper__content .btn:hover {
            background-color: rgb(66, 0, 0);
            color: white;
        }

        .glitch {
            position: relative;
            font-family: 'PT Serif', sans-serif;
            font-size: 3em;
            color: white;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 2px;
            overflow: hidden;
            animation: glitch 7s infinite;
            margin-bottom: 20px;
        }

        @keyframes glitch {
            0% {
                transform: translate(0);
            }
            3% {
                transform: translate(-5px, 3px);
            }
            40% {
                transform: translate(5px, -5px);
            }
            43% {
                transform: translate(-3px, 3px);
            }
            80% {
                transform: translate(4px, 2px);
            }
            83% {
                transform: translate(-4px, -2px);
            }
            100% {
                transform: translate(0);
            }
        }

        .glitch1 {
            position: relative;
            font-family: 'PT Serif', sans-serif;
            color: white;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 2px;
            overflow: hidden;
            animation: glitch 5s infinite;
            margin-bottom: 20px;
        }

        @keyframes glitch1 {
            0% {
                transform: translate(0);
            }
            40% {
                transform: translate(3px, -5px);
            }
            60% {
                transform: translate(8px, 5px);
            }
            70% {
                transform: translate(-9px, -3px);
            }
            90% {
                transform: translate(7px, 2px);
            }
            100% {
                transform: translate(0);
            }
        }
    </style>
</head>
<body>
    
        <?php include 'parts/header.html'; ?> <!-- Include your header -->
    

    <div class="notFound">
        <div class="notFound__wrapper">
            <div class="notFound__wrapper__media"></div>
            <div class="notFound__wrapper__content">
                <h1 class="glitch" data-text="Desynchronized">Desynchronized</h1>
                <h3 class="glitch1">The page you are looking for cannot be found.</h3>
                <a aria-label="Back To Home" class="btn btn-primary glitch notFound__wrapper__content__btn internal" 
                   data-innertext="Back To Home" href="index.php">
                    <span class="custom-btn btn btn1" data-innertext="Back To Home">
                        Back To Home
                    </span>
                </a>
            </div>
        </div>
    </div>

    
        <?php include 'parts/footer.html'; ?> <!-- Include your footer -->
    
</body>
</html>