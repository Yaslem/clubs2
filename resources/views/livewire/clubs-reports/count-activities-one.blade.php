@section('title', '- أوقات الحجز')
<div>
    <section wire:loading.class="loading-status" class="b-index" id="container">
        <div class="head-plans">
            <span class="cancel" id="cancelLocation" wire:click="index()">رجوع</span>
        </div>
        @if($activities_one->count() >= 1)
            <div id="index">
                <div class="b-container">
                    <table id="table">
                        <thead>
                        <tr>
                            <th>النادي</th>
                            <th>الأول</th>
                            <th>الثاني</th>
                            <th>الثالث</th>
                            <th>المشتركة</th>
                            <th>الأعضاء</th>
                            <th>المجموع (ت)</th>
                            <th>المجموع</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activities_one as $activity_one)
                            @php
                                $l1 = [0];
                                $l2 = [0];
                                $l3 = [0];
                                $l4 = [0];
                                $l5 = [0];
                                $one = [];
                                $tow = [];
                                $three = [];
                                $shareCount = [];
                                foreach($activity_one->reservations as $activities){

                                    if($activities->status === 'أقيمت'){
                                        foreach ($activities->attendees as $attendees){
                                            if($attendees->attended !== 'لا شيء منها'){
                                                switch ($attendees->benefit){
                                                    case 5:
                                                        $l5[] += (count($l5) / 5) * 5;
                                                        break;
                                                    case 4:
                                                        $l4[] += (count($l4) / count($l4)) * 4;
                                                        break;
                                                    case 3:
                                                        $l3[] += (count($l3) / count($l3)) * 3;
                                                        break;
                                                    case 2:
                                                        $l2[] += (count($l2) / count($l2)) * 2;
                                                    break;
                                                    case 1:
                                                        $l1[] += (count($l1) / count($l1)) * 1;
                                                        break;
                                                }
                                            }
                                        }
                                        if($activities->is_share === 'مشتركة'){
                                            $shareCount[] += 1;
                                        }
                                        if($activities->date > '2022-10-02' && $activities->date < '2022-11-06'){
                                            $one[] += 1;
                                        }elseif($activities->date > '2022-11-05' && $activities->date < '2023-02-12'){
                                            $tow[] += 1;
                                        }elseif($activities->date > '2023-02-12' && $activities->date < '2023-06-04'){
                                            $three[] += 1;
                                        }
                                    }
                                }
                            @endphp
                            <tr>
                                <td>{{$activity_one->name}}</td>
                                <td>{{count($one)}}</td>
                                <td>{{count($tow)}}</td>
                                <td>{{count($three)}}</td>
                                <td>{{count($shareCount)}}</td>
                                <td>{{$activity_one->ClubStatus()->count()}}</td>
                                <td>
{{--                                    @php--}}
{{--                                        $ll1 = count($l1) * 5 / (count($l1) - 1);--}}
{{--                                        $ll1 = count($l2) * 5 / (count($l2) - 1)''--}}
{{--                                    @endphp--}}
                                    {{count($l1)}} {{count($l2)}} {{count($l3)}} {{count($l4)}} {{count($l5)}}
                                </td>
                                <td>{{count($one) + count($tow) + count($three)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <span style="text-align: center;display: block;  color: gray;opacity: 0.5;">لا توجد تقارير مضافة.</span>
        @endif
    </section>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
