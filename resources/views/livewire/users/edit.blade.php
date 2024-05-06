<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexUsers()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="updateUser">
                <div>
                    <label for="name">الاسم الكامل</label>
                    <input id="name" type="text" placeholder="اكتب الاسم كاملا" value="{{$name}}" wire:model.debounce.10800000ms="name" name="name"  @error('name') class="error"  @enderror>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="username">الرقم الجامعي</label>
                    <input id="username" type="text" placeholder="أدخل الرقم الجامعي" value="{{$username}}" wire:model.debounce.10800000ms="username" name="username" @error('username') class="error" @enderror>
                    @error('username') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="ID_Number">رقم الهوية/الإقامة</label>
                    <input id="ID_Number" type="text" placeholder="أدخل رقم الهوية/الإقامة" value="{{$ID_Number}}" wire:model.debounce.10800000ms="ID_Number" name="ID_Number" @error('ID_Number') class="error" @enderror>
                    @error('ID_Number') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>الدولة</label>
                    <select id="country_id" wire:model.debounce.10800000ms="country_id" name="country_id">
                        <option value="null">الدولة</option>
                        @foreach($countries as $country)
                            <option  @if($country->id == $country_id) selected @else @endif
                                value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('country_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>الكلية</label>
                    <select id="college_id" wire:model.debounce.10800000ms="college_id" name="college_id">
                        <option value="null">الكلية</option>
                        @foreach($colleges as $college)
                            <option @if($college->id == $college_id) selected @else @endif
                                value="{{$college->id}}">{{$college->name}}</option>
                        @endforeach
                    </select>
                    @error('college_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>المستوى</label>
                    <select id="level_id" wire:model.debounce.10800000ms="level_id" name="level_id">
                        <option value="null">المستوى</option>
                        @foreach($levels as $level)
                            <option @if($level->id == $level_id) selected @else @endif
                                value="{{$level->id}}">{{$level->name}}</option>
                        @endforeach
                    </select>
                    @error('level_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="number_of_whatsapp">رقم الواتساب</label>
                    <input id="number_of_whatsapp" type="text"  value="{{$number_of_whatsapp}}" wire:model.debounce.10800000ms="number_of_whatsapp" placeholder="اكتب رقم الواتساب" name="number_of_whatsapp"  @error('number_of_whatsapp') class="error" @enderror>
                    @error('number_of_whatsapp') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="email">البريد الإلكتروني</label>
                    <input id="email" type="email" placeholder="أدخل البريد الإلكتروني" value="{{$email}}" wire:model.debounce.10800000ms="email" name="email"  @error('email') class="error" @enderror>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
				<div>
                    <label for="password">كلمة المرور</label>
                    <input id="password" type="password" placeholder="أدخل كلمة المرور" wire:model.debounce.10800000ms="password" name="password"  @error('password') class="error" @enderror>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="membership_status">نوع العضوية</label>
                    <select id="membership_status" wire:model.debounce.10800000ms="membership_status" name="membership_status">
                        <option value="null">نوع العضوية</option>
                        <option @if('أساسي' === $role) selected @else  @endif
                            value="أساسي">أساسي</option>
                        <option  @if('فرعي' === $role) selected @else  @endif
                            value="فرعي">فرعي</option>
                    </select>
                    @error('membership_status') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>النادي</label>
                    <select id="club_id" wire:model.debounce.10800000ms="club_id" name="club_id">
                        <option value="null">النادي</option>
                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                            @foreach($clubs as $club)
                                <option @if($club->id == $club_id) selected @else @endif
                                value="{{$club->id}}">{{$club->name}}</option>
                            @endforeach
                        @else
                            <option selected value="{{Auth::user()->ClubStatus->id}}">{{Auth::user()->ClubStatus->name}}</option>
                        @endif
                    </select>
                    @error('club_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>رتبة المستخدم</label>
                    <select id="role" wire:model.debounce.10800000ms="role" name="role">
                        <option value="null">نوع المستخدم</option>
                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                            <option value="رئيس">رئيس</option>
                            <option value="منسق">منسق</option>
                            <option value="مدير">مدير</option>
                            <option value="مسؤول">مسؤول</option>
                            <option value="نائب">نائب</option>
                            <option value="طالب">طالب</option>
                        @else
                            <option value="مسؤول">مسؤول</option>
                            <option value="نائب">نائب</option>
                            <option value="طالب">طالب</option>
                        @endif
                    </select>
                    @error('role') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button type="submit">تحديث بيانات الطالب</button>
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
