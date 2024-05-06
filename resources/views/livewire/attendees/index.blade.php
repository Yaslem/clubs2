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
    <section class="b-index" id="container">
        @if($indexAttendes == true)
            <div class="yourClubs">
                <span>التحضير</span>
                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق' || Auth::user()->role === 'مدير')
                    <span wire:click="showExport()" class="export_btn">تصدير</span>
                @endif
                <span wire:click="showAttende({{Auth::user()->id}})">التقييمات</span>
            </div>
            <div wire:loading.class="loading-status" id="index">
                @if($reservations->count() > 0)
                    <div class="index-attendees">
                        @foreach($reservations as $reservation)
                            <div class="b-index-container">
                                <div class="b-index-content">
                                    <div>
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                            <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                                        </svg>
                                        <h3>{{$reservation->title}}</h3>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>
                                                <svg fill="#86C8BC" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 343.501 343.501" xml:space="preserve">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                                                    <g id="SVGRepo_iconCarrier"> <path d="M64.552,332.042c-4.418,0-8-3.582-8-8v-29.46H44.534c-4.418,0-8-3.582-8-8s3.582-8,8-8h19.842 c0.117-0.002,0.235-0.002,0.353,0h261.189c4.418,0,8,3.582,8,8s-3.582,8-8,8H72.552v29.46 C72.552,328.46,68.971,332.042,64.552,332.042z M7.999,294.587c-1.001,0-2.02-0.189-3.005-0.589 c-4.094-1.661-6.066-6.327-4.405-10.421l21.742-53.585c9.604-23.664,26.819-55.124,65.279-55.124h28.838 c20.719,0,37.778,9.221,50.701,27.406c0.344,0.465,3.79,4.936,6.83,8.881c2.19,2.843,4.543,5.895,6.5,8.44 c2.693,3.503,2.036,8.525-1.467,11.219c-3.503,2.694-8.525,2.036-11.218-1.467c-1.954-2.541-4.302-5.589-6.489-8.427 c-5.854-7.598-6.933-9.003-7.213-9.399c-6.237-8.777-13.234-14.635-21.414-17.804l-24.187,33.144 c-1.506,2.063-3.908,3.284-6.462,3.284s-4.956-1.221-6.462-3.284l-24.187-33.144c-14.029,5.446-24.739,18.92-34.224,42.291 l-21.741,53.584C14.154,292.702,11.16,294.587,7.999,294.587z M89.109,190.869l12.921,17.706l12.921-17.706H89.109z M225.597,263.385h-87.934c-4.418,0-8-3.582-8-8s3.582-8,8-8h87.934c4.418,0,8,3.582,8,8S230.016,263.385,225.597,263.385z M335.502,196.862c-3.161,0-6.155-1.885-7.416-4.994l-17.976-44.304c-7.448-18.352-15.785-29.147-26.546-33.775l-19.345,26.509 c-1.506,2.063-3.907,3.284-6.462,3.284c-2.555,0-4.956-1.221-6.462-3.284l-19.353-26.518c-6.102,2.61-11.376,7.17-16.115,13.838 c-0.486,0.683-13.385,17.904-17.485,23.241c-2.692,3.504-7.714,4.161-11.218,1.47c-3.503-2.692-4.161-7.715-1.469-11.218 c4.09-5.323,16.519-21.926,17.173-22.82c10.917-15.363,25.4-23.184,43.006-23.184h23.844c32.636,0,47.167,26.504,55.259,46.44 l17.976,44.305c1.661,4.094-0.311,8.76-4.405,10.421C337.522,196.672,336.503,196.862,335.502,196.862z M249.799,111.107 l7.958,10.903l7.957-10.903H249.799z M297.508,180.639H177.147c-4.418,0-8-3.582-8-8s3.582-8,8-8h120.361c4.418,0,8,3.582,8,8 S301.926,180.639,297.508,180.639z M102.03,160.667c-23.977,0-43.483-19.507-43.483-43.484c0-19.743,13.228-36.456,31.285-41.742 c0.093-0.03,0.188-0.059,0.283-0.086c2.178-0.619,4.402-1.066,6.651-1.338c1.402-0.17,2.827-0.273,4.267-0.306 c0.017-0.011,0.03-0.001,0.046-0.002c0.015-0.001,0.031,0,0.045-0.001c0.013,0,0.027,0,0.04,0c0.011-0.001,0.021-0.001,0.035-0.001 c0.256-0.005,0.518-0.012,0.769-0.008c0.016-0.001,0.034-0.001,0.054,0c0.004,0,0.009,0,0.009,0c0.011,0,0.019-0.001,0.031,0 c0.022,0,0.043,0,0.065,0h0c0.012,0,0.024,0.001,0.034,0c0.011,0,0.022,0,0.034,0c0.012,0,0.027,0,0.036,0 c0.012,0,0.026,0.001,0.038,0.001c0.013,0,0.027,0,0.04,0c0.001,0,0.004,0,0.005,0c22.137,0.14,40.463,16.636,42.925,38.576 c0.182,1.61,0.275,3.248,0.275,4.906C145.512,141.161,126.006,160.667,102.03,160.667z M86.71,94.375 c-7.333,4.941-12.164,13.32-12.164,22.808c0,15.155,12.329,27.484,27.483,27.484c13.166,0,24.198-9.305,26.867-21.685 c-0.429,0.013-0.859,0.019-1.289,0.019C108.849,123.001,92.781,111.254,86.71,94.375z M102.053,89.7 c4.037,10.228,13.96,17.281,25.504,17.302c-4.022-10.049-13.814-17.189-25.256-17.301c-0.013,0-0.027,0-0.04,0 c-0.012,0.001-0.025,0.001-0.039,0c-0.012-0.001-0.026-0.002-0.04-0.001c-0.013,0-0.026,0-0.039,0c-0.014,0-0.027,0-0.04,0 C102.087,89.699,102.071,89.699,102.053,89.7z M257.757,86.136c-20.588,0-37.338-16.75-37.338-37.338 c0-20.589,16.75-37.34,37.338-37.34c20.589,0,37.339,16.751,37.339,37.34C295.096,69.386,278.345,86.136,257.757,86.136z M257.757,27.458c-11.766,0-21.338,9.573-21.338,21.34c0,11.766,9.572,21.338,21.338,21.338c11.767,0,21.339-9.572,21.339-21.338 C279.096,37.032,269.523,27.458,257.757,27.458z"/> </g>
                                                </svg>
                                                <span>{{$reservation->club->name}}</span>
                                            </li>
                                            <li>
                                                <span>العدد: {{$reservation->attendees->count()}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>
                                                <svg fill="#86C8BC" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 365.702 365.702" xml:space="preserve" stroke="#86C8BC">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                                                    <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M99.415,163.15c-20.713,0-37.564-16.851-37.564-37.564c0-20.713,16.852-37.564,37.564-37.564 c20.713,0,37.564,16.852,37.564,37.564C136.979,146.299,120.128,163.15,99.415,163.15z M99.415,103.021 c-12.442,0-22.564,10.122-22.564,22.564s10.122,22.564,22.564,22.564c12.442,0,22.564-10.122,22.564-22.564 S111.857,103.021,99.415,103.021z"/> </g> <path d="M358.202,268.162h-9.804V53.142c0-4.143-3.358-7.5-7.5-7.5H24.803c-4.142,0-7.5,3.357-7.5,7.5v215.02H7.5 c-4.143,0-7.5,3.358-7.5,7.5v21.402c0,4.143,3.357,7.5,7.5,7.5h37.323v7.996c0,4.143,3.357,7.5,7.5,7.5h91.805 c4.143,0,7.5-3.357,7.5-7.5v-7.996h206.574c4.143,0,7.5-3.357,7.5-7.5v-21.402C365.702,271.519,362.345,268.162,358.202,268.162z M44.823,289.564H15v-6.402h29.823V289.564z M44.823,188.771v79.391H32.303V60.642h301.096v207.52H151.628v-38.525l28.995,25.609 c2.513,1.964,4.692,1.893,5.113,1.878c2.035-0.036,3.968-0.897,5.354-2.387l59.896-64.362c3.429-3.647,5.194-8.393,4.972-13.364 c-0.182-4.068-1.703-7.869-4.304-10.968l43.962-47.176c2.823-3.03,2.656-7.776-0.374-10.601c-3.03-2.823-7.776-2.654-10.601,0.374 l-43.914,47.125c-3.11-2.292-6.887-3.526-10.848-3.438c-4.962,0.081-9.763,2.21-13.154,5.821l-32.974,35.336 c0,0-25.232-23.617-25.519-23.817c-4.262-3.347-9.564-5.184-14.996-5.184H69.108C55.718,164.484,44.823,175.379,44.823,188.771z M239.604,175.096c0.05,0.047,0.101,0.093,0.151,0.139c0.954,0.849,1.189,1.798,1.218,2.445c0.04,0.891-0.285,1.75-0.954,2.461 l-5.848,6.314l-12.493-11.711l5.964-6.308c0.889-0.946,1.938-1.103,2.483-1.111c0.454,0.002,1.341,0.082,2.027,0.767 c0.053,0.052,0.106,0.104,0.161,0.154L239.604,175.096z M149.093,207.384c-2.21-1.954-5.36-2.427-8.048-1.216 c-2.688,1.213-4.417,3.888-4.417,6.837v92.055H59.823V188.771c0-5.121,4.165-9.287,9.285-9.287h74.129 c2.756,0,4.73,1.151,5.901,2.116c0.003,0.003,0.006,0.005,0.009,0.008l29.849,27.979c1.456,1.366,3.396,2.105,5.393,2.023 c1.995-0.069,3.88-0.933,5.236-2.396l21.801-23.52l12.537,11.752l-38.876,41.73L149.093,207.384z M350.702,289.564H151.628v-6.402 h199.074V289.564z"/> </g> </g> </g>
                                                </svg>
                                                <span>{{$reservation->presenter}}</span>
                                            </li>
                                            <li>
                                                <svg width="20px" height="20px" viewBox="0 0 6.3500002 6.3500002" id="svg1976" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                    <g id="SVGRepo_iconCarrier"> <defs id="defs1970"/> <g id="layer1" style="display:inline"> <path d="m 4.8950508,3.7044845 c -0.6607016,0 -1.1895931,0.5283747 -1.1895931,1.1890748 0,0.66069 0.5288915,1.1916585 1.1895931,1.1916585 0.660699,0 1.1911413,-0.5309685 1.1911413,-1.1916585 0,-0.6607001 -0.5304423,-1.1890748 -1.1911413,-1.1890748 z M 4.6997142,4.3700769 A 0.2645835,0.2645835 0 0 1 4.9632631,4.6356937 V 4.8997603 H 5.2288809 A 0.2645835,0.2645835 0 0 1 5.4924297,5.1653774 0.2645835,0.2645835 0 0 1 5.2288809,5.428927 H 4.6997142 A 0.26460996,0.26460996 0 0 1 4.4340964,5.1653774 V 4.6356937 A 0.2645835,0.2645835 0 0 1 4.6997142,4.3700769 Z" id="path2452" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.8519521,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path712" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 4.2328121,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path714" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.4456487,0.79406771 c -0.6493404,0 -1.1818408,0.53042299 -1.1818408,1.17977299 v 2.1368205 c 0,0.6493502 0.5325004,1.1813233 1.1818408,1.1813233 H 3.2248685 C 3.194235,5.1638306 3.176291,5.0308032 3.176291,4.8935593 c 0,-0.94668 0.772078,-1.7187583 1.7187598,-1.7187583 0.3405214,0 0.6576695,0.1013863 0.9255231,0.2733683 V 1.9738407 c 0,-0.64935 -0.5304208,-1.17977299 -1.1797718,-1.17977299 z M 0.8053782,1.8529179 h 4.474144 c 0.00709,0.03921 0.01188,0.079325 0.01188,0.1209228 V 2.3820845 H 0.7934852 V 1.9738407 c 0,-0.041598 0.00476,-0.081712 0.01188,-0.1209228 z M 1.588275,2.7510543 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,3.0166712 0.2645835,0.2645835 0 0 1 2.1174417,3.2802211 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,3.0166712 0.2645835,0.2645835 0 0 1 1.588275,2.7510543 Z m 1.5978347,0 H 3.7152764 A 0.2645835,0.2645835 0 0 1 3.9788278,3.0166712 0.2645835,0.2645835 0 0 1 3.7152764,3.2802211 H 3.1861097 A 0.2645835,0.2645835 0 0 1 2.9204945,3.0166712 0.2645835,0.2645835 0 0 1 3.1861097,2.7510543 Z M 1.588275,3.8739832 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,4.1380498 0.2645835,0.2645835 0 0 1 2.1174417,4.4036666 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,4.1380498 0.2645835,0.2645835 0 0 1 1.588275,3.8739832 Z" id="path716" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> </g> </g>
                                                </svg>
                                                <span>{{$reservation->date}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div style="gap: 10px;flex-direction: column;">
                                        @if($reservation->attendees)
                                            @if($reservation->getUserAttend($reservation->attendees) === true)
                                                <span style="background-color: #a84141;cursor: not-allowed;">تم التحضير</span>
                                            @else
                                                <span style="width: 100%;display: block;background-color: #2f906f; cursor: pointer" wire:click="addAttende({{$reservation->id}})">تحضير</span>
                                            @endif
                                        @else
                                            <span style="width: 100%;display: block;background-color: #2f906f; cursor: pointer" wire:click="addAttende({{$reservation->id}})">تحضير</span>
                                        @endif
                                            @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق'  || Auth::user()->role === 'مدير')
                                                <span url="@if($reservation->activityUrl) {{route('attends.add', $reservation->activityUrl->url)}} @else {{route('dashboard')}} @endif" style="width: 100%;display: block;background-color: #756a95; cursor: pointer" onclick="navigator.clipboard.writeText(this.getAttribute('url')).then(() => {alert('تم نسخ رابط التحضير بنجاح')})" >رابط التحضير</span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="i-pagination">
                        {{$reservations->links('pagination.default')}}
                    </div>
                @else
                    <span style="    text-align: center;
                    width: 100%;
                    display: block;
                    font-size: 17px;
                    color: gray;
                    margin-top: 30px;
                    ">لا توجد فعاليات للتحضير فيها.
                </span>
                @endif
            </div>
        @endif
        <div wire:loading="hello" class="loading">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
        </div>
        @if($addAttende == true)
            <livewire:attendees.add>
        @endif
        @if($showAttende == true)
            <livewire:attendees.show>
        @endif
        @if($showExport == true)
            <livewire:attendees.exports>
        @endif
    </section>
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
    <script>
        function areYouDelete(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف التقييم  " + '[ ' + title + ' ]',
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
                @this.willDeleteAttende(id);
                }
            });
        }
    </script>
</div>
