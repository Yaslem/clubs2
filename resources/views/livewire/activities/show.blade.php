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
    <div id="show" wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexActivity()">رجوع</span>
        <div class="activity-show">
            <div>
                <div class="alert">
                    @if($status)
                        @if($status === 'تم الطلب')
                            <svg width="64px" height="64px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>error-filled</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="add" fill="#FD8A8A" transform="translate(42.666667, 42.666667)"> <path d="M213.333333,3.55271368e-14 C331.136,3.55271368e-14 426.666667,95.5306667 426.666667,213.333333 C426.666667,331.136 331.136,426.666667 213.333333,426.666667 C95.5306667,426.666667 3.55271368e-14,331.136 3.55271368e-14,213.333333 C3.55271368e-14,95.5306667 95.5306667,3.55271368e-14 213.333333,3.55271368e-14 Z M262.250667,134.250667 L213.333333,183.168 L164.416,134.250667 L134.250667,164.416 L183.168,213.333333 L134.250667,262.250667 L164.416,292.416 L213.333333,243.498667 L262.250667,292.416 L292.416,262.250667 L243.498667,213.333333 L292.416,164.416 L262.250667,134.250667 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>
                            <p>لم يتم تأكيد حجز هذه الفعالية.</p>
                        @elseif($status === 'مؤجلة')
							<svg width="64px" height="64px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>error-filled</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="add" fill="#FD8A8A" transform="translate(42.666667, 42.666667)"> <path d="M213.333333,3.55271368e-14 C331.136,3.55271368e-14 426.666667,95.5306667 426.666667,213.333333 C426.666667,331.136 331.136,426.666667 213.333333,426.666667 C95.5306667,426.666667 3.55271368e-14,331.136 3.55271368e-14,213.333333 C3.55271368e-14,95.5306667 95.5306667,3.55271368e-14 213.333333,3.55271368e-14 Z M262.250667,134.250667 L213.333333,183.168 L164.416,134.250667 L134.250667,164.416 L183.168,213.333333 L134.250667,262.250667 L164.416,292.416 L213.333333,243.498667 L262.250667,292.416 L292.416,262.250667 L243.498667,213.333333 L292.416,164.416 L262.250667,134.250667 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>
                            <p>تم تأجيل هذه الفعالية.</p>
						@elseif($status === 'ملغاة')
							<svg width="64px" height="64px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>error-filled</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="add" fill="#FD8A8A" transform="translate(42.666667, 42.666667)"> <path d="M213.333333,3.55271368e-14 C331.136,3.55271368e-14 426.666667,95.5306667 426.666667,213.333333 C426.666667,331.136 331.136,426.666667 213.333333,426.666667 C95.5306667,426.666667 3.55271368e-14,331.136 3.55271368e-14,213.333333 C3.55271368e-14,95.5306667 95.5306667,3.55271368e-14 213.333333,3.55271368e-14 Z M262.250667,134.250667 L213.333333,183.168 L164.416,134.250667 L134.250667,164.416 L183.168,213.333333 L134.250667,262.250667 L164.416,292.416 L213.333333,243.498667 L262.250667,292.416 L292.416,262.250667 L243.498667,213.333333 L292.416,164.416 L262.250667,134.250667 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>
                            <p>تم إلغاء هذه الفعالية</p>
					@elseif($status === 'أقيمت')
							<svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z" fill="#8EC3B0"></path> </g></svg>
                            <p>تمت إقامة هذه الفعالية.</p>
					@else
                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z" fill="#8EC3B0"></path> </g></svg>
                            <p>لقد تم تأكيد حجز هذه الفعالية.</p>
                        @endif
                    @else
                    @endif
                </div>
                <div class="activity-show-content">
                    <div>
                        <span>العنوان</span>
                        <span>{{$title}}</span>
                    </div>
                    <div>
                        <span>النادي</span>
                        <span>{{$club}}</span>
                    </div>
                    <div>
                        <span>المكان</span>
                        <span>{{$location}}</span>
                    </div>
                    <div>
                        <span>المقدم</span>
                        <span>{{$presenter}}</span>
                    </div>
                    <div>
                        <span>من</span>
                        <span>{{$from}}</span>
                    </div>
                    <div>
                        <span>إلى</span>
                        <span>{{$to}}</span>
                    </div>
					<div>
                        <span>التاريخ</span>
                        <span>{{$date}}</span>
                    </div>
					<div>
                        <span>اليوم</span>
						@php
                                $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
                                $replace = array ("السبت", "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
                        @endphp
                        <span>{{str_replace($find, $replace, date('D', strtotime($date)))}}</span>
                    </div>
                    <div>
                        <span>النوع</span>
                        <span>{{$type}}</span>
                    </div>
                    <div>
                        <span>الضيافة</span>
                        <span>{{$hospitality}}</span>
                    </div>
                    <div>
                        <span>البروجتكر</span>
                        <span>{{$projector}}</span>
                    </div>
					<div>
                        <span>تاريخ طلب الحجز</span>
                        <span>{{$created_at}}</span>
                    </div>
                    <div>
                        <span>الحالة</span>
                        <span>{{$status}}</span>
                    </div>
                    <div>
                        <span>المدة</span>
                        <span>{{times($from, $to)}}</span>
                    </div>
                    <div>
                        <span>الاشتراك</span>
                        <span>{{$is_share}}</span>
                    </div>
                    <div class="notes-activity">
                        <label>الملاحظات</label>
                        <div class="notes-activity-content">
                            <svg width="40px" height="40px" viewBox="-6 -6 36.00 36.00" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0">

                                    <rect x="-6" y="-6" width="36.00" height="36.00" rx="18" fill="#FAD6A5" strokewidth="0"/>

                                </g>

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C10.5937 3 9.2995 3.05598 8.14453 3.14113C6.41589 3.26859 5.80434 3.32966 5.0751 3.73C4.42984 4.08423 3.66741 4.90494 3.36159 5.5745C3.01922 6.32408 3.00002 7.07231 3.00002 9.13826V10.8156C3.00002 11.9615 3.00437 12.3963 3.06904 12.7399C3.37386 14.3594 4.64066 15.6262 6.26012 15.931C6.60374 15.9957 7.03847 16 8.18442 16C8.1948 16 8.20546 16 8.21637 16C8.33199 15.9998 8.47571 15.9996 8.61593 16.019C9.21331 16.1021 9.74133 16.4502 10.053 16.9666C10.1261 17.0878 10.1825 17.22 10.2279 17.3264C10.2322 17.3364 10.2364 17.3462 10.2404 17.3557L10.6994 18.4267C11.0609 19.2701 11.3055 19.8382 11.518 20.2317C11.6905 20.5511 11.7828 20.6364 11.794 20.6477C11.9249 20.7069 12.0751 20.7069 12.2061 20.6477C12.2172 20.6364 12.3095 20.5511 12.482 20.2317C12.6946 19.8382 12.9392 19.2701 13.3006 18.4267L13.7596 17.3557C13.7637 17.3462 13.7679 17.3364 13.7721 17.3264C13.8175 17.22 13.8739 17.0878 13.9471 16.9666C14.2587 16.4502 14.7867 16.1021 15.3841 16.019C15.5243 15.9996 15.668 15.9998 15.7837 16C15.7946 16 15.8052 16 15.8156 16C16.9616 16 17.3963 15.9957 17.7399 15.931C19.3594 15.6262 20.6262 14.3594 20.931 12.7399C20.9957 12.3963 21 11.9615 21 10.8156V9.13826C21 7.07231 20.9808 6.32408 20.6384 5.5745C20.3326 4.90494 19.5702 4.08423 18.9249 3.73C18.1957 3.32966 17.5841 3.26859 15.8555 3.14113C14.7005 3.05598 13.4064 3 12 3ZM7.99746 1.14655C9.19742 1.05807 10.5408 1 12 1C13.4593 1 14.8026 1.05807 16.0026 1.14655C16.0472 1.14984 16.0913 1.15308 16.1351 1.1563C17.6971 1.27104 18.7416 1.34777 19.8874 1.97681C20.9101 2.53823 21.973 3.68239 22.4577 4.74356C23.001 5.93322 23.0007 7.13737 23.0001 8.95396C23 9.0147 23 9.07613 23 9.13826V10.8156C23 10.8555 23 10.8949 23 10.9337C23.0002 11.921 23.0003 12.5583 22.8965 13.1098C22.4392 15.539 20.5391 17.4392 18.1099 17.8965C17.5583 18.0003 16.9211 18.0002 15.9337 18C15.8949 18 15.8555 18 15.8156 18C15.7355 18 15.6941 18.0001 15.6638 18.0009C15.6625 18.0009 15.6612 18.0009 15.66 18.001C15.6596 18.002 15.659 18.0032 15.6585 18.0044C15.6458 18.0319 15.6294 18.07 15.5979 18.1436L15.1192 19.2604C14.7825 20.0462 14.5027 20.6992 14.2417 21.1823C13.9898 21.6486 13.6509 22.1678 13.098 22.4381C12.4052 22.7768 11.5948 22.7768 10.902 22.4381C10.3491 22.1678 10.0103 21.6486 9.75836 21.1823C9.49738 20.6992 9.21753 20.0462 8.88079 19.2604L8.40215 18.1436C8.3706 18.07 8.35421 18.0319 8.34157 18.0044C8.34101 18.0032 8.34048 18.002 8.33998 18.001C8.33881 18.0009 8.33755 18.0009 8.33621 18.0009C8.30594 18.0001 8.26451 18 8.18442 18C8.14451 18 8.10515 18 8.06633 18C7.07897 18.0002 6.44169 18.0003 5.89017 17.8965C3.46098 17.4392 1.56079 15.539 1.10356 13.1098C0.999748 12.5583 0.999849 11.921 1.00001 10.9337C1.00001 10.8949 1.00002 10.8555 1.00002 10.8156V9.13826C1.00002 9.07613 0.999998 9.0147 0.999978 8.95396C0.999383 7.13737 0.998989 5.93322 1.54238 4.74356C2.02707 3.68239 3.08998 2.53823 4.11264 1.97681C5.25848 1.34777 6.30294 1.27104 7.86493 1.1563C7.9087 1.15308 7.95287 1.14984 7.99746 1.14655Z" fill="#CFB997"/> </g>

                            </svg>
                            <textarea disabled>{{$notes}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
