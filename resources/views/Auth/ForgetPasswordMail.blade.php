<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('uploads/files/default/site-logo.png')}}" type="image/x-icon">
    <title>{{$data['title']}}</title>
    <style>
        @font-face {
            font-family: defaultFont;
            src: url('/public/fonts/ReadexPro-Medium.ttf');
        }
        body {
            font-family: 'defaultFont', sans-serif;
            margin: 0;
            direction: rtl;
            background-color: #f0f2fa;
            padding: 20px;
        }
        .containerMail{
            width: 400px;
            background-color: white;
            border-radius: 6px;
            padding: 8px;
            margin: auto;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }
        .containerMail .containerMailLogo{
            margin: 10px auto 0;
        }
        .containerMail .containerMailLogo > img{
            width: 70px;
            height: 70px;
            margin: auto;
        }
        .containerMail .containerMailBody{
            width: 100%;
        }
        .containerMail .containerMailBody > p{
            line-height: 2;
            font-size: 15px;
            color: gray;
        }
        .containerMail .containerMailBody > p:last-child{
            margin-bottom: 0;
            color: gray;
            font-size: 15px;
        }
        .containerMail .containerMailBody > a{
            font-weight: 700;
            padding: 8px;
            text-decoration: none;
            background-color: #32639d;
            color: white;
            margin: 20px auto 0;
            font-size: 14px;
            border-radius: 6px;
            display: block;
            width: fit-content;
        }
        .containerMail .containerMailFooter{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .containerMail .containerMailFooter > span{
            color: gray;
            font-size: 13px;
            background-color: #f0f2fa;
            padding: 6px;
            border-radius: 6px;
            border: 1px solid #cccccc4a;
        }
        .containerMail .containerMailFooter > div{
            display: flex;
            align-items: center;
            gap: 10px;
        }
        @media screen and (min-width: 400px) and (max-width: 600px){
            .containerMail{
                width: 300px;
            }
        }
        @media screen and (min-width: 200px) and (max-width: 400px){
            .containerMail{
                width: 250px;
            }
        }
    </style>
</head>
<body dir="rtl" style="background-color: #f0f2fa; padding: 20px;">
    <div class="containerMail">
        <div class="containerMailLogo">
            <img src="{{asset('uploads/files/default/site-logo.png')}}">
        </div>
        <div class="containerMailBody">
            <p>مرحبا {{$data['name']}}، السلام عليكم ورحمة الله وبركاته. حياك الله. {{$data['body']}}</p>
            <a href="{{$data['url']}}">اضغط هنا لتغيير كلمة مرورك</a>
            <p>وفقك الله.</p>
        </div>
        <div class="containerMailFooter" style="display: flex;justify-content: space-between;align-items: center;width: 100%;">
            <span>فريق إدارة الأندية الطلابية</span>
            <div>
                <a><svg width="20px" height="20px" viewBox="-2.64 -2.64 29.28 29.28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.975 14.51a1.05 1.05 0 0 0 0-1.485 2.95 2.95 0 0 1 0-4.172l3.536-3.535a2.95 2.95 0 1 1 4.172 4.172l-1.093 1.092a1.05 1.05 0 0 0 1.485 1.485l1.093-1.092a5.05 5.05 0 0 0-7.142-7.142L9.49 7.368a5.05 5.05 0 0 0 0 7.142c.41.41 1.075.41 1.485 0zm2.05-5.02a1.05 1.05 0 0 0 0 1.485 2.95 2.95 0 0 1 0 4.172l-3.5 3.5a2.95 2.95 0 1 1-4.171-4.172l1.025-1.025a1.05 1.05 0 0 0-1.485-1.485L3.87 12.99a5.05 5.05 0 0 0 7.142 7.142l3.5-3.5a5.05 5.05 0 0 0 0-7.142 1.05 1.05 0 0 0-1.485 0z" fill="#2d5e99"></path></g></svg></a>
                <a><svg width="20px" height="20px" viewBox="-5.28 -5.28 58.56 58.56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Whatsapp-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E"> <path d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z" id="Whatsapp"> </path> </g> </g> </g></svg></a>
                <a><svg width="20px" height="20px" viewBox="-3.52 -3.52 39.04 39.04" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"></circle> <path d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z" fill="white"></path> <defs> <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30" gradientUnits="userSpaceOnUse"> <stop stop-color="#37BBFE"></stop> <stop offset="1" stop-color="#007DBB"></stop> </linearGradient> </defs> </g></svg></a>
            </div>
        </div>
    </div>
</body>
</html>
