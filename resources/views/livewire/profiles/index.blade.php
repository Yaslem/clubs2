@section('title', '- الملف الشخصي')
@section('style')
    <style>
        .b-index {
            margin: 10px;
            padding: 20px;
        }
        .certificate-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            background-color: white;
            padding: 10px;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .nav-profile{
            padding: 8px;
            background-color: white;
            margin: 8px;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .nav-profile ul{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-profile ul li{
            width: 23%;
            text-align: center;
            padding: 13px;
            background-color: #eaedf0;
            cursor:pointer;
            border-radius: 6px;
            font-weight: 500;
            font-size: 15px;
        }
        .nav-profile ul li:hover{
            color:white;
            background-color: #22577E;
        }
        .content-profile{
            display: flex;
            background-color: white;
            padding: 20px;
            border-radius: 6px;
            margin: 30px 8px 8px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }
        .content-profile .section-right{
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 8px;

        }
        .content-profile .section-right div{
            margin: 10px 0;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f1f1f1;
            padding: 8px 20px;
            border-radius: 6px;
            color: #9e9898;

        }
        .content-profile .section-right div:first-child{
            margin: 0;
        }
        .content-profile .section-right div:last-child{
            margin: 0;
        }
        .content-profile .section-left{
            width: 40%;
            padding: 20px;
            display: flex;
            justify-content: center;
            margin: auto;
        }
        .content-profile .section-left .content{
            display: flex;
            flex-direction: column;
        }
        .content-profile .section-left .content .content-avatar{
            display: flex;
            align-items: center;
            justify-content: center;
			width: 100px;
			margin: auto;
			height: 100px;
        }
        .content-profile .section-left .content .content-avatar img{
            width: 100px;
            height: 100px;
			object-fit: cover;
            box-sizing: content-box;
            background-color: #BAD7E9;
            padding: 0px;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .content-profile .section-left .content .content-edit.first{
            margin-bottom: 10px;
            cursor: pointer;
        }
        .content-profile .section-left .content .content-edit{
            padding: 8px;
            background-color: #2C74B3;
            border-radius: 6px;
            color: white;
            font-size: 13px;
            text-align: center;
            font-weight: 500;
        }
        .b-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            margin-top: 30px;
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
            justify-content: center;
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

        .b-container table tbody tr:not(:last-of-type) {
            border-bottom: 1px solid #ccc;
        }
        .content-profile form{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .content-profile form div{
            display: flex;
            position: relative;
            flex-direction: column;
            /*margin-bottom: 20px;*/
        }
        .content-profile form div label{
            font-size: 13px;
            margin-bottom: 10px;
            font-weight: 500;
            color: #383838;
            position: relative;
            padding-right: 25px;
        }

        .content-profile form div label:first-child:before{
            content: '';
            width: 16px;
            height: 16px;
            display: block;
            position: absolute;
            background-color: #447dc1;
            right: 0;
            border-radius: 6px;
        }

        .content-profile form div span {
            font-size: 13px;
            margin: 8px 0;
            color: #E84545;
        }

        .content-profile form div input{
            border: 1px solid #ccc;
            padding: 10px;
            height: 40px;
            background-color: #f5f6f7;
            font-size: 14px;
            color: gray;
        }

        .content-profile form div input.error{
            border: 1px solid #E84545;
        }
        .content-profile form div input.error::placeholder{
            color: #E84545;
            opacity: 0.5;
        }

        .content-profile form button{
            padding: 10px;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 600;
            background-color: #2d5e99;
            color: white;
            grid-column: span 2;
        }
        .content-profile .select-country-wrapper{
            position: relative;

        }
        .content-profile select{
            color: rgb(0 0 0 / 50%);
            padding: 8px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #ccc;
            height: 40px;
            width: 100%;
        }
        .content-profile .select-country-box{
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
    </style>
@endsection
<div>
    <section class="b-index" wire:loading.class="loading-status">
        <div class="certificate-container">
            <div class="nav-profile">
                <ul>
                    <li wire:click="Index()">المعلومات</li>
                    <li wire:click="Certificate()">الشهادات</li>
                    <li wire:click="Award()">الجوائز</li>
                </ul>
            </div>
            @if($showIndex == true)
            <div class="content-profile">
                <section class="section-right">
                    <div>
                        <span>الاسم</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                    </div>
                    <div>
                        <span>الرقم الجامعي</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->username}}</p>
                    </div>
                    <div>
                        <span>الهوية</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->ID_Number}}</p>
                    </div>
                    <div>
                        <span>الواتساب</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->number_of_whatsapp}}</p>
                    </div>
                    <div>
                        <span>البريد</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                    </div>
                    <div>
                        <span>الدولة</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->country->name}}</p>
                    </div>
                    <div>
                        <span>الكلية</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->college->name}}</p>
                    </div>
                    <div>
                        <span>المستوى</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->level->name}}</p>
                    </div>
                    <div>
                        <span>النادي</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->ClubStatus->name}} -- ({{\Illuminate\Support\Facades\Auth::user()->membership_status}})</p>
                    </div>
                    <div>
                        <span>نوع الحساب</span>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->role}}</p>
                    </div>
                </section>
                <section class="section-left">
                    <div class="content">
                        <div class="content-avatar">
                            <img  src="{{asset('uploads/files/'.Auth::user()->avatar)}}">
                        </div>
                        <div class="content-edit first" wire:click="Edit()">
                            تعديل معلومات الحساب
                        </div>
                        <div class="content-edit first" wire:click="ResetPassword()">
                            تغيير كلمة المرور
                        </div>
                    </div>
                </section>
            </div>
            @endif
            @if($showReset == true)
                <livewire:profiles.reset-password>
            @endif
            @if($showAward == true)
                <livewire:profiles.awards>
            @endif
            @if($showCertificate == true)
                <livewire:profiles.certificates>
            @endif
            @if($showEditUser == true)
                <livewire:profiles.edit>
            @endif
        </div>
    </section>
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
