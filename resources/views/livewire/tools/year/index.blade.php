@section('title', '- سنة النشاط ')
<div>
    <section wire:loading.class="loading-status" class="b-index" id="container">
        @if($indexYear == true)
            <div class="head-date">
                <span class="cancel" id="cancelDate" wire:click="indexTools()">رجوع</span>
                <span wire:click="addYear()" id="addUserDate" class="addUser">إضافة سنة جديد</span>
            </div>
            @if($years->count() >= 1)
                <div id="index">
                    <div class="b-container-date">
                        <table id="table">
                            <thead>
                            <tr>
                                <th>السنة</th>
                                <th>ملاحظات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($years as $year)
                                <tr>
                                    <td>{{$year->year}}</td>
                                    <td>{{$year->notes ?? '---'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <span style="text-align: center;display: block;  color: gray;opacity: 0.5;">لا توجد سنوات مضافة.</span>
            @endif
        @endif
        @if($addYear == true)
            <livewire:tools.year.add>
        @endif
    </section>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
