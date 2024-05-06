<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexReports()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div>
                    <label>عنوان الفعالية</label>
                    <select id="reservation_id" wire:model.debounce.10800000ms="reservation_id" name="reservation_id">
                        <option value="null">عنوان الفعالية</option>
                        @foreach($reservations as $reservation)
                            <option value="{{$reservation->id}}">{{$reservation->title}}  = ({{$reservation->club->name}})</option>
                        @endforeach
                    </select>
                    @error('reservation_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="number_of_attendees">عدد الحضور</label>
                    <input id="number_of_attendees" type="number" placeholder="أدخل عدد الحضور للفعالية" wire:model.debounce.10800000ms="number_of_attendees" name="number_of_attendees">
                    @error('number_of_attendees') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>الصور</label>
                    <label for="images" style="background-color: #579BB1;color: white;width: 100%;text-align: center;padding: 10px;border-radius: 6px;font-size: 14px;height: 40px">اختر 4 صور من الفعالية</label>
                    <input id="images" type="file" wire:model.debounce.10800000ms="images" name="images" multiple="multiple" accept="image/*" style="display: none">
                    @error('images*') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div style="grid-column: span 2;">
                    <label for="summary">الملخص</label>
                    <textarea id="summary" placeholder="اكتب ملخصا للفعالية" wire:model.debounce.10800000ms="summary" name="summary"></textarea>
                    @error('summary') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="notes">الملاحظات</label>
                    <textarea id="notes" placeholder="اكتب ملاحظات عن الفعالية" wire:model.debounce.10800000ms="notes" name="notes"></textarea>
                    @error('notes') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if($images)
                    @if(count($images) > 3 && count($images) < 5)
                        <div style="grid-column: span 3;">
                            <label for="notes">الصور</label>
                            <div style="border: 1px dashed #ccc; padding: 10px; border-radius: 6px;display: grid;grid-template-columns: repeat(2, 1fr);gap: 20px;">
                                <img style="border: 1px solid #ccc;width: 100%;height: auto;border-radius: 6px;" src="{{ $images[0]->temporaryUrl() }}">
                                <img style="border: 1px solid #ccc;width: 100%;height: auto;border-radius: 6px;" src="{{ $images[1]->temporaryUrl() }}">
                                <img style="border: 1px solid #ccc;width: 100%;height: auto;border-radius: 6px;" src="{{ $images[2]->temporaryUrl() }}">
                                <img style="border: 1px solid #ccc;width: 100%;height: auto;border-radius: 6px;" src="{{ $images[3]->temporaryUrl() }}">
                            </div>
                        </div>
                        <button type="submit">إضافة تقرير</button>
                    @else
                        <span style="font-size: 13px; margin: 8px 0;color: #E84545;">يجب أن تختار 4 صور.</span>
                    @endif
                @else
                @endif
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
