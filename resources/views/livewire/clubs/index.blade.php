@section('style')
    <style>
        .b-index {
            margin: 10px;
            padding: 20px;
        }
        .clubs-index{
            padding: 20px 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .clubs-container{
            position: relative;
            background-color: white;
            overflow: hidden;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }
        .clubs-avatar{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .clubs-avatar img{
            width: 100%;
            height: 150px;
            margin-bottom: 13px;
            background-color: white;
            object-fit: cover;
        }
        .clubs-avatar span{
            font-size: 18px;
            font-weight: 500;
            margin: 16px 0;
        }
        .clubs-view-page{
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 15px;
            font-weight: 500;
        }
        .clubs-view-page span,
        .clubs-view-page a{
            padding: 10px;
            border-radius: 6px;
            color: white;
            text-align: center;
            cursor:pointer;

        }
        .clubs-view-page a:first-child{
            width: 68%;
            background-color: #316a9d;

        }
        .clubs-view-page span:not(.unsubscribe){
            width: 30%;
            background-color: #2f906f;

        }
        .clubs-container .club-status{
            position: absolute;
            background: #0081B4;
            color: white;
            padding: 7px 14px;
            font-size: 13px;
            right: 0;
            top: 0;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 6px;
            width: 70px;
        }
        .b-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
            margin-top: 20px;
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
            margin: 8px 0;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
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
        .content-profile form div select{
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
        .content-profile form div span {
            font-size: 13px;
            margin: 8px 0;
            color: #E84545;
        }
        .content-profile form div textarea{
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            padding: 10px;
            font-size: 13px;
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
            font-size: 13px;
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
        .title-club{
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 6px;
            font-size: 14px;
            color: gray;
            background-color: white;
            width: fit-content;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
        }
        .clubs-view-page .unsubscribe{
            width: 40%;
            background-color: #bc5656;
        }
    </style>
@endsection
<div>
    <section class="b-index" wire:loading.class="loading-status">
        @if($indexClubs == true)
        <div>
            <div class="yourClubs">
                <span>الأندية الطلابية</span>
                @if(Auth::user())
                    @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                        @can('viewClub', App\Models\User::class)
                            <span style="padding: 10px;background-color: #1C82AD; text-align: center;width: fit-content;color: white; font-size: 18px;border-radius: 6px;cursor: pointer;" wire:click="clubManagement()">إدارة الأندية</span>
                        @endcan
                    @elseif(Auth::user()->role === 'مدير')
                            <span style="padding: 10px;background-color: #1C82AD; text-align: center;width: fit-content;color: white; font-size: 18px;border-radius: 6px;cursor: pointer;" wire:click="clubManagement()">إدارة النادي</span>
                    @endif
                    @if(!(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق'))
                        <span style="background-color: #2f906f;" wire:click="ShowSubscribe({{Auth::user()->id}})">أنديتك</span>
                    @endif
                @endif
            </div>
            <div class="clubs-index">
                @if(Auth::user())
                    @foreach($clubs as $club)
                        @continue($club->id == Auth::user()->club_id)
                        <div class="clubs-container">
                            <div class="clubs-avatar">
                                <img src="{{asset('uploads/files/'.$club->avatar)}}">
                                <span>{{$club->name}}</span>
                            </div>
                            <div style="padding: 10px;">
                                <div class="clubs-view-page">
                                    <a href="{{route('club.profile', str_replace(' ', '-', $club->slug))}}">زيارة الصفحة </a>
                                    <span wire:click="subscribe({{$club->id}}, {{Auth::user()->id}})"> تسجيل </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($clubs as $club)
                        <div class="clubs-container">
                            <div class="clubs-avatar">
                                <img src="{{asset('uploads/files/'.$club->avatar)}}">
                                <span>{{$club->name}}</span>
                            </div>
                            <div style="padding: 10px;">
                                <div class="clubs-view-page">
                                    @if(Auth::user())
                                    <a href="{{route('club.profile', str_replace(' ', '-', $club->slug))}}">زيارة الصفحة </a>
                                    <span wire:click="subscribe({{$club->id}}, {{Auth::user()->id}})"> تسجيل </span>
                                    @else
                                        <a style="width: 100%" href="{{route('club.profile', str_replace(' ', '-', $club->slug))}}">زيارة الصفحة </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        @endif
        @if($ShowSubscribe == true)
            <livewire:clubs.subscribe>
        @endif
        @if($clubManagement == true)
            <livewire:clubs.club-management>
        @endif
    </section>
    <script>
        function areYouDelete(clubId, userId,  name) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد إلغاء التسجيل في نادي  " + '[ ' + name + ' ]',
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
                @this.unsubscribe(clubId, userId);
                }
            });
        }

        function areYouDeleteClub(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف النادي  " + '[ ' + title + ' ]',
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
                @this.willDeleteClub(id);
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
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>

