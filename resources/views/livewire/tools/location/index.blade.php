@section('title', '- أوقات الحجز')
<div>
    <section wire:loading.class="loading-status" class="b-index" id="container">
        @if($indexLocation == true)
            <div class="head-date">
                <span class="cancel" id="cancelLocation" wire:click="indexTools()">رجوع</span>
                <span wire:click="addLocation()" id="addUserLocation" class="addUser">إضافة موقع جديد</span>
            </div>
            @if($Locations->count() >= 1)
                <div id="index">
                    <div class="b-container-date">
                        <table id="table">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>عدد الفعاليات</th>
                                <th>ملاحظات</th>
                                <th>خيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Locations as $Location)
                                <tr>
                                    <td>{{$Location->name}}</td>
                                    <td>{{$Location->reservation->count()}}</td>
                                    <td>{{$Location->des}}</td>
                                    <td>
                                        <span wire:click="editLocation({{$Location->id}})">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" d="M19.993 18.953h-5.695c-.555 0-1.007.46-1.007 1.024 0 .565.452 1.023 1.007 1.023h5.695c.555 0 1.007-.458 1.007-1.023s-.452-1.024-1.007-1.024z" fill="#fff"/><path
                                                    d="M10.309 6.904l5.396 4.36a.31.31 0 01.05.429L9.36 20.028a2.1 2.1 0 01-1.63.817l-3.492.043a.398.398 0 01-.392-.312l-.793-3.45c-.138-.635 0-1.29.402-1.795l6.429-8.376a.3.3 0 01.426-.051z"
                                                    fill="#000"/><path opacity=".4"  d="M18.12 8.665l-1.04 1.299a.298.298 0 01-.423.048c-1.265-1.023-4.503-3.65-5.401-4.377a.308.308 0 01-.043-.432l1.003-1.246c.91-1.172 2.497-1.28 3.777-.258l1.471 1.172c.604.473 1.006 1.096 1.143 1.752.16.721-.01 1.43-.486 2.042z" fill="#000"/>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <span style="text-align: center;display: block;  color: gray;opacity: 0.5;">لا توجد مواقع مضافة.</span>
            @endif
        @endif
        @if($addLocation == true)
            <livewire:tools.location.add>
        @endif
        @if($editLocation == true)
            <livewire:tools.location.edit>
        @endif
    </section>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
