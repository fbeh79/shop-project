<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <title>Document</title>
</head>
<body>
@extends('index')
@section('content')
<!------------------- contact us ---------------------->
<h1 style="text-align: center">ارتباط باما</h1>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                        <h5>ایران , تهران</h5>
                        <p>لواسان , ساختمان طبعیت , طبقه 4</p>
                    </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                        <h5>0935123456789</h5>
                        <p>شنبه تا چهارشنبه از ساعت 7 صبح تا 7 بعد از ظهر</p>
                    </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                        <h5>info@gmail.com</h5>
                        <p>درخواست خود را برای ما ایمیل کنید</p>
                    </span>
            </div>
        </div>
        <div class="contact-col">
            <form>
                <input type="text" placeholder="نام خود را وارد کنید" required>
                <input type="email" placeholder="ایمیل خود را وارد کنید" required>
                <input type="text" placeholder="موضوع پیام" required>
                <textarea rows="8" placeholder="پیام خود را وارد کنید" required></textarea>
                <button type="submit" class="hero-btn red-btn">ارسال پیام</button>
            </form>
        </div>
    </div>
</section>

<!------------------- FOOTER ---------------------->

<section class="footer">
    <h4>درباره ما</h4>
    <p>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله <br>در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
    </p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>طراحی شده با <i class="fa fa-heart-o"></i> توسط حسین امانی </p>
</section>

<script src="Theme/js/script.js"></script>
</body>
</html>
@endsection
