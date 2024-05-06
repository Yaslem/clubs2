<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>الأندية الطلابية @yield('title', '')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('uploads/files/default/site-logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    @yield('style')
    @livewireStyles
    <style>
        .sidebar-toggle-mobile{
            display: none;
        }
        #Hijri{
            color: gray;
            display: block;
            margin-right: 10px;
            margin-left: auto;
        }
        .sidebar-toggle.mobile-btn{
            display: none;
        }
        .cancel{
            background-color: white;
            padding: 10px;
            width: 100px;
            text-align: center;
            border-radius: 6px;
            border: 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9592928c;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .index-attendees{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .swal-footer{
            margin-top: 30px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .swal-footer .swal-button.swal-button--cancel{
            color: #555;
            background-color: #efefef;
            width: 100px;
            padding: 10px;
            font-size: 16px;
            border: 0;
            box-shadow: rgb(0 0 0 / 2%) 0px 0px 0px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 0px;
        }
        .swal-footer .swal-button-container .swal-button.swal-button--confirm.swal-button--danger{
            background-color: #e64942;
            width: 100px;
            padding: 10px;
            font-size: 16px;
        }
        @media screen and (max-width: 1213px){
            .sidebar{
                display: none;
            }
            .sidebar.mobile{
                display: block;
                position: fixed;
                left: 0;
                z-index: 999;
                overflow: auto;
                width: 30%;
            }
            .sidebar-toggle.mobile{
                display: none;
            }
            .sidebar-head{
                justify-content: center;
            }
            .sidebar-toggle-mobile{
                display: block;
                transform: rotate(180deg);
            }
            #Hijri{
                margin-right: auto;
            }
        }
        @media screen and (min-width: 800px) and (max-width: 1021px){
            .stat-cards{
                gap: 20px;
                grid-template-columns: repeat(2, 1fr);
            }
            .content-profile form div ul{
                grid-template-columns: repeat(3, 1fr);
            }
            .s-index {
                grid-template-columns: repeat(2, 1fr);
            }
            .club-container {
                font-size: 11px;
            }
            .b-index .table-search {
                grid-template-columns: repeat(4, 1fr);
            }
            .onlyTrashed span:first-child{
                display: none;
            }
            .content-profile form div{
                grid-column: span 2;
            }

        }
        @media screen and (min-width: 600px) and (max-width: 800px){
            .clubs-reports > div > h4 {
                font-size: 12px;
            }
            .clubs-reports > div > div > span {
                font-size: 12px;
            }
            .content-profile form div{
                grid-column: span 2;
            }
            cancel.mobile{
                width: 100%;
                margin-bottom: 10px
            }
            .clubs-index{
                grid-template-columns: repeat(2, 1fr);
            }
            .stat-cards{
                gap: 20px;
                grid-template-columns: repeat(2, 1fr);
            }
            .sidebar.mobile{
                width: 40%;
            }
            .s-index section .blub-avatar-img {
                width: 50px;
                height: 50px;
                top: 179px;
            }
            .s-index section .club-avatar-info {
                margin-right: 80px;
                font-size: 11px;
                flex-direction: column;
            }
            .s-index section .club-avatar-info > div:first-child{
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: baseline;
            }
            .s-index section .club-avatar-info > div:last-child{
                display: flex;
                justify-content: flex-end;
                width: 100%;
                white-space: nowrap;
            }
            .club-avatar-info .numberOfmembership {
                font-size: 10px;
            }
            .club-section-container {
                grid-template-columns: repeat(2,1fr);
            }
            .club-section-right{
                display: none;
            }
            .no-activities {
                font-size: 13px;
            }
            .b-index-content div .add-comment {
                padding: 8px;
                font-size: 11px;
            }
            .comment-notes p {
                font-size: 11px;
                line-height: 1.6;
            }
            .add-comment form div input {
                margin-top: 10px;
                font-size: 13px;
            }
            .clubsManagement-container {
                padding: 0;
            }
            .clubsManagement-croup-container {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubsManagement {
                padding: 10px;
            }
            .clubsManagement img {
                overflow: revert;
            }
            .clubsManagement > div p {
                font-size: 13px;
                margin: 0 0 10px;
            }
            .clubsManagement > div > div {
                margin: 0 6px;
            }
            .clubsManagement > div{
                margin: 0 auto;
            }
            .b-index-content div ul li svg{
                width: 15px;
                height: 15px;
            }
            .club-info-container ul {
                margin: 10px 0 0;
            }
            .club-info-container ul li {
                font-size: 13px;
            }
            .club-container ul li span{
                display: none;
            }
            .club-container ul li svg{
                margin: 0;
            }
            .club-container .edit-club span{
                display: none;
            }
            .club-container .edit-club{
                padding: 6px;
                background-color: #f0f8ff;
            }
            .club-container .edit-club svg{
                fill: #2C74B3;
            }
            .club-container ul{
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 6px;
            }
            .club-info{
                padding: 10px 8px;
            }
            .club-section-left-head ul {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .club-section-left-head ul li {
                padding: 8px;
                font-size: 11px;
                text-align: center;
                width: 100%;
            }
            .club-section-left-head ul {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .club-section-left-head ul li {
                padding: 8px;
                font-size: 11px;
                text-align: center;
                width: 100%;
            }
            .login-container form div{
                grid-column: span 2;
                width: 100%;
            }
            .login-container{
                margin: 20% 0;
                padding: 10px;
                width: 100%;
            }
            .s-index {
                margin: 0;
            }
            .s-index section .blub-avatar-img {
                width: 50px;
                height: 50px;
                top: 179px;
            }
            .s-index section .club-avatar-info {
                margin-right: 80px;
                font-size: 11px;
                flex-direction: column;
            }
            .s-index section .club-avatar-info > div:first-child{
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: baseline;
            }
            .s-index section .club-avatar-info > div:last-child{
                display: flex;
                justify-content: flex-end;
                width: 100%;
                white-space: nowrap;
            }
            .club-avatar-info .numberOfmembership {
                font-size: 10px;
            }
            .club-section-container {
                grid-template-columns: repeat(2,1fr);
            }
            .club-section-right{
                display: none;
            }
            .no-activities {
                font-size: 13px;
            }
            .b-index-content div p {
                padding: 13px;
                font-size: 11px;
                margin-bottom: 10px;
            }
            .b-index-content div .add-comment {
                padding: 8px;
                font-size: 11px;
            }
            .cancel {
                padding: 8px;
                width: 70px;
                font-size: 13px;
            }
            .comment-notes p {
                font-size: 11px;
                line-height: 1.6;
            }
            .add-comment form div input {
                margin-top: 10px;
                font-size: 13px;
            }
            .clubsManagement-container {
                padding: 0;
            }
            .clubsManagement-croup-container {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubsManagement {
                padding: 10px;
            }
            .clubsManagement img {
                overflow: revert;
            }
            .clubsManagement > div p {
                font-size: 13px;
                margin: 0 0 10px;
            }
            .clubsManagement > div > div {
                margin: 0 6px;
            }
            .clubsManagement > div{
                margin: 0 auto;
            }
            .b-index-content div ul li svg{
                width: 15px;
                height: 15px;
            }
            .club-info-container ul {
                margin: 10px 0 0;
            }
            .club-info-container ul li {
                font-size: 13px;
            }
            .club-container ul li span{
                display: none;
            }
            .club-container ul li svg{
                margin: 0;
            }
            .club-container .edit-club span{
                display: none;
            }
            .club-container .edit-club{
                padding: 6px;
                background-color: #f0f8ff;
            }
            .club-container .edit-club svg{
                fill: #2C74B3;
            }
            .club-container ul{
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 6px;
            }
            .club-info{
                padding: 10px 8px;
            }
            .content-profile .section-left .content .content-edit{
                font-size: 12px;
            }
            .content-profile .section-right div{
                font-size: 11px;
            }
            .page-container .center-page{
                display: none;
            }
            .b-index .table-search {
                grid-template-columns: repeat(3, 1fr);
            }
            .b-index-container-index{
                grid-template-columns: repeat(1, 1fr);
            }
            #certificate1{
                display: flex;
            }
            .index-attendees {
                grid-template-columns: repeat(1, 1fr);
            }
            .s-index {
                grid-template-columns: repeat(1, 1fr);
            }
            #cancelClubManagement{
                margin-bottom: 10px;
            }
            #titleClubManagement{
                width: 100%;
                justify-content: center;
            }

        }
        @media screen and (min-width: 400px) and (max-width: 600px){
            .clubs-containers {
                grid-template-columns: repeat(2, 1fr);
            }
            .clubs-reports > div > h4 {
                font-size: 12px;
            }
            .clubs-reports > div > div > span {
                font-size: 12px;
            }
            .s-index {
                grid-template-columns: repeat(1, 1fr);
            }
            .index-attendees {
                grid-template-columns: repeat(1, 1fr);
            }

            .b-index-container-index{
                grid-template-columns: repeat(1, 1fr);
            }
            .b-index .table-search {
                grid-template-columns: repeat(1, 1fr);
            }
            .count-activity-container {
                display: block;
            }
            .count-activity{
                gap: 10px;
                align-items: center;
                flex-direction: column;
            }
            .stat-cards{
                gap: 20px;
                grid-template-columns: repeat(1, 1fr);
            }
            .sidebar.mobile{
                width: 50%;
            }
            .section-right{
                width: 100%;
                font-size: 10px;
                border: 0;
            }
            .content-profile .section-right{
                width: 100%;
            }
            .content-profile .section-right div{
                font-size: 11px;
            }
            .content-profile{
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                font-size: 10px;
            }
            .nav-profile{
                padding: 4px;
            }
            .nav-profile ul li{
                width: 31%;
                padding: 8px;
                font-size: 14px;
            }
            .content-profile .section-left{
                width: 100%;
            }
            .content-profile .section-left .content .content-edit{
                font-size: 12px;
            }
            .content-profile .section-left .content .content-avatar img{
                width: 60px;
                height: 60px;
            }
            .content-profile form{
                display: flex;
                flex-direction: column;
            }
            .clubs-index {
                grid-template-columns: repeat(1, 1fr);
            }
            .yourClubs span:first-of-type{
                display: none;
            }
            .login-container{
                margin: 20% 0;
                padding: 10px;
                width: 100%;
            }
            .login-container > hr{
                width: 93%;
                bottom: 71px;
            }
            .login-wrapper img{
                width: 110px;
                height: 110px;
            }
            .s-index {
                margin: 0;
            }
            .s-index section .blub-avatar-img {
                width: 50px;
                height: 50px;
                top: 179px;
            }
            .s-index section .club-avatar-info {
                margin-right: 80px;
                font-size: 11px;
                flex-direction: column;
            }
            .s-index section .club-avatar-info > div:first-child{
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: baseline;
            }
            .s-index section .club-avatar-info > div:last-child{
                display: flex;
                justify-content: flex-end;
                width: 100%;
                white-space: nowrap;
            }
            .club-avatar-info .numberOfmembership {
                font-size: 10px;
            }
            .club-section-container {
                grid-template-columns: repeat(2,1fr);
            }
            .club-section-right{
                display: none;
            }
            .no-activities {
                font-size: 13px;
            }
            .b-index-content div .add-comment {
                padding: 8px;
                font-size: 11px;
            }
            .comment-notes p {
                font-size: 11px;
                line-height: 1.6;
            }
            .add-comment form div input {
                margin-top: 10px;
                font-size: 13px;
            }
            .clubsManagement-container {
                padding: 0;
            }
            .clubsManagement-croup-container {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubsManagement {
                padding: 10px;
            }
            .clubsManagement img {
                overflow: revert;
            }
            .clubsManagement > div p {
                font-size: 13px;
                margin: 0 0 10px;
            }
            .clubsManagement > div > div {
                margin: 0 6px;
            }
            .clubsManagement > div{
                margin: 0 auto;
            }
            .b-index-content div ul li svg{
                width: 15px;
                height: 15px;
            }
            .club-info-container ul {
                margin: 10px 0 0;
            }
            .club-info-container ul li {
                font-size: 13px;
            }
            .club-container ul li span{
                display: none;
            }
            .club-container ul li svg{
                margin: 0;
            }
            .club-container .edit-club span{
                display: none;
            }
            .club-container .edit-club{
                padding: 6px;
                background-color: #f0f8ff;
            }
            .club-container .edit-club svg{
                fill: #2C74B3;
            }
            .club-container ul{
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 6px;
            }
            .club-info{
                padding: 10px 8px;
            }
            .club-section-left-head ul {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .club-section-left-head ul li {
                padding: 8px;
                font-size: 11px;
                text-align: center;
                width: 100%;
            }
            .club-section-left-head ul {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .club-section-left-head ul li {
                padding: 8px;
                font-size: 11px;
                text-align: center;
                width: 100%;
            }
            .login-container{
                margin: 20% 0;
                padding: 10px;
                width: 100%;
            }
            .s-index {
                margin: 0;
            }
            .s-index section .blub-avatar-img {
                width: 50px;
                height: 50px;
                top: 179px;
            }
            .s-index section .club-avatar-info {
                margin-right: 80px;
                font-size: 11px;
                flex-direction: column;
            }
            .s-index section .club-avatar-info > div:first-child{
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: baseline;
            }
            .s-index section .club-avatar-info > div:last-child{
                display: flex;
                justify-content: flex-end;
                width: 100%;
                white-space: nowrap;
            }
            .club-avatar-info .numberOfmembership {
                font-size: 10px;
            }
            .club-section-container {
                grid-template-columns: repeat(2,1fr);
            }
            .club-section-right{
                display: none;
            }
            .no-activities {
                font-size: 13px;
            }
            .b-index-content div p {
                padding: 13px;
                font-size: 11px;
                margin-bottom: 10px;
            }
            .b-index-content div .add-comment {
                padding: 8px;
                font-size: 11px;
            }
            .comment-notes p {
                font-size: 11px;
                line-height: 1.6;
            }
            .add-comment form div input {
                margin-top: 10px;
                font-size: 13px;
            }
            .clubsManagement-container {
                padding: 0;
            }
            .clubsManagement-croup-container {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubsManagement {
                padding: 10px;
            }
            .clubsManagement img {
                overflow: revert;
            }
            .clubsManagement > div p {
                font-size: 13px;
                margin: 0 0 10px;
            }
            .clubsManagement > div > div {
                margin: 0 6px;
            }
            .clubsManagement > div{
                margin: 0 auto;
            }
            .b-index-content div ul li svg{
                width: 15px;
                height: 15px;
            }
            .club-info-container ul {
                margin: 10px 0 0;
            }
            .club-info-container ul li {
                font-size: 13px;
            }
            .club-container ul li span{
                display: none;
            }
            .club-container ul li svg{
                margin: 0;
            }
            .club-container .edit-club span{
                display: none;
            }
            .club-container .edit-club{
                padding: 6px;
                background-color: #f0f8ff;
            }
            .club-container .edit-club svg{
                fill: #2C74B3;
            }
            .club-container ul{
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 6px;
            }
            .club-info{
                padding: 10px 8px;
            }
            .club-section-left-head ul {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .club-section-left-head ul li {
                padding: 8px;
                font-size: 11px;
                text-align: center;
                width: 100%;
            }
            .login-container form div{
                grid-column: span 2;
                width: 100%;
            }
            .login-container{
                margin: 20% 0;
                padding: 10px;
                width: 100%;
            }
            .s-index {
                margin: 0;
            }
            .s-index section .blub-avatar-img {
                width: 50px;
                height: 50px;
                top: 179px;
            }
            .s-index section .club-avatar-info {
                margin-right: 80px;
                font-size: 11px;
                flex-direction: column;
            }
            .s-index section .club-avatar-info > div:first-child{
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: baseline;
            }
            .s-index section .club-avatar-info > div:last-child{
                display: flex;
                justify-content: flex-end;
                width: 100%;
                white-space: nowrap;
            }
            .club-avatar-info .numberOfmembership {
                font-size: 10px;
            }
            .club-section-container {
                grid-template-columns: repeat(2,1fr);
            }
            .club-section-right{
                display: none;
            }
            .no-activities {
                font-size: 13px;
            }
            .b-index-content div .add-comment {
                padding: 8px;
                font-size: 11px;
            }
            .cancel {
                padding: 8px;
                width: 70px;
                font-size: 13px;
            }
            .comment-notes p {
                font-size: 11px;
                line-height: 1.6;
            }
            .add-comment form div input {
                margin-top: 10px;
                font-size: 13px;
            }
            .clubsManagement-container {
                padding: 0;
            }
            .clubsManagement-croup-container {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubsManagement {
                padding: 10px;
            }
            .clubsManagement img {
                overflow: revert;
            }
            .clubsManagement > div p {
                font-size: 13px;
                margin: 0 0 10px;
            }
            .clubsManagement > div > div {
                margin: 0 6px;
            }
            .clubsManagement > div{
                margin: 0 auto;
            }
            .b-index-content div ul li svg{
                width: 15px;
                height: 15px;
            }
            .club-info-container ul {
                margin: 10px 0 0;
            }
            .club-info-container ul li {
                font-size: 13px;
            }
            .club-container ul li span{
                display: none;
            }
            .club-container ul li svg{
                margin: 0;
            }
            .club-container .edit-club span{
                display: none;
            }
            .club-container .edit-club{
                padding: 6px;
                background-color: #f0f8ff;
            }
            .club-container .edit-club svg{
                fill: #2C74B3;
            }
            .club-container ul{
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 6px;
            }
            .club-info{
                padding: 10px 8px;
            }
            .page-container .center-page{
                display: none;
            }
            #certificate4{
                width: 100%;
                margin-bottom: 10px
            }
            #certificate1{
                text-align: center;
            }
            #certificate2{
                width: 100%;
                justify-content: center;
            }
            #certificate3{
                width: 100%;
            }
            #award1{
                width: 100%;
                margin-bottom: 10px;
            }
            #cancelClubManagement{
                margin-bottom: 10px;
            }
            #titleClubManagement{
                width: 100%;
                justify-content: center;
            }
						.activity-show .alert p {
				font-size: 14px;
			}
			.activity-show .activity-show-content > div:not(:last-child){
				grid-column: span 2;
			}

        }
        @media screen and (min-width: 200px) and (max-width: 400px){
            .head-plans{
                flex-direction: column;
            }
            .head-plans .add{
                width: 100%;
                text-align: center;
            }
            .clubs-info > div > ul{
                font-size: 12px;
                font-weight: 400;
            }
            .clubs-containers {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubs-reports > div > h4 {
                font-size: 13px;
            }
            .clubs-reports > div > div > span {
                font-size: 12px;
            }
            .clubs-header > h4{
                font-size: 13px;
            }
            .clubs-header > span{
                font-size: 10px;
            }
			.activity-show .alert p {
				font-size: 14px;
			}
            .login-container form > div > div:last-of-type{
                font-size: 11px;
            }
			.activity-show .activity-show-content > div:not(:last-child){
				grid-column: span 2;
			}
            #cancelAward{
                width: 100%;
                margin-bottom: 10px;
            }
            #titleawardAward{
                width: 100%;
                justify-content: center;
            }
            #indexawardAward{
                flex-direction: column;
            }
            #addUserAward{
                margin: 10px 0;
            }
            #certificate4{
                width: 100%;
                margin-bottom: 10px
            }
            #certificate1{
                text-align: center;
            }
            #certificate2{
                width: 100%;
                justify-content: center;
            }
            #certificate3{
                width: 100%;
            }
            .b-index-container-index{
                grid-template-columns: repeat(1, 1fr);
            }
            .b-index-content div > span{
                padding: 10px;
                font-size: 14px;
            }
            .b-index-content div ul li span {
                font-size: 10px;
            }
            .b-index .addUser{
                width: 100%;
                text-align: center;
                margin: 30px 0;
                font-size: 12px;
            }
            .clubs-index {
                grid-template-columns: repeat(1, 1fr);
            }
            .yourClubs span:first-of-type{
                display: none;
            }
            .yourClubs span:last-of-type{
                font-size: 14px;
            }
            .notifications ul li > div > span,
            .notifications ul li > div > div p{
                font-size: 10px;
            }
            #Hijri{
                display: none;
            }
            .notifications h5:after{
                width: 40px;
            }
            .notifications h5{
                font-size: 13px;
            }
            .notifications ul li img{
                width: 25px;
                height: 25px;
            }
            .export_btn{
                font-size: 14px;
            }
            .login-container{
                margin: 20% 0;
                padding: 10px;
                width: 100%;
            }
            .content-profile form{
                display: flex;
                flex-direction: column;
            }
            .stat-cards{
                gap: 20px;
                grid-template-columns: repeat(1, 1fr);
            }
            .stat-cards-info__num {
                font-size: 20px;
            }
            .sidebar.mobile{
                width: 100%;
            }
            .sidebar-toggle.mobile-btn{
                display: block;
            }
            .sidebar-head{
                justify-content: space-between;
            }
            .section-right{
                width: 100%;
                font-size: 10px;
                border: 0;
            }
            .content-profile .section-right{
                width: 100%;
            }
            .content-profile .section-right div{
                font-size: 8px;
            }
            .content-profile{
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                font-size: 10px;
            }
            .nav-profile{
                padding: 4px;
            }
            .nav-profile ul li{
                width: 31%;
                padding: 8px;
                font-size: 12px;
            }
            .content-profile .section-left{
                width: 100%;
            }
            .content-profile .section-left .content .content-edit{
                font-size: 10px;
            }
            .content-profile .section-left .content .content-avatar img{
                width: 60px;
                height: 60px;
            }
            .s-index{
                grid-template-columns: repeat(1, 1fr);
            }
            .title-award{
                margin: 0;
            }
            .index-attendees{
                grid-template-columns: repeat(1, 1fr);
            }
            .content-profile form div ul{
                grid-template-columns: repeat(1, 1fr);
            }
            .count-activity-container{
                display: block;
            }
            .page-container .center-page{
                display: none;
            }
            .clubs-view-page .unsubscribe{
                width: 36%;
            }
            .b-index .table-search {
                grid-template-columns: repeat(1, 1fr);
            }
            .b-index .table-search div input[type="text"]{
                width: 100%;
            }
            .table-search label {
                display: none;
            }
            .b-index{
                padding: 0;
            }
            .login-wrapper{
                padding: 14px;
            }
            .count-activity {
                padding: 10px;
                justify-content: center;
                margin: 10px 0;
            }
            .content-profile form {
                display: block;
            }
            .content-profile form div{
                margin: 20px 0;
            }
            .content-profile form button{
                width: 100%;
            }
            .content-profile{
                padding: 8px
            }
            .content-profile form button{
                font-size: 16px;
            }
            .title-club{
                width: 100%;
                margin: 10px 0;
            }

            .count-activity > div:first-child{
                display: none;
            }
            .count-activity > div:last-child{
                flex-direction: row-reverse;
                align-items: center;
                font-size: 14px;
                margin: 0;
            }
            .count-activity div span:last-of-type{
                margin-left: 10px;
            }
            .count-activity div span:first-of-type{
                margin: 0;
            }
            .swal-text{
                text-align: right;
                font-size: 11px;
            }

            .login-wrapper img{
                width: 80px;
                height: 80px;
                margin-top: 15px;
            }
            .login-container{
                margin: 30px 0;
                padding: 10px;
                width: 95%;
            }
            .login-container h2{
                margin-top: 10px;
                font-size: 20px;
                margin-bottom: 20px;
            }
            .login-container form div label{
                font-size: 15px;
                margin-bottom: 11px;
                color: #7F8487;

            }
            .login-container form div input {
                padding: 10px;
                font-size: 10px;
            }
            .login-container form div input::placeholder{
                font-size: 10px;
            }
            .login-container form button {
                padding: 10px;
                font-size: 14px;
            }
            .login-container .and {
                font-size: 10px;
            }
            .login-container > hr {
                width: 90%;
                height: 1px;
                bottom: 54px;
            }
            .login-container .and-login {
                padding: 10px;
                font-size: 14px;
                margin-top: 40px;
            }
            .footer {
                padding-top: 8px;
                padding-bottom: 8px;
            }
            .login-container form div svg {
                top: 40%;
                left: 2px;
            }
            .login-container form div{
                grid-column: span 2;
                width: 100%;
            }
            .login-container select{
                font-size: 10px;
            }
            span.error {
                font-size: 10px;
                margin: 10px 0 0;
            }
            .b-index-content {
                padding: 10px;
            }
            .b-index-content div:first-child {
                height: 70px;
                font-size: 13px;
            }
            .b-index-content div h3 {
                font-size: 14px;
            }
            .b-index-content div ul li {
                font-size: 11px;
            }
            .b-index-content div button {
                padding: 8px 10px;
                font-size: 13px;
            }
            .club-section-left-head ul {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .club-section-left-head ul li {
                padding: 8px;
                font-size: 11px;
                text-align: center;
                width: 100%;
            }
            .club-container {
                padding: 8px;
            }
            .club-container ul li {
                padding: 6px;
                margin: 0;
                font-size: 11px;
            }
            .s-index {
                margin: 0;
            }
            .s-index section .blub-avatar-img {
                width: 50px;
                height: 50px;
                top: 179px;
            }
            .s-index section .club-avatar-info {
                margin-right: 80px;
                font-size: 11px;
                flex-direction: column;
            }
            .s-index section .club-avatar-info > div:first-child{
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: baseline;
            }
            .s-index section .club-avatar-info > div:last-child{
                display: flex;
                justify-content: flex-end;
                width: 100%;
                white-space: nowrap;
            }
            .club-avatar-info .numberOfmembership {
                font-size: 10px;
            }
            .club-section-container {
                grid-template-columns: repeat(2,1fr);
            }
            .club-section-right{
                display: none;
            }
            .no-activities {
                font-size: 13px;
            }
            .b-index-content div p {
                padding: 13px;
                font-size: 11px;
                margin-bottom: 10px;
            }
            .b-index-content div .add-comment {
                padding: 8px;
                font-size: 11px;
            }
            .cancel {
                padding: 8px;
                width: 70px;
                font-size: 13px;
            }
            .comment-notes p {
                font-size: 11px;
                line-height: 1.6;
            }
            .add-comment form div input {
                margin-top: 10px;
                font-size: 13px;
            }
            .clubsManagement-container {
                padding: 0;
            }
            .clubsManagement-croup-container {
                grid-template-columns: repeat(1, 1fr);
            }
            .clubsManagement {
                padding: 10px;
            }
            .clubsManagement img {
                overflow: revert;
            }
            .clubsManagement > div p {
                font-size: 13px;
                margin: 0 0 10px;
            }
            .clubsManagement > div > div {
                margin: 0 6px;
            }
            .clubsManagement > div{
                margin: 0 auto;
            }
            .b-index-content div ul li svg{
                width: 15px;
                height: 15px;
            }
            .club-info-container ul {
                margin: 10px 0 0;
            }
            .club-info-container ul li {
                font-size: 13px;
            }
            .club-container ul li span{
                display: none;
            }
            .club-container ul li svg{
                margin: 0;
            }
            .club-container .edit-club span{
                display: none;
            }
            .club-container .edit-club{
                padding: 6px;
                background-color: #f0f8ff;
            }
            .club-container .edit-club svg{
                fill: #2C74B3;
            }
            .club-container ul{
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 6px;
            }
            .club-info{
                padding: 10px 8px;
            }
            .index-attendees {
                grid-template-columns: repeat(1, 1fr);
            }
            #award1{
                width: 100%;
                margin-bottom: 10px;
            }
            .head-date{
                flex-direction: column;
            }
            #cancelLocation{
                width: 100%;
            }
            #addUserLocation{
                margin: 10px 0;
            }
            #cancelType{
                width: 100%;
            }
            #addUserType{
                margin: 10px 0;
            }
            #cancelTime{
                width: 100%;
            }
            #addUserTime{
                margin: 10px 0;
            }
            #cancelLevel{
                width: 100%;
            }
            #addUserLevel{
                margin: 10px 0;
            }
            #cancelDate{
                width: 100%;
            }
            #addUserDate{
                margin: 10px 0;
            }
            #cancelCountry{
                width: 100%;
            }
            #addUserCountry{
                margin: 10px 0;
            }
            #addUserCollege{
                margin: 10px 0;
            }
            #cancelCollege{
                width: 100%;
            }
            #addUserAwardTool{
                margin: 10px 0;
            }
            #cancelAwardTool{
                width: 100%;
            }
            #addUserAdministrative{
                margin: 10px 0;
            }
            #cancelAdministrative{
                width: 100%;
            }
            #cancelClubManagement{
                margin-bottom: 10px;
            }
            #titleClubManagement{
                width: 100%;
                justify-content: center;
            }



        }
        .swal-text{
            text-align: right;
        }
        .sidebar.hidden{
            width: 6%;
        }
        .sidebar-body-menu li a span:last-child.hidden{
            display: none;
        }
        .sidebar-footer a .sidebar-user-info.hidden{
            display: none;
        }
        .sidebar-footer a > span.hidden{
            margin: 0;
        }
        .sidebar-start.hidden{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .sidebar-footer.hidden{
            margin-top: 20px;
            margin-right: -6px;
            width: 50px;
        }
        .sidebar-head.hidden{
            justify-content: center;
        }
        .sidebar-toggle.hidden{
            margin-top: 10px;
        }
        .login{
            padding: 8px;
            font-size: 14px;
            background-color: #32639d;
            color: white;
            border-radius: 6px;
            display: block;
        }
    </style>
</head>
<body>
<div class="layer"></div>
<div class="page-flex">
    @yield('sidebar')
    <div class="main-wrapper">
        @yield('nav')
        @yield('content')
        <!-- ! Footer -->
        <div class="c"></div>
        <footer class="footer">
            <div class="container footer--flex">
                <div class="footer-start">
                    <p>2023 © الأندية الطلابية </p>
                </div>
                <ul class="footer-end">
                    <li><a href="{{route('Privacy')}}">عنا</a></li>
                    <li><a style="color: #68b984" href="https://api.whatsapp.com/send?phone=22249474968&text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85%20%D8%B9%D9%84%D9%8A%D9%83%D9%85%20%D9%88%D8%B1%D8%AD%D9%85%D8%A9%20%D8%A7%D9%84%D9%84%D9%87%20%D9%88%D8%A8%D8%B1%D9%83%D8%A7%D8%AA%D9%87%D8%8C%20%D8%AD%D9%8A%D8%A7%D9%83%D9%85%20%D8%A7%D9%84%D9%84%D9%87.%20%D9%84%D8%AF%D9%8A%20%D9%85%D8%B4%D9%83%D9%84%D8%A9%20%D8%B9%D8%A7%D8%AC%D9%84%D8%A9%20%D9%88%D8%A3%D9%88%D8%AF%20%D8%AD%D9%84%D9%87%D8%A7.%20%0A%0A%D8%A7%D9%84%D8%A7%D8%B3%D9%85%3A%20%0A%D8%A7%D9%84%D8%B1%D9%82%D9%85%20%D8%A7%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D9%8A%3A%20%0A%D9%88%D8%B5%D9%81%20%D8%A7%D9%84%D9%85%D8%B4%D9%83%D9%84%D8%A9%3A%0A%0A%D9%88%D8%B4%D9%83%D8%B1%D8%A7." target="_blank">تواصل معنا</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <div class="cover" id="cover"></div>
</div>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
@yield('script')
@livewireScripts
@if(Auth::user())
    <script>
        let nav_user_btn = document.querySelector('.nav-user-btn');
        let users_dropdown  = document.querySelector('.users-item-dropdown ');
        let span = document.querySelectorAll('.sidebar-body-menu li a span:last-child');
        let user_info = document.querySelector('.sidebar-footer a .sidebar-user-info');
        let user_span = document.querySelector('.sidebar-footer a > span');
        let sidebar_start = document.querySelector('.sidebar-start');
        let sidebar_footer = document.querySelector('.sidebar-footer');
        let sidebar_head = document.querySelector('.sidebar-head');

        nav_user_btn.addEventListener('click', function()
        {
            users_dropdown.classList.toggle('show');
        })

        let sidebar_toggle = document.querySelector('.sidebar-toggle');
        let sidebar = document.querySelector('.sidebar');

        sidebar_toggle.addEventListener('click', function()
        {
            span.forEach((span) => {
                span.classList.toggle('hidden');
            });
            user_info.classList.toggle('hidden');
            user_span.classList.toggle('hidden');
            sidebar_start.classList.toggle('hidden');
            sidebar_footer.classList.toggle('hidden');
            sidebar_head.classList.toggle('hidden');
            sidebar_toggle.classList.toggle('hidden');
            sidebar.classList.toggle('hidden');
        })

        let Hijri = document.getElementById('Hijri');
        let today  = new Date();
        Hijri.innerHTML = today.toLocaleDateString("ar-SA");

        let btn_toggle_mobile = document.querySelector('.sidebar-toggle-mobile');
        let mobile_btn = document.querySelector('.sidebar-toggle.mobile-btn')
        btn_toggle_mobile.addEventListener('click', function()
        {
            sidebar.classList.toggle('mobile');
            sidebar.removeAttribute('style');
        })
        mobile_btn.addEventListener('click', function()
        {
            sidebar.style.display = 'none';
            sidebar.classList.remove('mobile');
        })

        let notify = document.getElementById('notify');
        let notifications = document.getElementById('notifications');
        notify.addEventListener('click', function(){
            if(notifications.style.display === 'block'){
                notifications.style.display = 'none';
            }else{
                notifications.style.display = 'block';
            }
        });

        console.log('مرحبا بكم في موقع الأندية الطلابية في الجامعة الإسلامية بالمدينة المنورة. :)')
    </script>
@else
    <script>


        let span = document.querySelectorAll('.sidebar-body-menu li a span:last-child');
        let sidebar_start = document.querySelector('.sidebar-start');
        let sidebar_head = document.querySelector('.sidebar-head');

        let sidebar_toggle = document.querySelector('.sidebar-toggle');
        let sidebar = document.querySelector('.sidebar');

        sidebar_toggle.addEventListener('click', function()
        {
            span.forEach((span) => {
                span.classList.toggle('hidden');
            });
            sidebar_start.classList.toggle('hidden');
            sidebar_head.classList.toggle('hidden');
            sidebar_toggle.classList.toggle('hidden');
            sidebar.classList.toggle('hidden');
        })

        let Hijri = document.getElementById('Hijri');
        let today  = new Date();
        Hijri.innerHTML = today.toLocaleDateString("ar-SA");

        let btn_toggle_mobile = document.querySelector('.sidebar-toggle-mobile');
        let mobile_btn = document.querySelector('.sidebar-toggle.mobile-btn')
        btn_toggle_mobile.addEventListener('click', function()
        {
            sidebar.classList.toggle('mobile');
            sidebar.removeAttribute('style');
        })
        mobile_btn.addEventListener('click', function()
        {
            sidebar.style.display = 'none';
            sidebar.classList.remove('mobile');
        })
        console.log('مرحبا بكم في موقع الأندية الطلابية في الجامعة الإسلامية بالمدينة المنورة. :)')
    </script>
@endif
</body>
</html>
