
@extends('index')
@section('content')
    <!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            direction: rtl;
            text-align: right;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Make body a flex container with column direction */
            align-items: center;
            min-height: 100vh;
        }
        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: space-between; /* Separate links and menu */
            align-items: center;
            background-color: #f4f4f4;
            z-index: 100;
        }
        header .social-links {
            display: flex;
            flex-direction: row;
        }
        header .social-links a {
            text-decoration: none;
            color: #337ab7;
            margin: 0 10px;
            font-size: 20px;
        }
        header .social-links a:hover {
            text-decoration: underline;
        }
        header nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        header nav ul li {
            margin-right: 20px;
        }
        header nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }
        header nav ul li a:hover {
            color: #5cb85c;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            margin-top: 80px;
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
        input[type="text"],
        input[type="email"],
        input[type="password"] {
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
        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px 20px;
            text-align: left;
            font-size: 14px;
            color: #777;
            background-color: #f4f4f4;
        }
        footer .footer-text {
            margin: 0 10px;
        }

    </style>

    <div class="container">
        <h2>ورود</h2>

        <div class="form-group">
            <label for="username">نام کاربری:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">ورود</button>
    </div>
@endsection
