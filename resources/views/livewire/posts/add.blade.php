<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexPosts()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div>
                    <label>عنوان المنشور</label>
                    <input type="text" wire:model.debounce.10800000ms="title" name="title">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="body">المحتوى</label>
                    <textarea id="body" placeholder="اكتب هنا محتوى المنشور" wire:model.debounce.10800000ms="body" name="body"></textarea>
                    @error('body') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>صورة المنشور</label>
                    <label for="image" style="cursor: pointer;background-color: #579BB1;color: white;width: 100%;text-align: center;padding: 10px;border-radius: 6px;font-size: 14px;height: 40px">اختر صورة المنشور</label>
                    <input id="image" type="file" wire:model.debounce.10800000ms="image" name="image"  style="display: none" accept="image*">
                    @error('image') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if ($image)
                <div>
                    <img style="border-radius: 6px;border: 1px solid #ccc;" src="{{ $image->temporaryUrl() }}">
                </div>
                @endif
                <button type="submit">نشر</button>
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
