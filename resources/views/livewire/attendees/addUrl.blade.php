@section('title', '- التحضير')
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
            width: 100%;
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
            height: 40px;
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
            display: grid;
            grid-template-columns: repeat(3, 1fr);
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

        .content-profile form div p{
            font-size: 13px;
            margin: 8px 0;
        }

        .content-profile form div h4 {
            font-size: 14px;
            margin: 16px 0px 10px;
        }

        .content-profile form div ul {
            display: flex;
            flex-direction: column;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            padding: 8px;
            background-color: #F5F5F5;
        }

        .content-profile form div ul li {
            display: flex;
            align-items: center;
            justify-content: space-between;
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
        .b-index-container{
            background-color: white;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .b-index-content{
            padding: 20px;
        }
        .b-index-content div h3{
            font-size: 18px;
            margin-right: 10px;
            width: 100%;
            font-weight: 500;
            overflow: hidden;
            text-align: justify;
            line-height: 1.5;
        }
        .b-index-content div{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 8px 0;
        }
        .b-index-content div:last-child{
            margin: 20px 0 0;
        }
        .b-index-content div:first-child{
            margin: 0px 0 20px;
            width: 100%;
            height: 100px;
            overflow: auto;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 10px;
        }
        .b-index-content div ul{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .b-index-content div ul li{
            display: flex;
            align-items: center;
            font-size: 13px;
            font-weight: 500;
        }
        .b-index-content div ul li span{
            margin-right: 10px;
        }

        .b-index-content div > span,
        .b-index-content div > a{
            width: 100%;
            padding: 13px 10px;
            border-radius: 6px;
            font-size: 16px;
            color: white;
            text-align: center;
        }
        .export_btn{
            background-color: #2C74B3;
            padding: 10px;
            border-radius: 6px;
            font-size: 17px;
            font-weight: 500;
            color: white;
            margin: 10px 0;
            width: fit-content;
            display: block;
            cursor: pointer;
        }
    </style>
@endsection
<div>
    <div class="b-index" wire:loading.class="loading-status">
        <a class="cancel" href="{{route('attends.index')}}">رجوع</a>
        <div class="content-profile">
            <form wire:submit.prevent="saveAttend()">
                <div>
                    <label>ما مدى استفادتك من الفعالية</label>
                    <ul>
                        <li>
                            <p>1</p>
                            <input wire:model.debounce.10800000ms="benefit" name="benefit" value="1" type="radio">
                        </li>
                        <li>
                            <p>2</p>
                            <input wire:model.debounce.10800000ms="benefit" name="benefit" value="2" type="radio">
                        </li>
                        <li>
                            <p>3</p>
                            <input wire:model.debounce.10800000ms="benefit" name="benefit" value="3" type="radio">
                        </li>
                        <li>
                            <p>4</p>
                            <input wire:model.debounce.10800000ms="benefit" name="benefit" value="4" type="radio">
                        </li>
                        <li>
                            <p>5</p>
                            <input wire:model.debounce.10800000ms="benefit" name="benefit" value="5" type="radio">
                        </li>
                    </ul>
                    @error('benefit') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>ما تقييمك لمقدم الفعالية</label>
                    <ul>
                        <li>
                            <p>1</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" value="1" type="radio">
                        </li>
                        <li>
                            <p>2</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" value="2" type="radio">
                        </li>
                        <li>
                            <p>3</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" value="3" type="radio">
                        </li>
                        <li>
                            <p>4</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" value="4" type="radio">
                        </li>
                        <li>
                            <p>5</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" value="5" type="radio">
                        </li>
                    </ul>
                    @error('lecturer') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>كم حضرت من الدورة</label>
                    <ul style="height: 100%;">
                        <li>
                            <p>جميعها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" value="جميعها" type="radio">
                        </li>
                        <li>
                            <p>أغلبها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" value="أغلبها" type="radio">
                        </li>
                        <li>
                            <p>بعضها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" value="بعضها" type="radio">
                        </li>
                        <li>
                            <p>لا شيء منها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" value="لا شيء منها" type="radio">
                        </li>
                    </ul>
                    @error('attended') <span>{{$message}}</span> @enderror
                </div>
                <div style="grid-column: span 2;">
                    <label>اذكر فائدة استفدتها من الفعالية</label>
                    <textarea wire:model.debounce.10800000ms="utility"></textarea>
                    @error('utility') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>ما هي الاقتراحات التي تقدمها لإدارة النادي</label>
                    <textarea wire:model.debounce.10800000ms="suggestions"></textarea>
                    @error('suggestions') <span>{{$message}}</span> @enderror
                </div>

                <button type="submit">إرسال</button>
            </form>
        </div>
    </div>
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
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
    @if (session()->has('error'))
        <script>
            swal({
                title: 'خطأ!',
                text: '{{ session('error') }}',
                icon: "error",
                button: false,
                timer: 2000,
            });
        </script>
    @endif
</div>
