<div>
    <div wire:loading.class="loading-status" id="index">
        @if($showAwardIndex == true)
            @if($award)
                @foreach($award as $award)
                    <div class="count-activity-container">
                        <span class="cancel" id="cancelAward" wire:click="indexAward()">رجوع</span>
                        <div class="index-award" id="indexawardAward">
                            <div class="title-award" id="titleawardAward">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                                </svg>
                                <span>{{Str::limit($award->reservation->title, 30)}} ({{$award->award->count()}})</span>
                            </div>
                            @can('createAward', App\Models\User::class)
                            <span wire:click="addAward()" id="addUserAward" class="addUser">إضافة جائزة لطالب </span>
                            @endcan
                        </div>
                    </div>
                    @if($award->award->count() >= 1)
                    <div class="b-container">
                        <table>
                            <thead>
                            <tr>
                                <th>اسم الطالب</th>
                                <th>الرقم الجامعي</th>
                                <th>الجنسية</th>
                                <th>النادي</th>
                                <th>عنوان الفعالية</th>
                                <th>نوع الجائزة</th>
                                <th>المنسق</th>
                                <th>الحالة</th>
                                <th>الخيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($award->award->reverse() as $user)
                                    <tr class="trUser">
                                        <td>{{Str::limit($user->user->name, 20)}}</td>
                                        <td>{{$user->user->username}}</td>
                                        <td>@if($user->user->country) {{Str::limit($user->user->country->name, 10)}} @else --- @endif</td>
                                        <td>@if($award->reservation->club) {{$award->reservation->club->name}} @else --- @endif</td>
                                        <td>{{Str::limit($award->reservation->title, 20)}}</td>
                                        <td>{{$user->typeAward->name}}</td>
                                        <td>{{$user->coordinatorUser->name}}</td>
                                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                        <td>
                                            <div class="status-award">
                                                <label for="statusAward{{$user->id}}">
                                                    <input style="display: none" id="statusAward{{$user->id}}" wire:click="status_award({{$user->id}})" wire:model="status_award" type="checkbox">
                                                    <span>{{$user->status}}</span>
                                                </label>
                                            </div>
                                        </td>
										@else
											<td>{{$user->status}}</td>
                                        @endif
                                        <td>
                                            <span wire:click="ShowAwardUser({{$user->user->id}})">
                                                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                        opacity=".4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.737 6.046c1.707 1.318 3.16 3.249 4.205 5.663a.729.729 0 010 .572C19.854 17.111 16.137 20 12 20h-.01c-4.127 0-7.844-2.89-9.931-7.719a.728.728 0 010-.572C4.146 6.88 7.863 4 11.99 4H12c2.068 0 4.03.718 5.737 2.046zM8.097 12c0 2.133 1.747 3.87 3.903 3.87 2.146 0 3.893-1.737 3.893-3.87A3.888 3.888 0 0012 8.121c-2.156 0-3.902 1.736-3.902 3.879z"
                                                        fill="#000" fill-opacity=".5"/><path
                                                        d="M14.43 11.997a2.428 2.428 0 01-2.428 2.414c-1.347 0-2.44-1.086-2.44-2.414 0-.165.02-.32.05-.474h.048a1.997 1.997 0 002-1.921c.107-.019.225-.03.342-.03a2.43 2.43 0 012.429 2.425z"
                                                        fill="#000" fill-opacity=".5"/>
                                                </svg>
                                            </span>
                                            @can('deleteAward' , App\Models\User::class)
                                            <span onclick="areYouDeleteAward('{{$user->id}}','{{$user->user->name}}')">
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
                    @else
                        <span style="text-align: center;width: 100%;display: block;font-size: 30px;color: gray;margin-top: 30px;">لا يوجد مستخدمون لديهم جائزة.</span>
                    @endif
                @endforeach
            @else
            @endif
        @endif
        @if($addAward == true)
            <livewire:awards.add>
        @endif
        @if($ShowAwardUser == true)
            <livewire:awards.show-user>
        @endif
    </div>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>

</div>

