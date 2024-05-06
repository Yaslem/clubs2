<div>
    <div class="count-activity-container">
        <span class="cancel" wire:click="indexClub()">رجوع</span>
    </div>
    <div class="content-profile">
        <form wire:submit.prevent="saveClub()" enctype="multipart/form-data">
            <div class="avatar-container">
                <div>
                    <input id="avatarButton" type="file" name="avatar" wire:model.debounce.10800000ms="avatar" >
                    <label for="avatarButton">إضافة صورة النادي</label>
                    <input id="coverButton" type="file" name="cover" wire:model.debounce.10800000ms="cover">
                    <label for="coverButton">إضافة صورة غلاف النادي</label>
                </div>
            </div>
            <div>
                <label for="name">اسم النادي</label>
                <input type="text" placeholder="اكتب اسم النادي كاملا" wire:model.debounce.10800000ms="name" name="name" @error('name') class="error"  @enderror>
                @error('name') <span class="error">{{ $message }}</span> @enderror

            </div>
            <div>
                <label for="slug">رابط النادي على الموقع</label>
                <input type="text" placeholder="أدخل رابط النادي على الموقع " wire:model.debounce.10800000ms="slug" name="slug" @error('slug') class="error" @enderror>
                @error('slug') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="description">وصف قصير عن النادي</label>
                <textarea placeholder="اكتب معلومات عن النادي" name="description" wire:model.debounce.10800000ms="description" @error('description') class="error" @enderror></textarea>
            </div>
            <div>
                <label for="goals">الأهداف</label>
                <textarea placeholder="اكتب أهداف النادي، وافصل بين الأهداف بفاصلة.. مثل: كذا، كذا، كذا.." name="goals" wire:model.debounce.10800000ms="goals" @error('goals') class="error" @enderror></textarea>
            </div>
            <div>
                <label for="vision">الرؤية</label>
                <textarea placeholder="اكتب رؤية النادي.." name="vision" wire:model.debounce.10800000ms="vision" @error('vision') class="error" @enderror></textarea>
            </div>
            <div>
                <label for="message">الرسالة</label>
                <textarea placeholder="اكتب رسالة النادي.." name="message" wire:model.debounce.10800000ms="message" @error('message') class="error" @enderror></textarea>
            </div>
            <div>
                <label for="values">القيم</label>
                <textarea placeholder="اكتب قيم النادي، وافصل بين القيم بفاصلة.. مثل: كذا، كذا، كذا.." name="values" wire:model.debounce.10800000ms="valuesClub" @error('values') class="error" @enderror></textarea>
            </div>
            <div>
                <div style="margin-bottom: 20px">
                    <label for="whatsapp">رابط مجموعة الواتساب</label>
                    <input type="text" placeholder="أدخل رابط مجموعة النادي على الواتساب" wire:model.debounce.10800000ms="whatsapp" name="whatsapp" @error('whatsapp') class="error" @enderror>
                </div>
                <div>
                    <label for="telegram">رابط مجموعة تيليجرام</label>
                    <input type="text" placeholder="أدخل رابط قناة النادي على التيليجرام" wire:model.debounce.10800000ms="telegram" name="telegram" @error('telegram') class="error" @enderror>
                </div>
            </div>
            <div>
                <label for="telegram">مدير النادي</label>
                <select wire:model.debounce.10800000ms="manager_id" name="manager_id">
                    <option value="">مدير النادي</option>
                    @foreach($userManager as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                @error('manager_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button>إضافة النادي</button>
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
</div>
