<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/avatar/site-logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>غير مسموح لك</title>
</head>
<body dir="rtl" style="background-color: #fff;">
<div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
    <img style="width: 54%;height: auto;" src="{{asset('uploads/files/avatars/403.png')}}">
    <h3 style="font-size: 80px;color: gray;margin: 0 0 20px;">عفوا</h3>
    <p style="font-size: 13px;margin: 15px 0 0;color: #7a7272db;">هذه الصفحة غير مسموح لك بمشاهدتها.</p>
</div>
<div style="display: flex;justify-content: center;margin: 40px 0;">
    <a style="background-color: #1C82AD;color: white;padding: 10px;border-radius: 6px;font-size: 14px;" href="{{route('dashboard')}}">الذهاب للصفحة الرئيسية</a>
</div>
{{--<footer class="footer">--}}
{{--    <div class="container footer--flex">--}}
{{--        <div class="footer-start">--}}
{{--            <p>2022 © الأندية الطلابية </p>--}}
{{--        </div>--}}
{{--        <ul class="footer-end">--}}
{{--            <li><a href="##">عنا</a></li>--}}
{{--            <li><a href="##">المساعدة</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</footer>--}}
</body>
</html>
