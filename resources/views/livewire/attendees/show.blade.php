<div>
    @if($showAttende == true)
        <div wire:loading.class="loading-status">
            <div class="count-activity-container">
                <span class="cancel" id="award1" wire:click="indexAttendees()">رجوع</span>
                <div class="count-activity">
                    <div>
                        <svg width="50px" height="50px" viewBox="-7.2 -7.2 38.40 38.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.2" y="-7.2" width="38.40" height="38.40" rx="19.2" fill="#ECF9FF" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z" stroke="#698269" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9999 10.0001C13.2868 10.0001 14.33 8.95687 14.33 7.67004C14.33 6.38322 13.2868 5.34009 11.9999 5.34009C10.7131 5.34009 9.66992 6.38322 9.66992 7.67004C9.66992 8.95687 10.7131 10.0001 11.9999 10.0001Z" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 15.6601C16 13.8601 14.21 12.4001 12 12.4001C9.79 12.4001 8 13.8601 8 15.6601" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <div>
                        <span>{{$attendeesCount}}</span>
                        <span>عدد التحضيرات</span>
                    </div>
                </div>
            </div>
            @if($attendees->count() >= 1)
                <div class="table-search">
                    <div @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')  @else style="grid-column: span 2" @endif>
                        <label>البحث</label>
                        <input wire:model="titleSearch" type="text" placeholder="البحث عن تقييم باستعدام عنوان الفعالية" @if($titleIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                    </div>
                    <div>
                        <label>الموقع</label>
                        <select wire:model="location_idSearch" id="locations" @if($location_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                            <option value="">الكل</option>
                            @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>النوع</label>
                        <select wire:model="type_idSearch" @if($type_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                            <option value="">الكل</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                        <div>
                            <label>النادي</label>
                            <select wire:model="club_idSearch" @if($club_idIsNull == true) disabled style="opacity: 0.4;border: 0; cursor: not-allowed;" @endif>
                                <option value="">الكل</option>
                                @foreach($clubs as $club)
                                    <option value="{{$club->id}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="b-container">
                    <table id="table">
                        <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>العنوان</th>
                            <th>النادي</th>
                            <th>تقييم الفعالية</th>
                            <th>تقييم المدرب</th>
                            <th>حضرت من الفعالية</th>
                            <th>التاريخ</th>
                            <th>الخيارات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($attendeesAll)
                            @foreach($attendeesAll as $attende)
                                <tr>
                                    <td>{{Str::limit($attende->user->name, 20)}}</td>
                                    <td>{{Str::limit($attende->reservation->title, 20)}}</td>
                                    <td>{{$attende->reservation->club->name}}</td>
                                    <td>{{$attende->benefit}}</td>
                                    <td>{{$attende->lecturer}}</td>
                                    <td>{{$attende->attended}}</td>
                                    <td>{{$attende->reservation->date}}</td>
                                    <td>
                                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                            <span wire:click="editAttende('{{$attende->id}}')">
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
                                        @elseif($attende->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                                            <span wire:click="editAttende('{{$attende->id}}')">
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
                                        @else
                                            <span style="cursor: not-allowed">
                                                لا يمكن التعديل
                                            </span>
                                        @endif
                                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                            <span onclick="areYouDelete('{{$attende->id}}','{{$attende->reservation->title}}')">
                                                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                        opacity=".4"
                                                        d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z"
                                                        fill="#FD8A8A" fill-opacity=".5"/><path
                                                        d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z"
                                                        fill="#DC3535" fill-opacity=".5"/>
                                                </svg>
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif
                        </tbody>
                    </table>
                </div>
                @if($filterNull == true)
                    <div class="null-of-search-container">
                        <div class="null-of-search">
                            <svg class="opacity: 0.5;" width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                <g id="SVGRepo_iconCarrier"> <g fill="#1C82AD"> <path d="m 13.550781 4 c -0.488281 0.003906 -0.988281 0.195312 -1.429687 0.636719 l -7.625 7.625 c -0.316406 0.316406 -0.496094 0.75 -0.496094 1.199219 v 2.539062 h 2.539062 c 0.449219 0 0.882813 -0.179688 1.199219 -0.496094 l 7.625 -7.625 c 1.515625 -1.511718 0.066407 -3.714844 -1.601562 -3.871094 c -0.070313 -0.007812 -0.140625 -0.007812 -0.210938 -0.007812 z m -1.503906 3.054688 l 0.898437 0.898437 l -5.980468 5.980469 l -0.898438 -0.898438 z m 0 0"/> <path d="m 5 1 s -0.707031 -0.015625 -1.449219 0.355469 c -0.738281 0.371093 -1.550781 1.3125 -1.550781 2.644531 v 2 h -2 v 1 h 0.0078125 c -0.00390625 0.265625 0.1015625 0.519531 0.2851565 0.707031 l 2 2 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 2 -2 c 0.183594 -0.1875 0.289063 -0.441406 0.289063 -0.707031 h 0.003906 v -1 h -2 v -2 c 0.105469 -0.800781 0.5 -1 1 -1 h 5 c 0.550781 0 1 -0.449219 1 -1 s -0.449219 -1 -1 -1 z m 0 0"/> </g> </g>

                            </svg>
                            <p>لا توجد نتائج</p>
                        </div>
                    </div>
                @endif
                <div class="i-pagination">
                    {{$attendeesAll->links('pagination.default')}}
                </div>
            @else
                <span style="text-align: center;width: 100%;display: block;font-size: 17px;color: gray;margin-top: 30px;">لا توجد تحضيرات.</span>
            @endif
        </div>
    @endif
    @if($editAttende == true)
        <livewire:attendees.edit>
    @endif
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
