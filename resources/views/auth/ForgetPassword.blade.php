<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فراموشی رمز عبور</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            direction: rtl;
            text-align: right;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: right;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="email"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 20px;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .links {
            margin-top: 20px;
            text-align: center;
        }
        .links a {
            text-decoration: none;
            color: #337ab7;
            margin: 0 10px;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
    @extends('index')
        @section('content')
</head>
<body>
<div class="container">
    <h2>فراموشی رمز عبور</h2>
    <p>ایمیل خود را وارد کنید تا لینک بازنشانی رمز عبور برای شما ارسال شود.</p>
    <form action="/forget-password" method="post">
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">ارسال لینک بازنشانی</button>
    </form>
    <div class="links">
        <a href="login.html">ورود</a>
        <a href="register.html">ثبت نام</a>
    </div>
</div>
</body>
</html>

@endsection
