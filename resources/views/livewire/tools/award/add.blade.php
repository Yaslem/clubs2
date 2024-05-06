<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexAward()">رجوع</span>
        <div class="content-date">
            <form wire:submit.prevent="saveAward">
                <div>
                    <label for="name">اسم الجائزة</label>
                    <input wire:model.debounce.10800000ms="name" id="name" type="text" name="name" @error('name') class="error" @enderror>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="notes">ملاحظات</label>
                    <textarea id="notes" wire:model.debounce.10800000ms="des" name="des"></textarea>
                </div>
                <button type="submit">إضافة الجائزة</button>
            </form>
        </div>
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
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
