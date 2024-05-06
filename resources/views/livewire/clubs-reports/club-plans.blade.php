@section('title', '- أوقات الحجز')
<div>
    @if($index == true)
    <section wire:loading.class="loading-status" class="b-index" id="container">
        <div class="head-plans">
            <span class="cancel" id="cancelLocation" wire:click="back()">رجوع</span>
            <span wire:click="add()" class="add">إضافة خطة</span>
        </div>
        <div class="table-search">
            <div>
                <select wire:model="club_idSearch">
                    <option value="">الكل</option>
                    @foreach($clubsAll as $clubAll)
                        <option value="{{$clubAll->id}}">{{$clubAll->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @if($club !== null)
            <div id="index">
                <div class="b-container">
                    <section class="clubs-info">
                        <div>
                            <ul>
                                <li>اسم النادي</li>
                                <li>{{$club->name}}</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>مدير النادي</li>
                                <li>{{$club->ClubStatus->name}}</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>رقم الهاتف</li>
                                <li>{{$club->ClubStatus->number_of_whatsapp}}</li>
                            </ul>
                        </div>
                    </section>
                    <table id="table">
                        <thead>
                        <tr>
                            <th>عنوان الفعالية</th>
                            <th>النادي</th>
                            <th>التاريخ</th>
                            <th>الموقع</th>
                            <th>المقدم</th>
                            <th>السنة</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($club->clubplans as $clubplans)
                            <tr>
                                <td>{{\Illuminate\Support\Str::limit($clubplans->title, 20)}}</td>
                                <td>{{$club->name}}</td>
                                <td>{{$clubplans->date}}</td>
                                <td>{{$clubplans->location->name}}</td>
                                <td>{{$clubplans->presenter}}</td>
                                <td>{{$clubplans->activityYear->year}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <span>لا يوجد شيء.</span>
        @endif
    </section>
    @endif
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
    @if($addclubPlans == true)
        <livewire:clubs-reports.add-club-plans>
    @endif
</div>
