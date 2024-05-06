<div wire:loading.class="loading-status">
    @if($indexClub == true)
        <div id="index">
            <div class="count-activity-container">
                <span class="cancel" wire:click="indexClubs()">رجوع</span>
                    @can('createClub', App\Models\User::class)
                    <span wire:click="addClub()" class="addUser">إضافة نادي جديد</span>
                    @endcan
                    @can('restoreClub', App\Models\User::class)
                    <span style="background-color: #F16767;" wire:click="onlyTrashed()" class="addUser">سلة المحذوفات ({{$countTrashed}})</span>
                    @endcan
                <div class="count-activity">
                    <div>
                        <svg fill="#638797" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-153.6 -153.6 819.20 819.20" xml:space="preserve" stroke="#638797"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-153.6" y="-153.6" width="819.20" height="819.20" rx="409.6" fill="#ecf9ff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M147.862,114.615h-6.046c-5.287,6.118-11.786,11.16-19.135,14.723c-2.601,6.799-15.397,40.237-18.006,47.054l5.574-26.263 c0.391-1.844,0.107-3.768-0.801-5.42l-5.441-9.898c-2.353,0.284-4.745,0.448-7.174,0.448c-2.43,0-4.82-0.163-7.175-0.448 l-5.469,9.95c-0.891,1.62-1.182,3.503-0.822,5.318l4.874,26.313c-3.586-9.197-14.459-38.854-17.756-47.311 c-7.143-3.547-13.469-8.489-18.635-14.467h-6.367c-24.76,0-45.357,20.149-45.482,44.915v140.139 c-0.053,10.535,8.09,19.118,18.623,19.171c0.032,0,0.066,0,0.098,0c10.487,0,19.367-8.477,19.421-18.98V159.722 c0.011-2.031,2.015-3.67,4.044-3.665c2.03,0.006,3.672,1.653,3.672,3.683l0.009,320.642c0,12.642,10.246,22.891,22.884,22.891 c12.638,0,22.884-10.249,22.884-22.891V297.419h9.88v182.964c0,12.642,10.246,22.891,22.884,22.891 c12.638,0,22.884-10.249,22.884-22.891c0-266.862-0.406-138.968-0.414-321.069c0-2.206,1.787-3.993,3.992-3.995 c2.206,0,4.225,1.788,4.225,3.993c0,0.133,0.003,0.27,0,0.408v140.139c0.053,10.503,9.047,18.98,19.536,18.98 c0.031,0,0.066,0,0.098,0c10.533-0.052,18.676-8.636,18.623-19.171V159.531C193.219,134.765,172.622,114.615,147.862,114.615z"></path> </g> </g> <g> <g> <ellipse cx="96.837" cy="75.778" rx="39.524" ry="39.534"></ellipse> </g> </g> <g> <g> <path d="M492.911,8.722c-10.544,0-19.09,8.546-19.09,19.09v62.643l-43.504,24.086c-3.68-0.049-8.226-0.122-13.02-0.213 c-3.097,8.091-21.002,54.867-23.661,61.814l5.579-26.283c0.392-1.846,0.108-3.77-0.802-5.424l-7.662-13.936l6.811-12.388 c1.013-1.844-0.322-4.11-2.43-4.11h-18.696c-2.104,0-3.446,2.262-2.43,4.11l6.811,12.388l-7.69,13.986 c-0.891,1.622-1.183,3.507-0.822,5.323l4.879,26.333c-2.573-6.599-20.603-54.6-23.404-61.784l-17.937,0.016 c-12.906,0.011-24.431,7.725-29.361,19.651l-7.841,18.967l-10.4-22.437l-16.379,28.931c9.052,6.351,12.386,18.561,7.339,28.775 l-3.247,6.571l6.368,13.738c6.998,15.094,28.613,14.621,34.961-0.736l17.475-42.27c0,14.575,0.009,314.803,0.009,314.803 c0,12.651,10.256,22.909,22.907,22.909s22.907-10.256,22.907-22.909V297.26h9.891v183.105c0,12.652,10.256,22.909,22.907,22.909 c12.652,0,22.909-10.256,22.909-22.909c0-306.035-0.417-126.229-0.417-323.751l66.283-38.207 c6.074-3.363,9.843-9.759,9.843-16.702V27.811C512,17.267,503.454,8.722,492.911,8.722z"></path> </g> </g> <g> <g> <path d="M330.442,54.755l-63.829-31.538c-3.129-1.548-6.952-0.194-8.386,3.039c-12.592,28.404-14.655,56.436-6.469,72.704 l-24.225,56.881l-12.639-6.245c-3.066-1.513-6.767-0.251-8.275,2.802l-7.055,14.277c-1.511,3.058-0.257,6.764,2.802,8.275 l46.592,23.02c3.057,1.511,6.762,0.259,8.275-2.801l7.055-14.277c1.511-3.061,0.257-6.765-2.802-8.276l-12.638-6.245l30.46-53.8 c17.895-3.38,38.906-22.051,53.816-49.31C334.815,60.169,333.571,56.3,330.442,54.755z M290.035,77.545l-3.768,12.672 l-7.766-10.698l-13.216,0.332l7.775-10.693l-4.4-12.466l12.572,4.09l10.497-8.036l-0.006,13.219l10.887,7.5L290.035,77.545z"></path> </g> </g> <g> <g> <path d="M385.787,22.579c-21.935,0-39.565,17.815-39.565,39.565c0,21.972,17.876,39.564,39.565,39.564 c21.669,0,39.565-17.567,39.565-39.564C425.352,40.292,407.638,22.579,385.787,22.579z"></path> </g> </g> </g></svg>                    </div>
                    <div>
                        <span>{{$clubCount}}</span>
                        <span>عدد الأندية</span>
                    </div>
                </div>
            </div>
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
                            <th>المشنورات</th>
                            <th>خيارات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clubs as $club)
                            <tr>
                                <td>{{$club->name}}</td>
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
                    " src="{{asset('uploads/files/'.$club->avatar)}}">
                                </td>
                                <td>@if($club->clubManager){{$club->clubManager->name}}@else --- @endif</td>
                                <td>{{$club->clubManagement->count() + $club->deputy->count()}}</td>
                                <td>{{$club->reservations->count()}}</td>
                                <td>{{$club->ClubStatus()->count()}}</td>
                                <td>{{$club->posts->count()}}</td>
                                <td>
                                    @can('updateClub',App\Models\User::class)
                                        <span wire:click="addManagement({{$club->id}})">
                                            <svg fill="#7c99ac" width="24px" height="24px" viewBox="-128 -128 896.00 896.00" xmlns="http://www.w3.org/2000/svg" stroke="#7c99ac"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-128" y="-128" width="896.00" height="896.00" rx="448" fill="#f1f6f5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M610.5 341.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 368.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm224 32c1.9 0 3.7-.5 5.6-.6 8.3-21.7 20.5-42.1 36.3-59.2 7.4-8 17.9-12.6 28.9-12.6 6.9 0 13.7 1.8 19.6 5.3l7.9 4.6c.8-.5 1.6-.9 2.4-1.4 7-14.6 11.2-30.8 11.2-48 0-61.9-50.1-112-112-112S208 82.1 208 144c0 61.9 50.1 112 112 112zm105.2 194.5c-2.3-1.2-4.6-2.6-6.8-3.9-8.2 4.8-15.3 9.8-27.5 9.8-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-10.7-34.5 24.9-49.7 25.8-50.3-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-3.8-2.2-7-5-9.8-8.1-3.3.2-6.5.6-9.8.6-24.6 0-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h255.4c-3.7-6-6.2-12.8-6.2-20.3v-9.2zM173.1 274.6C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></g></svg>
                                        </span>
                                        <span wire:click="editClub({{$club->id}})">
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
                                    <a href="{{route('club.profile', str_replace(' ', '-', $club->slug))}}">
                                        <span>
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                    opacity=".4" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.737 6.046c1.707 1.318 3.16 3.249 4.205 5.663a.729.729 0 010 .572C19.854 17.111 16.137 20 12 20h-.01c-4.127 0-7.844-2.89-9.931-7.719a.728.728 0 010-.572C4.146 6.88 7.863 4 11.99 4H12c2.068 0 4.03.718 5.737 2.046zM8.097 12c0 2.133 1.747 3.87 3.903 3.87 2.146 0 3.893-1.737 3.893-3.87A3.888 3.888 0 0012 8.121c-2.156 0-3.902 1.736-3.902 3.879z"
                                                    fill="#000" fill-opacity=".5"/><path
                                                    d="M14.43 11.997a2.428 2.428 0 01-2.428 2.414c-1.347 0-2.44-1.086-2.44-2.414 0-.165.02-.32.05-.474h.048a1.997 1.997 0 002-1.921c.107-.019.225-.03.342-.03a2.43 2.43 0 012.429 2.425z"
                                                    fill="#000" fill-opacity=".5"/>
                                            </svg>
                                        </span>
                                    </a>
                                    @can('deleteClub',App\Models\User::class)
                                        <span onclick="areYouDeleteClub('{{$club->id}}','{{$club->name}}')">
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
                </div>
{{--            @endcan--}}
            <div class="i-pagination">
                {{$clubs->links('pagination.default')}}
            </div>
        </div>
    @endif
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
    @if($editClub == true)
        <livewire:clubs.edit>
    @endif
    @if($addClub == true)
        <livewire:clubs.add>
    @endif
    @if($onlyTrashed == true)
        <livewire:clubs.only-trashed>
    @endif
    @if($addManagement == true)
        <livewire:clubs.administrative.index>
    @endif
    <script>

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
