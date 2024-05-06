@section('style')
    <style>
        .b-index {
            margin: 10px;
            padding: 20px;
            position: relative;
        }
        .b-container{
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
        }
        .b-container table{
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
        .b-container table thead th:first-child{
            border-top-right-radius: 6px;
        }
        .b-container table thead th:last-child{
            border-top-left-radius: 6px;
        }
        .b-container table tbody td{
            padding: 13px 10px;
            text-align: center;
            background-color: white;
            font-size: 13px;
            line-height: 1.3;
        }
        .b-container table tbody td:last-child{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .b-container table tbody td:last-child span{
            display: flex;
            background-color: #F1F6F5;
            padding: 4px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin-left: 6px;
            cursor: pointer;
        }
        .b-container table tbody tr:not(:last-of-type){
            border-bottom: 1px solid #ccc;
        }
        .b-index .table-search {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            background-color: white;
            font-size: 13px;
            padding: 8px;
            border-radius: 6px;
            margin: 20px 0 16px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        }

        .b-index .table-search div input[type="text"] {
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f5f6f7;
            height: 40px;
            width: 100%;
        }

        .b-index .table-search div select,
        .b-index .table-search div input {
            width: 100%;
            color: rgb(0 0 0 / 50%);
            padding: 8px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #ccc;
            height: 40px;
        }
        .table-search label {
            margin: 4px 8px 12px;
            display: block;
            font-size: 14px;
            opacity: 0.5;
        }

        .b-index  .addUser{
            background-color: #2C74B3;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            color: white;
            margin: 10px 0;
            width: fit-content;
            display: block;
            cursor: pointer;
        }

        /*Start Add User*/
        .content-profile{
            background-color: white;
            padding: 20px;
            border-radius: 6px;
            margin: 8px 0;
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
        }
        .content-profile .section-left .content .content-avatar img{
            width: 100px;
            background-color: aqua;
            padding: 0px;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .content-profile .section-left .content .content-edit.first{
            margin-bottom: 10px;
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
        /*-----*/
        .content-profile form{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
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
        }
        .content-profile form div input{
            border: 1px solid #ccc;
            background-color: #f5f6f7;
            font-size: 13px;
            width: 100%;
        }
        .content-profile form div textarea{
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            padding: 20px;
            font-size: 14px;
        }
        .content-profile form div input.error{
            border: 1px solid #E84545;
        }
        .content-profile form div input.error::placeholder{
            color: #E84545;
            opacity: 0.5;
        }

        .content-profile form div span{
            font-size: 13px;
            margin: 8px 0;
            color: #E84545;
        }
        .content-profile form div h4{
            font-size: 14px;
            margin: 16px 0px 10px;
        }
        .content-profile form div ul{
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }
        .content-profile form div ul li{
            display: flex;
            align-items: center;
            color: #383838;
        }
        .content-profile form button{
            padding: 10px;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 600;
            background-color: #2d5e99;
            color: white;
            grid-column: span 4;
        }
        .content-profile .select-country-wrapper{
            position: relative;

        }
        .content-profile select{
            color: rgb(0 0 0 / 50%);
            padding: 8px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #ccc;
            height: 40px;
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
        .coverAdduser{
            background-color: black;
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0.6;
            z-index: 2;
        }
        .coverShowActivity{
            background-color: #f0f2fa;
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0.6;
            z-index: 2;
        }
        .b-index .content-profile.addUserContent{
            position: fixed;
            left: auto;
            top:10%;
            z-index: 3;
            width: 700px;
        }
        .activity-show{
            padding: 8px;
            background-color: white;
            margin: 20px 0;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .activity-show .activity-show-content{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }
        .activity-show .alert{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 0 20px;
        }
        .activity-show .alert p{
            margin: 15px 0 10px;
            color: gray;
            font-size: 20px;
        }
        .activity-show .activity-show-content > div:not(:last-child){
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        }
        .activity-show .activity-show-content .notes-activity{
            grid-column: span 2;
            margin-top: 20px;
        }
        .activity-show .activity-show-content .notes-activity label{
            margin-bottom: 20px;
            display: block;
        }
        .activity-show .activity-show-content .notes-activity .notes-activity-content{
            display: flex;
            align-items: center;
            width: 100%;
        }
        .activity-show .activity-show-content .notes-activity textarea{
            width: 100%;
            padding: 15px 8px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            border: none;
            border-radius: 6px;
            resize: none;
            overflow: auto;
            font-size: 12px;
            color: gray;
            margin-right: 20px;
        }
        .activity-show > div span{
            font-size: 14px;
        }
        .null-of-search-container .null-of-search{
            padding: 20px;
            width: 100%;
            background-color: white;
            margin: 8px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .null-of-search-container .null-of-search svg{
            opacity: 0.5;
        }
        .null-of-search-container .null-of-search p{
            font-size: 22px;
            margin-right: 20px;
            color: #00000080;
        }
        .search-title-input{
            display: flex;
            align-items: center;
            position: relative;
        }
        .search-title-input > input{
            border-top-left-radius: 20px !important;
            border-bottom-left-radius: 20px !important;
        }

        .search-title-input > span{
            position: absolute;
            left: 0px;
            background-color: white;
            padding: 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .search-title-input > span:hover{
            background-color: #81C6E8;
        }
        /*End Add User*/

        .count-activity-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .count-activity{
            display: flex;
            padding: 10px;
            background-color: white;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .count-activity div:last-of-type{
            display: flex;
            flex-direction: column;
            margin: 0 30px;
            font-size: 20px;
            text-align: center;
        }
        .count-activity div span:first-of-type{
            margin: 0 0 10px;
            color: gray;
        }
        .count-activity div span:last-of-type{
            font-size: 13px;
            opacity: 0.4;
        }
        .status-attend{
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px dashed #ccc;
            padding: 4px;
            background-color: #EEEEEE;
            border-radius: 6px;
            cursor: pointer;
        }
        .status-attend label{
            cursor: pointer;
        }
    </style>
@endsection
<div>
    <section class="b-index">
        @if($indexActivity == true)
            <div wire:loading.class="loading-status">
                <div class="count-activity-container">
                    @can('createActivity', App\Models\User::class)
                    <span wire:click="addActivity()" class="addUser">إضافة حجز جديد</span>
                    @endcan
                    <div class="count-activity">
                        <div>
                            <svg fill="#62a4d0" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-153.8 -153.8 803.72 803.72" xml:space="preserve" stroke="#62a4d0"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-153.8" y="-153.8" width="803.72" height="803.72" rx="401.86" fill="#EEE9DA" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M69.162,415.397c-4.629,0-8.41-3.768-8.41-8.408V97.518c0-4.639,3.781-8.406,8.41-8.406h215.045 c4.639,0,8.404,3.768,8.404,8.406v156.385c10.457-4.598,21.625-7.807,33.244-9.625V97.518c0-22.965-18.684-41.648-41.648-41.648 H116.576V41.648c0-4.645,3.781-8.404,8.404-8.404h215.045c4.629,0,8.41,3.76,8.41,8.404v200.943 c11.313,0.129,22.403,1.801,33.243,4.752V41.648C381.679,18.678,362.995,0,340.025,0H124.98c-22.97,0-41.648,18.678-41.648,41.648 v14.221h-14.17c-22.954,0-41.653,18.683-41.653,41.648v309.471c0,22.967,18.699,41.65,41.653,41.65h162.858 c-6.384-10.258-11.442-21.391-14.917-33.242H69.162z"></path> <path d="M120.129,175.922h86.485c9.189,0,16.621-7.434,16.621-16.623c0-9.184-7.432-16.621-16.621-16.621h-86.485 c-9.173,0-16.622,7.438-16.622,16.621C103.507,168.488,110.956,175.922,120.129,175.922z"></path> <path d="M233.235,209.217H120.129c-9.173,0-16.622,7.432-16.622,16.621c0,9.186,7.449,16.623,16.622,16.623h113.106 c9.174,0,16.622-7.438,16.622-16.623C249.857,216.648,242.409,209.217,233.235,209.217z"></path> <path d="M248.231,285.443c-2.629-5.697-8.312-9.709-14.996-9.709H120.129c-9.173,0-16.622,7.434-16.622,16.623 c0,9.188,7.449,16.623,16.622,16.623H230.57C235.603,300.492,241.531,292.602,248.231,285.443z"></path> <path d="M103.507,358.875c0,9.19,7.449,16.621,16.622,16.621h91.617c0.177-11.488,1.85-22.611,4.737-33.24h-96.354 C110.956,342.256,103.507,349.688,103.507,358.875z"></path> <path d="M436.349,354.773c1.87,7.318,2.971,14.963,2.971,22.854c0,51.029-41.523,92.555-92.558,92.555 c-51.05,0-92.574-41.525-92.574-92.555c0-51.055,41.524-92.572,92.574-92.572c13.002,0,25.374,2.727,36.62,7.578l13.766-22.107 c-15.324-7.242-32.351-11.414-50.386-11.414c-65.35,0-118.509,53.16-118.509,118.516c0,65.334,53.159,118.494,118.509,118.494 c65.335,0,118.498-53.16,118.498-118.494c0-18.164-4.237-35.32-11.558-50.713L436.349,354.773z"></path> <path d="M458.426,245.707c-3.554-2.209-7.501-3.268-11.412-3.268c-7.204,0-14.27,3.604-18.357,10.18l-85.935,138.103 l-28.798-41.066c-4.202-5.988-10.907-9.19-17.723-9.19c-4.285,0-8.602,1.27-12.389,3.918c-9.755,6.846-12.139,20.318-5.272,30.092 l47.544,67.82c4.058,5.775,10.664,9.199,17.708,9.199c0.197,0,0.39,0,0.587,0c7.257-0.207,13.925-4.025,17.759-10.176 l103.201-165.846C471.655,265.332,468.554,252.002,458.426,245.707z"></path> </g> </g></svg>
                        </div>
                        <div>
                            <span>{{$activityCount}}</span>
                            <span>عدد الفعاليات</span>
                        </div>
                    </div>
                </div>
                    <div class="table-search">
                        <div>
                            <label>البحث</label>
                            <input wire:model="titleSearch" type="text" placeholder="البحث عن عنوان الفعالية" @if($titleIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                        </div>
                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                        <div>
                            <label>من</label>
                            <input wire:model="fromSearch" id="types" type="date" />
                        </div>
                        <div>
                            <label>إلى</label>
                            <input wire:model="toSearch" id="types" type="date" />
                        </div>
                        <div>
                            <label>النادي</label>
                            <select wire:model="clubsSearch" id="types" @if($clubsIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                <option value="">جميع الأندية</option>
                                @foreach($clubs as $club)
                                    <option value="{{$club->id}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div>
                            <label>نوع الفعالية</label>
                            <select wire:model="typeSearch" id="types" @if($typeIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                <option value="">جميع الأنواع</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>موقع الفعالية</label>
                            <select wire:model="locationSearch" id="locations" @if($locationIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                <option value="">جميع المواقع</option>
                                @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>حالة الفعالية</label>
                            <select wire:model="statusSearch" class="status" @if($statusIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                <option value="">جميع الحالات</option>
                                <option value="أقيمت">أقيمت</option>
                                <option value="لم تقم">لم تقم</option>
                                <option value="ملغاة">ملغاة</option>
                                <option value="مؤجلة">مؤجلة</option>
                                <option value="تم الطلب">تم الطلب</option>
                                <option value="تم الحجز">تم الحجز</option>

                            </select>
                        </div>
                        <div>
                            <label>الفعاليات المشنركة</label>
                            <select wire:model="shareSearch" class="status" @if($shareIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                <option value="">جميع الفعاليات</option>
                                <option value="مشتركة">مشتركة</option>
                                <option value="غير مشتركة">غير مشتركة</option>
                            </select>
                        </div>
                    </div>
                    <div class="b-container">
                        @if($filterNull == true)
                            <div class="null-of-search-container">
                                <div class="null-of-search">
                                    <svg class="opacity: 0.5;" width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                        <g id="SVGRepo_iconCarrier"> <g fill="#1C82AD"> <path d="m 13.550781 4 c -0.488281 0.003906 -0.988281 0.195312 -1.429687 0.636719 l -7.625 7.625 c -0.316406 0.316406 -0.496094 0.75 -0.496094 1.199219 v 2.539062 h 2.539062 c 0.449219 0 0.882813 -0.179688 1.199219 -0.496094 l 7.625 -7.625 c 1.515625 -1.511718 0.066407 -3.714844 -1.601562 -3.871094 c -0.070313 -0.007812 -0.140625 -0.007812 -0.210938 -0.007812 z m -1.503906 3.054688 l 0.898437 0.898437 l -5.980468 5.980469 l -0.898438 -0.898438 z m 0 0"/> <path d="m 5 1 s -0.707031 -0.015625 -1.449219 0.355469 c -0.738281 0.371093 -1.550781 1.3125 -1.550781 2.644531 v 2 h -2 v 1 h 0.0078125 c -0.00390625 0.265625 0.1015625 0.519531 0.2851565 0.707031 l 2 2 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 2 -2 c 0.183594 -0.1875 0.289063 -0.441406 0.289063 -0.707031 h 0.003906 v -1 h -2 v -2 c 0.105469 -0.800781 0.5 -1 1 -1 h 5 c 0.550781 0 1 -0.449219 1 -1 s -0.449219 -1 -1 -1 z m 0 0"/> </g> </g>

                                    </svg>
                                    <p>لا توجد نتائج</p>
                                </div>
                            </div>
                        @else
                        <table class="table">
                            <thead>
                            <tr>
                                <th>العنوان</th>
                                <th>النادي</th>
                                {{--<th>المكان</th>--}}
                                <th>من</th>
                                <th>إلى</th>
								<th>اليوم</th>
								<th>التاريخ</th>
                                {{--<th>حالة الحجز</th>--}}
                                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                <th>حالة التحضير</th>
                                @endif
                                <th>الحالة</th>
                                @canany(['updateActivity', 'deleteActivity', 'viewActivity'], App\Models\User::class)
                                <th>الخيارات</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activities as $activity)
                                <tr>
                                    <td>{{Str::limit($activity->title, 20)}}</td>
                                    <td>{{$activity->club ? $activity->club->name : '---'}}</td>
                                    {{--<td>{{$activity->location ? $activity->location->name : '---'}}</td>--}}
                                    <td>{{$activity->from}}</td>
                                    <td>{{$activity->to}}</td>
									@php
										$find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
										$replace = array ("السبت", "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
									@endphp
									<td>{{str_replace($find, $replace, date('D', strtotime($activity->date)))}}</td>
									<td>{{$activity->date}}</td>
                                    <td>{{$activity->status}}</td>
                                    @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                        <td>
                                            <div wire:click="status_attend({{$activity->id}})" class="status-attend">
                                                <label for="statusAttend{{$activity->id}}">
                                                    <input style="display: none" id="statusAttend{{$activity->id}}" wire:model="status_attend" type="checkbox">
                                                    <span>@if($activity->is_attend == true) مفتوح @else مغلق @endif</span>
                                                </label>
                                            </div>
                                        </td>
                                    @endif
                                    <td>
                                        @can('updateActivity', App\Models\User::class)
                                        <span wire:click="editActivity({{$activity->id}})">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" d="M19.993 18.953h-5.695c-.555 0-1.007.46-1.007 1.024 0 .565.452 1.023 1.007 1.023h5.695c.555 0 1.007-.458 1.007-1.023s-.452-1.024-1.007-1.024z" fill="#fff"/><path d="M10.309 6.904l5.396 4.36a.31.31 0 01.05.429L9.36 20.028a2.1 2.1 0 01-1.63.817l-3.492.043a.398.398 0 01-.392-.312l-.793-3.45c-.138-.635 0-1.29.402-1.795l6.429-8.376a.3.3 0 01.426-.051z" fill="#000"/><path opacity=".4" d="M18.12 8.665l-1.04 1.299a.298.298 0 01-.423.048c-1.265-1.023-4.503-3.65-5.401-4.377a.308.308 0 01-.043-.432l1.003-1.246c.91-1.172 2.497-1.28 3.777-.258l1.471 1.172c.604.473 1.006 1.096 1.143 1.752.16.721-.01 1.43-.486 2.042z" fill="#000"/></svg>
                                        </span>
                                        @endcan
                                        <span wire:click="ShowActivity({{$activity->id}})" class="show-activity">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" fill-rule="evenodd" clip-rule="evenodd" d="M17.737 6.046c1.707 1.318 3.16 3.249 4.205 5.663a.729.729 0 010 .572C19.854 17.111 16.137 20 12 20h-.01c-4.127 0-7.844-2.89-9.931-7.719a.728.728 0 010-.572C4.146 6.88 7.863 4 11.99 4H12c2.068 0 4.03.718 5.737 2.046zM8.097 12c0 2.133 1.747 3.87 3.903 3.87 2.146 0 3.893-1.737 3.893-3.87A3.888 3.888 0 0012 8.121c-2.156 0-3.902 1.736-3.902 3.879z" fill="#000" fill-opacity=".5"/><path d="M14.43 11.997a2.428 2.428 0 01-2.428 2.414c-1.347 0-2.44-1.086-2.44-2.414 0-.165.02-.32.05-.474h.048a1.997 1.997 0 002-1.921c.107-.019.225-.03.342-.03a2.43 2.43 0 012.429 2.425z" fill="#000" fill-opacity=".5"/></svg>
                                        </span>
                                        @can('deleteActivity', App\Models\User::class)
                                        <span onclick="areYouDelete('{{$activity->id}}','{{$activity->title}}')">
                                             <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z" fill="#FD8A8A" fill-opacity=".5"/><path d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z" fill="#DC3535" fill-opacity=".5"/></svg>
                                        </span>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                    <div class="i-pagination">
                        {{$activities->links('pagination.default')}}
                    </div>
{{--                @else--}}
{{--                    <span style="text-align: center;width: 100%;display: block;font-size: 30px;color: gray;margin-top: 30px;">لا توجد حجوزات.</span>--}}
{{--                @endif--}}
            </div>
            <div wire:loading class="loading">
                <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
            </div>
        @endif
        @if($addActivity == true)
            <livewire:activities.add>
        @endif
        @if($showActivity == true)
            <livewire:activities.show>
        @endif
        @if($editActivity == true)
            <livewire:activities.edit>
        @endif
    </section>
    <script>
        function areYouDelete(id,title)
        {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف الحجز  "+'[ '+title+' ]',
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "إلغاء",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "موافق",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                },
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                @this.willDeleteActivity(id);
                }
            });
        }
    </script>
    @if (session()->has('message'))
        <script>
            swal({
                title: 'تم!',
                text: '{{ session('message') }}',
                icon: "success",
                button: false,
                timer: 2000,
            });
        </script>
    @endif
</div>
