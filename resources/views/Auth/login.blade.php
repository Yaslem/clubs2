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
            padding: 20px;
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
            margin: 50px 0 150px;
            position: relative;
            width: 450px;
        }
        .login-container div {
            position: relative;
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
        .login-container form > div{
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid rgba(98, 105, 118, 0.16);
            padding: 8px;
            width: 100%;
            gap: 20px;
            background-color: white;
            position: relative;
            display: flex;
            flex-direction: column;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        }
        .login-container form > div > div{
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            font-size: 14px;
            color: gray;
        }
        .login-container form > div > div:last-of-type{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            color: gray;
        }
        .login-container form > div > div:last-of-type > div:first-of-type{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .login-container form div:last-of-type > div{
            margin-bottom: 0;
        }
        .login-container form > div > div:last-of-type > div:first-of-type span{
            margin-right: 10px;
        }
        .login-container form > div > div label{
            padding-right: 30px;
            font-size: 14px;
            margin-bottom: 15px;
            color: gray;
            position: relative;
        }
        .login-container form > div > div label:before{
            content: '';
            width: 16px;
            height: 16px;
            display: block;
            position: absolute;
            background-color: #447dc1;
            right: 0;
            border-radius: 6px;
        }

        .login-container form button {
            padding: 10px;
            background-color: #2d5e99;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 600;
            width: 100%;
            color: white;
            grid-column: span 2;
        }

        .login-container form button{
            padding: 10px;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 600;
            background-color: #2d5e99;
            color: white;
        }
        .login-container .and{
            margin: 9px 0;
            display: block;
            right: 45%;
            width: fit-content;
            border-radius: 6px;
            padding: 8px;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            z-index: 4;
            position: absolute;
            color: gray;
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
        .error-login{
            background-color: #F5F5F5;
            padding: 8px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
            border: 1px solid #ccc;
            overflow: auto;
        }
        .error-login ul li{
            display: flex;
            align-items: center;
            margin: 8px 0;
        }
        .error-login span{
            margin-right: 13px;
            line-height: 2;
            color: #d02020;
        }
    </style>
@endsection()
@extends('layouts.app')
@section('title', '- تسجيل الدخول')
@section('content')
<section class="login-index">
    <div class="login-wrapper">
        <img src="{{asset('uploads/files/default/site-logo.png')}}">
        <div class="login-container">
            @error('*')
            <div class="error-login">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            <svg width="40px" height="40px" viewBox="-2.64 -2.64 29.28 29.28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM10.0586 6.05547C10.0268 5.48227 10.483 5 11.0571 5H12.9429C13.517 5 13.9732 5.48227 13.9414 6.05547L13.5525 13.0555C13.523 13.5854 13.0847 14 12.554 14H11.446C10.9153 14 10.477 13.5854 10.4475 13.0555L10.0586 6.05547ZM14 17C14 18.1046 13.1046 19 12 19C10.8954 19 10 18.1046 10 17C10 15.8954 10.8954 15 12 15C13.1046 15 14 15.8954 14 17Z" fill="#d02020"></path> </g></svg>
                            <span>{{{$error}}}</span>
                        </li>
                    @endforeach

                </ul>
            </div>
            @enderror
            @if(\Illuminate\Support\Facades\Session::has('error'))
                @php
                    $text = mb_strlen(\Illuminate\Support\Facades\Session::get('error'), "UTF-8");

                @endphp
                <div class="error-login">
                    <ul>
                        <li style="{{$text > 100 ? 'flex-direction:column; gap:20px' : ''}}">
                            <svg width="{{$text > 100 ? '40px' : '20px'}}" height="{{$text > 100 ? '40px' : '20px'}}" viewBox="-2.64 -2.64 29.28 29.28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM10.0586 6.05547C10.0268 5.48227 10.483 5 11.0571 5H12.9429C13.517 5 13.9732 5.48227 13.9414 6.05547L13.5525 13.0555C13.523 13.5854 13.0847 14 12.554 14H11.446C10.9153 14 10.477 13.5854 10.4475 13.0555L10.0586 6.05547ZM14 17C14 18.1046 13.1046 19 12 19C10.8954 19 10 18.1046 10 17C10 15.8954 10.8954 15 12 15C13.1046 15 14 15.8954 14 17Z" fill="#d02020"></path> </g></svg>
                            <span>{{{\Illuminate\Support\Facades\Session::get('error')}}}</span>
                        </li>
                    </ul>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="error-login">
                    <ul>
                        <li>
                            <svg width="40px" height="40px" viewBox="-102.4 -102.4 1228.80 1228.80" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#68B984" d="M512 64a448 448 0 1 1 0 896 448 448 0 0 1 0-896zm-55.808 536.384-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z"></path></g></svg>
                            <span style="color: #68b984;">{{{\Illuminate\Support\Facades\Session::get('success')}}}</span>
                        </li>
                    </ul>
                </div>
            @endif
            <form action="{{route('login')}}" method="post">
                @csrf
                <div>
                    <div>
                        <label for="username">الرقم الجامعي</label>
                        <input type="text" placeholder="أدخل الرقم الجامعي" name="username" value="{{ old('username') }}" @error('username') class="error"  @enderror>
                    </div>
                    <div>
                        <label for="password">كلمة المرور</label>
                        <input type="password" placeholder="اكتب كلمة المرور" name="password" value="{{ old('password') }}" @error('password') class="error"  @enderror>
                    </div>
                    <div>
                        <div>
                            <input id="rememberBtn" type="checkbox"/>
                            <span>تذكرني</span>
                        </div>
                        <div>
                            <a href="{{route('forgetPasswordView')}}">نسيت كلمة المرور؟</a>
                        </div>
                    </div>
                </div>
				                <span style="width: 100%; display: block; padding: 8px; background-color: white; color: gray; line-height: 2; border-radius: 6px; margin-bottom: 20px; font-size: 14px; color: #e62e2ea8;">
                    إذا لم تستطع الدخول، فاكتب في خانة الرقم الجامعي: <strong style="color: #68b984">رقمك الجامعي</strong>، وفي كلمة المرور: <strong style="color: #68b984">رقمك الجامعي.</strong> إذا لم تستطع بعد ذلك اذهب وسجل حسابا جديدا.
                </span>
                <button>تسجيل الدخول</button>
            </form>
            <span class="and">{{__('site.and')}}</span>
            <div class="and-login">
                <a href="{{route('register')}}">{{__('site.register')}}</a>
            </div>
        </div>
    </div>

</section>
@endsection()
@section('script')
    <script>
        let rememberBtn = document.getElementById('rememberBtn')
        console.log(rememberBtn)
        let rememberBrowder = localStorage.getItem('remember');

        window.addEventListener('load', function (){
            if(rememberBrowder != null){
                if(rememberBrowder == 'true'){
                    rememberBtn.checked = true;
                }else {
                    rememberBtn.checked = false;
                }
            }
        });

        rememberBtn.addEventListener('change',function (){
            if(rememberBtn.checked){
                rememberBtn.setAttribute('name', 'remember')
                rememberBtn.setAttribute('value', 'true')
                let remember = localStorage.getItem('remember');
                if(remember != null){
                    if(remember != true){
                        localStorage.setItem('remember', 'true');
                    }else {
                        localStorage.setItem('remember', 'false');
                    }
                }else {
                    localStorage.setItem('remember', 'true');
                }
            }else {
                let remember = localStorage.getItem('remember');
                if(remember != null){
                    if(remember != false){
                        localStorage.setItem('remember', 'false');
                    }else {
                        localStorage.setItem('remember', 'true');
                    }
                }else {
                    localStorage.setItem('remember', 'false');
                }

                rememberBtn.setAttribute('name', 'remember')
                rememberBtn.setAttribute('value', 'false')
            }
        })
    </script>
@endsection
