<div wire:loading.class="loading-status">
    <div id="index">
        <div class="count-activity-container">
            <span class="cancel" wire:click="indexClubs()">رجوع</span>
            @if($clubsTrashed->count() >= 1)
                @can('restoreClub' , App\Models\User::class)
                    <span style="margin-bottom: 20px; background-color: #609966;" onclick="restoreAllUsers()" class="addUser">استرجاع الجميع</span>
                @endcan
                @can('forceDeleteClub' , App\Models\User::class)
                    <span style="margin-bottom: 20px; background-color: #F16767" onclick="forceDeleteAll()" class="addUser">حذف الجميع</span>
                @endcan
            @endif
        </div>
        @if($clubsTrashed->count() >= 1)
            @can('viewClub', App\Models\User::class)
                <div class="b-container">
                    <table id="table">
                        <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الشعار</th>
                            <th>المدير</th>
                            <th>إدارة النادي</th>
                            <th>الفعاليات</th>
                            <th>الأعضاء</th>
                            <th>تاريخ الحذف</th>
                            @canany(['restoreClub', 'forceDeleteClub'], App\Models\User::class)
                            <th>خيارات</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clubsTrashed as $clubTrashed)
                            <tr>
                                <td>{{$clubTrashed->name}}</td>
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
                    " src="{{asset('uploads/files/'.$clubTrashed->avatar)}}">
                                </td>
                                <td>@if($clubTrashed->clubManager){{$clubTrashed->clubManager->name}}@else --- @endif</td>
                                <td>{{$clubTrashed->clubManagement->count()}}</td>
                                <td>{{$clubTrashed->reservations->count()}}</td>
                                <td>{{$clubTrashed->users->count()}}</td>
                                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $clubTrashed->deleted_at)->diffForHumans()}}</td>
                                @canany(['restoreClub', 'forceDeleteClub'], App\Models\User::class)
                                <td>
                                    @can('restoreClub' , App\Models\User::class)
                                        <span wire:click="restoreClub({{$clubTrashed->id}})">
                                            <svg width="24px" height="24px" viewBox="-51.2 -51.2 614.40 614.40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-51.2" y="-51.2" width="614.40" height="614.40" rx="307.2" fill="#f1f6f5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>redo</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="work-case" fill="#3e3c3c" transform="translate(64.000000, 80.915055)"> <path d="M281.751611,1.42108547e-14 L392.836556,111.084945 L281.751611,222.169889 L251.581722,192 L311.109,132.459 L138.64576,132.459878 C85.7290667,132.459878 42.6666667,175.522278 42.6666667,228.438971 C42.6666667,281.355665 85.7290667,324.418278 138.64576,324.418278 L213.541547,324.418278 L213.541547,367.084945 L138.64576,367.084945 C62.18752,367.084945 -1.42108547e-14,304.897425 -1.42108547e-14,228.439185 C-1.42108547e-14,151.980945 62.18752,89.7934247 138.64576,89.7934247 L311.193,89.793 L251.581722,30.1698893 L281.751611,1.42108547e-14 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>
                                        </span>
                                    @endcan
                                    @can('forceDeleteClub',App\Models\User::class)
                                        <span wire:click="forceDeleteClub({{$clubTrashed->id}})">
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
                        </tbody>
                    </table>
                </div>
            @endcan
            <div class="i-pagination">
                {{$clubsTrashed->links('pagination.default')}}
            </div>
        @else
            <p style="color: gray; font-size: 18px; text-align: center; margin: 20px 0;">سلة المهملات فارغة.</p>
        @endif
    </div>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
    <script>
        function areYouDelete(id, title) {
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

        function restoreAllClubs(){
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
</div>
