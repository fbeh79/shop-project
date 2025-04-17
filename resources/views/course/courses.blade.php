
<!------------------- course ---------------------->
@extends('index')
@section('content')
    <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دوره های آموزشی</title>
    <style>
        .course-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .course-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            width: 200px;
            text-align: center;
        }
        .course-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .course-title {
            font-size: 1.2em;
            margin-bottom: 5px;
        }
        .course-rating {
            color: #f39c12;
            margin-bottom: 5px;
        }
        .course-details {
            font-size: 0.9em;
            color: #777;
        }
        .course-level {
            background-color: #e0e0e0;
            padding: 5px;
            border-radius: 5px;
            font-size: 0.8em;
            display: inline-block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="course-container">
    <div class="course-card">
        <div class="course-level">مبتدی</div>
        <img src="react-native-icon.png" alt="React Native Icon" />
        <h3 class="course-title">آموزش React-Native</h3>
        <div class="course-rating">★★★★ 4.0/5.0</div>
        <div class="course-details">99 ویدیو - 18 دقیقه</div>
    </div>
    <div class="course-card">
        <div class="course-level">مبتدی</div>
        <img src="figma-icon.png" alt="Figma Icon" />
        <h3 class="course-title">آموزش Figma</h3>
        <div class="course-rating">★★★★★ 4.5/5.0</div>
        <div class="course-details">32 ویدیو - 5 دقیقه</div>
    </div>
    <div class="course-card">
        <div class="course-level">مبتدی</div>
        <img src="photoshop-icon.png" alt="Photoshop Icon" />
        <h3 class="course-title">آموزش Photoshop</h3>
        <div class="course-rating">★★★★ 4.5/5.0</div>
        <div class="course-details">65 ویدیو - 9 ساعت</div>
    </div>
    <div class="course-card">
        <div class="course-level">همه سطح</div>
        <img src="sketch-icon.png" alt="Sketch Icon" />
        <h3 class="course-title">آموزش Sketch</h3>
        <div class="course-rating">★★★★ 4.0/5.0</div>
        <div class="course-details">15 ویدیو - 12 دقیقه</div>
    </div>
</div>
</body>
</html>


<!-----------
@endsection
