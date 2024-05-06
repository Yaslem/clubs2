@section('title', ' - '.$club_name)
@section('style')
    <style>
        .s-index {
            margin: 10px 10px 30px;
            padding: 20px;
        }
        .club-first-section{
            background-color: white;
            overflow: hidden;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .s-index section{
            border-radius: 6px;
            position: relative;
        }
        .s-index section .club-cover{
            width: 100%;
            height: 200px;
        }
        .s-index section .club-cover img{
            width: 100%;
            height: 200px;
            object-fit: cover;

        }
        .s-index section .club-avatar{
            padding: 10px 20px;
            height: 80px;
            border-bottom: 1px solid #ccc;
        }
        .s-index section .blub-avatar-img{
            width: 100px;
            height: 100px;
            border: 4px solid white;
            position: absolute;
            top: 170px;
            background-color: beige;
            border-radius: 50%;
            overflow: hidden;
            align-items: flex-end;
            display: flex;
        }
        .s-index section .club-avatar-info{
            display: flex;
            margin-right: 124px;
            font-size: 18px;
            line-height: 1.6;
            font-weight: 500;
            height: 100%;
            align-items: center;
            justify-content: space-between;
        }
        .club-container{
            padding: 10px 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .club-container .edit-club{
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #2C74B3;
            color: white;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }
        .club-container .edit-club span{
            margin-right: 10px;
        }
        .club-container ul{
            display: flex;
            align-items: center;
        }
        .club-container ul li{
            padding: 10px;
            background-color: aliceblue;
            border-radius: 6px;
            margin-left: 10px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .club-container ul li svg{
            margin-left: 10px;
            fill: #2C74B3;
        }
        .club-container ul li.active{
            background-color: #2C74B3;
            color: white;
        }
        .club-container ul li.active svg{
            fill: white;
        }
        .club-container ul > li:last-child{
            margin-left: 0;
        }
        .club-section{
            margin: 20px 0;
        }
        .club-section-container{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
        }
        .club-section-right{
            background-color: white;
            border-radius: 6px;
            padding: 20px;
            grid-column: span 1;
            height: fit-content;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .club-section-right > div{
            margin: 0 0 20px;
        }
        .club-section-right > div:last-child{
            margin: 0;
        }
        .club-section-right > div:last-child p span{
            cursor: pointer;
        }
        .club-section-right > div:last-child p span:last-child{
            margin-right: 10px;
        }
        .club-section-right-icon{
            display: flex;
            align-items: center;
        }
        .club-section-right > div h3{
            font-size: 18px;
            font-weight: 600;
            color: #7C99AC;
            opacity: 0.7;
            margin: 10px 10px;
        }
        .club-section-right > div p{
            font-size: 13px;
            line-height: 1.5;
            text-align: justify;
            opacity: 0.5;
            margin: 10px 30px 0 0;
        }
        .club-section-right > div ul{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin-right: 30px;
            font-size: 13px;
            opacity: 0.5;
            font-weight: 400;
        }
        .club-section-right > div ul li{
            margin: 10px 0;
        }
        .club-section-right > div ul li span{
            margin-right: 10px;
        }
        .club-section-left{
            grid-column: span 2;
            border-radius: 6px;
        }
        .club-section-left-head{
            margin-bottom: 20px;
            border-radius: 6px;
        }
        .club-section-left-head ul{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .club-section-left-head ul li{
            padding: 12px 10px;
            color: white;
            border-radius: 6px;
            font-size: 18px;
            text-align: center;
            width: 150px;
            background-color: #1F8A70;
            font-weight: 500;
            cursor: pointer;
        }
        .club-section-left-head ul li:first-of-type{
            background-color: #557571;
        }
        .club-section-left-head ul li:last-of-type{
            background-color: #364F6B;
        }
        .club-section-left-item{
            border-radius: 6px;
            background-color: white;
            margin-bottom: 20px;
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
        .b-index-content div label{
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .b-index-content div label span{
            margin-right: 6px;
            color: gray;
            margin-top: 10px;
        }
        .b-index-content div p{
            width: 100%;
            display: block;
            padding: 13px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            border-radius: 6px;
            font-size: 16px;
            line-height: 1.9;
            text-align: justify;
            margin-bottom: 20px;
            color: gray;
        }
        .b-index-content div.button{
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
        .b-index-content div .add-comment{
            display: block;
            background-color: #2786ad;
            cursor: pointer;
            color: white;
            padding: 10px;
            border-radius: 6px;
            font-size: 14px;
        }
        .b-index-content div > span{
            margin-right: 6px;
            color: gray;
            margin-top: 10px;
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

        .b-index-content div button{
            width: 100%;
            padding: 8px 10px;
            border-radius: 6px;
            font-size: 18px;
            font-weight: 600;
            background-color: #4462a2;
            color: white;
        }

        .club-info{
            padding: 10px 20px;
            background-color: white;
            box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
            margin: 12px 0;
            border-radius: 6px;
        }
        .club-info-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .club-info-container h3{
            font-size: 20px;
            font-weight: 600;
            color: #7C99AC;
            margin: 10px 10px;
        }
        .club-info-container p{
            font-size: 14px;
            line-height: 1.5;
            text-align: justify;
            margin: 15px 25px 6px;
        }
        .club-info-container ul {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin: 10px 20px 0;
        }
        .club-info-container ul li{
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: 500;
            opacity: 0.6;
            width: 100%;
            background-color: #86c8bc;
            padding: 10px;
            border-radius: 6px;
        }
        .club-info-container ul li span{
            margin-right: 10px;
        }
        .club-avatar-info .numberOfmembership{
            font-size: 14px;
            margin-top: 6px;
            opacity: 0.5;
        }
        .no-activities{
            text-align: center;
            display: block;
            margin: 40px 0 0;
            color: gray;
            font-size: 18px;
        }

        /*---------------------------------------------*/
        .b-index {
            margin: 10px;
            padding: 20px;
        }
        .b-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
        }
        .content-profile .cover-container{
            grid-column: span 2;
            height: 200px;
            border-radius: 6px;
            overflow: hidden;
        }
        .content-profile .avatar-container{
            grid-column: span 2;
            flex-direction: row;
            justify-content: end;
        }
        #coverImg{
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .content-profile .avatar-container img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            border: 2px solid white;
            top: -75px;
            right: 30px;
        }
        .content-profile .avatar-container > div{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .content-profile .avatar-container > div input{
            display: none;
        }
        .content-profile .avatar-container > div label{
            display: block;
            background-color: #2C74B3;
            color: white;
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            margin-right: 10px;
        }

        .content-profile{
            background-color: white;
            padding: 20px;
            border-radius: 6px;
            margin: 8px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }

        .content-profile form{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .content-profile form div{
            display: flex;
            position: relative;
            flex-direction: column;
        }
        .content-profile form div textarea{
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            padding: 10px;
        }
        .content-profile form div label{
            font-size: 13px;
            margin-bottom: 10px;
            font-weight: 500;
            color: #383838;
        }
        .content-profile form div input{
            border: 1px solid #ccc;
            padding: 8px 10px;
            background-color: #f5f6f7;
        }

        .content-profile form div input.error{
            border: 1px solid #E84545;
        }
        .content-profile form div input.error::placeholder{
            color: #E84545;
            opacity: 0.5;
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
            grid-column: span 2;
        }
        /*----------------------------------------------*/
        span.error{
            font-size: 13px;
            margin: 8px 0;
            color: #E84545;
        }
        .comment-container{
            background-color: white;
            padding: 10px;
            border-radius: 6px;
            margin: 20px 0;
        }
        .comment-notes{
            display: flex;
            flex-direction: row;
            align-items: center;
            margin: 20px 0;
            font-size: 13px;
            color: gray;
        }
        .comment-notes p{
            margin-right: 10px;
        }
        .comments{
            font-size: 26px;
            margin: 20px 0;
            display: block;
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
            border-bottom: 1px dashed#ccc;
        }
        .comment-container > div > div:first-of-type{
            display: flex;
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
        .add-comment{
            padding: 10px;
            background-color: white;
            border-radius: 6px;
        }
        .add-comment form > div{
            display: flex;
            flex-direction: column;
        }
        .add-comment form div textarea{
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            overflow: auto;
            height: 120px;
        }
        .add-comment form div input{
            margin-top: 10px;
            cursor: pointer;
            font-size: 22px;
            background-color: #0b6226;
            color: white;
            border: 0;
        }
        .clubsManagement-container{
            padding: 20px;
            margin-top: 10px;
        }
        .clubsManagement{
            padding: 10px;
            width: 100%;
            background-color: #f0f2fa;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            display: flex;
            align-items: center;
        }
        .clubsManagement > div{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .clubsManagement > div p{
            font-size: 15px;
            margin: 10px 30px;
            text-align: center;
        }
        .clubsManagement > div > div{
            font-size: 11px;
            color: gray;
            display: flex;
            flex-direction: column;
            margin: 0 20px;
            text-align: center;
        }
        .clubsManagement > div > div span:first-of-type{
            margin: 2px 0 6px;
        }
        .clubsManagement img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid white;
			object-fit: cover;
        }
        .clubsManagement-croup-container{
            margin-top: 20px;
            border-top: 2px dashed#ccc;
            padding-top: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    </style>
@endsection
<div>
    @if($clubProfile == true)
        <section class="s-index">
            <div wire:loading.class="loading-status">
                @foreach($clubs as $club)
                    <section class="club-first-section">
                        <div class="club-cover">
                            <img src="{{asset('uploads/files/'.$club->cover)}}">
                        </div>
                        <div class="club-avatar">
                            <div class="blub-avatar-img">
                                <img src="{{asset('uploads/files/'.$club->avatar)}}">
                            </div>
                            <div class="club-avatar-info">
                                <div>
                                    <div>
                                        <span>{{$club->name}}</span>
                                    </div>
                                    <div class="numberOfmembership">
                                        <span>عدد الأعضاء: {{$club->ClubStatus()->count()}}</span>
                                    </div>
                                </div>
                                <div>
                                    <span>{{$club->slug}}</span>
                                    <span>@</span>
                                </div>
                            </div>
                        </div>
                        <div class="club-container">
                            <ul>
                                <li id="titlehome" onclick="action('home')" class="active">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2796 3.71579C12.097 3.66261 11.903 3.66261 11.7203 3.71579C11.6678 3.7311 11.5754 3.7694 11.3789 3.91817C11.1723 4.07463 10.9193 4.29855 10.5251 4.64896L5.28544 9.3064C4.64309 9.87739 4.46099 10.0496 4.33439 10.24C4.21261 10.4232 4.12189 10.6252 4.06588 10.8379C4.00765 11.0591 3.99995 11.3095 3.99995 12.169V17.17C3.99995 18.041 4.00076 18.6331 4.03874 19.0905C4.07573 19.536 4.14275 19.7634 4.22513 19.9219C4.41488 20.2872 4.71272 20.5851 5.07801 20.7748C5.23658 20.8572 5.46397 20.9242 5.90941 20.9612C6.36681 20.9992 6.95893 21 7.82995 21H7.99995V18C7.99995 15.7909 9.79081 14 12 14C14.2091 14 16 15.7909 16 18V21H16.17C17.041 21 17.6331 20.9992 18.0905 20.9612C18.5359 20.9242 18.7633 20.8572 18.9219 20.7748C19.2872 20.5851 19.585 20.2872 19.7748 19.9219C19.8572 19.7634 19.9242 19.536 19.9612 19.0905C19.9991 18.6331 20 18.041 20 17.17V12.169C20 11.3095 19.9923 11.0591 19.934 10.8379C19.878 10.6252 19.7873 10.4232 19.6655 10.24C19.5389 10.0496 19.3568 9.87739 18.7145 9.3064L13.4748 4.64896C13.0806 4.29855 12.8276 4.07463 12.621 3.91817C12.4245 3.7694 12.3321 3.7311 12.2796 3.71579ZM11.1611 1.79556C11.709 1.63602 12.2909 1.63602 12.8388 1.79556C13.2189 1.90627 13.5341 2.10095 13.8282 2.32363C14.1052 2.53335 14.4172 2.81064 14.7764 3.12995L20.0432 7.81159C20.0716 7.83679 20.0995 7.86165 20.1272 7.88619C20.6489 8.34941 21.0429 8.69935 21.3311 9.13277C21.5746 9.49916 21.7561 9.90321 21.8681 10.3287C22.0006 10.832 22.0004 11.359 22 12.0566C22 12.0936 22 12.131 22 12.169V17.212C22 18.0305 22 18.7061 21.9543 19.2561C21.9069 19.8274 21.805 20.3523 21.5496 20.8439C21.1701 21.5745 20.5744 22.1701 19.8439 22.5496C19.3522 22.805 18.8274 22.9069 18.256 22.9543C17.706 23 17.0305 23 16.2119 23H15.805C15.7972 23 15.7894 23 15.7814 23C15.6603 23 15.5157 23.0001 15.3883 22.9895C15.2406 22.9773 15.0292 22.9458 14.8085 22.8311C14.5345 22.6888 14.3111 22.4654 14.1688 22.1915C14.0542 21.9707 14.0227 21.7593 14.0104 21.6116C13.9998 21.4843 13.9999 21.3396 13.9999 21.2185L14 18C14 16.8954 13.1045 16 12 16C10.8954 16 9.99995 16.8954 9.99995 18L9.99996 21.2185C10 21.3396 10.0001 21.4843 9.98949 21.6116C9.97722 21.7593 9.94572 21.9707 9.83107 22.1915C9.68876 22.4654 9.46538 22.6888 9.19142 22.8311C8.9707 22.9458 8.75929 22.9773 8.6116 22.9895C8.48423 23.0001 8.33959 23 8.21847 23C8.21053 23 8.20268 23 8.19495 23H7.78798C6.96944 23 6.29389 23 5.74388 22.9543C5.17253 22.9069 4.64769 22.805 4.15605 22.5496C3.42548 22.1701 2.8298 21.5745 2.4503 20.8439C2.19492 20.3523 2.09305 19.8274 2.0456 19.2561C1.99993 18.7061 1.99994 18.0305 1.99995 17.212L1.99995 12.169C1.99995 12.131 1.99993 12.0936 1.99992 12.0566C1.99955 11.359 1.99928 10.832 2.1318 10.3287C2.24383 9.90321 2.42528 9.49916 2.66884 9.13277C2.95696 8.69935 3.35105 8.34941 3.87272 7.8862C3.90036 7.86165 3.92835 7.83679 3.95671 7.81159L9.22354 3.12996C9.58274 2.81064 9.89467 2.53335 10.1717 2.32363C10.4658 2.10095 10.781 1.90627 11.1611 1.79556Z" ></path> </g></svg>
                                    <span>الرئيسية</span>
                                </li>
                                <li id="titleabout" onclick="action('about')">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7C12.5523 7 13 7.44772 13 8V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V8C11 7.44772 11.4477 7 12 7Z" ></path> <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#0F1729"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"></path> </g></svg>                                    <span>عن النادي</span>
                                </li>
                                <li id="titlevision" onclick="action('vision')">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1631 2.7372C10.8572 1.12528 13.1427 1.12528 13.8369 2.7372L15.4229 6.42011C15.5677 6.75629 15.8846 6.98651 16.249 7.02031L20.2418 7.39063C21.9893 7.55271 22.6956 9.72633 21.377 10.8846L18.3645 13.5311C18.0895 13.7727 17.9685 14.1452 18.049 14.5023L18.9306 18.414C19.3165 20.1261 17.4675 21.4695 15.9584 20.5734L12.5105 18.5262C12.1958 18.3393 11.8041 18.3393 11.4894 18.5262L8.04154 20.5734C6.53248 21.4695 4.68348 20.1261 5.06936 18.414L5.95099 14.5023C6.03147 14.1452 5.91044 13.7727 5.63545 13.5311L2.62291 10.8846C1.30438 9.72633 2.01063 7.55271 3.75818 7.39063L7.75094 7.02031C8.1154 6.98651 8.43227 6.75629 8.57704 6.42011L10.1631 2.7372ZM13.586 7.21117L12 3.52826L10.4139 7.21117C9.97963 8.21969 9.02902 8.91036 7.93564 9.01176L3.94288 9.38208L6.95542 12.0286C7.78038 12.7533 8.14348 13.8708 7.90205 14.942L7.02042 18.8538L10.4683 16.8065C11.4125 16.2458 12.5875 16.2458 13.5317 16.8065L16.9795 18.8538L16.0979 14.942C15.8565 13.8708 16.2196 12.7533 17.0445 12.0286L20.0571 9.38208L16.0643 9.01176C14.9709 8.91036 14.0203 8.21969 13.586 7.21117Z" ></path> </g></svg>
                                    <span>الرؤية</span>
                                </li>
                                <li id="titlemessage" onclick="action('message')">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M7 3C5.89543 3 5 3.89543 5 5V17.2C5 18.0566 5.00078 18.6389 5.03755 19.089C5.07337 19.5274 5.1383 19.7516 5.21799 19.908C5.40973 20.2843 5.7157 20.5903 6.09202 20.782C6.24842 20.8617 6.47262 20.9266 6.91104 20.9624C7.36113 20.9992 7.94342 21 8.8 21H15.2C16.0566 21 16.6389 20.9992 17.089 20.9624C17.5274 20.9266 17.7516 20.8617 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C18.8617 19.7516 18.9266 19.5274 18.9624 19.089C18.9992 18.6389 19 18.0566 19 17.2V13C19 10.7909 17.2091 9 15 9H14.25C12.4551 9 11 7.54493 11 5.75C11 4.23122 9.76878 3 8.25 3H7ZM10 1C16.0751 1 21 5.92487 21 12V17.2413C21 18.0463 21 18.7106 20.9558 19.2518C20.9099 19.8139 20.8113 20.3306 20.564 20.816C20.1805 21.5686 19.5686 22.1805 18.816 22.564C18.3306 22.8113 17.8139 22.9099 17.2518 22.9558C16.7106 23 16.0463 23 15.2413 23H8.75868C7.95372 23 7.28936 23 6.74817 22.9558C6.18608 22.9099 5.66937 22.8113 5.18404 22.564C4.43139 22.1805 3.81947 21.5686 3.43597 20.816C3.18868 20.3306 3.09012 19.8139 3.04419 19.2518C2.99998 18.7106 2.99999 18.0463 3 17.2413L3 5C3 2.79086 4.79086 1 7 1H10ZM17.9474 7.77263C16.7867 5.59506 14.7572 3.95074 12.3216 3.30229C12.7523 4.01713 13 4.85463 13 5.75C13 6.44036 13.5596 7 14.25 7H15C16.0712 7 17.0769 7.28073 17.9474 7.77263Z" ></path> </g></svg>
                                    <span>الرسالة</span>
                                </li>
                                <li id="titlevalues" onclick="action('values')">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.78799 3H14.212C15.0305 2.99999 15.7061 2.99998 16.2561 3.04565C16.8274 3.0931 17.3523 3.19496 17.8439 3.45035C18.5745 3.82985 19.1702 4.42553 19.5497 5.1561C19.805 5.64774 19.9069 6.17258 19.9544 6.74393C20 7.29393 20 7.96946 20 8.78798V17.6227C20 18.5855 20 19.3755 19.9473 19.9759C19.8975 20.5418 19.7878 21.2088 19.348 21.6916C18.8075 22.2847 18.0153 22.5824 17.218 22.4919C16.5691 22.4182 16.0473 21.9884 15.6372 21.5953C15.2022 21.1783 14.6819 20.5837 14.0479 19.8591L13.6707 19.428C13.2362 18.9314 12.9521 18.6081 12.7167 18.3821C12.4887 18.1631 12.3806 18.1107 12.3262 18.0919C12.1148 18.019 11.8852 18.019 11.6738 18.0919C11.6194 18.1107 11.5113 18.1631 11.2833 18.3821C11.0479 18.6081 10.7638 18.9314 10.3293 19.428L9.95209 19.8591C9.31809 20.5837 8.79784 21.1782 8.36276 21.5953C7.95272 21.9884 7.43089 22.4182 6.78196 22.4919C5.9847 22.5824 5.19246 22.2847 4.65205 21.6916C4.21218 21.2088 4.10248 20.5418 4.05275 19.9759C3.99997 19.3755 3.99998 18.5855 4 17.6227V8.78799C3.99999 7.96947 3.99998 7.29393 4.04565 6.74393C4.0931 6.17258 4.19496 5.64774 4.45035 5.1561C4.82985 4.42553 5.42553 3.82985 6.1561 3.45035C6.64774 3.19496 7.17258 3.0931 7.74393 3.04565C8.29393 2.99998 8.96947 2.99999 9.78799 3ZM7.90945 5.03879C7.46401 5.07578 7.23663 5.1428 7.07805 5.22517C6.71277 5.41493 6.41493 5.71277 6.22517 6.07805C6.1428 6.23663 6.07578 6.46401 6.03879 6.90945C6.0008 7.36686 6 7.95898 6 8.83V17.5726C6 18.5978 6.00094 19.2988 6.04506 19.8008C6.08138 20.2139 6.13928 20.3436 6.14447 20.3594C6.2472 20.4633 6.39033 20.5171 6.53606 20.5065C6.55034 20.4981 6.67936 20.4386 6.97871 20.1516C7.34245 19.8029 7.80478 19.2759 8.4799 18.5044L8.85192 18.0792C9.25094 17.6232 9.59229 17.233 9.89819 16.9393C10.2186 16.6317 10.5732 16.3559 11.0214 16.2013C11.6555 15.9825 12.3445 15.9825 12.9786 16.2013C13.4268 16.3559 13.7814 16.6317 14.1018 16.9393C14.4077 17.233 14.7491 17.6232 15.1481 18.0792L15.5201 18.5044C16.1952 19.2759 16.6576 19.8029 17.0213 20.1516C17.3206 20.4386 17.4497 20.4981 17.4639 20.5065C17.6097 20.5171 17.7528 20.4633 17.8555 20.3594C17.8607 20.3436 17.9186 20.2139 17.9549 19.8008C17.9991 19.2988 18 18.5978 18 17.5726V8.83C18 7.95898 17.9992 7.36686 17.9612 6.90945C17.9242 6.46401 17.8572 6.23663 17.7748 6.07805C17.5851 5.71277 17.2872 5.41493 16.9219 5.22517C16.7634 5.1428 16.536 5.07578 16.0905 5.03879C15.6331 5.0008 15.041 5 14.17 5H9.83C8.95898 5 8.36686 5.0008 7.90945 5.03879Z" ></path> </g></svg>
                                    <span>القيم</span>
                                </li>
                                <li id="titlegoals" onclick="action('goals')">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9438 2.4375C11.5271 1.85416 12.4729 1.85417 13.0562 2.4375L15.9129 5.29415C16.4962 5.87748 16.4962 6.82327 15.9129 7.4066L13.0562 10.2632C12.4729 10.8466 11.5271 10.8466 10.9438 10.2632L8.08713 7.4066C7.50379 6.82326 7.50379 5.87748 8.08713 5.29415L10.9438 2.4375ZM12 4.2097L9.85933 6.35037L12 8.49105L14.1407 6.35038L12 4.2097ZM5.29414 8.08712C5.87749 7.50378 6.82327 7.50378 7.4066 8.08712L10.2632 10.9438C10.8466 11.5271 10.8466 12.4729 10.2632 13.0562L7.4066 15.9129C6.82326 16.4962 5.87748 16.4962 5.29414 15.9129L2.4375 13.0562C1.85416 12.4729 1.85417 11.5271 2.4375 10.9438L5.29414 8.08712ZM6.35037 9.85932L4.2097 12L6.35037 14.1407L8.49105 12L6.35037 9.85932ZM16.5934 8.08713C17.1767 7.50379 18.1225 7.50379 18.7059 8.08713L21.5625 10.9438C22.1458 11.5271 22.1458 12.4729 21.5625 13.0562L18.7059 15.9129C18.1225 16.4962 17.1767 16.4962 16.5934 15.9129L13.7368 13.0562C13.1534 12.4729 13.1534 11.5271 13.7368 10.9438L16.5934 8.08713ZM17.6496 9.85932L15.509 12L17.6496 14.1407L19.7903 12L17.6496 9.85932ZM10.9438 13.7368C11.5271 13.1534 12.4729 13.1534 13.0562 13.7368L15.9129 16.5934C16.4962 17.1767 16.4962 18.1225 15.9129 18.7059L13.0562 21.5625C12.4729 22.1458 11.5271 22.1458 10.9438 21.5625L8.08712 18.7059C7.50378 18.1225 7.50378 17.1767 8.08712 16.5934L10.9438 13.7368ZM12 15.509L9.85931 17.6496L12 19.7903L14.1407 17.6496L12 15.509Z"></path> </g></svg>
                                    <span>الأهداف</span>
                                </li>
                            </ul>
                            <div class="edit-club" id="clubManagement" onclick="action('clubManagement')">
                                <svg fill="#ffffff" width="20px" height="20px" viewBox="0 -64 640 640" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M610.5 341.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 368.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm224 32c1.9 0 3.7-.5 5.6-.6 8.3-21.7 20.5-42.1 36.3-59.2 7.4-8 17.9-12.6 28.9-12.6 6.9 0 13.7 1.8 19.6 5.3l7.9 4.6c.8-.5 1.6-.9 2.4-1.4 7-14.6 11.2-30.8 11.2-48 0-61.9-50.1-112-112-112S208 82.1 208 144c0 61.9 50.1 112 112 112zm105.2 194.5c-2.3-1.2-4.6-2.6-6.8-3.9-8.2 4.8-15.3 9.8-27.5 9.8-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-10.7-34.5 24.9-49.7 25.8-50.3-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-3.8-2.2-7-5-9.8-8.1-3.3.2-6.5.6-9.8.6-24.6 0-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h255.4c-3.7-6-6.2-12.8-6.2-20.3v-9.2zM173.1 274.6C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></g></svg>
                                <span>إدارة النادي</span>
                            </div>
                        </div>
                    </section>
                    <secton class="club-info hide" id="about">
                        <div class="club-info-container">
                            <div class="club-section-right-icon">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" id="meteor-icon-kit__regular-info-circle" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier">

                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C12.5523 7 13 7.44772 13 8C13 8.55229 12.5523 9 12 9C11.4477 9 11 8.55229 11 8C11 7.44772 11.4477 7 12 7ZM13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11V16ZM24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" fill="#7C99AC"/>

                                    </g>

                                </svg>
                                <h3>عن النادي</h3>
                            </div>
                            @if($club->description)
                                <p>{{$club->description}}</p>
                            @else
                                <p>لا يوجد تعريف</p>
                            @endif
                        </div>
                        <div style="margin-top: 20px">
                            <p>
                                <span>
                                            <a href="{{$club->telegram}}" target="_blank">
                                                <svg width="20px" height="20px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"/>
                                                    <path d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z" fill="white"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#37BBFE"/>
                                                            <stop offset="1" stop-color="#007DBB"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </span>
                                <span>
                                            <a href="{{$club->whatsapp}}" target="_blank">
                                                <svg width="20px" height="20px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                                                            <path d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z" id="Whatsapp">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                            </p>
                        </div>
                    </secton>
                    <secton class="club-info hide" id="vision">
                        <div class="club-info-container">
                            <div class="club-section-right-icon">
                                <svg fill="#7C99AC" width="20px" height="20px" viewBox="0 0 512 512" id="icon" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" transform="rotate(0)matrix(-1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier"> <g> <path d="M440.2781982,131.7678986c-9.0802917-17.8833008-18.9674988-34.0697021-27.8407898-45.5737991 c-11.1443176-14.4519958-18.9194031-19.487999-25.1811218-16.316803c-0.0097961,0.0051041-0.0204773,0.0035019-0.0309753,0.0087051 l-27.395813,13.9097977c-4.5741882,2.3242035-5.5228882,8.6985016-4.4953003,16.8355026l-173.030304,87.8683014 c-5.8271942,2.9618988-5.344696,12.7245941-2.3424988,24.0621948l-97.103096,49.3139038 c-0.0053024,0.0025024-0.0116959,0.0018921-0.0170975,0.0049133c-0.0068054,0.003479-0.0113983,0.0098877-0.0195007,0.0133972 l-30.4751015,15.4771729c-5.9860992,3.0371094-4.2998009,11.8792114-2.1575012,19.2415161 c2.2610016,7.7893066,6.2862015,17.5524902,11.335701,27.4914856c5.0447044,9.9390259,10.5550041,18.9491272,15.5115013,25.3726196 c3.8649979,5.0187073,8.7333984,10.3812866,13.6799011,10.3812866c1.0397949,0,2.0848007-0.2380066,3.1244965-0.7655945 l30.5042038-15.4899902l0.0011978-0.0007019l0.0005035-0.0006104l97.1118011-49.314209 c7.0712891,8.8869019,12.6060028,13.164917,17.2870941,13.164917c1.2315063,0,2.4008942-0.2922058,3.5288086-0.8640137 l9.623291-4.8862V437.735199c0,2.9259033,2.3694,5.2980042,5.2978973,5.2980042h65.3257141 c2.927887,0,5.2977905-2.3721008,5.2977905-5.2980042V263.1460876l87.3045044-44.3317871 c4.896698,4.7846985,9.0289917,7.1286926,12.6445007,7.1286926c1.3241882,0,2.5814819-0.3079987,3.7819824-0.9184875 l27.3955078-13.9125061c0.701416-0.3565063,1.2648926-0.8612061,1.7240906-1.4396057 C472.7886963,197.7610016,446.0114136,143.0617065,440.2781982,131.7678986z M430.8306885,136.5641022 c4.5735168,9.0079041,7.5125122,16.4660034,9.1990051,21.8596954c-3.3576965-4.5451965-7.6470032-11.3177948-12.2207031-20.322998 c-4.5734863-9.0101929-7.5121765-16.4733963-9.2041016-21.8672028 C421.9623108,120.7814026,426.2569885,127.5540009,430.8306885,136.5641022z M90.6849976,348.8118896 c-3.1923981-2.5249023-10.9636002-12.2749939-19.7123947-29.5040894 c-8.7493019-17.2314148-12.0398026-29.2582092-12.1897011-33.3222961L79.3294983,275.5513 c1.6221008,9.4807129,7.1116028,22.0596008,12.7006989,33.0621948c5.0444031,9.9389954,10.5547028,18.9492188,15.5112,25.3726196 c1.1458054,1.4888,2.3889008,2.9925842,3.6875,4.3927002L90.6849976,348.8118896z M121.2176971,333.3063049 c-3.146698-2.4337158-10.9242935-12.1308899-19.7401962-29.4888916 c-8.8150024-17.3595276-12.0577011-29.3595276-12.1635971-33.3363037l93.8493958-47.6594086 c4.5807953,12.9512024,10.896698,25.9931946,14.1188965,32.3405914 c5.7687988,11.3623962,11.9311066,21.8789978,17.8110046,30.4717102L121.2176971,333.3063049z M317.2228088,432.4371948 h-54.7292175V248.3612976c0-15.0895996,12.2778015-27.3645935,27.3647156-27.3645935 c15.0868835,0,27.364502,12.2749939,27.364502,27.3645935V432.4371948z M327.8190002,251.2608032v-2.8995056 c0-20.9309998-17.0273132-37.9608002-37.9606934-37.9608002c-20.9333191,0-37.9607086,17.0298004-37.9607086,37.9608002v41.454895 l-13.3694,6.7888184c-4.2267914-2.2868958-17.1307983-17.3609009-31.7982941-46.2389069 c-14.6631012-28.878006-19.2212067-48.1945038-18.5691071-52.9544983l169.3483887-85.9988022 c5.3330078,20.091301,17.358429,44.591301,20.9824219,51.7297897c9.0854797,17.8860016,18.9726868,34.069809,27.8461914,45.5738068 c0.5224915,0.6782074,1.0132141,1.2646027,1.5215149,1.9010925L327.8190002,251.2608032z M427.5191956,215.1864929 c-4.8063965-1.9041901-20.8916016-20.0463867-39.5798035-56.8402863 c-18.6831055-36.793808-23.8359985-60.487709-22.5424805-65.4934082l16.8634949-8.5611954 c0.3884888,4.2318954,1.4516907,9.3561935,3.2575989,15.5718994c4.0513,13.9459991,11.289093,31.4777908,20.3693848,49.3664017 c9.0852051,17.8860931,18.9725952,34.0724945,27.8459167,45.5739899c3.9560852,5.1299133,7.4653931,9.0045013,10.6540833,11.815506 L427.5191956,215.1864929z M453.5595093,200.5133057c-6.0222168-4.1442108-21.0215149-22.2089081-38.2243958-56.0796051 c-17.1982117-33.8785019-22.9360046-56.6435013-22.7238159-63.9489975 c3.2994995,2.2693939,9.3063965,8.7509003,16.8822937,19.6918945c-4.832489,3.2578049-3.4069824,11.0220032-1.5003052,17.5780029 c2.074707,7.1296005,5.7532043,16.0569992,10.3684082,25.1424026 c7.8432922,15.4492035,18.5794067,32.7870026,27.2559204,32.7870026c0.6881714,0,1.3578796-0.1531067,2.0189819-0.3816986 C451.990387,187.8524017,453.6756897,196.5133972,453.5595093,200.5133057z"/> <path d="M289.8583069,230.8088989c-9.9753113,0-18.087616,8.1152039-18.087616,18.0877991 c0,9.9726868,8.1123047,18.0880127,18.087616,18.0880127c9.9750977,0,18.0877075-8.1153259,18.0877075-18.0880127 C307.9460144,238.9241028,299.8334045,230.8088989,289.8583069,230.8088989z M289.8583069,256.3884888 c-4.1289063,0-7.4919128-3.3604889-7.4919128-7.4917908s3.3630066-7.4918976,7.4919128-7.4918976 c4.1286926,0,7.4914856,3.3605957,7.4914856,7.4918976S293.9869995,256.3884888,289.8583069,256.3884888z"/> </g> </g>

                        </svg>
                                <h3>الرؤية</h3>
                            </div>
                            @if($club->vision)
                                <p>{{$club->vision}}</p>
                            @else
                                <p>لا توجد رؤية</p>
                            @endif
                        </div>
                    </secton>
                    <secton class="club-info hide" id="message">
                        <div class="club-info-container">
                            <div class="club-section-right-icon">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier"> <title>message_3_line</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Contact" transform="translate(-816.000000, 0.000000)" fill-rule="nonzero"> <g id="message_3_line" transform="translate(816.000000, 0.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M19,3 C20.6569,3 22,4.34315 22,6 L22,16 C22,17.6569 20.6569,19 19,19 L7.33333,19 L4,21.5 C3.17596,22.118 2,21.5301 2,20.5 L2,6 C2,4.34315 3.34315,3 5,3 L19,3 Z M19,5 L5,5 C4.44772,5 4,5.44772 4,6 L4,19 L6.13333,17.4 C6.47953,17.1404 6.90059,17 7.33333,17 L19,17 C19.5523,17 20,16.5523 20,16 L20,6 C20,5.44772 19.5523,5 19,5 Z M11,12 C11.5523,12 12,12.4477 12,13 C12,13.51285 11.613973,13.9355092 11.1166239,13.9932725 L11,14 L8,14 C7.44772,14 7,13.5523 7,13 C7,12.48715 7.38604429,12.0644908 7.88337975,12.0067275 L8,12 L11,12 Z M16,8 C16.5523,8 17,8.44772 17,9 C17,9.55228 16.5523,10 16,10 L8,10 C7.44772,10 7,9.55228 7,9 C7,8.44772 7.44772,8 8,8 L16,8 Z" id="形状" fill="#7C99AC"> </path> </g> </g> </g> </g>

                                </svg>
                                <h3>الرسالة</h3>
                            </div>
                            @if($club->message)
                                <p>{{$club->message}}</p>
                            @else
                                <p>لا توجد رسالة</p>
                            @endif
                        </div>
                    </secton>
                    <secton class="club-info hide" id="clubsManagement">
                        <div class="club-info-container">
                            <div class="club-section-right-icon">
                                <svg fill="#7c99ac" width="20px" height="20px" viewBox="0 -64 640 640" xmlns="http://www.w3.org/2000/svg" stroke="#7c99ac"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M610.5 341.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 368.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm224 32c1.9 0 3.7-.5 5.6-.6 8.3-21.7 20.5-42.1 36.3-59.2 7.4-8 17.9-12.6 28.9-12.6 6.9 0 13.7 1.8 19.6 5.3l7.9 4.6c.8-.5 1.6-.9 2.4-1.4 7-14.6 11.2-30.8 11.2-48 0-61.9-50.1-112-112-112S208 82.1 208 144c0 61.9 50.1 112 112 112zm105.2 194.5c-2.3-1.2-4.6-2.6-6.8-3.9-8.2 4.8-15.3 9.8-27.5 9.8-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-10.7-34.5 24.9-49.7 25.8-50.3-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-3.8-2.2-7-5-9.8-8.1-3.3.2-6.5.6-9.8.6-24.6 0-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h255.4c-3.7-6-6.2-12.8-6.2-20.3v-9.2zM173.1 274.6C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></g></svg>                                <h3>إدارة النادي</h3>
                            </div>
                            <div class="clubsManagement-container">
                                @if($club->clubManager)
                                    <div class="clubsManagement" style="margin: auto; width: fit-content">
                                      <img src="{{asset('uploads/files/'.$club->clubManager->avatar)}}">
                                        <div>
                                            <p>{{$club->clubManager->name}}</p>
                                            <div>
                                                <span>مدير النادي</span>
                                                <span>{{$club->clubManager->email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <p>لا يوجد لنادي {{$club->name}} مدير حتى الآن.</p>
                                @endif
                                <div class="clubsManagement-croup-container">
                                    @if($club->clubManagement->count() >= 1)
                                        @foreach($club->clubManagement as $management)
                                            <div class="clubsManagement">
                                                <img src="{{asset('uploads/files/'.$management->avatar)}}">
                                                <div>
                                                    <p>{{$management->name}}</p>
                                                    <div>
                                                        @foreach($management->administratives as $administrative)
                                                            <span>{{$administrative->name}}</span>
                                                        @endforeach
                                                        <span>{{$management->email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if($club->deputy)
                                            @foreach($club->deputy as $deputy)
                                                <div class="clubsManagement">
                                                    <img src="{{asset('uploads/files/'.$deputy->avatar)}}">
                                                    <div>
                                                        <p>{{$deputy->name}}</p>
                                                        <div>
                                                            @foreach($deputy->userDeputy as $userDeputy)
                                                                <span>نائب مسؤول {{$userDeputy->name}}</span>
                                                            @endforeach
                                                            <span>{{$deputy->email}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                        @endif
                                    @else
                                        <p>لا توجد لنادي {{$club->name}} إدارة حتى الآن.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </secton>
                    <secton class="club-info hide" id="goals">
                        <div class="club-info-container">
                            <div class="club-section-right-icon">
                                <svg fill="#7C99AC" width="20px" height="20px" viewBox="0 0 64 64" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier">

                                        <title/>

                                        <path d="M41.502,8.87372A9.97426,9.97426,0,0,0,40.07013,6.093l-.76825.5636A8.98629,8.98629,0,0,1,40.597,9.17133Z"/>

                                        <path d="M23.38721,9.22156l-.90686-.292A9.98761,9.98761,0,0,0,22,11.99951V12.019l.95239-.01953A9.01972,9.01972,0,0,1,23.38721,9.22156Z"/>

                                        <path d="M24.68787,17.32849A8.98993,8.98993,0,0,1,23.3974,14.811l-.90491.29572a9.92357,9.92357,0,0,0,1.42621,2.78357Z"/>

                                        <path d="M26.66376,4.69238l-.56269-.76819a10.01815,10.01815,0,0,0-2.20513,2.21625l.771.558A9.09893,9.09893,0,0,1,26.66376,4.69238Z"/>

                                        <path d="M31.97394,2.95233,31.97021,2a10.04107,10.04107,0,0,0-3.08685.49567l.29669.90582A9.06354,9.06354,0,0,1,31.97394,2.95233Z"/>

                                        <path d="M42,11.99951v-.03815l-.95239.03815a9.04129,9.04129,0,0,1-.43988,2.79566l.90582.29388A9.9955,9.9955,0,0,0,42,11.99951Z"/>

                                        <path d="M29.21307,20.60962a9.05583,9.05583,0,0,1-2.52185-1.28247l-.559.77a9.92609,9.92609,0,0,0,2.78784,1.41827Z"/>

                                        <path d="M32.00836,21.04767,32.01025,22a10.0183,10.0183,0,0,0,3.08777-.49011l-.2948-.90589A9.06669,9.06669,0,0,1,32.00836,21.04767Z"/>

                                        <path d="M37.851,3.88977A9.95109,9.95109,0,0,0,35.06085,2.478l-.29114.90582a9.0289,9.0289,0,0,1,2.52417,1.27783Z"/>

                                        <path d="M40.0929,17.87445l-.77009-.55987a9.10542,9.10542,0,0,1-2.00054,2.0014l.56085.77A10.04159,10.04159,0,0,0,40.0929,17.87445Z"/>

                                        <polygon points="33.545 9.292 32 6 30.455 9.292 27 9.82 29.5 12.382 28.91 16 32 14.292 35.09 16 34.5 12.382 37 9.82 33.545 9.292"/>

                                        <path d="M49,51l-3-7H42L35,28H29L23,44H19l-.0863.20142L12.42188,34l-.84376.53711,3.76795,5.92108-.65515,1.31036H12v-.7774a2,2,0,1,0-2,0v7.15436L9.28638,51H9L3,62H61L55,51ZM16,51H11.3479l.62231-2.48926A1.00851,1.00851,0,0,0,12,48.26855h1.58594l2.50927,2.50928Zm.94366-2.20184L14.707,46.56152a1.00012,1.00012,0,0,0-.707-.293H12v-3.5h3a.50111.50111,0,0,0,.44727-.27636l.525-1.05,2.46429,3.87244Z"/>

                                    </g>

                                </svg>
                                <h3>الأهداف</h3>
                            </div>
                            <ul>
                                @if($club->goals)
                                    @php
                                        $goalss = explode('،', $club->goals);
                                    @endphp
                                    @foreach($goalss as $goals)
                                        <li>
                                            <div>
                                                <svg fill="#000000" height="10px" width="10px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.008 512.008" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                    <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M500.208,236.915L30.875,2.248C22.32-2.019,11.952-0.099,5.51,7.048c-6.443,7.125-7.317,17.643-2.176,25.749 l142.037,223.211L3.334,479.219c-5.141,8.107-4.267,18.624,2.176,25.749c4.139,4.608,9.941,7.04,15.829,7.04 c3.243,0,6.507-0.725,9.536-2.24l469.333-234.667c7.232-3.627,11.797-11.008,11.797-19.093S507.44,240.541,500.208,236.915z"/> </g> </g> </g>

                                        </svg>
                                                <span>{{$goals}}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <p>لا توجد أهداف</p>
                                @endif
                            </ul>
                        </div>
                    </secton>
                    <secton class="club-info hide" id="values">
                        <div class="club-info-container">
                            <div class="club-section-right-icon">
                                <svg fill="#7C99AC" width="20px" heigh15pxt="20px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier">

                                        <path d="M 27.9999 51.9063 C 41.0546 51.9063 51.9063 41.0781 51.9063 28 C 51.9063 14.9453 41.0312 4.0937 27.9765 4.0937 C 14.8983 4.0937 4.0937 14.9453 4.0937 28 C 4.0937 41.0781 14.9218 51.9063 27.9999 51.9063 Z M 27.9999 47.9219 C 16.9374 47.9219 8.1014 39.0625 8.1014 28 C 8.1014 16.9609 16.9140 8.0781 27.9765 8.0781 C 39.0155 8.0781 47.8983 16.9609 47.9219 28 C 47.9454 39.0625 39.0390 47.9219 27.9999 47.9219 Z M 25.0468 39.7188 C 25.8202 39.7188 26.4530 39.3437 26.9452 38.6172 L 38.5234 20.4063 C 38.8046 19.9375 39.0858 19.3984 39.0858 18.8828 C 39.0858 17.8047 38.1483 17.1484 37.1640 17.1484 C 36.5312 17.1484 35.9452 17.5 35.5234 18.2031 L 24.9296 35.1484 L 19.4921 28.1172 C 18.9765 27.4141 18.4140 27.1563 17.7812 27.1563 C 16.7499 27.1563 15.9296 28 15.9296 29.0547 C 15.9296 29.5703 16.1405 30.0625 16.4687 30.5078 L 23.0312 38.6172 C 23.6640 39.3906 24.2733 39.7188 25.0468 39.7188 Z"/>

                                    </g>

                                </svg>
                                <h3>القيم</h3>
                            </div>
                            <ul>
                                @if($club->values)
                                    @php
                                        $values = explode('،', $club->values);
                                    @endphp
                                    @foreach($values as $value)
                                        <li>
                                            <div>
                                                <svg fill="#000000" height="10px" width="10px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.008 512.008" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                    <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M500.208,236.915L30.875,2.248C22.32-2.019,11.952-0.099,5.51,7.048c-6.443,7.125-7.317,17.643-2.176,25.749 l142.037,223.211L3.334,479.219c-5.141,8.107-4.267,18.624,2.176,25.749c4.139,4.608,9.941,7.04,15.829,7.04 c3.243,0,6.507-0.725,9.536-2.24l469.333-234.667c7.232-3.627,11.797-11.008,11.797-19.093S507.44,240.541,500.208,236.915z"/> </g> </g> </g>

                                        </svg>
                                                <span>{{$value}}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <p>لا توجد قيم</p>
                                @endif
                            </ul>
                        </div>
                    </secton>
                    <section class="club-section" id="home">
                        <diV class="club-section-container">
                            <div class="club-section-right">
                                <div>
                                    <div class="club-section-right-icon">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" id="meteor-icon-kit__regular-info-circle" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                            <g id="SVGRepo_iconCarrier">

                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C12.5523 7 13 7.44772 13 8C13 8.55229 12.5523 9 12 9C11.4477 9 11 8.55229 11 8C11 7.44772 11.4477 7 12 7ZM13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11V16ZM24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" fill="#7C99AC"/>

                                            </g>

                                        </svg>
                                        <h3>عن النادي</h3>
                                    </div>
                                    @if($club->description)
                                        <p>{{$club->description}}</p>
                                    @else
                                        <p>لا يوجد تعريف</p>
                                    @endif
                                </div>
                                <div>
                                    <div class="club-section-right-icon">
                                        <svg fill="#7C99AC" width="20px" height="20px" viewBox="0 0 512 512" id="icon" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" transform="rotate(0)matrix(-1, 0, 0, 1, 0, 0)">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                    <g id="SVGRepo_iconCarrier"> <g> <path d="M440.2781982,131.7678986c-9.0802917-17.8833008-18.9674988-34.0697021-27.8407898-45.5737991 c-11.1443176-14.4519958-18.9194031-19.487999-25.1811218-16.316803c-0.0097961,0.0051041-0.0204773,0.0035019-0.0309753,0.0087051 l-27.395813,13.9097977c-4.5741882,2.3242035-5.5228882,8.6985016-4.4953003,16.8355026l-173.030304,87.8683014 c-5.8271942,2.9618988-5.344696,12.7245941-2.3424988,24.0621948l-97.103096,49.3139038 c-0.0053024,0.0025024-0.0116959,0.0018921-0.0170975,0.0049133c-0.0068054,0.003479-0.0113983,0.0098877-0.0195007,0.0133972 l-30.4751015,15.4771729c-5.9860992,3.0371094-4.2998009,11.8792114-2.1575012,19.2415161 c2.2610016,7.7893066,6.2862015,17.5524902,11.335701,27.4914856c5.0447044,9.9390259,10.5550041,18.9491272,15.5115013,25.3726196 c3.8649979,5.0187073,8.7333984,10.3812866,13.6799011,10.3812866c1.0397949,0,2.0848007-0.2380066,3.1244965-0.7655945 l30.5042038-15.4899902l0.0011978-0.0007019l0.0005035-0.0006104l97.1118011-49.314209 c7.0712891,8.8869019,12.6060028,13.164917,17.2870941,13.164917c1.2315063,0,2.4008942-0.2922058,3.5288086-0.8640137 l9.623291-4.8862V437.735199c0,2.9259033,2.3694,5.2980042,5.2978973,5.2980042h65.3257141 c2.927887,0,5.2977905-2.3721008,5.2977905-5.2980042V263.1460876l87.3045044-44.3317871 c4.896698,4.7846985,9.0289917,7.1286926,12.6445007,7.1286926c1.3241882,0,2.5814819-0.3079987,3.7819824-0.9184875 l27.3955078-13.9125061c0.701416-0.3565063,1.2648926-0.8612061,1.7240906-1.4396057 C472.7886963,197.7610016,446.0114136,143.0617065,440.2781982,131.7678986z M430.8306885,136.5641022 c4.5735168,9.0079041,7.5125122,16.4660034,9.1990051,21.8596954c-3.3576965-4.5451965-7.6470032-11.3177948-12.2207031-20.322998 c-4.5734863-9.0101929-7.5121765-16.4733963-9.2041016-21.8672028 C421.9623108,120.7814026,426.2569885,127.5540009,430.8306885,136.5641022z M90.6849976,348.8118896 c-3.1923981-2.5249023-10.9636002-12.2749939-19.7123947-29.5040894 c-8.7493019-17.2314148-12.0398026-29.2582092-12.1897011-33.3222961L79.3294983,275.5513 c1.6221008,9.4807129,7.1116028,22.0596008,12.7006989,33.0621948c5.0444031,9.9389954,10.5547028,18.9492188,15.5112,25.3726196 c1.1458054,1.4888,2.3889008,2.9925842,3.6875,4.3927002L90.6849976,348.8118896z M121.2176971,333.3063049 c-3.146698-2.4337158-10.9242935-12.1308899-19.7401962-29.4888916 c-8.8150024-17.3595276-12.0577011-29.3595276-12.1635971-33.3363037l93.8493958-47.6594086 c4.5807953,12.9512024,10.896698,25.9931946,14.1188965,32.3405914 c5.7687988,11.3623962,11.9311066,21.8789978,17.8110046,30.4717102L121.2176971,333.3063049z M317.2228088,432.4371948 h-54.7292175V248.3612976c0-15.0895996,12.2778015-27.3645935,27.3647156-27.3645935 c15.0868835,0,27.364502,12.2749939,27.364502,27.3645935V432.4371948z M327.8190002,251.2608032v-2.8995056 c0-20.9309998-17.0273132-37.9608002-37.9606934-37.9608002c-20.9333191,0-37.9607086,17.0298004-37.9607086,37.9608002v41.454895 l-13.3694,6.7888184c-4.2267914-2.2868958-17.1307983-17.3609009-31.7982941-46.2389069 c-14.6631012-28.878006-19.2212067-48.1945038-18.5691071-52.9544983l169.3483887-85.9988022 c5.3330078,20.091301,17.358429,44.591301,20.9824219,51.7297897c9.0854797,17.8860016,18.9726868,34.069809,27.8461914,45.5738068 c0.5224915,0.6782074,1.0132141,1.2646027,1.5215149,1.9010925L327.8190002,251.2608032z M427.5191956,215.1864929 c-4.8063965-1.9041901-20.8916016-20.0463867-39.5798035-56.8402863 c-18.6831055-36.793808-23.8359985-60.487709-22.5424805-65.4934082l16.8634949-8.5611954 c0.3884888,4.2318954,1.4516907,9.3561935,3.2575989,15.5718994c4.0513,13.9459991,11.289093,31.4777908,20.3693848,49.3664017 c9.0852051,17.8860931,18.9725952,34.0724945,27.8459167,45.5739899c3.9560852,5.1299133,7.4653931,9.0045013,10.6540833,11.815506 L427.5191956,215.1864929z M453.5595093,200.5133057c-6.0222168-4.1442108-21.0215149-22.2089081-38.2243958-56.0796051 c-17.1982117-33.8785019-22.9360046-56.6435013-22.7238159-63.9489975 c3.2994995,2.2693939,9.3063965,8.7509003,16.8822937,19.6918945c-4.832489,3.2578049-3.4069824,11.0220032-1.5003052,17.5780029 c2.074707,7.1296005,5.7532043,16.0569992,10.3684082,25.1424026 c7.8432922,15.4492035,18.5794067,32.7870026,27.2559204,32.7870026c0.6881714,0,1.3578796-0.1531067,2.0189819-0.3816986 C451.990387,187.8524017,453.6756897,196.5133972,453.5595093,200.5133057z"/> <path d="M289.8583069,230.8088989c-9.9753113,0-18.087616,8.1152039-18.087616,18.0877991 c0,9.9726868,8.1123047,18.0880127,18.087616,18.0880127c9.9750977,0,18.0877075-8.1153259,18.0877075-18.0880127 C307.9460144,238.9241028,299.8334045,230.8088989,289.8583069,230.8088989z M289.8583069,256.3884888 c-4.1289063,0-7.4919128-3.3604889-7.4919128-7.4917908s3.3630066-7.4918976,7.4919128-7.4918976 c4.1286926,0,7.4914856,3.3605957,7.4914856,7.4918976S293.9869995,256.3884888,289.8583069,256.3884888z"/> </g> </g>

                                        </svg>
                                        <h3>الرؤية</h3>
                                    </div>
                                    @if($club->vision)
                                        <p>{{$club->vision}}</p>
                                    @else
                                        <p>لا توجد رؤية</p>
                                    @endif
                                </div>
                                <div>
                                    <div class="club-section-right-icon">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                            <g id="SVGRepo_iconCarrier"> <title>message_3_line</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Contact" transform="translate(-816.000000, 0.000000)" fill-rule="nonzero"> <g id="message_3_line" transform="translate(816.000000, 0.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M19,3 C20.6569,3 22,4.34315 22,6 L22,16 C22,17.6569 20.6569,19 19,19 L7.33333,19 L4,21.5 C3.17596,22.118 2,21.5301 2,20.5 L2,6 C2,4.34315 3.34315,3 5,3 L19,3 Z M19,5 L5,5 C4.44772,5 4,5.44772 4,6 L4,19 L6.13333,17.4 C6.47953,17.1404 6.90059,17 7.33333,17 L19,17 C19.5523,17 20,16.5523 20,16 L20,6 C20,5.44772 19.5523,5 19,5 Z M11,12 C11.5523,12 12,12.4477 12,13 C12,13.51285 11.613973,13.9355092 11.1166239,13.9932725 L11,14 L8,14 C7.44772,14 7,13.5523 7,13 C7,12.48715 7.38604429,12.0644908 7.88337975,12.0067275 L8,12 L11,12 Z M16,8 C16.5523,8 17,8.44772 17,9 C17,9.55228 16.5523,10 16,10 L8,10 C7.44772,10 7,9.55228 7,9 C7,8.44772 7.44772,8 8,8 L16,8 Z" id="形状" fill="#7C99AC"> </path> </g> </g> </g> </g>

                                        </svg>
                                        <h3>الرسالة</h3>
                                    </div>
                                    @if($club->message)
                                        <p>{{$club->message}}</p>
                                    @else
                                        <p>لا توجد رؤية</p>
                                    @endif
                                </div>
                                <div>
                                    <div class="club-section-right-icon">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                            <g id="SVGRepo_iconCarrier"> <title>message_3_line</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Contact" transform="translate(-816.000000, 0.000000)" fill-rule="nonzero"> <g id="message_3_line" transform="translate(816.000000, 0.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M19,3 C20.6569,3 22,4.34315 22,6 L22,16 C22,17.6569 20.6569,19 19,19 L7.33333,19 L4,21.5 C3.17596,22.118 2,21.5301 2,20.5 L2,6 C2,4.34315 3.34315,3 5,3 L19,3 Z M19,5 L5,5 C4.44772,5 4,5.44772 4,6 L4,19 L6.13333,17.4 C6.47953,17.1404 6.90059,17 7.33333,17 L19,17 C19.5523,17 20,16.5523 20,16 L20,6 C20,5.44772 19.5523,5 19,5 Z M11,12 C11.5523,12 12,12.4477 12,13 C12,13.51285 11.613973,13.9355092 11.1166239,13.9932725 L11,14 L8,14 C7.44772,14 7,13.5523 7,13 C7,12.48715 7.38604429,12.0644908 7.88337975,12.0067275 L8,12 L11,12 Z M16,8 C16.5523,8 17,8.44772 17,9 C17,9.55228 16.5523,10 16,10 L8,10 C7.44772,10 7,9.55228 7,9 C7,8.44772 7.44772,8 8,8 L16,8 Z" id="形状" fill="#7C99AC"> </path> </g> </g> </g> </g>

                                        </svg>
                                        <h3>التواصل الاجتماعي</h3>
                                    </div>
                                    <p>
                                        <span>
                                            <a href="{{$club->telegram}}" target="_blank">
                                                <svg width="20px" height="20px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"/>
                                                    <path d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z" fill="white"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#37BBFE"/>
                                                            <stop offset="1" stop-color="#007DBB"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="{{$club->whatsapp}}" target="_blank">
                                                <svg width="20px" height="20px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                                                            <path d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z" id="Whatsapp">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="club-section-left">
                                <div class="club-section-left-head">
                                    <ul>
                                        <li wire:click="allActivity()">جميع الفعاليات</li>
                                        <li wire:click="activityToDay()">فعاليات الأسبوع</li>
                                        <li wire:click="posts()">المنشورات</li>
                                    </ul>
                                </div>
                                @if($allActivity  == true)
                                    @if($activities->count() >= 1)
                                        @foreach($activities as $activity)
                                            <div class="club-section-left-item">
                                                <div class="b-index-content">
                                                    <div>
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                            <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                                                        </svg>
                                                        <h3>{{$activity->title}}</h3>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li>
                                                                <svg fill="#86C8BC" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 343.501 343.501" xml:space="preserve">
                                                                 <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                                                                    <g id="SVGRepo_iconCarrier"> <path d="M64.552,332.042c-4.418,0-8-3.582-8-8v-29.46H44.534c-4.418,0-8-3.582-8-8s3.582-8,8-8h19.842 c0.117-0.002,0.235-0.002,0.353,0h261.189c4.418,0,8,3.582,8,8s-3.582,8-8,8H72.552v29.46 C72.552,328.46,68.971,332.042,64.552,332.042z M7.999,294.587c-1.001,0-2.02-0.189-3.005-0.589 c-4.094-1.661-6.066-6.327-4.405-10.421l21.742-53.585c9.604-23.664,26.819-55.124,65.279-55.124h28.838 c20.719,0,37.778,9.221,50.701,27.406c0.344,0.465,3.79,4.936,6.83,8.881c2.19,2.843,4.543,5.895,6.5,8.44 c2.693,3.503,2.036,8.525-1.467,11.219c-3.503,2.694-8.525,2.036-11.218-1.467c-1.954-2.541-4.302-5.589-6.489-8.427 c-5.854-7.598-6.933-9.003-7.213-9.399c-6.237-8.777-13.234-14.635-21.414-17.804l-24.187,33.144 c-1.506,2.063-3.908,3.284-6.462,3.284s-4.956-1.221-6.462-3.284l-24.187-33.144c-14.029,5.446-24.739,18.92-34.224,42.291 l-21.741,53.584C14.154,292.702,11.16,294.587,7.999,294.587z M89.109,190.869l12.921,17.706l12.921-17.706H89.109z M225.597,263.385h-87.934c-4.418,0-8-3.582-8-8s3.582-8,8-8h87.934c4.418,0,8,3.582,8,8S230.016,263.385,225.597,263.385z M335.502,196.862c-3.161,0-6.155-1.885-7.416-4.994l-17.976-44.304c-7.448-18.352-15.785-29.147-26.546-33.775l-19.345,26.509 c-1.506,2.063-3.907,3.284-6.462,3.284c-2.555,0-4.956-1.221-6.462-3.284l-19.353-26.518c-6.102,2.61-11.376,7.17-16.115,13.838 c-0.486,0.683-13.385,17.904-17.485,23.241c-2.692,3.504-7.714,4.161-11.218,1.47c-3.503-2.692-4.161-7.715-1.469-11.218 c4.09-5.323,16.519-21.926,17.173-22.82c10.917-15.363,25.4-23.184,43.006-23.184h23.844c32.636,0,47.167,26.504,55.259,46.44 l17.976,44.305c1.661,4.094-0.311,8.76-4.405,10.421C337.522,196.672,336.503,196.862,335.502,196.862z M249.799,111.107 l7.958,10.903l7.957-10.903H249.799z M297.508,180.639H177.147c-4.418,0-8-3.582-8-8s3.582-8,8-8h120.361c4.418,0,8,3.582,8,8 S301.926,180.639,297.508,180.639z M102.03,160.667c-23.977,0-43.483-19.507-43.483-43.484c0-19.743,13.228-36.456,31.285-41.742 c0.093-0.03,0.188-0.059,0.283-0.086c2.178-0.619,4.402-1.066,6.651-1.338c1.402-0.17,2.827-0.273,4.267-0.306 c0.017-0.011,0.03-0.001,0.046-0.002c0.015-0.001,0.031,0,0.045-0.001c0.013,0,0.027,0,0.04,0c0.011-0.001,0.021-0.001,0.035-0.001 c0.256-0.005,0.518-0.012,0.769-0.008c0.016-0.001,0.034-0.001,0.054,0c0.004,0,0.009,0,0.009,0c0.011,0,0.019-0.001,0.031,0 c0.022,0,0.043,0,0.065,0h0c0.012,0,0.024,0.001,0.034,0c0.011,0,0.022,0,0.034,0c0.012,0,0.027,0,0.036,0 c0.012,0,0.026,0.001,0.038,0.001c0.013,0,0.027,0,0.04,0c0.001,0,0.004,0,0.005,0c22.137,0.14,40.463,16.636,42.925,38.576 c0.182,1.61,0.275,3.248,0.275,4.906C145.512,141.161,126.006,160.667,102.03,160.667z M86.71,94.375 c-7.333,4.941-12.164,13.32-12.164,22.808c0,15.155,12.329,27.484,27.483,27.484c13.166,0,24.198-9.305,26.867-21.685 c-0.429,0.013-0.859,0.019-1.289,0.019C108.849,123.001,92.781,111.254,86.71,94.375z M102.053,89.7 c4.037,10.228,13.96,17.281,25.504,17.302c-4.022-10.049-13.814-17.189-25.256-17.301c-0.013,0-0.027,0-0.04,0 c-0.012,0.001-0.025,0.001-0.039,0c-0.012-0.001-0.026-0.002-0.04-0.001c-0.013,0-0.026,0-0.039,0c-0.014,0-0.027,0-0.04,0 C102.087,89.699,102.071,89.699,102.053,89.7z M257.757,86.136c-20.588,0-37.338-16.75-37.338-37.338 c0-20.589,16.75-37.34,37.338-37.34c20.589,0,37.339,16.751,37.339,37.34C295.096,69.386,278.345,86.136,257.757,86.136z M257.757,27.458c-11.766,0-21.338,9.573-21.338,21.34c0,11.766,9.572,21.338,21.338,21.338c11.767,0,21.339-9.572,21.339-21.338 C279.096,37.032,269.523,27.458,257.757,27.458z"/> </g>
                                                                </svg>
                                                                <a href="{{route('club.profile', $club->slug)}}">
                                                                    <span>{{$club->name}}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <title>location_2_line</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="location_2_line"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M6.72009,16.6398 C7.25029,16.4853 7.80543,16.7897 7.96003,17.32 C8.11462,17.8502 7.81012,18.4053 7.27991,18.5599 C6.77914,18.7059 6.41926,18.8607 6.18866,18.9996 C6.42735,19.1433 6.80251,19.303 7.32497,19.4523 C8.47958,19.7822 10.1328,19.9996 12,19.9996 C13.8672,19.9996 15.5204,19.7822 16.675,19.4523 C17.1975,19.303 17.5726,19.1433 17.8113,18.9996 C17.5807,18.8607 17.2209,18.7059 16.7201,18.5599 C16.1899,18.4053 15.8854,17.8502 16.04,17.32 C16.1946,16.7897 16.7497,16.4853 17.2799,16.6398 C17.948,16.8346 18.5608,17.0847 19.0293,17.4058 C19.4655,17.7048 20,18.2259 20,18.9996 C20,19.7832 19.4522,20.3078 19.0097,20.6067 C18.5322,20.9292 17.9071,21.1803 17.2245,21.3753 C15.8456,21.7693 13.9988,21.9996 12,21.9996 C10.0012,21.9996 8.15442,21.7693 6.77553,21.3753 C6.09289,21.1803 5.46776,20.9292 4.99033,20.6067 C4.54781,20.3078 4,19.7832 4,18.9996 C4,18.2259 4.53454,17.7048 4.97068,17.4058 C5.43918,17.0847 6.05202,16.8346 6.72009,16.6398 Z M12,2 C16.1421,2 19.5,5.3579 19.5,9.5 C19.5,12.0679 18.1005,14.1564 16.6502,15.6391 C16.0352526,16.2678158 15.3907163,16.8089881 14.7970227,17.2550925 C14.2033291,17.7011969 12.8455,18.5365 12.8455,18.5365 C12.3176,18.8347 11.6824,18.8347 11.1545,18.5365 C10.6266,18.2383 9.79665913,17.7011969 9.20296073,17.2550925 C8.60926233,16.8089881 7.96472316,16.2678158 7.34978,15.6391 C5.89953,14.1564 4.5,12.0679 4.5,9.5 C4.5,5.3579 7.85786,2 12,2 Z M12,4 C8.96243,4 6.5,6.4624 6.5,9.5 C6.5,11.3165 7.49565,12.928 8.77956,14.2406 C9.74554125,15.2281938 10.8105063,15.9795176 11.5474563,16.4423284 C11.8202896,16.6080137 11.9711375,16.6992375 12,16.716 L12.45254,16.4423284 C13.1894801,15.9795176 14.2544187,15.2281938 15.2204,14.2406 C16.5044,12.928 17.5,11.3165 17.5,9.5 C17.5,6.4624 15.0376,4 12,4 Z M12,6.5 C13.6569,6.5 15,7.8431 15,9.5 C15,11.1569 13.6569,12.5 12,12.5 C10.3431,12.5 9,11.1569 9,9.5 C9,7.8431 10.3431,6.5 12,6.5 Z M12,8.5 C11.4477,8.5 11,8.9477 11,9.5 C11,10.0523 11.4477,10.5 12,10.5 C12.5523,10.5 13,10.0523 13,9.5 C13,8.9477 12.5523,8.5 12,8.5 Z" id="形状" fill="#86C8BC" fill-rule="nonzero"> </path> </g> </g> </g>
                                                                </svg>
                                                                <span>{{$activity->location->name}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <title>time / 21 - time, clock, date, time icon</title> <g id="Free-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"> <g transform="translate(-451.000000, -674.000000)" id="Group" stroke="#86C8BC" stroke-width="2"> <g transform="translate(449.000000, 672.000000)" id="Shape"> <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z"> </path> <polyline points="12 8 12 12 9 15"> </polyline> </g> </g> </g> </g>

                                                                </svg>
                                                                <span>من</span>
                                                                <span>{{$activity->from}}</span>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 24.00 24.00" id="meteor-icon-kit__solid-reply" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#FD8A8A" stroke-width="0.00024000000000000003">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 7.5H5.12132L6.56066 8.9393C7.14645 9.5251 7.14645 10.4749 6.56066 11.0607C5.97487 11.6464 5.02513 11.6464 4.43934 11.0607L0.43934 7.06066C-0.146447 6.47487 -0.146447 5.52513 0.43934 4.93934L4.43934 0.93934C5.02513 0.35355 5.97487 0.35355 6.56066 0.93934C7.14645 1.52513 7.14645 2.47487 6.56066 3.06066L5.12132 4.5H13.5C19.299 4.5 24 9.201 24 15V17C24 17.8284 23.3284 18.5 22.5 18.5C21.6716 18.5 21 17.8284 21 17V15C21 10.8579 18.1421 7.5 14 7.5z" fill="#86C8BC"/>
                                                                </svg>
                                                                <span>إلى</span>
                                                                <span>{{$activity->to}}</span>
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
                                                                <span>{{$activity->presenter}}</span>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 6.3500002 6.3500002" id="svg1976" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <defs id="defs1970"/> <g id="layer1" style="display:inline"> <path d="m 4.8950508,3.7044845 c -0.6607016,0 -1.1895931,0.5283747 -1.1895931,1.1890748 0,0.66069 0.5288915,1.1916585 1.1895931,1.1916585 0.660699,0 1.1911413,-0.5309685 1.1911413,-1.1916585 0,-0.6607001 -0.5304423,-1.1890748 -1.1911413,-1.1890748 z M 4.6997142,4.3700769 A 0.2645835,0.2645835 0 0 1 4.9632631,4.6356937 V 4.8997603 H 5.2288809 A 0.2645835,0.2645835 0 0 1 5.4924297,5.1653774 0.2645835,0.2645835 0 0 1 5.2288809,5.428927 H 4.6997142 A 0.26460996,0.26460996 0 0 1 4.4340964,5.1653774 V 4.6356937 A 0.2645835,0.2645835 0 0 1 4.6997142,4.3700769 Z" id="path2452" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.8519521,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path712" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 4.2328121,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path714" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.4456487,0.79406771 c -0.6493404,0 -1.1818408,0.53042299 -1.1818408,1.17977299 v 2.1368205 c 0,0.6493502 0.5325004,1.1813233 1.1818408,1.1813233 H 3.2248685 C 3.194235,5.1638306 3.176291,5.0308032 3.176291,4.8935593 c 0,-0.94668 0.772078,-1.7187583 1.7187598,-1.7187583 0.3405214,0 0.6576695,0.1013863 0.9255231,0.2733683 V 1.9738407 c 0,-0.64935 -0.5304208,-1.17977299 -1.1797718,-1.17977299 z M 0.8053782,1.8529179 h 4.474144 c 0.00709,0.03921 0.01188,0.079325 0.01188,0.1209228 V 2.3820845 H 0.7934852 V 1.9738407 c 0,-0.041598 0.00476,-0.081712 0.01188,-0.1209228 z M 1.588275,2.7510543 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,3.0166712 0.2645835,0.2645835 0 0 1 2.1174417,3.2802211 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,3.0166712 0.2645835,0.2645835 0 0 1 1.588275,2.7510543 Z m 1.5978347,0 H 3.7152764 A 0.2645835,0.2645835 0 0 1 3.9788278,3.0166712 0.2645835,0.2645835 0 0 1 3.7152764,3.2802211 H 3.1861097 A 0.2645835,0.2645835 0 0 1 2.9204945,3.0166712 0.2645835,0.2645835 0 0 1 3.1861097,2.7510543 Z M 1.588275,3.8739832 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,4.1380498 0.2645835,0.2645835 0 0 1 2.1174417,4.4036666 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,4.1380498 0.2645835,0.2645835 0 0 1 1.588275,3.8739832 Z" id="path716" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> </g> </g>
                                                                </svg>
                                                                <span>{{$activity->date}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="i-pagination">
                                            {{$activities->links('pagination.default')}}
                                        </div>
                                    @else
                                        <span class="no-activities">لا توجد فعاليات  {{$club->name}}</span>
                                    @endif
                                @endif
                                @if($activityToDay  == true)
                                    @if($activities->count() > 0)
                                        @foreach($activities as $activity)
                                            <div class="club-section-left-item">
                                                <div class="b-index-content">
                                                    <div>
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                            <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                                                        </svg>
                                                        <h3>{{$activity->title}}</h3>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li>
                                                                <svg fill="#86C8BC" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 343.501 343.501" xml:space="preserve">
                                                                 <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                                                                    <g id="SVGRepo_iconCarrier"> <path d="M64.552,332.042c-4.418,0-8-3.582-8-8v-29.46H44.534c-4.418,0-8-3.582-8-8s3.582-8,8-8h19.842 c0.117-0.002,0.235-0.002,0.353,0h261.189c4.418,0,8,3.582,8,8s-3.582,8-8,8H72.552v29.46 C72.552,328.46,68.971,332.042,64.552,332.042z M7.999,294.587c-1.001,0-2.02-0.189-3.005-0.589 c-4.094-1.661-6.066-6.327-4.405-10.421l21.742-53.585c9.604-23.664,26.819-55.124,65.279-55.124h28.838 c20.719,0,37.778,9.221,50.701,27.406c0.344,0.465,3.79,4.936,6.83,8.881c2.19,2.843,4.543,5.895,6.5,8.44 c2.693,3.503,2.036,8.525-1.467,11.219c-3.503,2.694-8.525,2.036-11.218-1.467c-1.954-2.541-4.302-5.589-6.489-8.427 c-5.854-7.598-6.933-9.003-7.213-9.399c-6.237-8.777-13.234-14.635-21.414-17.804l-24.187,33.144 c-1.506,2.063-3.908,3.284-6.462,3.284s-4.956-1.221-6.462-3.284l-24.187-33.144c-14.029,5.446-24.739,18.92-34.224,42.291 l-21.741,53.584C14.154,292.702,11.16,294.587,7.999,294.587z M89.109,190.869l12.921,17.706l12.921-17.706H89.109z M225.597,263.385h-87.934c-4.418,0-8-3.582-8-8s3.582-8,8-8h87.934c4.418,0,8,3.582,8,8S230.016,263.385,225.597,263.385z M335.502,196.862c-3.161,0-6.155-1.885-7.416-4.994l-17.976-44.304c-7.448-18.352-15.785-29.147-26.546-33.775l-19.345,26.509 c-1.506,2.063-3.907,3.284-6.462,3.284c-2.555,0-4.956-1.221-6.462-3.284l-19.353-26.518c-6.102,2.61-11.376,7.17-16.115,13.838 c-0.486,0.683-13.385,17.904-17.485,23.241c-2.692,3.504-7.714,4.161-11.218,1.47c-3.503-2.692-4.161-7.715-1.469-11.218 c4.09-5.323,16.519-21.926,17.173-22.82c10.917-15.363,25.4-23.184,43.006-23.184h23.844c32.636,0,47.167,26.504,55.259,46.44 l17.976,44.305c1.661,4.094-0.311,8.76-4.405,10.421C337.522,196.672,336.503,196.862,335.502,196.862z M249.799,111.107 l7.958,10.903l7.957-10.903H249.799z M297.508,180.639H177.147c-4.418,0-8-3.582-8-8s3.582-8,8-8h120.361c4.418,0,8,3.582,8,8 S301.926,180.639,297.508,180.639z M102.03,160.667c-23.977,0-43.483-19.507-43.483-43.484c0-19.743,13.228-36.456,31.285-41.742 c0.093-0.03,0.188-0.059,0.283-0.086c2.178-0.619,4.402-1.066,6.651-1.338c1.402-0.17,2.827-0.273,4.267-0.306 c0.017-0.011,0.03-0.001,0.046-0.002c0.015-0.001,0.031,0,0.045-0.001c0.013,0,0.027,0,0.04,0c0.011-0.001,0.021-0.001,0.035-0.001 c0.256-0.005,0.518-0.012,0.769-0.008c0.016-0.001,0.034-0.001,0.054,0c0.004,0,0.009,0,0.009,0c0.011,0,0.019-0.001,0.031,0 c0.022,0,0.043,0,0.065,0h0c0.012,0,0.024,0.001,0.034,0c0.011,0,0.022,0,0.034,0c0.012,0,0.027,0,0.036,0 c0.012,0,0.026,0.001,0.038,0.001c0.013,0,0.027,0,0.04,0c0.001,0,0.004,0,0.005,0c22.137,0.14,40.463,16.636,42.925,38.576 c0.182,1.61,0.275,3.248,0.275,4.906C145.512,141.161,126.006,160.667,102.03,160.667z M86.71,94.375 c-7.333,4.941-12.164,13.32-12.164,22.808c0,15.155,12.329,27.484,27.483,27.484c13.166,0,24.198-9.305,26.867-21.685 c-0.429,0.013-0.859,0.019-1.289,0.019C108.849,123.001,92.781,111.254,86.71,94.375z M102.053,89.7 c4.037,10.228,13.96,17.281,25.504,17.302c-4.022-10.049-13.814-17.189-25.256-17.301c-0.013,0-0.027,0-0.04,0 c-0.012,0.001-0.025,0.001-0.039,0c-0.012-0.001-0.026-0.002-0.04-0.001c-0.013,0-0.026,0-0.039,0c-0.014,0-0.027,0-0.04,0 C102.087,89.699,102.071,89.699,102.053,89.7z M257.757,86.136c-20.588,0-37.338-16.75-37.338-37.338 c0-20.589,16.75-37.34,37.338-37.34c20.589,0,37.339,16.751,37.339,37.34C295.096,69.386,278.345,86.136,257.757,86.136z M257.757,27.458c-11.766,0-21.338,9.573-21.338,21.34c0,11.766,9.572,21.338,21.338,21.338c11.767,0,21.339-9.572,21.339-21.338 C279.096,37.032,269.523,27.458,257.757,27.458z"/> </g>
                                                                </svg>
                                                                <a href="{{route('club.profile', $club->slug)}}">
                                                                    <span>{{$club->name}}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <title>location_2_line</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="location_2_line"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M6.72009,16.6398 C7.25029,16.4853 7.80543,16.7897 7.96003,17.32 C8.11462,17.8502 7.81012,18.4053 7.27991,18.5599 C6.77914,18.7059 6.41926,18.8607 6.18866,18.9996 C6.42735,19.1433 6.80251,19.303 7.32497,19.4523 C8.47958,19.7822 10.1328,19.9996 12,19.9996 C13.8672,19.9996 15.5204,19.7822 16.675,19.4523 C17.1975,19.303 17.5726,19.1433 17.8113,18.9996 C17.5807,18.8607 17.2209,18.7059 16.7201,18.5599 C16.1899,18.4053 15.8854,17.8502 16.04,17.32 C16.1946,16.7897 16.7497,16.4853 17.2799,16.6398 C17.948,16.8346 18.5608,17.0847 19.0293,17.4058 C19.4655,17.7048 20,18.2259 20,18.9996 C20,19.7832 19.4522,20.3078 19.0097,20.6067 C18.5322,20.9292 17.9071,21.1803 17.2245,21.3753 C15.8456,21.7693 13.9988,21.9996 12,21.9996 C10.0012,21.9996 8.15442,21.7693 6.77553,21.3753 C6.09289,21.1803 5.46776,20.9292 4.99033,20.6067 C4.54781,20.3078 4,19.7832 4,18.9996 C4,18.2259 4.53454,17.7048 4.97068,17.4058 C5.43918,17.0847 6.05202,16.8346 6.72009,16.6398 Z M12,2 C16.1421,2 19.5,5.3579 19.5,9.5 C19.5,12.0679 18.1005,14.1564 16.6502,15.6391 C16.0352526,16.2678158 15.3907163,16.8089881 14.7970227,17.2550925 C14.2033291,17.7011969 12.8455,18.5365 12.8455,18.5365 C12.3176,18.8347 11.6824,18.8347 11.1545,18.5365 C10.6266,18.2383 9.79665913,17.7011969 9.20296073,17.2550925 C8.60926233,16.8089881 7.96472316,16.2678158 7.34978,15.6391 C5.89953,14.1564 4.5,12.0679 4.5,9.5 C4.5,5.3579 7.85786,2 12,2 Z M12,4 C8.96243,4 6.5,6.4624 6.5,9.5 C6.5,11.3165 7.49565,12.928 8.77956,14.2406 C9.74554125,15.2281938 10.8105063,15.9795176 11.5474563,16.4423284 C11.8202896,16.6080137 11.9711375,16.6992375 12,16.716 L12.45254,16.4423284 C13.1894801,15.9795176 14.2544187,15.2281938 15.2204,14.2406 C16.5044,12.928 17.5,11.3165 17.5,9.5 C17.5,6.4624 15.0376,4 12,4 Z M12,6.5 C13.6569,6.5 15,7.8431 15,9.5 C15,11.1569 13.6569,12.5 12,12.5 C10.3431,12.5 9,11.1569 9,9.5 C9,7.8431 10.3431,6.5 12,6.5 Z M12,8.5 C11.4477,8.5 11,8.9477 11,9.5 C11,10.0523 11.4477,10.5 12,10.5 C12.5523,10.5 13,10.0523 13,9.5 C13,8.9477 12.5523,8.5 12,8.5 Z" id="形状" fill="#86C8BC" fill-rule="nonzero"> </path> </g> </g> </g>
                                                                </svg>
                                                                <span>{{$activity->location->name}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <title>time / 21 - time, clock, date, time icon</title> <g id="Free-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"> <g transform="translate(-451.000000, -674.000000)" id="Group" stroke="#86C8BC" stroke-width="2"> <g transform="translate(449.000000, 672.000000)" id="Shape"> <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z"> </path> <polyline points="12 8 12 12 9 15"> </polyline> </g> </g> </g> </g>

                                                                </svg>
                                                                <span>من</span>
                                                                <span>{{$activity->from}}</span>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 24.00 24.00" id="meteor-icon-kit__solid-reply" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#FD8A8A" stroke-width="0.00024000000000000003">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 7.5H5.12132L6.56066 8.9393C7.14645 9.5251 7.14645 10.4749 6.56066 11.0607C5.97487 11.6464 5.02513 11.6464 4.43934 11.0607L0.43934 7.06066C-0.146447 6.47487 -0.146447 5.52513 0.43934 4.93934L4.43934 0.93934C5.02513 0.35355 5.97487 0.35355 6.56066 0.93934C7.14645 1.52513 7.14645 2.47487 6.56066 3.06066L5.12132 4.5H13.5C19.299 4.5 24 9.201 24 15V17C24 17.8284 23.3284 18.5 22.5 18.5C21.6716 18.5 21 17.8284 21 17V15C21 10.8579 18.1421 7.5 14 7.5z" fill="#86C8BC"/>
                                                                </svg>
                                                                <span>إلى</span>
                                                                <span>{{$activity->to}}</span>
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
                                                                <span>{{$activity->presenter}}</span>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 6.3500002 6.3500002" id="svg1976" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <defs id="defs1970"/> <g id="layer1" style="display:inline"> <path d="m 4.8950508,3.7044845 c -0.6607016,0 -1.1895931,0.5283747 -1.1895931,1.1890748 0,0.66069 0.5288915,1.1916585 1.1895931,1.1916585 0.660699,0 1.1911413,-0.5309685 1.1911413,-1.1916585 0,-0.6607001 -0.5304423,-1.1890748 -1.1911413,-1.1890748 z M 4.6997142,4.3700769 A 0.2645835,0.2645835 0 0 1 4.9632631,4.6356937 V 4.8997603 H 5.2288809 A 0.2645835,0.2645835 0 0 1 5.4924297,5.1653774 0.2645835,0.2645835 0 0 1 5.2288809,5.428927 H 4.6997142 A 0.26460996,0.26460996 0 0 1 4.4340964,5.1653774 V 4.6356937 A 0.2645835,0.2645835 0 0 1 4.6997142,4.3700769 Z" id="path2452" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.8519521,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path712" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 4.2328121,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path714" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.4456487,0.79406771 c -0.6493404,0 -1.1818408,0.53042299 -1.1818408,1.17977299 v 2.1368205 c 0,0.6493502 0.5325004,1.1813233 1.1818408,1.1813233 H 3.2248685 C 3.194235,5.1638306 3.176291,5.0308032 3.176291,4.8935593 c 0,-0.94668 0.772078,-1.7187583 1.7187598,-1.7187583 0.3405214,0 0.6576695,0.1013863 0.9255231,0.2733683 V 1.9738407 c 0,-0.64935 -0.5304208,-1.17977299 -1.1797718,-1.17977299 z M 0.8053782,1.8529179 h 4.474144 c 0.00709,0.03921 0.01188,0.079325 0.01188,0.1209228 V 2.3820845 H 0.7934852 V 1.9738407 c 0,-0.041598 0.00476,-0.081712 0.01188,-0.1209228 z M 1.588275,2.7510543 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,3.0166712 0.2645835,0.2645835 0 0 1 2.1174417,3.2802211 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,3.0166712 0.2645835,0.2645835 0 0 1 1.588275,2.7510543 Z m 1.5978347,0 H 3.7152764 A 0.2645835,0.2645835 0 0 1 3.9788278,3.0166712 0.2645835,0.2645835 0 0 1 3.7152764,3.2802211 H 3.1861097 A 0.2645835,0.2645835 0 0 1 2.9204945,3.0166712 0.2645835,0.2645835 0 0 1 3.1861097,2.7510543 Z M 1.588275,3.8739832 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,4.1380498 0.2645835,0.2645835 0 0 1 2.1174417,4.4036666 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,4.1380498 0.2645835,0.2645835 0 0 1 1.588275,3.8739832 Z" id="path716" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> </g> </g>
                                                                </svg>
                                                                <span>{{$activity->date}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="i-pagination">
                                            {{$activities->links('pagination.default')}}
                                        </div>
                                    @else
                                        <span class="no-activities">لا توجد في هذا الأسبوع فعاليات لنادي {{$club->name}}</span>
                                    @endif
                                @endif
                                @if($posts  == true)
                                    @if($postsAll->count() > 0)
                                        @foreach($postsAll as $post)
                                            <div class="club-section-left-item">
                                                <div class="b-index-content">
                                                    <div>
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                            <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                                                        </svg>
                                                        <h3>{{$post->title}}</h3>
                                                    </div>
                                                    <div style="flex-direction: column;">
                                                        <p>{{$post->body}}</p>
                                                        @if($post->image)
                                                            <img style="border-radius: 6px;border: 1px solid #ccc;" src="{{asset('uploads/files/'.$post->image)}}">
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <ul>
                                                            <li>
                                                                <svg fill="#86C8BC" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 365.702 365.702" xml:space="preserve" stroke="#86C8BC">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                                                                <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M99.415,163.15c-20.713,0-37.564-16.851-37.564-37.564c0-20.713,16.852-37.564,37.564-37.564 c20.713,0,37.564,16.852,37.564,37.564C136.979,146.299,120.128,163.15,99.415,163.15z M99.415,103.021 c-12.442,0-22.564,10.122-22.564,22.564s10.122,22.564,22.564,22.564c12.442,0,22.564-10.122,22.564-22.564 S111.857,103.021,99.415,103.021z"/> </g> <path d="M358.202,268.162h-9.804V53.142c0-4.143-3.358-7.5-7.5-7.5H24.803c-4.142,0-7.5,3.357-7.5,7.5v215.02H7.5 c-4.143,0-7.5,3.358-7.5,7.5v21.402c0,4.143,3.357,7.5,7.5,7.5h37.323v7.996c0,4.143,3.357,7.5,7.5,7.5h91.805 c4.143,0,7.5-3.357,7.5-7.5v-7.996h206.574c4.143,0,7.5-3.357,7.5-7.5v-21.402C365.702,271.519,362.345,268.162,358.202,268.162z M44.823,289.564H15v-6.402h29.823V289.564z M44.823,188.771v79.391H32.303V60.642h301.096v207.52H151.628v-38.525l28.995,25.609 c2.513,1.964,4.692,1.893,5.113,1.878c2.035-0.036,3.968-0.897,5.354-2.387l59.896-64.362c3.429-3.647,5.194-8.393,4.972-13.364 c-0.182-4.068-1.703-7.869-4.304-10.968l43.962-47.176c2.823-3.03,2.656-7.776-0.374-10.601c-3.03-2.823-7.776-2.654-10.601,0.374 l-43.914,47.125c-3.11-2.292-6.887-3.526-10.848-3.438c-4.962,0.081-9.763,2.21-13.154,5.821l-32.974,35.336 c0,0-25.232-23.617-25.519-23.817c-4.262-3.347-9.564-5.184-14.996-5.184H69.108C55.718,164.484,44.823,175.379,44.823,188.771z M239.604,175.096c0.05,0.047,0.101,0.093,0.151,0.139c0.954,0.849,1.189,1.798,1.218,2.445c0.04,0.891-0.285,1.75-0.954,2.461 l-5.848,6.314l-12.493-11.711l5.964-6.308c0.889-0.946,1.938-1.103,2.483-1.111c0.454,0.002,1.341,0.082,2.027,0.767 c0.053,0.052,0.106,0.104,0.161,0.154L239.604,175.096z M149.093,207.384c-2.21-1.954-5.36-2.427-8.048-1.216 c-2.688,1.213-4.417,3.888-4.417,6.837v92.055H59.823V188.771c0-5.121,4.165-9.287,9.285-9.287h74.129 c2.756,0,4.73,1.151,5.901,2.116c0.003,0.003,0.006,0.005,0.009,0.008l29.849,27.979c1.456,1.366,3.396,2.105,5.393,2.023 c1.995-0.069,3.88-0.933,5.236-2.396l21.801-23.52l12.537,11.752l-38.876,41.73L149.093,207.384z M350.702,289.564H151.628v-6.402 h199.074V289.564z"/> </g> </g> </g>
                                                            </svg>
                                                                <span>{{$post->user->name}}</span>
                                                            </li>
                                                            <li>
                                                                <svg width="20px" height="20px" viewBox="0 0 6.3500002 6.3500002" id="svg1976" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" fill="#86C8BC">

                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                                                    <g id="SVGRepo_iconCarrier"> <defs id="defs1970"/> <g id="layer1" style="display:inline"> <path d="m 4.8950508,3.7044845 c -0.6607016,0 -1.1895931,0.5283747 -1.1895931,1.1890748 0,0.66069 0.5288915,1.1916585 1.1895931,1.1916585 0.660699,0 1.1911413,-0.5309685 1.1911413,-1.1916585 0,-0.6607001 -0.5304423,-1.1890748 -1.1911413,-1.1890748 z M 4.6997142,4.3700769 A 0.2645835,0.2645835 0 0 1 4.9632631,4.6356937 V 4.8997603 H 5.2288809 A 0.2645835,0.2645835 0 0 1 5.4924297,5.1653774 0.2645835,0.2645835 0 0 1 5.2288809,5.428927 H 4.6997142 A 0.26460996,0.26460996 0 0 1 4.4340964,5.1653774 V 4.6356937 A 0.2645835,0.2645835 0 0 1 4.6997142,4.3700769 Z" id="path2452" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.8519521,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path712" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 4.2328121,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path714" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.4456487,0.79406771 c -0.6493404,0 -1.1818408,0.53042299 -1.1818408,1.17977299 v 2.1368205 c 0,0.6493502 0.5325004,1.1813233 1.1818408,1.1813233 H 3.2248685 C 3.194235,5.1638306 3.176291,5.0308032 3.176291,4.8935593 c 0,-0.94668 0.772078,-1.7187583 1.7187598,-1.7187583 0.3405214,0 0.6576695,0.1013863 0.9255231,0.2733683 V 1.9738407 c 0,-0.64935 -0.5304208,-1.17977299 -1.1797718,-1.17977299 z M 0.8053782,1.8529179 h 4.474144 c 0.00709,0.03921 0.01188,0.079325 0.01188,0.1209228 V 2.3820845 H 0.7934852 V 1.9738407 c 0,-0.041598 0.00476,-0.081712 0.01188,-0.1209228 z M 1.588275,2.7510543 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,3.0166712 0.2645835,0.2645835 0 0 1 2.1174417,3.2802211 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,3.0166712 0.2645835,0.2645835 0 0 1 1.588275,2.7510543 Z m 1.5978347,0 H 3.7152764 A 0.2645835,0.2645835 0 0 1 3.9788278,3.0166712 0.2645835,0.2645835 0 0 1 3.7152764,3.2802211 H 3.1861097 A 0.2645835,0.2645835 0 0 1 2.9204945,3.0166712 0.2645835,0.2645835 0 0 1 3.1861097,2.7510543 Z M 1.588275,3.8739832 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,4.1380498 0.2645835,0.2645835 0 0 1 2.1174417,4.4036666 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,4.1380498 0.2645835,0.2645835 0 0 1 1.588275,3.8739832 Z" id="path716" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> </g> </g>
                                                                </svg>
                                                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->diffForHumans()}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="margin: 20px 0 0;">
                                                        <span wire:click="addComment({{$post->id}})" class="add-comment">إضافة تعليق</span>
                                                        <div>
                                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.32698 6.63803L5.21799 7.09202L4.32698 6.63803ZM4.7682 20.2318L4.06109 19.5247H4.06109L4.7682 20.2318ZM18.362 16.673L18.816 17.564L18.816 17.564L18.362 16.673ZM19.673 15.362L20.564 15.816L20.564 15.816L19.673 15.362ZM19.673 6.63803L20.564 6.18404L20.564 6.18404L19.673 6.63803ZM18.362 5.32698L18.816 4.43597L18.816 4.43597L18.362 5.32698ZM5.63803 5.32698L6.09202 6.21799L5.63803 5.32698ZM7.70711 17.2929L7 16.5858L7.70711 17.2929ZM5 9.8C5 8.94342 5.00078 8.36113 5.03755 7.91104C5.07337 7.47262 5.1383 7.24842 5.21799 7.09202L3.43597 6.18404C3.18868 6.66937 3.09012 7.18608 3.04419 7.74817C2.99922 8.2986 3 8.97642 3 9.8H5ZM5 12V9.8H3V12H5ZM3 12V17H5V12H3ZM3 17V19.9136H5V17H3ZM3 19.9136C3 21.2054 4.56185 21.8524 5.4753 20.9389L4.06109 19.5247C4.40757 19.1782 5 19.4236 5 19.9136H3ZM5.4753 20.9389L8.41421 18L7 16.5858L4.06109 19.5247L5.4753 20.9389ZM15.2 16H8.41421V18H15.2V16ZM17.908 15.782C17.7516 15.8617 17.5274 15.9266 17.089 15.9624C16.6389 15.9992 16.0566 16 15.2 16V18C16.0236 18 16.7014 18.0008 17.2518 17.9558C17.8139 17.9099 18.3306 17.8113 18.816 17.564L17.908 15.782ZM18.782 14.908C18.5903 15.2843 18.2843 15.5903 17.908 15.782L18.816 17.564C19.5686 17.1805 20.1805 16.5686 20.564 15.816L18.782 14.908ZM19 12.2C19 13.0566 18.9992 13.6389 18.9624 14.089C18.9266 14.5274 18.8617 14.7516 18.782 14.908L20.564 15.816C20.8113 15.3306 20.9099 14.8139 20.9558 14.2518C21.0008 13.7014 21 13.0236 21 12.2H19ZM19 9.8V12.2H21V9.8H19ZM18.782 7.09202C18.8617 7.24842 18.9266 7.47262 18.9624 7.91104C18.9992 8.36113 19 8.94342 19 9.8H21C21 8.97642 21.0008 8.2986 20.9558 7.74817C20.9099 7.18608 20.8113 6.66937 20.564 6.18404L18.782 7.09202ZM17.908 6.21799C18.2843 6.40973 18.5903 6.71569 18.782 7.09202L20.564 6.18404C20.1805 5.43139 19.5686 4.81947 18.816 4.43597L17.908 6.21799ZM15.2 6C16.0566 6 16.6389 6.00078 17.089 6.03755C17.5274 6.07337 17.7516 6.1383 17.908 6.21799L18.816 4.43597C18.3306 4.18868 17.8139 4.09012 17.2518 4.04419C16.7014 3.99922 16.0236 4 15.2 4V6ZM8.8 6H15.2V4H8.8V6ZM6.09202 6.21799C6.24842 6.1383 6.47262 6.07337 6.91104 6.03755C7.36113 6.00078 7.94342 6 8.8 6V4C7.97642 4 7.2986 3.99922 6.74817 4.04419C6.18608 4.09012 5.66937 4.18868 5.18404 4.43597L6.09202 6.21799ZM5.21799 7.09202C5.40973 6.71569 5.71569 6.40973 6.09202 6.21799L5.18404 4.43597C4.43139 4.81947 3.81947 5.43139 3.43597 6.18404L5.21799 7.09202ZM8.41421 18V16C7.88378 16 7.37507 16.2107 7 16.5858L8.41421 18Z" fill="#33363F"></path> <path d="M8 9L16 9" stroke="#33363F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8 13L13 13" stroke="#33363F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                            <span>{{$commentsCount}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="i-pagination">
                                            {{$postsAll->links('pagination.default')}}
                                        </div>
                                    @else
                                        <span class="no-activities">لا توجد منشورات  {{$club->name}}</span>
                                    @endif
                                @endif
                            </div>
                        </diV>
                    </section>
                @endforeach
                <div wire:loading class="loading">
                    <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
                </div>
            </div>
        </section
    @endif
    @if($addComment == true)
        <livewire:posts.add-comment>
    @endif
</div>
<script>
    let home = document.getElementById('home');
    let about = document.getElementById('about');
    let vision = document.getElementById('vision');
    let message = document.getElementById('message');
    let values = document.getElementById('values');
    let goals = document.getElementById('goals');
    let clubsManagement = document.getElementById('clubsManagement');

    let titlehome = document.getElementById('titlehome');
    let titleabout = document.getElementById('titleabout');
    let titlevision = document.getElementById('titlevision');
    let titlemessage = document.getElementById('titlemessage');
    let titlevalues = document.getElementById('titlevalues');
    let titlegoals = document.getElementById('titlegoals');
    let clubManagement = document.getElementById('clubManagement');


    function action(action)
    {
        if(action == 'about')
        {
            titleabout.classList.add('active');
            titlehome.classList.remove('active');
            titlevision.classList.remove('active');
            titlemessage.classList.remove('active');
            titlevalues.classList.remove('active');
            titlegoals.classList.remove('active');


            about.classList.replace('hide', 'show');
            vision.classList.add('hide');
            message.classList.add('hide');
            values.classList.add('hide');
            goals.classList.add('hide');
            home.classList.add('hide');
            clubsManagement.classList.add('hide');
        }
        if(action == 'vision')
        {
            titlevision.classList.add('active');
            titleabout.classList.remove('active');
            titlehome.classList.remove('active');
            titlemessage.classList.remove('active');
            titlevalues.classList.remove('active');
            titlegoals.classList.remove('active');

            vision.classList.replace('hide', 'show');
            about.classList.add('hide');
            message.classList.add('hide');
            values.classList.add('hide');
            goals.classList.add('hide');
            home.classList.add('hide');
            clubsManagement.classList.add('hide');
        }
        if(action == 'message')
        {

            titlemessage.classList.add('active');
            titlevision.classList.remove('active');
            titleabout.classList.remove('active');
            titlehome.classList.remove('active');
            titlevalues.classList.remove('active');
            titlegoals.classList.remove('active');

            message.classList.replace('hide', 'show');
            vision.classList.add('hide');
            about.classList.add('hide');
            values.classList.add('hide');
            goals.classList.add('hide');
            home.classList.add('hide');
            clubsManagement.classList.add('hide');
        }
        if(action == 'goals')
        {
            titlegoals.classList.add('active');
            titlemessage.classList.remove('active');
            titlevision.classList.remove('active');
            titleabout.classList.remove('active');
            titlehome.classList.remove('active');
            titlevalues.classList.remove('active');

            goals.classList.replace('hide', 'show');
            vision.classList.add('hide');
            message.classList.add('hide');
            values.classList.add('hide');
            about.classList.add('hide');
            home.classList.add('hide');
            clubsManagement.classList.add('hide');
        }
        if(action == 'values')
        {
            titlevalues.classList.add('active');
            titlegoals.classList.remove('active');
            titlemessage.classList.remove('active');
            titlevision.classList.remove('active');
            titleabout.classList.remove('active');
            titlehome.classList.remove('active');

            values.classList.replace('hide', 'show');
            vision.classList.add('hide');
            message.classList.add('hide');
            about.classList.add('hide');
            goals.classList.add('hide');
            home.classList.add('hide');
            clubsManagement.classList.add('hide');
        }
        if(action == 'home')
        {
            titlehome.classList.add('active');
            titlevalues.classList.remove('active');
            titlegoals.classList.remove('active');
            titlemessage.classList.remove('active');
            titlevision.classList.remove('active');
            titleabout.classList.remove('active');

            home.classList.replace('hide', 'show');
            vision.classList.add('hide');
            message.classList.add('hide');
            about.classList.add('hide');
            goals.classList.add('hide');
            values.classList.add('hide');
            clubsManagement.classList.add('hide');
        }
        if(action == 'clubManagement')
        {
            titlehome.classList.remove('active');
            titlevalues.classList.remove('active');
            titlegoals.classList.remove('active');
            titlemessage.classList.remove('active');
            titlevision.classList.remove('active');
            titleabout.classList.remove('active');

            clubsManagement.classList.replace('hide', 'show');
            home.classList.add('hide');
            vision.classList.add('hide');
            message.classList.add('hide');
            about.classList.add('hide');
            goals.classList.add('hide');
            values.classList.add('hide');
        }
    }
</script>
