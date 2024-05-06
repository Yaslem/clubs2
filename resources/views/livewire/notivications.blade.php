<div id="notifications" class="notifications">
    @if($notifications >= 1)
        <h5 style="color: #609966;">الإشعارات الجديدة</h5>
        @if(count($Unotifications) >= 1)
            <ul>
                @foreach($Unotifications as $notification)
                    @if($notification->type === 'App\Notifications\NewOrder')
                        <li wire:click="markAsRead('{{$notification->id}}')">
                            <img src="/uploads/files/{{$notification->data['avatar']}}">
                            <div>
                                <span>{{$notification->data['name']}}</span>
                                <div>
                                    <p>لديك طلب جديد بعنوان: <strong>{{$notification->data['title']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @elseif($notification->type === 'App\Notifications\NewActivity')
                        <li wire:click="markAsRead('{{$notification->id}}')">
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 10H10.5C11.3284 10 12 9.32843 12 8.5V4" stroke="#4bde97" stroke-width="1.5"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.85355 3.73223C10.3224 3.26339 10.9583 3 11.6213 3H16.5C17.8807 3 19 4.11929 19 5.5V18.5C19 19.8807 17.8807 21 16.5 21H7.5C6.11929 21 5 19.8807 5 18.5V9.62132C5 8.95828 5.26339 8.3224 5.73223 7.85355L9.85355 3.73223ZM11.6213 5C11.4887 5 11.3615 5.05268 11.2678 5.14645L7.14645 9.26777C7.05268 9.36154 7 9.48871 7 9.62132V18.5C7 18.7761 7.22386 19 7.5 19H16.5C16.7761 19 17 18.7761 17 18.5V5.5C17 5.22386 16.7761 5 16.5 5H11.6213Z" fill="#4bde97"></path> <path d="M10 14.5H14M12 12.5V16.5" stroke="#4bde97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <div>
                                <span>حجز جديد</span>
                                <div>
                                    <p>لديك حجز جديد بعنوان: <strong>{{$notification->data['title']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @elseif($notification->type === 'App\Notifications\NewReplyOrder')
                        <li wire:click="markAsRead('{{$notification->id}}')">
                            <img src="/uploads/files/{{$notification->data['avatar']}}">
                            <div>
                                <span>{{$notification->data['name']}}</span>
                                <div>
                                    <p>لديك رد جديد على طلبك الذي بعنوان: <strong>{{$notification->data['title']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @elseif($notification->type === 'App\Notifications\NewUser')
                        <li wire:click="markAsRead('{{$notification->id}}')">
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Check"> <path id="Vector" d="M15 19C15 16.7909 12.3137 15 9 15C5.68629 15 3 16.7909 3 19M21 10L17 14L15 12M9 12C6.79086 12 5 10.2091 5 8C5 5.79086 6.79086 4 9 4C11.2091 4 13 5.79086 13 8C13 10.2091 11.2091 12 9 12Z" stroke="#c19a9a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            <div>
                                <span>{{$notification->data['name']}}</span>
                                <div>
                                    <p>سجل لدى {{$notification->data['club']}} طالب جديد، رقمه الجامعي: <strong>{{$notification->data['number']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @elseif($notification->type === 'App\Notifications\TrueActivity')
                        <li wire:click="markAsRead('{{$notification->id}}')">
                            <img src="/uploads/files/{{$notification->data['avatar']}}">
                            <div>
                                <span>{{$notification->data['name']}}</span>
                                <div>
                                    <p>تم تأكيد حجز الفعالية التالية: <strong>{{$notification->data['title']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @elseif($notification->type === 'App\Notifications\Welcome')
                        <li wire:click="markAsRead('{{$notification->id}}')">
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Check"> <path id="Vector" d="M15 19C15 16.7909 12.3137 15 9 15C5.68629 15 3 16.7909 3 19M21 10L17 14L15 12M9 12C6.79086 12 5 10.2091 5 8C5 5.79086 6.79086 4 9 4C11.2091 4 13 5.79086 13 8C13 10.2091 11.2091 12 9 12Z" stroke="#c19a9a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            <div>
                                <span>{{$notification->data['name']}}</span>
                                <div>
                                    <p>مرحبا بك في موقع الأندية الطلابية، ونتمنى لك مسيرة موفقة.</p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        @else
            <span class="no-notifications">لا توجد إشعارات جديدة.</span>
        @endif
        <h5 style="color: #2c74b3;">الإشعارات القديمة</h5>
        @if(count($Rnotifications) >= 1)
            <ul>
            @foreach($Rnotifications as $Rnotification)
                @if($Rnotification->type === 'App\Notifications\NewOrder')
                    <li>
                        <img src="/uploads/files/{{$Rnotification->data['avatar']}}">
                        <div>
                            <span>{{$Rnotification->data['name']}}</span>
                            <div>
                                <p>لديك طلب جديد بعنوان: <strong>{{$Rnotification->data['title']}}</strong></p>
                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Rnotification->created_at)->diffForHumans()}}</span>
                            </div>
                        </div>
                    </li>
                @elseif($Rnotification->type === 'App\Notifications\NewActivity')
                    <li>
                        <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 10H10.5C11.3284 10 12 9.32843 12 8.5V4" stroke="#4bde97" stroke-width="1.5"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.85355 3.73223C10.3224 3.26339 10.9583 3 11.6213 3H16.5C17.8807 3 19 4.11929 19 5.5V18.5C19 19.8807 17.8807 21 16.5 21H7.5C6.11929 21 5 19.8807 5 18.5V9.62132C5 8.95828 5.26339 8.3224 5.73223 7.85355L9.85355 3.73223ZM11.6213 5C11.4887 5 11.3615 5.05268 11.2678 5.14645L7.14645 9.26777C7.05268 9.36154 7 9.48871 7 9.62132V18.5C7 18.7761 7.22386 19 7.5 19H16.5C16.7761 19 17 18.7761 17 18.5V5.5C17 5.22386 16.7761 5 16.5 5H11.6213Z" fill="#4bde97"></path> <path d="M10 14.5H14M12 12.5V16.5" stroke="#4bde97" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <div>
                            <span>حجز جديد</span>
                            <div>
                                <p>لديك حجز جديد بعنوان: <strong>{{$Rnotification->data['title']}}</strong></p>
                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Rnotification->created_at)->diffForHumans()}}</span>
                            </div>
                        </div>
                    </li>
                @elseif($Rnotification->type === 'App\Notifications\NewReplyOrder')
                        <li>
                            <img src="/uploads/files/{{$Rnotification->data['avatar']}}">
                            <div>
                                <span>{{$Rnotification->data['name']}}</span>
                                <div>
                                    <p>لديك رد جديد على طلبك الذي بعنوان: <strong>{{$Rnotification->data['title']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Rnotification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                @elseif($Rnotification->type === 'App\Notifications\NewUser')
                        <li>
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Check"> <path id="Vector" d="M15 19C15 16.7909 12.3137 15 9 15C5.68629 15 3 16.7909 3 19M21 10L17 14L15 12M9 12C6.79086 12 5 10.2091 5 8C5 5.79086 6.79086 4 9 4C11.2091 4 13 5.79086 13 8C13 10.2091 11.2091 12 9 12Z" stroke="#c19a9a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            <div>
                                <span>{{$Rnotification->data['name']}}</span>
                                <div>
                                    <p>سجل لدى {{$Rnotification->data['club']}} طالب جديد، رقمه الجامعي: <strong>{{$Rnotification->data['number']}}</strong></p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Rnotification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                @elseif($Rnotification->type === 'App\Notifications\TrueActivity')
                    <li>
                        <img src="/uploads/files/{{$Rnotification->data['avatar']}}">
                        <div>
                            <span>{{$Rnotification->data['name']}}</span>
                            <div>
                                <p>تم تأكيد حجز الفعالية التالية: <strong>{{$Rnotification->data['title']}}</strong></p>
                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Rnotification->created_at)->diffForHumans()}}</span>
                            </div>
                        </div>
                    </li>
                @elseif($Rnotification->type === 'App\Notifications\Welcome')
                        <li>
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Check"> <path id="Vector" d="M15 19C15 16.7909 12.3137 15 9 15C5.68629 15 3 16.7909 3 19M21 10L17 14L15 12M9 12C6.79086 12 5 10.2091 5 8C5 5.79086 6.79086 4 9 4C11.2091 4 13 5.79086 13 8C13 10.2091 11.2091 12 9 12Z" stroke="#c19a9a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            <div>
                                <span>{{$Rnotification->data['name']}}</span>
                                <div>
                                    <p>مرحبا بك في موقع الأندية الطلابية، ونتمنى لك مسيرة موفقة.</p>
                                    <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Rnotification->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    @endif
            @endforeach
        </ul>
        @else
            <span class="no-notifications">لا توجد إشعارات قديمة.</span>
        @endif
    @else
        <span class="no-notifications">لا توجد إشعارات حتى الآن.</span>
    @endif
</div>
