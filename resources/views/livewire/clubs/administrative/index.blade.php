<div wire:loading.class="loading-status">
    @if($indexManagement == true)
        <div id="index">
            @foreach($clubs as $club)
                <div class="count-activity-container">
                    <span class="cancel" id="cancelClubManagement" wire:click="indexClub()">رجوع</span>
                    <div class="title-club" id="titleClubManagement">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                            <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                        </svg>
                        <span>{{$club->name}} ({{$club->clubManagement->count() + $club->deputy->count()}})</span>
                    </div>
                        <span wire:click="addManagement()" class="addUser">إضافة مسؤول جديد</span>
                </div>
                @if($club->clubManagement->count() >= 1)
                        <div class="b-container">
                            <table id="table">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>الصورة</th>
                                    <th>الرقم الجامعي</th>
                                    <th>الجنسية</th>
                                    <th>الكلية</th>
                                    <th>المستوى</th>
                                    <th>الوظيفة</th>
                                    <th>الرتبة</th>
                                    <th>خيارات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($club->clubManagement as $user)
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
                                        <td>{{$user->country->name}}</td>
                                        <td>{{$user->college->name}}</td>
                                        <td>{{$user->level->name}}</td>
                                        @foreach($user->administratives as $administrative)
                                            <td>{{$administrative->name}}</td>
                                        @endforeach
                                        <td>{{$user->role}}</td>
                                        <td>
                                                <span wire:click="DeleteClubManagement({{$user->id}})">
                                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                                opacity=".4"
                                                                d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z"
                                                                fill="#FD8A8A" fill-opacity=".5"/><path
                                                                d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z"
                                                                fill="#DC3535" fill-opacity=".5"/>
                                                        </svg>
                                                    </span>
                                        </td>
                                    </tr>
                                @endforeach
                                @if($club->deputy)
                                    @foreach($club->deputy as $deputy)
                                        <tr>
                                            <td>{{$deputy->name}}</td>
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
                                                " src="{{asset('uploads/'.$deputy->avatar)}}">
                                            </td>
                                            <td>{{$deputy->username}}</td>
                                            <td>{{$deputy->country->name}}</td>
                                            <td>{{$deputy->college->name}}</td>
                                            <td>{{$deputy->level->name}}</td>
                                            @if($deputy->userDeputy)
                                                @foreach($deputy->userDeputy as $userDeputy)
                                                    <td>{{$userDeputy->name}}</td>
                                                @endforeach
                                            @else
                                            @endif
                                            <td>{{$deputy->role}}</td>
                                            <td>
                                                    <span wire:click="DeleteClubDeputy({{$deputy->id}})">
                                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                                opacity=".4"
                                                                d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z"
                                                                fill="#FD8A8A" fill-opacity=".5"/><path
                                                                d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z"
                                                                fill="#DC3535" fill-opacity=".5"/>
                                                        </svg>
                                                    </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                @endif
                                </tbody>
                            </table>
                        </div>
                @else
                    <span style="text-align: center;width: 100%;display: block;font-size: 30px;color: gray;margin-top: 30px;">لا توجد إدارة لنادي {{$club->name}}.</span>
                @endif
            @endforeach
        </div>
    @endif
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
        @if($editManagement == true)
            <livewire:clubs.administrative.edit>
        @endif
        @if($addManagement == true)
            <livewire:clubs.administrative.add>
        @endif
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
