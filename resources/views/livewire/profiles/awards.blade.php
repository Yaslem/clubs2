<div>
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
                        <td>{{$award->reservationAward->reservation->title}}</td>
                        <td>@if($award->reservationAward->reservation->club) {{$award->reservationAward->reservation->club->name}} @else --- @endif</td>
                        <td>{{$award->typeAward->name}}</td>
                        <td>{{$award->coordinatorUser->name}}</td>
                        <td>{{$award->status}}</td>
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
        <span style="text-align: center;width: 100%;display: block;color: gray;margin: 30px 0 10px;">لا توجد لك جائزة حتى الآن.</span>
    @endif
</div>
