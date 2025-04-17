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


<!------------------- about us content ---------------------->
<h1 style="text-align: center">درباره ی ما</h1>
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>ما بزرگترین دانشگاه جهان هستیم</h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
            </p>
            <a href="" class="hero-btn red-btn">اکنون کاوش کنید</a>
        </div>
        <div class="about-col">
            <img src="img/about.jpg" alt="about">
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
