<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login: Boostify</title>
    <link rel="shortcut icon" type="image/png" href="/assets/boostifyicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            font-family: 'Open Sans';
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

        .login-container {
            position: relative;
            z-index: 2;
            background-color: rgba(25, 25, 25, 0.95);
            padding: 50px 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 70, 85, 0.3);
            width: 400px;
            text-align: center;
        }

        .login-container img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .login-container img:hover {
            transform: scale(1.1);
        }

        .login-container h1 {
            font-family: 'Poppins';
            color: #ff4655;
            margin-bottom: 10px;
            font-size: 2.2em;
            letter-spacing: 1.2px;
            font-weight: 700;
        }

        .login-container p {
            color: #ccc;
            margin-bottom: 30px;
            font-size: 1.05em;
            font-family: 'Open Sans';
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background-color: #222;
            border: 1px solid #444;
            border-radius: 5px;
            color: #fff;
            font-size: 1.05em;
            outline: none;
            font-family: 'Open Sans';
        }

        input:focus {
            border-color: #ff4655;
        }

        .btn-login {
            width: 100%;
            background-color: #ff4655;
            border: none;
            color: white;
            padding: 12px;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: 0.3s;
            font-family: 'Poppins';
        }

        .btn-login:hover {
            background-color: #e03a4d;
        }

        .error {
            color: #ff6f61;
            font-size: 0.9em;
            margin-bottom: 10px;
            font-family: 'Open Sans';
        }

        .signup-link {
            margin-top: 20px;
            display: block;
            color: #aaa;
            font-size: 1em;
            font-family: 'Open Sans';
        }

        .signup-link a {
            color: #ff4655;
            text-decoration: none;
            font-weight: bold;
            font-family: 'Poppins';
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .back-link {
            margin-top: 10px;
            display: block;
            font-size: 0.95em;
            font-family: 'Open Sans';
        }

        .back-link a {
            color: #aaa;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <img src="/assets/boostifylogo.png" alt="Boostify Logo">
        <h1>Boostify</h1>
        <p>Welcome back! Login to your account.</p>

        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <?= view('components/buttons/button_primary', ['type' => 'form']) ?>
        </form>

        <div class="signup-link">
            Don't have an account?
            <?= view('components/buttons/button_primary', ['action' => 'signup', 'type' => 'link', 'href' => '/signup']) ?>
        </div>


        <div class="back-link">
            <?= view('components/buttons/button_link') ?>
        </div>

    </div>

</body>

</html>