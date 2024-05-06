<div>
    <div wire:loading.class="loading-status">
        <div class="count-activity-container">
            <span class="cancel" wire:click="indexClub()">رجوع</span>
        </div>
        <div class="content-profile">
            <form enctype="multipart/form-data" wire:submit.prevent="updateClub()">
                <div class="avatar-container">
                    <div>
                        <input id="avatarButton" type="file" name="avatar" wire:model.debounce.10800000ms="avatar"  value="{{asset('uploads/'.$avatar)}}">
                        <label for="avatarButton">تغيير صورة النادي</label>
                        <input id="coverButton" type="file" name="cover" wire:model.debounce.10800000ms="cover" value="{{asset('uploads/'.$cover)}}">
                        <label for="coverButton">تغيير صورة غلاف النادي</label>
                    </div>
                </div>
                <div>
                    <label for="name">اسم النادي</label>
                    <input type="text" placeholder="اكتب اسم النادي كاملا" wire:model.debounce.10800000ms="name" name="name" value="{{$name}}" @error('name') class="error"  @enderror>
                    @error('name') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div>
                    <label for="slug">رابط النادي على الموقع</label>
                    <input type="text" placeholder="أدخل رابط النادي على الموقع " wire:model.debounce.10800000ms="slug" name="slug" value="{{$slug}}" @error('slug') class="error" @enderror>
                    @error('slug') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="description">وصف قصير عن النادي</label>
                    <textarea placeholder="اكتب معلومات عن النادي" name="description" wire:model.debounce.10800000ms="description" @error('description') class="error" @enderror>{{$description}}</textarea>
                </div>
                <div>
                    <label for="goals">الأهداف</label>
                    <textarea placeholder="اكتب أهداف النادي، وافصل بين الأهداف بفاصلة.. مثل: كذا، كذا، كذا.." name="goals" wire:model.debounce.10800000ms="goals" @error('goals') class="error" @enderror>{{$goals}}</textarea>
                </div>
                <div>
                    <label for="vision">الرؤية</label>
                    <textarea placeholder="اكتب رؤية النادي.." name="vision" wire:model.debounce.10800000ms="vision" @error('vision') class="error" @enderror>{{$vision}}</textarea>
                </div>
                <div>
                    <label for="values">القيم</label>
                    <textarea placeholder="اكتب قيم النادي، وافصل بين القيم بفاصلة.. مثل: كذا، كذا، كذا.." wire:model.debounce.10800000ms="values" name="values" @error('values') class="error" @enderror>{{$values}}</textarea>
                </div>
                <div>
                    <label for="message">الرسالة</label>
                    <textarea placeholder="اكتب رسالة النادي.." name="message" wire:model.debounce.10800000ms="message" @error('message') class="error" @enderror>{{$message}}</textarea>
                </div>
                <div>
                    <div style="margin-bottom: 20px">
                        <label for="whatsapp">رابط مجموعة الواتساب</label>
                        <input type="text" placeholder="أدخل رابط مجموعة النادي على الواتساب" wire:model.debounce.10800000ms="whatsapp" name="whatsapp" value="{{$whatsapp}}" @error('whatsapp') class="error" @enderror>
                    </div>
                    <div>
                        <label for="telegram">رابط مجموعة اتيليجرام</label>telegram
                        <input type="text" placeholder="أدخل رابط قناة النادي على التيليجرام" wire:model.debounce.10800000ms="telegram" name="telegram" value="{{$telegram}}" @error('telegram') class="error" @enderror>
                    </div>
                </div>
				@if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
					<div>
						<label for="telegram">مدير النادي</label>
						<select wire:model.debounce.10800000ms="manager_id" name="manager_id">
							<option value="">مدير النادي</option>
							@foreach($userManager as $user)
								<option @if($user->id == $manager_id) selected @else @endif
								value="{{$user->id}}">{{$user->name}}</option>
							@endforeach
						</select>
						@error('manager_id') <span class="error">{{ $message }}</span> @enderror
					</div>
				@endif
                <button>تحديث معلومات النادي</button>
            </form>
        </div>
    </div>
    <div wire:loading="hello" class="loading">
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
