<div>
    <div wire:loading.class="loading-status" id="index">
        @if($user)
            <div style="display: flex; margin: 8px 0" class="count-activity-container">
                <span class="cancel" wire:click="showAward()">رجوع</span>
                <div class="title-award" style="margin: 0">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#86C8BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#86C8BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <span>{{$user->name}} ({{$user->awards->count()}})</span>
                </div>
            </div>
            @if($user->awards->count() >= 1)
                <div class="b-container">
                    <table>
                        <thead>
                        <tr>
                            <th>عنوان الفعالية</th>
                            <th>النادي</th>
                            <th>نوع الجائزة</th>
                            <th>المنسق</th>
                            <th>الحالة</th>
                            @can('deleteAward' , App\Models\User::class)
                            <th>الخيارات</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->awards->reverse() as $award)
                            <tr class="trUser">
                                <td>{{Str::limit($award->reservationAward->reservation->title, 50)}}</td>
                                <td>@if($award->reservationAward->reservation->club) {{$award->reservationAward->reservation->club->name}} @else --- @endif</td>
                                <td>{{$award->typeAward->name}}</td>
                                <td>{{$award->coordinatorUser->name}}</td>
                                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                <td>
                                    <div class="status-award">
                                        <label for="statusAward{{$award->id}}">
                                            <input style="display: none" id="statusAward{{$award->id}}" wire:click="status_award({{$award->id}})" wire:model="status_award" type="checkbox">
                                            <span>{{$award->status}}</span>
                                        </label>
                                    </div>
                                </td>
								@else
									<td>{{$award->status}}</td>
                                @endif
                                @can('deleteAward' , App\Models\User::class)
                                <td>
                                <span onclick="areYouDeleteAward('{{$award->id}}','{{$award->user->name}}')">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                            opacity=".4"
                                            d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z"
                                            fill="#FD8A8A" fill-opacity=".5"/><path
                                            d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z"
                                            fill="#DC3535" fill-opacity=".5"/>
                                    </svg>
                                </span>
                                </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <span style="text-align: center;width: 100%;display: block;font-size: 30px;color: gray;margin-top: 30px;">لا توجد جائزة لهذا الطالب.</span>
            @endif
        @else
        @endif
    </div>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>

</div>
