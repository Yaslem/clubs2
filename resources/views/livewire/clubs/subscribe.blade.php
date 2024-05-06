<div>
    <div wire:loading.class="loading-status">
        <div class="count-activity-container">
            <span class="cancel" wire:click="indexClubs()">رجوع</span>
            <div class="count-activity">
                <div>
                    <svg fill="#0081B4" width="50px" height="50px" viewBox="-18 -18 96.00 96.00" id="Capa_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-18" y="-18" width="96.00" height="96.00" rx="48" fill="#E1EEDD" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M48,14c-1.276,0-2.469,0.349-3.5,0.947C43.469,14.349,42.276,14,41,14c-3.859,0-7,3.14-7,7s3.141,7,7,7 c1.276,0,2.469-0.349,3.5-0.947C45.531,27.651,46.724,28,48,28c3.859,0,7-3.14,7-7S51.859,14,48,14z M46,21 c0,1.394-0.576,2.654-1.5,3.562C43.576,23.654,43,22.394,43,21s0.576-2.654,1.5-3.562C45.424,18.346,46,19.606,46,21z M36,21 c0-2.757,2.243-5,5-5c0.631,0,1.23,0.13,1.787,0.345C41.68,17.583,41,19.212,41,21s0.68,3.417,1.787,4.655 C42.23,25.87,41.631,26,41,26C38.243,26,36,23.757,36,21z M48,26c-0.631,0-1.23-0.13-1.787-0.345C47.32,24.417,48,22.788,48,21 s-0.68-3.417-1.787-4.655C46.77,16.13,47.369,16,48,16c2.757,0,5,2.243,5,5S50.757,26,48,26z"></path> <path d="M55.783,8H4.217C1.892,8,0,9.892,0,12.217v35.566C0,50.108,1.892,52,4.217,52h51.566C58.108,52,60,50.108,60,47.783V12.217 C60,9.892,58.108,8,55.783,8z M58,47.783C58,49.005,57.006,50,55.783,50H4.217C2.994,50,2,49.005,2,47.783V12.217 C2,10.995,2.994,10,4.217,10h51.566C57.006,10,58,10.995,58,12.217V47.783z"></path> <path d="M6,18h9c0.553,0,1-0.448,1-1s-0.447-1-1-1H6c-0.553,0-1,0.448-1,1S5.447,18,6,18z"></path> <path d="M28,16h-9c-0.553,0-1,0.448-1,1s0.447,1,1,1h9c0.553,0,1-0.448,1-1S28.553,16,28,16z"></path> <path d="M6,23h1c0.553,0,1-0.448,1-1s-0.447-1-1-1H6c-0.553,0-1,0.448-1,1S5.447,23,6,23z"></path> <path d="M11,21c-0.553,0-1,0.448-1,1s0.447,1,1,1h2c0.553,0,1-0.448,1-1s-0.447-1-1-1H11z"></path> <path d="M19,22c0-0.552-0.447-1-1-1h-1c-0.553,0-1,0.448-1,1s0.447,1,1,1h1C18.553,23,19,22.552,19,22z"></path> <path d="M24,23c0.553,0,1-0.448,1-1s-0.447-1-1-1h-2c-0.553,0-1,0.448-1,1s0.447,1,1,1H24z"></path> <path d="M27.3,21.29C27.109,21.48,27,21.73,27,22s0.109,0.52,0.29,0.71C27.479,22.89,27.74,23,28,23s0.52-0.11,0.71-0.29 C28.89,22.52,29,22.26,29,22c0-0.26-0.11-0.52-0.29-0.7C28.34,20.92,27.66,20.92,27.3,21.29z"></path> <path d="M5,45h11v-8H5V45z M7,39h7v4H7V39z"></path> <path d="M18,45h11v-8H18V45z M20,39h7v4h-7V39z"></path> <path d="M31,45h11v-8H31V45z M33,39h7v4h-7V39z"></path> <path d="M44,45h11v-8H44V45z M46,39h7v4h-7V39z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </g></svg>            </div>
                <div>
                    <span>{{$clubsCount}}</span>
                    <span>عدد الأندية المسجلة</span>
                </div>
            </div>
        </div>
        <div class="clubs-index">
            @if($clubs)
                <div class="clubs-container">
                    <span style="background-color: #1F8A70;" class="club-status">أساسي</span>
                    <div class="clubs-avatar">
                        <img src="{{asset('uploads/files/'.$user->ClubStatus->avatar)}}">
                        <span>{{$user->ClubStatus->name}}</span>
                    </div>
                    <div style="padding: 10px;">
                        <div class="clubs-view-page">
                            <a style="width: 100%;background-color: #2f906f;" href="{{route('club.profile', $user->ClubStatus->slug)}}">زيارة صفحة النادي</a>
                        </div>
                    </div>
                </div>
                @foreach($clubs as $club)
                    <div class="clubs-container">
                        <span class="club-status">فرعي</span>
                        <div class="clubs-avatar">
                            <img src="{{asset('uploads/files/'.$club->avatar)}}">
                            <span>{{$club->name}}</span>
                        </div>
                        <div style="padding: 10px;">
                            <div class="clubs-view-page">
                                <a style="width: 58%; " href="{{route('club.profile', $club->slug)}}">زيارة صفحة النادي</a>
                                <span class="unsubscribe" onclick="areYouDelete('{{$club->id}}', '{{Auth::user()->id}}','{{$club->name}}')">إلغاء التسجيل</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            @endif
        </div>
    </div>
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
