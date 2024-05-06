@section('title', '- نظام تواصل')
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
            height: 40px;
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
            text-align: center;
            margin: 10px 0;
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
        .content-profile .form,
        .content-profile form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .content-profile .notes-register svg {
            margin-left: 10px;
        }

        .content-profile .form div,
        .content-profile form div {
            display: flex;
            position: relative;
            flex-direction: column;
            /*margin-bottom: 20px;*/
        }

        .content-profile .form div label,
        .content-profile form div label {
            font-size: 13px;
            margin-bottom: 10px;
            font-weight: 500;
            color: #383838;
        }

        .content-profile .form div input[type="text"],
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

        .content-profile .form div textarea,
        .content-profile form div textarea {
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            padding: 10px;
            font-size: 12px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }

        .content-profile .form div input.error,
        .content-profile form div input.error {
            border: 1px solid #E84545;
        }

        .content-profile .form div input.error::placeholder,
        .content-profile form div input.error::placeholder {
            color: #E84545;
            opacity: 0.5;
        }

        .content-profile .form div span,
        .content-profile form div span {
            font-size: 13px;
            margin: 8px 0;
            color: #E84545;
        }

        .content-profile .form div h4,
        .content-profile form div h4 {
            font-size: 14px;
            margin: 16px 0px 10px;
        }

        .content-profile .form div ul,
        .content-profile form div ul {
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }

        .content-profile .form div ul li,
        .content-profile form div ul li {
            display: flex;
            align-items: center;
            color: #383838;
        }

        .content-profile .form div ul li svg,
        .content-profile form div ul li svg {
            margin-left: 6px;
        }

        .content-profile .form button,
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
        .onlyTrashed{
            justify-content: center;
            padding: 10px;
            border-radius: 6px;
            font-size: 15px;
            display: flex;
            color: white;
            text-align: center;
            margin: 0;
            background-color: #F16767;
            cursor: pointer;
            height: 40px;
        }
        .status-order{
            border: 1px dashed #ccc;
            padding: 6px;
            background-color: #EEEEEE;
            border-radius: 6px;
            color: gray;
            cursor: pointer;
            text-align: center;
        }
        .comment-container{
            background-color: #f9fbfc;
            border-radius: 6px;
            border: 1px solid #ededed;
        }
        .comment-container p{
            width: 100%;
            padding: 10px;
            line-height: 2;
            color: gray;
        }
        .comment-container > div{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            font-size: 13px;
        }
        .comment-container > div:first-of-type{
            margin: 0 0 10px;
            display: flex;
            flex-direction: revert;
            border-bottom: 1px dashed#ccc;
        }
        .comment-container > div > div:first-of-type{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .comment-container > div > div:first-of-type img{
            width: 40px;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 50%;
        }
        .comment-container > div > div:first-of-type span{
            margin-right: 10px;
        }
        .comment-container > div > div:last-of-type div{
            display: flex;
            justify-content: space-around;
            margin-bottom: 8px;
        }
        .comment-container > div > div:last-of-type span{
            color: gray;
            font-size: 12px;
        }
    </style>
@endsection
<div>
    <section class="b-index" id="container">
        @if($indexOrders == true)
            <div wire:loading.class="loading-status" id="index">
                        <div class="count-activity-container">
                                <span wire:click="addOrder()" class="addUser">إضافة طلب جديد</span>
                            <div class="count-activity">
                                <div>
                                    <svg width="50px" height="50px" viewBox="-102.4 -102.4 1228.80 1228.80" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#609966" d="M512 64a448 448 0 1 1 0 896 448 448 0 0 1 0-896zm-55.808 536.384-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z"></path></g></svg>                                </div>
                                <div>
                                    <span>{{$Completed}}</span>
                                    <span>الطلبات المكتملة</span>
                                </div>
                            </div>
                            <div class="count-activity">
                                <div>
                                    <svg width="50px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_shifts_pending_24_filled</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_shifts_pending_24_filled" fill="#F16767" fill-rule="nonzero"> <path d="M6.5,12 C9.53756612,12 12,14.4624339 12,17.5 C12,20.5375661 9.53756612,23 6.5,23 C3.46243388,23 1,20.5375661 1,17.5 C1,14.4624339 3.46243388,12 6.5,12 Z M6.5,19.88 C6.15509206,19.88 5.87548893,20.1596031 5.87548893,20.5045111 C5.87548893,20.849419 6.15509206,21.1290221 6.5,21.1290221 C6.84490794,21.1290221 7.12451107,20.849419 7.12451107,20.5045111 C7.12451107,20.1596031 6.84490794,19.88 6.5,19.88 Z M17.75,3 C19.5449254,3 21,4.45507456 21,6.25 L21,17.75 C21,19.5449254 19.5449254,21 17.75,21 L11.9774077,21.0012092 C12.6247042,19.9906579 13,18.7891565 13,17.5 C13,15.9846422 12.4814474,14.5903989 11.6108398,13.4871142 L11.6794988,13.4967299 L11.75,13.5 L16.2482627,13.5 L16.3500333,13.4931534 C16.7161089,13.443491 16.9982627,13.1296958 16.9982627,12.75 C16.9982627,12.3703042 16.7161089,12.056509 16.3500333,12.0068466 L16.2482627,12 L12.5,12 L12.5,6.75 L12.4931534,6.64822944 C12.443491,6.28215388 12.1296958,6 11.75,6 C11.3703042,6 11.056509,6.28215388 11.0068466,6.64822944 L11,6.75 L11,12.75 L11.0048315,12.8142135 C9.83648038,11.690706 8.24890171,11 6.5,11 C5.21084353,11 4.00934208,11.3752958 2.99879075,12.0225923 L3,6.25 C3,4.45507456 4.45507456,3 6.25,3 L17.75,3 Z M6.5000438,14.0030924 C5.45209485,14.0030924 4.63575024,14.8204841 4.64666418,15.9573825 C4.64931495,16.2335122 4.87531114,16.4552106 5.15144079,16.4525598 C5.42757044,16.449909 5.64926888,16.2239129 5.6466181,15.9477832 C5.64105975,15.3687734 6.00627225,15.0030924 6.5000438,15.0030924 C6.97241724,15.0030924 7.35344646,15.3949794 7.35344646,15.9525829 C7.35344646,16.1768805 7.27815856,16.343747 7.03551615,16.6299729 L6.93650069,16.7432479 L6.67112833,17.0333231 C6.18682267,17.5748716 6.0000438,17.9254825 6.0000438,18.5006005 C6.0000438,18.7767429 6.22390142,19.0006005 6.5000438,19.0006005 C6.77618617,19.0006005 7.0000438,18.7767429 7.0000438,18.5006005 C7.0000438,18.268353 7.07645293,18.0980788 7.32379001,17.8062547 L7.42473827,17.6907646 L7.69048308,17.400276 C8.16815154,16.8660369 8.35344646,16.5185919 8.35344646,15.9525829 C8.35344646,14.8488849 7.5310877,14.0030924 6.5000438,14.0030924 Z" id="🎨-Color"> </path> </g> </g> </g></svg>                                </div>
                                <div>
                                    <span>{{$pending}}</span>
                                    <span>الطلبات تحت التنفيذ</span>
                                </div>
                            </div>
                            <div class="count-activity">
                                <div>
                                    <svg width="50px" height="50px" viewBox="-2.64 -2.64 29.28 29.28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.19 6H6.79C6.53 6 6.28 6.01 6.04 6.04C3.35 6.27 2 7.86 2 10.79V14.79C2 18.79 3.6 19.58 6.79 19.58H7.19C7.41 19.58 7.7 19.73 7.83 19.9L9.03 21.5C9.56 22.21 10.42 22.21 10.95 21.5L12.15 19.9C12.3 19.7 12.54 19.58 12.79 19.58H13.19C16.12 19.58 17.71 18.24 17.94 15.54C17.97 15.3 17.98 15.05 17.98 14.79V10.79C17.98 7.6 16.38 6 13.19 6ZM6.5 14C5.94 14 5.5 13.55 5.5 13C5.5 12.45 5.95 12 6.5 12C7.05 12 7.5 12.45 7.5 13C7.5 13.55 7.05 14 6.5 14ZM9.99 14C9.43 14 8.99 13.55 8.99 13C8.99 12.45 9.44 12 9.99 12C10.54 12 10.99 12.45 10.99 13C10.99 13.55 10.55 14 9.99 14ZM13.49 14C12.93 14 12.49 13.55 12.49 13C12.49 12.45 12.94 12 13.49 12C14.04 12 14.49 12.45 14.49 13C14.49 13.55 14.04 14 13.49 14Z" fill="#2C74B3"></path> <path d="M21.9802 6.79V10.79C21.9802 12.79 21.3602 14.15 20.1202 14.9C19.8202 15.08 19.4702 14.84 19.4702 14.49L19.4802 10.79C19.4802 6.79 17.1902 4.5 13.1902 4.5L7.10025 4.51C6.75025 4.51 6.51025 4.16 6.69025 3.86C7.44025 2.62 8.80025 2 10.7902 2H17.1902C20.3802 2 21.9802 3.6 21.9802 6.79Z" fill="#2C74B3"></path> </g></svg>                                </div>
                                <div>
                                    <span>{{$allOrders}}</span>
                                    <span>إجمالي الطلبات</span>
                                </div>
                            </div>
                        </div>
                        <div class="table-search">
                            <div>
                                <label>البحث</label>
                                <input wire:model="titleSearch" type="text" placeholder="البحث عن عناوين الطلبات" @if($isTitleNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                            </div>
                            <div>
                                <label>النادي</label>
                                <select wire:model="clubSearch" @if($isClubNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($clubs as $club)
                                    <option value={{$club->id}}>{{$club->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>النوع</label>
                                <select wire:model="categorySearch" @if($isCategoryNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($categories as $category)
                                        <option value={{$category->id}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>الحالة</label>
                                <select wire:model="statusSearch" @if($isStatusNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    <option value="مكتملة">مكتملة</option>
                                    <option value="تحت التنفيذ">تحت التنفيذ</option>
									<option value="ملغاة">ملغاة</option>
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
                            <table id="table">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>الرقم الجامعي</th>
                                    <th>النوع</th>
                                    <th>الجهة</th>
                                    <th>الحالة</th>
                                    <th>خيارات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders->reverse() as $order)
                                    <tr>
                                        <td>{{$order->user->name}}</td>
                                        <td>{{$order->user->username}}</td>
                                        <td>{{$order->category->name}}</td>
                                        <td>{{$order->club->name}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>
                                            <span wire:click="show({{$order->id}})">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                    opacity=".4" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.737 6.046c1.707 1.318 3.16 3.249 4.205 5.663a.729.729 0 010 .572C19.854 17.111 16.137 20 12 20h-.01c-4.127 0-7.844-2.89-9.931-7.719a.728.728 0 010-.572C4.146 6.88 7.863 4 11.99 4H12c2.068 0 4.03.718 5.737 2.046zM8.097 12c0 2.133 1.747 3.87 3.903 3.87 2.146 0 3.893-1.737 3.893-3.87A3.888 3.888 0 0012 8.121c-2.156 0-3.902 1.736-3.902 3.879z"
                                                    fill="#000" fill-opacity=".5"/><path
                                                    d="M14.43 11.997a2.428 2.428 0 01-2.428 2.414c-1.347 0-2.44-1.086-2.44-2.414 0-.165.02-.32.05-.474h.048a1.997 1.997 0 002-1.921c.107-.019.225-.03.342-.03a2.43 2.43 0 012.429 2.425z"
                                                    fill="#000" fill-opacity=".5"/>
                                            </svg>
                                        </span>
                                        @can('deleteOrders' , App\Models\User::class)
                                            <span onclick="areYouDelete('{{$order->id}}', '{{$order->title}}')">
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
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="i-pagination">
                        {{$orders->links('pagination.default')}}
                    </div>
            </div>
        @endif
        <div wire:loading="hello" class="loading">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
        </div>
        @if($ShowOrder == true)
            <livewire:contacts.show>
        @endif
        @if($addOrder == true)
            <livewire:contacts.add>
        @endif
        @if($editOrder == true)
            <livewire:contacts.edit>
        @endif
    </section>
    <script>
        function areYouDelete(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف الطلب  " + '[ ' + title + ' ]',
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
                @this.areYouDelete(id);
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

