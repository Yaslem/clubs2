@section('style')
    <style>
        .login-index{
            background-image: url("{{asset('uploads/files/default/background-login.svg')}}");
            /*background-color: white;*/
        }
        .login-wrapper{
            background-image: url("{{asset('uploads/files/default/background-login.svg')}}");
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 20px 20px 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat, no-repeat;
            background-position: center center, center center;
            background-size: cover, cover;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }
        .login-wrapper img{
            width: 150px;
            height: 150px;
            margin-top: 30px;
        }
        .login-container{
            border-radius: 6px;
            margin: 50px 0 150px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            border: 1px solid rgba(98, 105, 118, 0.16);
            padding: 30px 20px 16px;
            width: 700px;
            background-color: white;
            position: relative;
        }
        .login-container h2{
            margin-top: 0;
            font-size: 30px;
            margin-bottom: 50px;
            text-align: center;
            color: #383838;
            opacity: 0.6;
        }
        .login-container form{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .login-container .notes-register{
            padding: 8px 0px;
            margin: 30px 0 0;
            border-radius: 6px;
            display: flex;
            align-items: center;
        }
        .login-container .notes-register svg{
            margin-left: 10px;
        }
        .login-container .notes-register p{
            font-size: 15px;
            font-weight: 500;
            opacity: 0.5;
        }
        .login-container .and{
            margin: 9px 0;
            display: block;
            right: 48%;
            background-color: white;
            width: fit-content;
            border-radius: 6px;
            padding: 8px;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            z-index: 4;
            position: absolute;
        }
        .login-container > hr{
            margin: 0;
            width: 94%;
            display: block;
            height: 2px;
            background-color: #ccc;
            opacity: 0.3;
            border: 0;
            position: absolute;
            bottom: 79px;
            z-index: 1;
        }
        .login-container .and-login{
            padding: 10px;
            border-radius: 6px;
            font-size: 17px;
            text-align: center;
            margin-top: 50px;
            font-weight: 500;
            background-color: #205375;
            color: white;
        }
        .login-container form div{
            display: flex;
            position: relative;
            flex-direction: column;
            /*margin-bottom: 20px;*/
        }
        .login-container form div label{
            font-size: 13px;
            margin-bottom: 10px;
            font-weight: 500;
            color: #383838;
        }
        .login-container form div input{
            border: 1px solid #ccc;
            background-color: #f5f6f7;
            font-size: 13px;
        }

        .login-container form div input.error{
            border: 1px solid #E84545;
        }
        .login-container form div input.error::placeholder{
            color: #E84545;
            opacity: 0.5;
        }

        .login-container form div svg{
            position: absolute;
            top: 46%;
            left: 10px;
        }
        .login-container form div h4{
            font-size: 14px;
            margin: 16px 0px 10px;
        }
        .login-container form div ul{
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }
        .login-container form div ul li{
            display: flex;
            align-items: center;
            color: #383838;
        }
        .login-container form div ul li svg{
            margin-left: 6px;
        }
        .login-container form button{
            padding: 10px;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 600;
            background-color: #2d5e99;
            color: white;
            grid-column: span 2;
        }
        .login-container .select-country-wrapper{
            position: relative;

        }
        .login-container select{
            color: rgb(0 0 0 / 50%);
            padding: 8px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
            border: 0;
        }
        .login-container .select-country-box{
            padding: 10px;
            /*position: relative;*/
            box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            height: 250px;
            position: absolute;
            top: 45px;
            background-color: white;
            width: 100%;
            display: none;
        }
        span.error{
            font-size: 13px;
            margin: 10px 0;
            color: #E84545;
        }

    </style>
@endsection()
@section('title', '- تسجيل حساب جديد')
@extends('layouts.app')
@section('content')
    <section class="login-index">
        <div class="login-wrapper">
            <img src="{{asset('uploads/files/default/site-logo.png')}}">
            <div class="login-container">
				            <span style="width: 100%; display: block; padding: 8px; background-color: white; color: gray; line-height: 2; border-radius: 6px; margin-bottom: 20px; font-size: 14px; color: #e62e2ea8;">
                        إذا ظهر لك في خانة الرقم الجامعي رسالة تقول:<strong style="color: #68b984">"الرقم الجامعي هذا موجود بالفعل."</strong>، فهذا يعني أن مسجَّل في الموقع، اضفط على تسجيل الدخول.
            </span>
                <h2>تسجيل حساب جديد</h2>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div>
                        <label for="name">الاسم الكامل</label>
                        <input type="text" placeholder="اكتب اسمك كاملا" name="name" value="{{ old('name') }}" @error('name') class="error"  @enderror>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="username">الرقم الجامعي</label>
                        <input type="text" placeholder="أدخل رقمك الجامعي" name="username" value="{{ old('username') }}" @error('username') class="error" @enderror>
                        @error('username') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="ID_Number">رقم الهوية/الإقامة</label>
                        <input id="ID_Number" type="text" placeholder="أدخل رقم هويتك" name="ID_Number" value="{{ old('ID_Number') }}" @error('ID_Number') class="error" @enderror>
                        @error('ID_Number') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>الدولة</label>
                        <select name="country_id">
                            <option value="">الدولة</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        @error('country_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>الكلية</label>
                        <select name="college_id">
                            <option value="">الكلية</option>
                            @foreach($colleges as $college)
                                <option value="{{$college->id}}">{{$college->name}}</option>
                            @endforeach
                        </select>
                        @error('college_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="number_of_whatsapp">رقم الواتساب</label>
                        <input type="text" placeholder="اكتب رقم واتسابك" name="number_of_whatsapp" value="{{ old('number_of_whatsapp') }}" @error('number_of_whatsapp') class="error" @enderror>
                        @error('number_of_whatsapp') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" placeholder="أدخل بريدك الإلكتروني" name="email" value="{{ old('email') }}" @error('email') class="error" @enderror>
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="password">كلمة المرور</label>
                        <input type="password" placeholder="اكتب كلمة المرور" name="password" value="{{ old('password') }}" @error('password') class="error" @enderror>
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>المستوى</label>
                        <select name="level_id">
                            <option value="">المستوى</option>
                            @foreach($levels as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                            @endforeach
                        </select>
                        @error('level_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>النادي</label>
                        <select name="club_id">
                            <option value="">النادي</option>
                            @foreach($clubs as $club)
                                <option value="{{$club->id}}">{{$club->name}}</option>
                            @endforeach
                        </select>
                        @error('club_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <button>تسجيل حساب</button>
                </form>
                <span class="and">{{__('site.and')}}</span>
                <hr>
                <div class="and-login">
                    <a href="{{route('login')}}">{{__('site.login')}}</a>
                </div>
            </div>
        </div>

    </section>
@endsection()
@section('script')
    <script>
        $(document).ready(function () {
            $('#countryClick').on("click", function (){
                $('#country').toggleClass('active')
                // $('#search').val = '';
            });

            $('#search').on('keyup',function (){
                resultSearch($(this).val());
            });
            function resultSearch(value){
                $('#result li').each(function (){
                    let found = false;
                    $(this).each(function (){
                        if($(this).text().indexOf(value) > 1){
                            found = true;
                        }
                    });
                    if(found == true){
                        $(this).show()
                    }else{
                        $('#result').html('<p>لا يوجد شيء</p>')
                    }
                });
            }
        });
    </script>
@endsection
