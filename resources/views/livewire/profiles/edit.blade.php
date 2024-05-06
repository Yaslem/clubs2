<div>
    <div class="content-profile" wire:loading.class="loading-status">
        <form wire:submit.prevent="storeUser" enctype="multipart/form-data">
            <div>
                <label for="name">الاسم الكامل</label>
                <input id="name" type="text" placeholder="اكتب اسمك كاملا" value="{{$name}}" wire:model.debounce.10800000ms="name" name="name"  @error('name') class="error"  @enderror>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="username">الرقم الجامعي</label>
                <input id="username" type="text" placeholder="أدخل رقمك الجامعي" value="{{$username}}" wire:model.debounce.10800000ms="username" name="username" @error('username') class="error" @enderror>
                @error('username') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="ID_Number">رقم الهوية/الإقامة</label>
                <input id="ID_Number" type="text" placeholder="أدخل رقم هويتك" value="{{$ID_Number}}" wire:model.debounce.10800000ms="ID_Number" name="ID_Number" @error('ID_Number') class="error" @enderror>
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
                <input id="number_of_whatsapp" type="text"  value="{{$number_of_whatsapp}}" wire:model.debounce.10800000ms="number_of_whatsapp" placeholder="اكتب رقم واتسابك" name="number_of_whatsapp"  @error('number_of_whatsapp') class="error" @enderror>
                @error('number_of_whatsapp') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email">البريد الإلكتروني</label>
                <input id="email" type="email" placeholder="أدخل بريدك الإلكتروني" value="{{$email}}" wire:model.debounce.10800000ms="email" name="email"  @error('email') class="error" @enderror>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label>النادي الأساسي</label>
                <select id="club_id" wire:model.debounce.10800000ms="club_id" name="club_id">
                    <option value="null">النادي</option>
                    @foreach($clubs as $club)
                        <option @if($club->id == $club_id) selected @else @endif
                        value="{{$club->id}}">{{$club->name}}</option>
                    @endforeach
                </select>
                @error('college_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label>صورة الحساب</label>
                <label for="avatar" style="background-color: #579BB1;color: white;width: 100%;text-align: center;padding: 10px;border-radius: 6px;font-size: 14px;height: 40px">اختر صورة لحسابك</label>
                <input id="avatar" type="file" wire:model.debounce.10800000ms="avatar" name="avatar"  style="display: none" accept="image*">
                @error('avatar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button type="submit">تحديث البيانات</button>
        </form>
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
                title: 'خطأ!',
                text: '{{ session('error') }}',
                icon: "error",
                button: false,
                timer: 2000,
            });
        </script>
    @endif
    <div wire:loading class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
