@section('title', '- المنشورات')
@section('style')
    <style>
        .b-index {
            margin: 10px;
            padding: 20px;
            position: relative;
        }

        .b-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
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

        .b-index .table-search {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            background-color: white;
            font-size: 13px;
            padding: 8px;
            border-radius: 6px;
            margin: 20px 0 16px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
			border: 1px solid #ccc;
        }

        .b-index .table-search div input[type="text"] {
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            border-radius: 6px;
            background-color: #f5f6f7;
			border: 1px solid #ccc;
        }

        .b-index .table-search div select {
            width: 100%;
            color: rgb(0 0 0 / 50%);
            padding: 8px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
			border: 1px solid #ccc;
		}

        .b-index .addUser {
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
        .content-profile {
            background-color: white;
            padding: 20px;
            border-radius: 6px;
            margin: 8px 0;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }

        .content-profile .section-right {
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 8px;

        }

        .content-profile .section-right div {
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

        .content-profile .section-right div:first-child {
            margin: 0;
        }

        .content-profile .section-right div:last-child {
            margin: 0;
        }

        .content-profile .section-left {
            width: 40%;
            padding: 20px;
            display: flex;
            justify-content: center;
            margin: auto;
        }

        .content-profile .section-left .content {
            display: flex;
            flex-direction: column;
        }

        .content-profile .section-left .content .content-avatar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content-profile .section-left .content .content-avatar img {
            width: 100px;
            background-color: aqua;
            padding: 0px;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .content-profile .section-left .content .content-edit.first {
            margin-bottom: 10px;
        }

        .content-profile .section-left .content .content-edit {
            padding: 8px;
            background-color: #2C74B3;
            border-radius: 6px;
            color: white;
            font-size: 13px;
            text-align: center;
            font-weight: 500;
        }

        /*-----*/
        .content-profile form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .content-profile .notes-register svg {
            margin-left: 10px;
        }

        .content-profile form div {
            display: flex;
            position: relative;
            flex-direction: column;
            /*margin-bottom: 20px;*/
        }

        .content-profile form div label {
            font-size: 13px;
            margin-bottom: 10px;
            font-weight: 500;
            color: #383838;
        }

        .content-profile form div input[type="text"] {
            width: 100%;
            color: rgb(0 0 0 / 50%);
            padding: 12px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 13px;
            font-weight: 500;
            border: 1px solid #ccc;
        }

        .content-profile form div textarea {
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            padding: 10px;
            font-size: 12px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }

        .content-profile form div input.error {
            border: 1px solid #E84545;
        }

        .content-profile form div input.error::placeholder {
            color: #E84545;
            opacity: 0.5;
        }

        .content-profile form div span {
            font-size: 13px;
            margin: 8px 0;
            color: #E84545;
        }

        .content-profile form div h4 {
            font-size: 14px;
            margin: 16px 0px 10px;
        }

        .content-profile form div ul {
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }

        .content-profile form div ul li {
            display: flex;
            align-items: center;
            color: #383838;
        }

        .content-profile form div ul li svg {
            margin-left: 6px;
        }

        .content-profile form button {
            padding: 10px;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 600;
            background-color: #2d5e99;
            color: white;
            grid-column: span 4;
        }

        .content-profile .select-country-wrapper {
            position: relative;

        }

        .content-profile select {
            color: rgb(0 0 0 / 50%);
            padding: 8px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #ccc;
        }

        .content-profile .select-country-box {
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

        .coverAdduser {
            background-color: black;
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0.6;
            z-index: 2;
        }

        .coverShowActivity {
            background-color: #f0f2fa;
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0.6;
            z-index: 2;
        }

        .b-index .content-profile.addUserContent {
            position: fixed;
            left: auto;
            top: 10%;
            z-index: 3;
            width: 700px;
        }

        .swal-footer {
            margin-top: 30px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .swal-footer .swal-button.swal-button--cancel {
            color: #555;
            background-color: #efefef;
            width: 100px;
            padding: 10px;
            font-size: 16px;
            border: 0;
            box-shadow: rgb(0 0 0 / 2%) 0px 0px 0px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 0px;
        }

        .swal-footer .swal-button-container .swal-button.swal-button--confirm.swal-button--danger {
            background-color: #e64942;
            width: 100px;
            padding: 10px;
            font-size: 16px;
        }

        .activity-show {
            padding: 8px;
            background-color: white;
            margin: 20px 0;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }

        .activity-show .activity-show-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }

        .activity-show .alert {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 0 20px;
        }

        .activity-show .alert p {
            margin: 15px 0 10px;
            color: gray;
            font-size: 20px;
        }

        .activity-show .activity-show-content > div:not(:last-child) {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        }

        .activity-show .activity-show-content .notes-activity {
            grid-column: span 2;
            margin-top: 20px;
        }

        .activity-show .activity-show-content .notes-activity label {
            margin-bottom: 20px;
            display: block;
        }

        .activity-show .activity-show-content .notes-activity .notes-activity-content {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .activity-show .activity-show-content .notes-activity textarea {
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

        .activity-show > div span {
            font-size: 14px;
        }

        .back {
            background-color: white;
            padding: 10px;
            width: 120px;
            text-align: center;
            font-size: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .back span {
            margin-right: 14px;
            color: gray;
            opacity: 0.6;
        }

        .null-of-search-container .null-of-search {
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

        .null-of-search-container .null-of-search svg {
            opacity: 0.5;
        }

        .null-of-search-container .null-of-search p {
            font-size: 22px;
            margin-right: 20px;
            color: #00000080;
        }

        .search-title-input {
            display: flex;
            align-items: center;
            position: relative;
        }

        .search-title-input > input {
            border-top-left-radius: 20px !important;
            border-bottom-left-radius: 20px !important;
        }

        .search-title-input > span {
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

        .search-title-input > span:hover {
            background-color: #81C6E8;
        }

        /*End Add User*/
        #add{
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
        }

        .table-search label {
            margin: 4px 8px 12px;
            display: block;
            font-size: 14px;
            opacity: 0.5;
        }

        .hide {
            display: none;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .status-is_read{
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px dashed #ccc;
            padding: 4px;
            background-color: #EEEEEE;
            border-radius: 6px;
            cursor: pointer;
        }
        .status-is_read label{
            cursor: pointer;
        }
    </style>
@endsection
<div>
    <section class="b-index" id="container">
        @if($indexPosts == true)
            <div wire:loading.class="loading-status" id="index">
                <div class="count-activity-container">
                    @can('createPost' , App\Models\User::class)
                    <span wire:click="addPost()" class="addUser">إضافة منشور جديد</span>
                    @endcan
                    <div class="count-activity">
                        <div>
                            <svg width="50px" height="50px" viewBox="-102.4 -102.4 716.80 716.80" xmlns="http://www.w3.org/2000/svg" fill="#a69696"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-102.4" y="-102.4" width="716.80" height="716.80" rx="358.4" fill="#ecf9ff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-n</title><path d="M368,415.86V72a24.07,24.07,0,0,0-24-24H72A24.07,24.07,0,0,0,48,72V424a40.12,40.12,0,0,0,40,40H416" style="fill:none;stroke:#918383;stroke-linejoin:round;stroke-width:32px"></path><path d="M416,464h0a48,48,0,0,1-48-48V128h72a24,24,0,0,1,24,24V416A48,48,0,0,1,416,464Z" style="fill:none;stroke:#918383;stroke-linejoin:round;stroke-width:32px"></path><line x1="240" y1="128" x2="304" y2="128" style="fill:none;stroke:#918383;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><line x1="240" y1="192" x2="304" y2="192" style="fill:none;stroke:#918383;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><line x1="112" y1="256" x2="304" y2="256" style="fill:none;stroke:#918383;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><line x1="112" y1="320" x2="304" y2="320" style="fill:none;stroke:#918383;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><line x1="112" y1="384" x2="304" y2="384" style="fill:none;stroke:#918383;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><path d="M176,208H112a16,16,0,0,1-16-16V128a16,16,0,0,1,16-16h64a16,16,0,0,1,16,16v64A16,16,0,0,1,176,208Z"></path></g></svg>                        </div>
                        <div>
                            <span>{{$postCount}}</span>
                            <span>عدد المنشورات</span>
                        </div>
                    </div>
                </div>
                @if($postsAll->count() >= 1)
                    <div class="table-search">
                        <div style="grid-column: span 3;">
                            <label>البحث عن منشور باستعدام العنوان</label>
                            <input wire:model="titleSearch" type="text" placeholder="البحث عن منشور باستعدام العنوان" style="width: 100%">
                        </div>
                        <div style="grid-column: span 2;">
                            <label>تعليقات بانتظار الموافقة</label>
                            <span style="margin: 0; background-color: #609966;width: 100%;text-align: center;" wire:click="indexComments()" class="addUser">التعليقات ({{$countComment}})</span>
                        </div>
                    </div>
                    <div class="b-container">
                        <table id="table">
                            <thead>
                            <tr>
                                <th>العنوان</th>
                                <th>الكاتب</th>
                                <th>النادي</th>
                                <th>التاريخ</th>
                                <th>التعليقات</th>
                                @canany(['updatePost', 'deletePost'], App\Models\User::class)
                                    <th>الخيارات</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @if($postsAll)
                                @foreach($postsAll as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->club->name}}</td>
                                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->diffForHumans()}}</td>
                                        <td>{{$post->comments->count()}}</td>
                                        @canany(['updatePost', 'deletePost'], App\Models\User::class)
                                        <td>
                                            @can('updatePost' , App\Models\User::class)
                                                <span wire:click="editPost({{$post->id}})">
                                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                            opacity=".4"
                                                            d="M19.993 18.953h-5.695c-.555 0-1.007.46-1.007 1.024 0 .565.452 1.023 1.007 1.023h5.695c.555 0 1.007-.458 1.007-1.023s-.452-1.024-1.007-1.024z"
                                                            fill="#fff"/><path
                                                            d="M10.309 6.904l5.396 4.36a.31.31 0 01.05.429L9.36 20.028a2.1 2.1 0 01-1.63.817l-3.492.043a.398.398 0 01-.392-.312l-.793-3.45c-.138-.635 0-1.29.402-1.795l6.429-8.376a.3.3 0 01.426-.051z"
                                                            fill="#000"/><path opacity=".4"
                                                                               d="M18.12 8.665l-1.04 1.299a.298.298 0 01-.423.048c-1.265-1.023-4.503-3.65-5.401-4.377a.308.308 0 01-.043-.432l1.003-1.246c.91-1.172 2.497-1.28 3.777-.258l1.471 1.172c.604.473 1.006 1.096 1.143 1.752.16.721-.01 1.43-.486 2.042z"
                                                                               fill="#000"/>
                                                    </svg>
                                                </span>
                                            @endcan
                                            @can('deletePost' , App\Models\User::class)
                                                <span onclick="areYouDelete('{{$post->id}}','{{$post->title}}')">
                                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                            opacity=".4"
                                                            d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z"
                                                            fill="#FD8A8A" fill-opacity=".5"/><path
                                                            d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z"
                                                            fill="#DC3535" fill-opacity=".5"/>
                                                    </svg>
                                                </span>
                                            @endcan
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            @else
                            @endif
                            </tbody>
                        </table>
                    </div>
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
                    @endif
                    <div class="i-pagination">
                        {{$postsAll->links('pagination.default')}}
                    </div>
                @else
                    <span style="text-align: center;width: 100%;display: block;font-size: 30px;color: gray;margin-top: 30px;">لا توجد منشورات.</span>
                @endif
            </div>
        @endif
        <div wire:loading="hello" class="loading">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
        </div>
        @if($addPost == true)
            <livewire:posts.add>
        @endif
        @if($editPost == true)
            <livewire:posts.edit>
        @endif
        @if($indexComments == true)
            <livewire:posts.comments.index>
        @endif

    </section>
    <script>
        function areYouDelete(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف المنشور  " + '[ ' + title + ' ]',
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
                @this.willDeletePost(id);
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
