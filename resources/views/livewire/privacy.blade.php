@section('title', 'سياسة الخصوصية')
@section('style')
    <style>
        .about{
            padding: 20px;
            background-color: white;
            margin: 20px;
            border-radius: 6px;
        }
        .about h3{
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 500;
            position: relative;
            padding-right: 30px;
        }
        .about h3:before{
            content: '';
            width: 20px;
            height: 20px;
            background-color: #356195;
            display: block;
            right: 0;
            position: absolute;
            border-radius: 3px;
            font-weight: normal;
        }
        .about p:first-of-type{
            margin-bottom: 20px;
        }
        .about h3:last-of-type{
            margin-top: 20px;
        }
        .about p{
            font-size: 15px;
            line-height: 2;
            text-align: justify;
            color: gray;
        }
        .b-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
            margin-top: 20px;
        }

        .b-container table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
            padding: 10px 12px;
            table-layout: auto;
            border-radius: 6px;
            overflow: hidden;
            white-space: nowrap;
        }

        .b-container table thead th {
            padding: 16px 12px;
            font-size: 15px;
            background-color: #356195;
            color: white;
            text-align: center;

        }

        .b-container table thead th:first-child {
            border-top-right-radius: 6px;
        }

        .b-container table thead th:last-child {
            border-top-left-radius: 6px;
        }

        .b-container table tbody td {
            padding: 13px 10px;
            text-align: center;
            background-color: white;
            font-size: 13px;
            line-height: 1.3;
        }

        .b-container table tbody td:last-child {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .b-container table tbody td:last-child span {
            display: flex;
            background-color: #F1F6F5;
            padding: 4px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin-left: 6px;
            cursor: pointer;
        }
        .b-container table tbody td:last-child a.manager{
            padding: 8px;
            background-color: #3a7ecf;
            color: white;
            border-radius: 6px;
        }

        .b-container table tbody tr:not(:last-of-type) {
            border-bottom: 1px solid #ccc;
        }

    </style>
@endsection
<div class="about">
    <h3>عن الأندية</h3>
    <div>
        <p>الأندية الطلابية بالجامعة الإسلامية هي وحدة تابعة لعمادة شؤون الطلاب، تقوم بالإشراف على الأندية الطلابية، وإقامة الأنشطة اللاصفية، والإشراف عليها.

            يرأس الوحدة الأستاذ حاتم خضراوي، وتضم حاليا {{$clubs->count()}} ناديا.
        </p>
    </div>
    <div class="b-container">
        <table id="table">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>الشعار</th>
                <th>المدير</th>
                <th>الأعضاء</th>
                <th>خيارات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clubs as $club)
                <tr>
                    <td>{{$club->name}}</td>
                    <td>
                        <img style="
                    width: 30px;
                    height: 30px;
                    border: 1px solid #ccc;
                    border-radius: 50%;
                    background-color: #F5EFFF;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                " src="{{asset('uploads/files/'.$club->avatar)}}">
                    </td>
                    <td>@if($club->clubManager){{$club->clubManager->name}}@else --- @endif</td>
                    <td>{{$club->ClubStatus()->count()}}</td>
                    <td>
                        <a href="{{route('club.profile', str_replace(' ', '-', $club->slug))}}">
                                    <span>
                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                opacity=".4" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.737 6.046c1.707 1.318 3.16 3.249 4.205 5.663a.729.729 0 010 .572C19.854 17.111 16.137 20 12 20h-.01c-4.127 0-7.844-2.89-9.931-7.719a.728.728 0 010-.572C4.146 6.88 7.863 4 11.99 4H12c2.068 0 4.03.718 5.737 2.046zM8.097 12c0 2.133 1.747 3.87 3.903 3.87 2.146 0 3.893-1.737 3.893-3.87A3.888 3.888 0 0012 8.121c-2.156 0-3.902 1.736-3.902 3.879z"
                                                fill="#000" fill-opacity=".5"/><path
                                                d="M14.43 11.997a2.428 2.428 0 01-2.428 2.414c-1.347 0-2.44-1.086-2.44-2.414 0-.165.02-.32.05-.474h.048a1.997 1.997 0 002-1.921c.107-.019.225-.03.342-.03a2.43 2.43 0 012.429 2.425z"
                                                fill="#000" fill-opacity=".5"/>
                                        </svg>
                                    </span>
                        </a>
                        @if($club->clubManager)@else <a class="manager" target="_blank" href="https://api.whatsapp.com/send?phone=22249474968&text=السلام عليكم ورحمة الله وبركاته، حياكم الله. 

أود التقدم لإدارة {{$club->name}}. 

وشكرا.">التقدم للإدارة</a> @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <h3>سياسة الخصوصية</h3>
    <p>
        يتمتع موقع الأندية الطلابية بحماية قوية لمنع اي تسريب لبيانات الطلاب، ويستخدم أحدث التقنيات لصد أي محاولة اختراق.

        عند تسجيل حساب عندنا، فإننا نحفظ البريد الإلكتروني وكلمة المرور لاستخدامها في تسجيل الدخول، ونحفظ البيانات الأخرى لاستخدامها في معالجة البيانات.

        وعند رؤية أي شيء يخالف سياسة خصوصيتنا فإنه يجب أن تتواصل معنا على رقم الواتساب التالي: <strong><a class="manager" target="_blank" href="https://api.whatsapp.com/send?phone=22249474968">اضغط هنا</a></strong>
    </p>
</div>
