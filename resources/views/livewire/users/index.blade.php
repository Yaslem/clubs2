@section('title', '- الطلاب')
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
            grid-template-columns: repeat(6, 1fr);
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
        .content-profile form {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
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

        .content-profile form div input:not([type="checkbox"]) {
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
            padding: 20px;
            font-size: 14px;
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
            padding: 10px;
            background-color: #EEEEEE;
            border-radius: 6px;
            height: 250px;
            overflow: auto;
            border: 1px solid #ccc;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .content-profile form div ul li {
            padding: 10px 10px 10px 4px;
            background-color: white;
            border-radius: 6px;
            font-size: 13px;
            justify-content: space-between;
            color: gray;
            display: flex;
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
            width: 100%;
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
        .content-profile > h4{
            font-size: 15px;
            color: gray;
            font-weight: normal;
            margin-bottom: 20px;
        }
        .content-profile > hr{
            margin: 30px 0;
            background-color: gray;
            width: 100%;
            height: 1px;
            border: 0;
            border-radius: 6px;
            opacity: 0.3;
        }
    </style>
@endsection
<div>
    <section class="b-index" id="container">
        @if($indexUsers == true)
            <div wire:loading.class="loading-status" id="index">
                @can('view', App\Models\User::class)
                    @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                        <div class="count-activity-container">
                            @can('create', App\Models\User::class)
                                <span wire:click="addUser()" class="addUser">إضافة طالب جديد</span>
                            @endcan
                            <div class="count-activity">
                                <div>
                                    <svg width="50px" height="50px" viewBox="-7.2 -7.2 38.40 38.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.2" y="-7.2" width="38.40" height="38.40" rx="19.2" fill="#ECF9FF" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z" stroke="#698269" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9999 10.0001C13.2868 10.0001 14.33 8.95687 14.33 7.67004C14.33 6.38322 13.2868 5.34009 11.9999 5.34009C10.7131 5.34009 9.66992 6.38322 9.66992 7.67004C9.66992 8.95687 10.7131 10.0001 11.9999 10.0001Z" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 15.6601C16 13.8601 14.21 12.4001 12 12.4001C9.79 12.4001 8 13.8601 8 15.6601" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </div>
                                <div>
                                    <span>{{$userCount}}</span>
                                    <span>عدد الطلاب</span>
                                </div>
                            </div>
                            <div class="count-activity">
                                <div>
                                    <svg fill="#A7727D" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-65.57 -65.57 349.72 349.72" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-65.57" y="-65.57" width="349.72" height="349.72" rx="174.86" fill="#F9F5E7" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.3114919999999999"></g><g id="SVGRepo_iconCarrier"> <path d="M160.798,64.543c-1.211-1.869-2.679-3.143-4.046-4.005c-0.007-2.32-0.16-5.601-0.712-9.385 c0.373-4.515,1.676-29.376-13.535-40.585C133.123,3.654,122.676,0,112.294,0c-8.438,0-16.474,2.398-22.629,6.752 c-5.543,3.922-8.596,8.188-10.212,11.191c-4.78,0.169-14.683,2.118-19.063,14.745c-4.144,11.944-0.798,19.323,1.663,22.743 c-0.161,1.978-0.219,3.717-0.223,5.106c-1.367,0.862-2.835,2.136-4.046,4.005c-2.74,4.229-3.206,9.9-1.386,16.859 c3.403,13.012,11.344,15.876,15.581,16.451c2.61,5.218,8.346,15.882,14.086,21.24c2.293,2.14,5.274,3.946,8.86,5.37 c4.577,1.816,9.411,2.737,14.366,2.737s9.789-0.921,14.366-2.737c3.586-1.424,6.567-3.23,8.86-5.37 c5.74-5.358,11.476-16.022,14.086-21.24c4.236-0.575,12.177-3.44,15.581-16.452C164.004,74.443,163.538,68.771,160.798,64.543z M152.509,78.871c-2.074,7.932-5.781,9.116-7.807,9.116c-0.144,0-0.252-0.008-0.316-0.013c-2.314-0.585-4.454,0.631-5.466,2.808 c-1.98,4.256-8.218,16.326-13.226,21.001c-1.377,1.285-3.304,2.425-5.726,3.386c-6.796,2.697-14.559,2.697-21.354,0 c-2.422-0.961-4.349-2.101-5.726-3.386c-5.008-4.675-11.246-16.745-13.226-21.001c-0.842-1.81-2.461-2.953-4.314-2.953 c-0.376,0-0.762,0.047-1.153,0.146c-0.064,0.006-0.172,0.013-0.315,0.013c-2.025,0-5.732-1.185-7.807-9.115 c-1.021-3.903-1.012-7.016,0.024-8.764c0.603-1.016,1.459-1.358,1.739-1.446c2.683-0.291,4.299-2.64,4.075-5.347 c-0.005-0.066-0.18-2.39,0.042-5.927c3.441-1.479,8.939-4.396,13.574-9.402c2.359-2.549,4.085-5.672,5.314-8.537 c3.351,2.736,8.095,5.951,14.372,8.729c10.751,4.758,32.237,7.021,41.307,7.794c0.375,4.317,0.156,7.263,0.15,7.333 c-0.236,2.715,1.383,5.066,4.075,5.357c0.28,0.088,1.136,0.431,1.739,1.446C153.521,71.856,153.53,74.969,152.509,78.871z M184.573,145.65l-43.715-17.485c-1.258-0.502-2.665-0.473-3.903,0.08c-1.236,0.555-2.195,1.588-2.655,2.862l-10.989,30.382 l-2.176-6.256l3.462-8.463c0.63-1.542,0.452-3.297-0.477-4.681c-0.929-1.383-2.485-2.213-4.151-2.213H98.614 c-1.666,0-3.223,0.83-4.151,2.213c-0.929,1.384-1.107,3.139-0.477,4.681l3.462,8.463l-2.176,6.256l-10.989-30.382 c-0.46-1.274-1.419-2.308-2.655-2.862c-1.238-0.554-2.646-0.583-3.903-0.08L34.009,145.65 c-13.424,5.369-22.098,18.182-22.098,32.641v35.291c0,2.762,2.239,5,5,5h184.76c2.761,0,5-2.238,5-5v-35.291 C206.671,163.832,197.997,151.02,184.573,145.65z M183.054,192.718c0,2.762-2.239,5-5,5h-33.57c-2.761,0-5-2.238-5-5v-15.59 c0-2.762,2.239-5,5-5h33.57c2.761,0,5,2.238,5,5V192.718z"></path> </g></svg>
                                </div>
                                <div>
                                    <span>{{$managerCount}}</span>
                                    <span>عدد المدراء</span>
                                </div>
                            </div>
                            <div class="count-activity">
                                <div>
                                    <svg fill="#3F979B" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-18 -18 96.00 96.00" xml:space="preserve" stroke="#3F979B"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-18" y="-18" width="96.00" height="96.00" rx="48" fill="#B9F3E4" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M52.29,44.29C52.109,44.479,52,44.74,52,45s0.1,0.52,0.29,0.71C52.479,45.89,52.74,46,53,46s0.52-0.11,0.71-0.29 C53.89,45.52,54,45.26,54,45s-0.11-0.521-0.29-0.71C53.34,43.93,52.67,43.92,52.29,44.29z"></path> <path d="M23.642,42.265L20,40.405v-0.387c1.628-0.889,2.773-2.353,3.412-4.365C24.381,35.14,25,34.14,25,33.018v-1 c0-0.927-0.431-1.786-1.151-2.35c-0.624-3.78-3.262-5.696-7.849-5.696c-0.217,0-0.429,0.009-0.636,0.025 c-1.206,0.099-2.364-0.161-3.224-0.741c-0.41-0.276-0.719-0.544-0.917-0.796c-0.444-0.563-1.368-0.587-1.841-0.059 c-0.227,0.254-0.333,0.596-0.294,0.938c0.042,0.372,0.105,0.808,0.2,1.285c0.193,0.975,0.193,0.975-0.078,1.558 c-0.102,0.221-0.228,0.49-0.376,0.853c-0.331,0.81-0.566,1.697-0.701,2.646C7.424,30.245,7,31.1,7,32.018v1 c0,1.122,0.619,2.122,1.588,2.636c0.639,2.013,1.784,3.477,3.412,4.365v0.376l-3.77,1.857C6.854,43.003,6,44.443,6,46.011v1.324 c0,0.803,0,2.683,10,2.683s10-1.88,10-2.683v-1.244C26,44.46,25.094,42.992,23.642,42.265z"></path> <path d="M31,29.018h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H31c-0.553,0-1,0.447-1,1S30.447,29.018,31,29.018z"></path> <path d="M32,44.018h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S32.553,44.018,32,44.018z"></path> <path d="M38,44.018h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S38.553,44.018,38,44.018z"></path> <path d="M43,44.018h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S43.553,44.018,43,44.018z"></path> <path d="M49,44.018h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S49.553,44.018,49,44.018z"></path> <path d="M53,33.018H31c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S53.553,33.018,53,33.018z"></path> <path d="M53,39.018H31c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S53.553,39.018,53,39.018z"></path> <path d="M55.322,14H37V6.313C37,5.037,35.963,4,34.687,4h-9.375C24.037,4,23,5.037,23,6.313V14H4.678C2.099,14,0,16.099,0,18.678 v32.645C0,53.901,2.099,56,4.678,56h50.645C57.901,56,60,53.901,60,51.322V18.678C60,16.099,57.901,14,55.322,14z M30,7 c2.206,0,4,1.794,4,4s-1.794,4-4,4s-4-1.794-4-4S27.794,7,30,7z M58,51.322C58,52.799,56.799,54,55.322,54H4.678 C3.201,54,2,52.799,2,51.322V18.678C2,17.201,3.201,16,4.678,16H23v3.688C23,20.963,24.037,22,25.312,22h9.375 C35.963,22,37,20.963,37,19.688V16h18.322C56.799,16,58,17.201,58,18.678V51.322z"></path> </g> </g></svg>
                                </div>
                                <div>
                                    <span>{{$supervisorCount}}</span>
                                    <span>عدد المنسقين</span>
                                </div>
                            </div>
                        </div>
                        <div class="table-search">
                            <div>
                                <label>البحث</label>
                                <input wire:model="nameSearch" type="text" placeholder="البحث عن مستخدمين بلاسم أو الرقم الجامعي" @if($nameIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                            </div>
                            <div>
                                <label>نوع الحساب</label>
                                <select wire:model="roleSearch" @if($roleIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    <option value="رئيس">رئيس</option>
                                    <option value="منسق">منسق</option>
                                    <option value="مدير">مدير</option>
                                    <option value="مسؤول">مسؤول</option>
                                    <option value="طالب">طالب</option>
                                </select>
                            </div>
                            <div>
                                <label>الكليات</label>
                                <select wire:model="college_idSearch" id="locations" @if($college_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($colleges as $college)
                                        <option value="{{$college->id}}">{{$college->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>المستويات</label>
                                <select wire:model="level_idSearch" @if($level_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($levels as $level)
                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>الجنسيات</label>
                                <select wire:model="country_idSearch" @if($country_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>المحذوفون</label>
                                <div wire:click="onlyTrashed()"  class="onlyTrashed">
                                    <span >سلة المهملات</span>
                                    <span>({{$countTrashed}})</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="count-activity-container">
                        @can('create', App\Models\User::class)
                            <span wire:click="addUser()" class="addUser">إضافة طالب جديد</span>
                        @endcan
                            <div class="count-activity">
                                <div>
                                    <svg width="50px" height="50px" viewBox="-7.2 -7.2 38.40 38.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.2" y="-7.2" width="38.40" height="38.40" rx="19.2" fill="#ECF9FF" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z" stroke="#698269" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9999 10.0001C13.2868 10.0001 14.33 8.95687 14.33 7.67004C14.33 6.38322 13.2868 5.34009 11.9999 5.34009C10.7131 5.34009 9.66992 6.38322 9.66992 7.67004C9.66992 8.95687 10.7131 10.0001 11.9999 10.0001Z" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 15.6601C16 13.8601 14.21 12.4001 12 12.4001C9.79 12.4001 8 13.8601 8 15.6601" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </div>
                                <div>
                                    <span>{{$userCount}}</span>
                                    <span>عدد الطلاب</span>
                                </div>
                            </div>
                        </div>
                        <div class="table-search">
                            <div style="grid-column: span 2">
                                <label>البحث</label>
                                <input wire:model="nameSearch" type="text" placeholder="البحث عن مستخدمين بلاسم أو الرقم الجامعي" @if($nameIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                            </div>
                            <div>
                                <label>نوع الحساب</label>
                                <select wire:model="roleSearch" @if($roleIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    <option value="مسؤول">مسؤول</option>
                                    <option value="طالب">طالب</option>
                                </select>
                            </div>
                            <div>
                                <label>الكليات</label>
                                <select wire:model="college_idSearch" id="locations" @if($college_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($colleges as $college)
                                        <option value="{{$college->id}}">{{$college->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>المستويات</label>
                                <select wire:model="level_idSearch" @if($level_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($levels as $level)
                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>الجنسيات</label>
                                <select wire:model="country_idSearch" @if($country_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                    <option value="">الكل</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
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
                                <th>الصورة</th>
                                <th>الرقم الجامعي</th>
                                <th>النادي</th>
                                <th>نوع المستخدم</th>
                                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                <th>عدد الصلاحيات</th>
                                @endif
                                <th>خيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
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
                            " src="{{asset('uploads/files/'.$user->avatar)}}">
                                        </td>
                                        <td>{{$user->username}}</td>
                                        <td>@if($user->club_id) {{$user->ClubStatus->name}} @else --@endif</td>
                                        <td>{{$user->role}}</td>
                                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                        <td>{{$user->permissions->count()}}</td>
                                        @endif
                                        <td>
                                            @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                            <span wire:click="permission({{$user->id}})">
                                                <svg width="24px" height="24px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#f1f6f5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 10V18C3 19.1046 3.89543 20 5 20H10M3 10V6C3 4.89543 3.89543 4 5 4H19C20.1046 4 21 4.89543 21 6V10M3 10H21M21 10V12" stroke="#F48484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 17.4286C14 16.9552 14.3838 16.5714 14.8571 16.5714H19.1429C19.6162 16.5714 20 16.9552 20 17.4286V20.1429C20 20.6162 19.6162 21 19.1429 21H14.8571C14.3838 21 14 20.6162 14 20.1429V17.4286Z" stroke="#F48484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.7143 15.2857C15.7143 14.5756 16.2899 14 17 14C17.7101 14 18.2857 14.5756 18.2857 15.2857V16.5714H15.7143V15.2857Z" stroke="#F48484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <circle cx="6" cy="7" r="1" fill="#F48484"></circle> <circle cx="9" cy="7" r="1" fill="#F48484"></circle> </g></svg>
                                            </span>
                                            @endif
                                            @can('update' , App\Models\User::class)
                                            <span wire:click="editUser({{$user->id}})">
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
                                            <span wire:click="ShowUser({{$user->id}})">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                    opacity=".4" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.737 6.046c1.707 1.318 3.16 3.249 4.205 5.663a.729.729 0 010 .572C19.854 17.111 16.137 20 12 20h-.01c-4.127 0-7.844-2.89-9.931-7.719a.728.728 0 010-.572C4.146 6.88 7.863 4 11.99 4H12c2.068 0 4.03.718 5.737 2.046zM8.097 12c0 2.133 1.747 3.87 3.903 3.87 2.146 0 3.893-1.737 3.893-3.87A3.888 3.888 0 0012 8.121c-2.156 0-3.902 1.736-3.902 3.879z"
                                                    fill="#000" fill-opacity=".5"/><path
                                                    d="M14.43 11.997a2.428 2.428 0 01-2.428 2.414c-1.347 0-2.44-1.086-2.44-2.414 0-.165.02-.32.05-.474h.048a1.997 1.997 0 002-1.921c.107-.019.225-.03.342-.03a2.43 2.43 0 012.429 2.425z"
                                                    fill="#000" fill-opacity=".5"/>
                                            </svg>
                                        </span>
                                        @can('delete' , App\Models\User::class)
                                            <span onclick="areYouDelete('{{$user->id}}','{{$user->name}}')">
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
                        {{$users->links('pagination.default')}}
                    </div>
                @endcan
            </div>
        @endif
        <div wire:loading="hello" class="loading">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
        </div>
        @if($ShowUser == true)
            <livewire:users.show>
        @endif
        @if($addUser == true)
            <livewire:users.add>
        @endif
        @if($editUser == true)
            <livewire:users.edit>
        @endif
        @if($onlyTrashed == true)
            <livewire:users.only-trashed>
        @endif
        @if($permission == true)
            <livewire:users.permissions>
        @endif
    </section>
    <script>
        function areYouDelete(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف الطالب  " + '[ ' + title + ' ]',
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
                @this.willDeleteUser(id);
                }
            });
        }

        function restoreAllUsers(){
            swal({
                title: 'هل أنت متأكد؟',
                text: 'هل أنت متأكد من أنك تريد استرجاع جميع المحذوفين',
                icon: 'warning',
                buttons: {
                    cancel: {
                        text: 'إلغاء',
                        value: null,
                        visible: true,
                        className: '',
                        closeModal: true,
                    },
                    confirm: {
                        text: 'موافق',
                        value: true,
                        visible: true,
                        className: '',
                        closeModal: true
                    },
                },
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                @this.restoreAll();
                }
            });
        }

        function forceDeleteAll(){
            swal({
                title: 'هل أنت متأكد؟',
                text: 'هل أنت متأكد من أنك تريد حذف الجميع؟',
                icon: 'warning',
                buttons: {
                    cancel: {
                        text: 'إلغاء',
                        value: null,
                        visible: true,
                        className: '',
                        closeModal: true,
                    },
                    confirm: {
                        text: 'موافق',
                        value: true,
                        visible: true,
                        className: '',
                        closeModal: true
                    },
                },
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                @this.forceDeleteAll();
                }
            });
        }

        function areYouDeleteAward(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف جائزة  " + '[ ' + title + ' ]',
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
                @this.willDeleteAward(id);
                }
            });
        }

        function areYouDeleteCertificate(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف شهادة  " + '[ ' + title + ' ]',
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
                @this.willareYouDeleteCertificate(id);
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
