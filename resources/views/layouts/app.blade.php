<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            display: flex;
            width: 700px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
        }
        .login-form {
            padding: 40px;
            width: 50%;
            background: #fff;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-form h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            background-color: #ff758c;
            color: #fff;
            padding: 5px 10px;
            border-radius: 50px;
            width: fit-content;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 50px;
            outline: none;
        }
        .form-group input:focus {
            border-color: #ff758c;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #ff758c;
            border: none;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #ff5770;
        }
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        .form-footer a {
            color: #ff758c;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
        .login-info {
            width: 50%;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            border-radius: 50px;
        }
        .login-info h2 {
            margin-bottom: 20px;
        }
        .login-info p {
            margin-bottom: 20px;
        }
        .login-info a {
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            padding: 10px 20px;
            border-radius: 50px;
        }
        .login-info a:hover {
            background-color: #fff;
            color: #ff758c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://as1.ftcdn.net/v2/jpg/02/05/49/82/1000_F_205498258_AfQmtyR5kO5llwKd6fWRRxcc4xRUbQcb.jpg" width="340" height="450">
        <div class="login-form">
            <center><h2>YEE BARBER</h2></center>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email" required autofocus>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn">Sign In</button>
                <div class="form-footer">
                    <p>ยังไม่เคยลงทะเบียนใช่ไหม? <a href="{{ route('register') }}">ลงทะเบียน</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

