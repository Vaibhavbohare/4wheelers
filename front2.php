<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4wheelers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-color: #ffffff;
            font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #ffffff;
            padding: 15px 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            height: 40px;
            
        }

        .navigation {
            display: flex;
            align-items: center;
        }

        .navigation a {
            color: #333333;
            
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease, box-shadow 0.3s ease;
        }

        .navigation a:hover {
            color: #00847d;
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.5); /* Grey shadow with larger size */
        }

        .signup-button {
            background-color: #00847d;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            margin-left: 20px;
        }

        .signup-button:hover {
            background-color: #e3dbdb;
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.5); /* Grey shadow with larger size */
        }

        .hero-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            background: linear-gradient(270deg, #111111, #0C4839, #111111);
            color: #ffffff;
            text-align: center;
            padding: 20px;
            flex: 1;
        }

        .hero-section h1 {
            font-size: 3em;
            margin: 0;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.2em;
            margin: 10px 0 20px;
            font-weight: 400;
        }

        .hero-section .form-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .hero-section input[type="text"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            max-width: 80%;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .hero-section button {
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: #00E895;
            color: #000000;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .hero-section button:hover {
            background-color: #009624;
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.5);
        }

        .footer {
            background-color: #111111;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header class="top-bar">
    <div class="logo">
            <img src="savaari-logo.png" alt="Logo">
        </div>
        <nav class="navigation">
            <a href="#">Why 4wheelers</a>
            <a href="#">Pricing</a>
            <a href="#">Contact us</a>
            <div class="button">
                <a href="tel:+919109324527"><span class="icon fas fa-phone"></span> <b></b></a>
                <span>|</span>
                <a href="#">Login</a>
            </div>
            <a href="#" class="signup-button">Sign up</a>
        </nav>
    </header>

    <section class="hero-section">
    
        <h1>Plan a Trip with us</h1>
        <p></p>
        <div class="form-container">
            <input type="text" placeholder="Enter your mobile no.">
            <div class="button"><button>Book a Cab</button></div>
        </div>
    </section>

    <footer class="footer">
        &copy; 2024 4wheelers. All rights reserved.
    </footer>
</body>
</html>
