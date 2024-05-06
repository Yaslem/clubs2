<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexActivity()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="store">
                <div style="grid-column: span 2;">
                    <label for="title">العنوان</label>
                    <input id="title" type="text" placeholder="اكتب العنوان كاملا" wire:model.debounce.10800000ms="title" value="{{$title}}"  @error('title') class="error"  @enderror>
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="presenter">المقدم</label>
                    <input id="presenter" type="text" placeholder="اكتب اسم المقدم" wire:model.debounce.10800000ms="presenter" value="{{$presenter}}" @error('presenter') class="error" @enderror>
                    @error('presenter') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="date">التاريخ</label>
                    <select wire:model.debounce.10800000ms="date" @error('date') class="error" @enderror>
                        <option>{{$date}}</option>
                        @foreach($dates as $date)
                            @php
                                $start =  strtotime($date->start);
                                $end = strtotime($date->end);
                                while ($start <= $end)
                                {
                                    echo "<option>".date("Y-m-d", $start)."</option>";
                                    $start = strtotime("+1 days", $start);
                                }
                            @endphp
                        @endforeach
                    </select>
                    @error('date') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>من</label>
                    <select wire:model.debounce.10800000ms="from" @error('from') class="error" @enderror>
                        <option>{{$from}}</option>
                        @foreach($times as $time)
                            @php
                                $start_time = strtotime($time->start);
                                $end_time = strtotime($time->end);
                                for( $i=$start_time; $i< ($end_time - 3600); $i+=1800) {
                                    echo "<option>".date("H:i",$i)."</option>";
                                }
                            @endphp
                        @endforeach
                    </select>
                    @error('from') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>إلى</label>
                    <select wire:model.debounce.10800000ms="to"  @error('to') class="error" @enderror>
                        <option>{{$to}}</option>
                        @foreach($times as $time)
                            @php
                                $start_time = strtotime($time->start);
                                $end_time = strtotime($time->end);
                                for( $i = $start_time; $i < $end_time; $i+=1800) {
                                    echo "<option>".date("H:i",$i)."</option>";
                                }
                            @endphp
                        @endforeach
                    </select>
                    @error('to') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>المكان</label>
                    <select wire:model.debounce.10800000ms="location_id">
                        @foreach($locations as $location)
                            <option
                                @if($location->id == $location_id) selected @else @endif
                            value="{{$location->id}}"
                            >{{$location->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('location_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                    <div>
                        <label>النادي</label>
                        <select wire:model.debounce.10800000ms="club_idActivity">
                            <option value="">اختر النادي</option>
                            @foreach($clubs as $club)
                                <option @if($club->id == $club_idActivity) selected @else @endif
                                    value="{{$club->id}}">{{$club->name}}</option>
                            @endforeach
                        </select>
                        @error('club_idActivity') <span class="error">{{ $message }}</span> @enderror
                    </div>
                @else
                    <div>
                        <label>النادي</label>
                        <select wire:model.debounce.10800000ms="club_idActivity">
                            <option value="">اختر النادي</option>
                            <option selected
                                    value="{{\Illuminate\Support\Facades\Auth::user()->ClubStatus->id}}">{{\Illuminate\Support\Facades\Auth::user()->ClubStatus->name}}</option>
                        </select>
                        @error('club_idActivity') <span class="error">{{ $message  }}</span> @enderror
                    </div>
                @endif
                <div>
                    <label>النوع</label>
                    <select wire:model.debounce.10800000ms="type_id">
                        @foreach($types as $type)
                            <option
                                @if($type->id == $type_id) selected @else @endif
                            value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                    @error('type_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                <div>
                    <label>حالة الفعالية</label>
                    <select wire:model.debounce.10800000ms="status">
                        <option @if($status == 'أقيمت') selected @else @endif value="أقيمت">أقيمت</option>
                        <option @if($status == 'لم تقم') selected @else  @endif  value="لم تقم">لم تقم</option>
                        <option @if($status == 'ملغاة') selected @else @endif  value="ملغاة">ملغاة</option>
                        <option @if($status == 'مؤجلة') selected @else @endif  value="مؤجلة">مؤجلة</option>
                        <option @if($status == 'تم الطلب') selected @else  @endif  value="تم الطلب">تم الطلب</option>
                        <option @if($status == 'تم الحجز') selected @else  @endif  value="تم الحجز">تم الحجز</option>
                    </select>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>
                @endif
                <div>
                    <label>حالة الاشتراك</label>
                    <select wire:model.debounce.10800000ms="is_share">
                        <option @if($is_share == 'مشتركة') selected @else @endif value="مشتركة">مشتركة</option>
                        <option @if($is_share == 'غير مشتركة') selected @else  @endif  value="غير مشتركة">غير مشتركة</option>
                    </select>
                    @error('is_share') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>الضيافة</label>
                    <select wire:model.debounce.10800000ms="hospitality">
                        <option @if($hospitality == 'نعم') selected @else @endif value="نعم">نعم</option>
                        <option @if($hospitality == 'لا') selected @else @endif value="لا">لا</option>
                    </select>
                    @error('hospitality') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>البروجكتر</label>
                    <select wire:model.debounce.10800000ms="projector">
                        <option @if($projector == 'نعم') selected @else @endif value="نعم">نعم</option>
                        <option @if($projector == 'لا') selected @else @endif value="لا">لا</option>
                    </select>
                    @error('projector') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div style="grid-column: span 4;">
                    <label>الملاحظات</label>
                    <textarea wire:model.debounce.10800000ms="notes">{{$notes}}</textarea>
                </div>
                <button type="submit">تعديل الحجز</button>
            </form>
        </div>
    </div>
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
    @if (session()->has('message'))
        <script>
            swal({
                title: 'تم!',
                text: '{{ session('message') }}',
                icon: "success",
                button: false,
                timer: 2000,
            });
        </script>
    @endif
</div>
