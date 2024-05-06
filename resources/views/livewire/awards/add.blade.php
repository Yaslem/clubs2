<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexAward()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="saveAward()">
                <div>
                    <label>الاسم الكامل</label>
                    <select wire:model.debounce.10800000ms="user_id">
                        <option>اسم الطالب</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    @error('user_id') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>نوع الجائزة</label>
                    <select wire:model.debounce.10800000ms="award_id">
                        <option>نوع الجائزة</option>
                        @foreach($typeAwards as $award)
                            <option value="{{$award->id}}">{{$award->name}}</option>
                        @endforeach
                    </select>
                    @error('award_id') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>اسم المنسق</label>
                    <select wire:model.debounce.10800000ms="coordinator">
                        <option>اسم المنسق</option>
                        @foreach($coordinatorAll as $coordinator)
                            <option value="{{$coordinator->id}}">{{$coordinator->name}}</option>
                        @endforeach
                    </select>
                    @error('coordinator') <span>{{$message}}</span> @enderror
                </div>
                <button type="submit">إضافة الجائزة</button>
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
                title: 'خطأ!',
                text: '{{ session('error') }}',
                icon: "error",
                button: false,
                timer: 2000,
            });
        </script>
    @endif
</div>
