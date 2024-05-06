<div>
    @if($user->certificate->count() >= 1)
        <div class="b-container" wire:loading.class="loading-status">
            <table>
                <thead>
                <tr>
                    <th>عنوان الفعالية</th>
                    <th>النادي</th>
                    <th>المقدم</th>
                    <th>التاريخ</th>
                    <th>الخيارات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->certificate as $certificate)
                    <tr>
                        <td>{{$certificate->reservationCertificate->reservation->title}}</td>
                        <td>{{$certificate->reservationCertificate->reservation->club->name}}</td>
                        <td>{{$certificate->reservationCertificate->reservation->presenter}}</td>
                        <td>{{$certificate->reservationCertificate->reservation->date}}</td>
                        <td>
                            <span wire:click="downloadCertificate('{{$certificate->photo}}')">
                                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" d="M18.809 9.021c-.452 0-1.05-.01-1.794-.01-1.816 0-3.31-1.503-3.31-3.336V2.459A.456.456 0 0013.253 2H7.964C5.496 2 3.5 4.026 3.5 6.509v10.775C3.5 19.889 5.591 22 8.17 22h7.876c2.46 0 4.454-2.013 4.454-4.498V9.471a.454.454 0 00-.453-.458c-.423.003-.93.008-1.238.008z" fill="#000" fill-opacity=".5"/><path opacity=".4" d="M16.084 2.567a.477.477 0 00-.82.334v2.637c0 1.106.91 2.016 2.015 2.016.698.008 1.666.01 2.488.008a.477.477 0 00.343-.808l-4.026-4.187z" fill="#000" fill-opacity=".5"/><path d="M15.105 12.709a.745.745 0 00-1.054.002l-1.589 1.597V9.48a.746.746 0 00-1.49 0v4.827l-1.59-1.597a.744.744 0 10-1.056 1.05l2.863 2.877h.001a.745.745 0 001.053 0h.002l2.862-2.876a.744.744 0 00-.002-1.053z" fill="#000" fill-opacity=".5"/></svg>
                            </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <span style="text-align: center;width: 100%;display: block;color: gray;margin: 30px 0 10px;">لا توجد لك شهادة حتى الآن.</span>
    @endif
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
