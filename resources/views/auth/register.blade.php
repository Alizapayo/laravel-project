<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            display: flex;
            width: 700px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
        }

        .register-form {
            padding: 40px;
            width: 50%;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .register-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #13141b;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 50px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #1780d6;
            box-shadow: 0 0 5px rgba(23, 128, 214, 0.5);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #1780d6;
            border: none;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0d62a3;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .form-footer a {
            color: #1780d6;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #0d62a3;
            text-decoration: underline;
        }

        .register-info {
            width: 50%;
            background: linear-gradient(to right, #1780d6, #1fa2ff);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .register-info h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-transform: uppercase;
        }

        .register-info p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .register-info a {
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            padding: 10px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .register-info a:hover {
            background-color: #fff;
            color: #1780d6;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-info">
            <h2>YEE BARBER</h2>
            <p>Already have an account?</p>
            <a href="{{ route('login') }}">Sign In</a>
        </div>
        <div class="register-form">
            <h2>ลงทะเบียน</h2>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Name" required autofocus>
                </div>
                <div class="form-group">
                    <input type="phone" id="phone" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="file" id="file" name="image" class="form-control" accept="images/*" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
</body>

</html>
