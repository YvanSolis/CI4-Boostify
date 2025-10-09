<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup: Boostify</title>
    <link rel="shortcut icon" type="image/png" href="/assets/boostifyicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <!-- INTERNAL CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans";
            letter-spacing: 0.3px;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://images.unsplash.com/photo-1604079628040-94301bb21b91?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative;
            color: white;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1;
        }

        .signup-container {
            position: relative;
            z-index: 2;
            background-color: rgba(25, 25, 25, 0.95);
            padding: 50px 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 70, 85, 0.3);
            width: 400px;
            text-align: center;
        }

        .signup-container img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .signup-container img:hover {
            transform: scale(1.1);
        }

        .signup-container h1 {
            font-family: "Poppins";
            color: #ff4655;
            margin-bottom: 10px;
            font-size: 2em;
            letter-spacing: 1px;
        }

        .signup-container p {
            color: #aaa;
            margin-bottom: 30px;
            font-size: 1.1em;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background-color: #222;
            border: 1px solid #444;
            border-radius: 5px;
            color: #fff;
            font-size: 1.1em;
            outline: none;
        }

        input:focus {
            border-color: #ff4655;
        }

        .btn-signup {
            width: 100%;
            background-color: #ff4655;
            border: none;
            color: white;
            padding: 12px;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: 0.3s;
            font-family: "Poppins";
        }

        .btn-signup:hover {
            background-color: #e03a4d;
        }

        .message {
            margin-top: 15px;
            color: #ff6f61;
            font-size: 0.95em;
        }

        .login-link {
            margin-top: 20px;
            display: block;
            color: #aaa;
            font-size: 1em;
        }

        .login-link a {
            color: #ff4655;
            text-decoration: none;
            font-weight: bold;
            font-family: "Poppins";
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Back link styling (plain) */
        .back-link {
            margin-top: 10px;
            display: block;
            font-size: 1em;
        }

        .back-link a {
            color: #aaa;
            text-decoration: none;
            font-family: "Poppins";
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="signup-container">
        <img src="/assets/boostifylogo.png" alt="Boostify Logo">
        <h1>Boostify</h1>
        <p>Create your account and start your climb!</p>

        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm" placeholder="Confirm Password" required>

            <?= view('components/buttons/button_primary', ['action' => 'signup', 'type' => 'form']) ?>
        </form>

        <div class="login-link">
            Already have an account? <a href="/login">Login here</a>
        </div>

        <div class="back-link">
            <?= view('components/buttons/button_link') ?>
        </div>
    </div>

</body>

</html>