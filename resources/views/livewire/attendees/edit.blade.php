<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="showAttendees()">رجوع</span>
        <div class="content-profile">
            <form wire:submit.prevent="updateAttend()">
                <div>
                    <label>ما مدى استفادتك من الفعالية</label>
                    <ul>
                        <li>
                            <p>1</p>
                            <input wire:model.debounce.10800000ms="benefit" @if($benefit === 1) checked @else @endif name="benefit" value="1" type="radio">
                        </li>
                        <li>
                            <p>2</p>
                            <input wire:model.debounce.10800000ms="benefit" @if($benefit === 2) checked @else @endif name="benefit" value="2" type="radio">
                        </li>
                        <li>
                            <p>3</p>
                            <input wire:model.debounce.10800000ms="benefit" @if($benefit === 3) checked @else @endif name="benefit" value="3" type="radio">
                        </li>
                        <li>
                            <p>4</p>
                            <input wire:model.debounce.10800000ms="benefit" @if($benefit === 4) checked @else @endif name="benefit" value="4" type="radio">
                        </li>
                        <li>
                            <p>5</p>
                            <input wire:model.debounce.10800000ms="benefit" @if($benefit === 5) checked @else @endif name="benefit" value="5" type="radio">
                        </li>
                    </ul>
                    @error('benefit') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>ما تقييمك لمقدم الفعالية</label>
                    <ul>
                        <li>
                            <p>1</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" @if($lecturer === 1) checked @else @endif value="1" type="radio">
                        </li>
                        <li>
                            <p>2</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" @if($lecturer === 2) checked @else @endif value="2" type="radio">
                        </li>
                        <li>
                            <p>3</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" @if($lecturer === 3) checked @else @endif value="3" type="radio">
                        </li>
                        <li>
                            <p>4</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" @if($lecturer === 4) checked @else @endif value="4" type="radio">
                        </li>
                        <li>
                            <p>5</p>
                            <input wire:model.debounce.10800000ms="lecturer" name="lecturer" @if($lecturer === 5) checked @else @endif value="5" type="radio">
                        </li>
                    </ul>
                    @error('lecturer') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>كم حضرت من الدورة</label>
                    <ul style="height: 100%;">
                        <li>
                            <p>جميعها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" @if($attended === 'جميعها') checked @else @endif value="جميعها" type="radio">
                        </li>
                        <li>
                            <p>أغلبها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" @if($attended === 'أغلبها') checked @else @endif value="أغلبها" type="radio">
                        </li>
                        <li>
                            <p>بعضها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" @if($attended === 'بعضها') checked @else @endif value="بعضها" type="radio">
                        </li>
                        <li>
                            <p>لا شيء منها</p>
                            <input wire:model.debounce.10800000ms="attended" name="attended" @if($attended === 'لا شيء منها') checked @else @endif value="لا شيء منها" type="radio">
                        </li>
                    </ul>
                    @error('attended') <span>{{$message}}</span> @enderror
                </div>
                <div style="grid-column: span 2;">
                    <label>اذكر فائدة استفدتها من الفعالية</label>
                    <textarea wire:model.debounce.10800000ms="utility">{{$utility}}</textarea>
                    @error('utility') <span>{{$message}}</span> @enderror
                </div>
                <div>
                    <label>ما هي الاقتراحات التي تقدمها لإدارة النادي</label>
                    <textarea wire:model.debounce.10800000ms="suggestions">{{$suggestions}}</textarea>
                    @error('suggestions') <span>{{$message}}</span> @enderror
                </div>

                <button type="submit">تحديث التقييم</button>
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
