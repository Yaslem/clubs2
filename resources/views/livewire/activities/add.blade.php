<div>
    <div id="add" wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexActivity()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="store">
                <div style="grid-column: span 2;">
                    <label for="title">العنوان</label>
                    <input id="title" type="text" placeholder="اكتب العنوان كاملا" wire:model.debounce.10800000ms="title" @error('title') class="error"  @enderror>
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="presenter">المقدم</label>
                    <input id="presenter" type="text" placeholder="اكتب اسم المقدم" wire:model.debounce.10800000ms="presenter"  @error('presenter') class="error" @enderror>
                    @error('presenter') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div>
                    <label for="date">التاريخ</label>
                    <select wire:model.debounce.10800000ms="date">
                        <option value="">اختر التاريخ</option>
                        @foreach($dates as $date)
                            @php
                                $startDate = strtotime($date->start);
                                $endDate = strtotime($date->end);

                                for ($currentDate = $startDate; $currentDate <= $endDate; $currentDate += (86400)) {
                                    $date = date('Y-m-d', $currentDate);
                                    echo "<option>".date("Y-m-d", $currentDate)."</option>";
                                }
                            @endphp
                        @endforeach
                    </select>
                    @error('date') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>من</label>
                    <select wire:model.debounce.10800000ms="from" @error('from') class="error" @enderror>
                        <option value="">اختر بداية الوقت</option>
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
                        <option value="">اختر نهاية الوقت</option>
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
                        <option value="">اختر المكان</option>
                        @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                    @error('location_id') <span class="error">{{ $message }}</span> @enderror

                </div>
                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                    <div>
                        <label>النادي</label>
                        <select wire:model.debounce.10800000ms="club_id">
                            <option value="">اختر النادي</option>
                            @foreach($clubs as $club)
                                <option value="{{$club->id}}">{{$club->name}}</option>
                            @endforeach
                        </select>
                        @error('club_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                @else
                    <div>
                        <label>النادي</label>
                        <select wire:model.debounce.10800000ms="club_id">
                            <option value="">اختر النادي</option>
                            @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                @foreach($clubs as $club)
                                    <option value="{{$club->id}}">{{$club->name}}</option>
                                @endforeach
                            @else
                                <option value="{{\Illuminate\Support\Facades\Auth::user()->ClubStatus->id}}">{{\Illuminate\Support\Facades\Auth::user()->ClubStatus->name}}</option>
                            @endif
                        </select>
                        @error('club_id') <span class="error">{{ $message  }}</span> @enderror
                    </div>
                @endif
                <div>
                    <label>النوع</label>
                    <select wire:model.debounce.10800000ms="type_id">
                        <option value="">اختر نوع الفعالية</option>
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                    @error('type_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>الضيافة</label>
                    <select wire:model.debounce.10800000ms="hospitality">
                        <option value="">حدد الضيافة</option>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                    @error('hospitality') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>البروجكتر</label>
                    <select wire:model.debounce.10800000ms="projector">
                        <option value="">حدد البروجكتر</option>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                    @error('projector') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>حالة الاشتراك</label>
                    <select wire:model.debounce.10800000ms="is_share">
                        <option value="">حدد الحالة</option>
                        <option value="مشتركة">مشتركة</option>
                        <option value="غير مشتركة">غير مشتركة</option>
                    </select>
                    @error('is_share') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                    <div>
                        <label>حالة الفعالية</label>
                        <select wire:model.debounce.10800000ms="status">
                            <option value="">جميع الحالات</option>
                            <option value="أقيمت">أقيمت</option>
                            <option value="لم تقم">لم تقم</option>
                            <option value="ملغاة">ملغاة</option>
                            <option value="مؤجلة">مؤجلة</option>
                            <option value="تم الطلب">تم الطلب</option>
                            <option value="تم الحجز">تم الحجز</option>
                        </select>
                        @error('status') <span class="error">{{ $message }}</span> @enderror
                    </div>
                @endif
                <div style="grid-column: span 4;">
                    <label>الملاحظات</label>
                    <textarea wire:model.debounce.10800000ms="notes"></textarea>
                    @error('notes') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button type="submit">حفظ الحجز</button>
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
    @if (session()->has('error'))
        <script>
            swal({
                title: 'تم!',
                text: '{{ session('error') }}',
                icon: "error",
                button: false,
                timer: 2000,
            });
        </script>
    @endif
</div>
