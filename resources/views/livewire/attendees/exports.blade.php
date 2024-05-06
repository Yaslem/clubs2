@php
    function times($from, $to){
            $times = [];

            $start_time = strtotime($from);
            $end_time = strtotime($to);

            for( $i=$start_time; $i <= $end_time; $i+=1800) {
                $times[] = date("H:i",$i);
            }

            switch (count($times) - 1){
                case 1:
                    return 'نصف ساعة';
                    break;
                case 2:
                    return 'ساعة';
                    break;
                case 3:
                    return 'ساعة ونصف';
                    break;
                case 4:
                    return 'ساعتين';
                    break;
                case 5:
                    return 'ساعتين ونصف';
                    break;
                case 6:
                    return 'ثلاث ساعات';
                    break;
                case 7:
                    return 'ثلاث ساعات ونصف';
                    break;
                case 8:
                    return 'أربع ساعات';
                    break;
                case 9:
                    return 'أربع ساعات ونصف';
                    break;
                case 10:
                    return 'خمس ساعات';
                    break;
                case 11:
                    return 'خمس ساعات ونصف';
                    break;
                case 12:
                    return 'ستة ساعات';
                    break;
                case 13:
                    return 'ستة ساعات ونصف';
                    break;
                case 14:
                    return 'سبع ساعات';
                    break;
                case 15:
                    return 'سبع ساعات ونصف';
                    break;
                case 16:
                    return 'ثماني ساعات';
                    break;
                case 17:
                    return 'ثماني ساعات ونصف';
                    break;
                case 18:
                    return 'تسع ساعات';
                    break;
                case 19:
                    return 'تسع ساعات ونصف';
                    break;
                case 20:
                    return 'عشر ساعات';
                    break;
                case 21:
                    return 'عشر ساعات ونصف';
                    break;
                case 22:
                    return 'اثنا عشر ساعة';
                    break;
                case 23:
                    return 'اثنا عشر ساعة ونصف';
                    break;
                case 24:
                    return 'ثلاثة عشر ساعة';
                    break;
                case 25:
                    return 'ثلاثة عشر ساعة ونصف';
                    break;
                case 26:
                    return 'أربعة عشر ساعة';
                    break;
                case 27:
                    return 'أربعة عشر ساعة ونصف';
                    break;
                case 28:
                    return 'خمسة عشر ساعة';
                    break;
                case 29:
                    return 'خمسة عشر ساعة ونصف';
                    break;
                case 30:
                    return 'ستة عشر ساعة';
                    break;
                case 31:
                    return 'ستة عشر ساعة ونصف';
                    break;
                case 32:
                    return 'سبعة عشر ساعة';
                    break;
                case 33:
                    return 'سبعة عشر ساعة ونصف';
                    break;
                case 34:
                    return 'ثمانية عشر ساعة ';
                    break;
                case 35:
                    return 'ثمانية عشر ساعة ونصف';
                    break;
                case 36:
                    return 'تسعة عشر ساعة';
                    break;
                case 37:
                    return 'تسعة عشر ساعة ونصف';
                    break;
                case 38:
                    return 'عشرين ساعة';
                    break;
                case 39:
                    return 'عشرين ساعة ونصف';
                    break;
                case 40:
                    return 'إحدى وعشرين ساعة';
                    break;
                case 41:
                    return 'إحدى وعشرين ساعة ونصف';
                    break;
                case 42:
                    return 'اثنين وعشرين ساعة';
                    break;
                case 43:
                    return 'اثنين وعشرين ساعة ونصف';
                    break;
                case 44:
                    return 'ثلاث وعشرين ساعة';
                    break;
                case 45:
                    return 'ثلاث وعشرين ساعة ونصف';
                    break;
                case 46:
                    return 'أربع وعشرين ساعة';
                    break;
                default:
                    return '---';
            }
        }
@endphp
<div>
    <div wire:loading.class="loading-status">
        <div class="count-activity-container" style="margin-bottom: 10px">
            <span class="cancel" id="award1" wire:click="indexAttendees()">رجوع</span>
            <div class="count-activity">
                <div>
                    <svg width="50px" height="50px" viewBox="-7.2 -7.2 38.40 38.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.2" y="-7.2" width="38.40" height="38.40" rx="19.2" fill="#ECF9FF" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z" stroke="#698269" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9999 10.0001C13.2868 10.0001 14.33 8.95687 14.33 7.67004C14.33 6.38322 13.2868 5.34009 11.9999 5.34009C10.7131 5.34009 9.66992 6.38322 9.66992 7.67004C9.66992 8.95687 10.7131 10.0001 11.9999 10.0001Z" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 15.6601C16 13.8601 14.21 12.4001 12 12.4001C9.79 12.4001 8 13.8601 8 15.6601" stroke="#698269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div>
                    <span>{{$reservationsCount}}</span>
                    <span>عدد الفعاليات</span>
                </div>
            </div>
        </div>
        @if($reservations)
            @if($reservations->count() >= 1)
                <div class="b-container">
                    <table id="table">
                        <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>النوع</th>
                            <th>المدة</th>
                            <th>النادي</th>
                            <th>عدد المحضرين</th>
                            <th>التاريخ</th>
                            <th>الخيارات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{Str::limit($reservation->title, 20)}}</td>
                                <td>{{$reservation->type->name}}</td>
                                <td>{{times($reservation->from, $reservation->to)}}</td>
                                <td>{{$reservation->club->name}}</td>
                                <td>{{$reservation->attendees->count()}}</td>
                                <td>{{$reservation->date}}</td>
                                <td>
                                <span wire:click="export('{{$reservation->id}}', '{{$reservation->title}}')">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" d="M18.809 9.021c-.452 0-1.05-.01-1.794-.01-1.816 0-3.31-1.503-3.31-3.336V2.459A.456.456 0 0013.253 2H7.964C5.496 2 3.5 4.026 3.5 6.509v10.775C3.5 19.889 5.591 22 8.17 22h7.876c2.46 0 4.454-2.013 4.454-4.498V9.471a.454.454 0 00-.453-.458c-.423.003-.93.008-1.238.008z" fill="#000" fill-opacity=".5"/><path opacity=".4" d="M16.084 2.567a.477.477 0 00-.82.334v2.637c0 1.106.91 2.016 2.015 2.016.698.008 1.666.01 2.488.008a.477.477 0 00.343-.808l-4.026-4.187z" fill="#000" fill-opacity=".5"/><path d="M15.105 12.709a.745.745 0 00-1.054.002l-1.589 1.597V9.48a.746.746 0 00-1.49 0v4.827l-1.59-1.597a.744.744 0 10-1.056 1.05l2.863 2.877h.001a.745.745 0 001.053 0h.002l2.862-2.876a.744.744 0 00-.002-1.053z" fill="#000" fill-opacity=".5"/></svg>
                                </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="i-pagination">
                    {{$reservations->links('pagination.default')}}
                </div>
            @else
                <span style="text-align: center;width: 100%;display: block;font-size: 17px;color: gray;margin-top: 30px;">لا توجد فعاليات.</span>
            @endif
        @else
            <span style="text-align: center;width: 100%;display: block;font-size: 17px;color: gray;margin-top: 30px;">لا توجد فعاليات.</span>
        @endif
    </div>
</div>
