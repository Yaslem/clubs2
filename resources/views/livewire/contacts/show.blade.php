<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexOrders()">رجوع</span>
        <div class="content-profile">
            <div class="form">
                @if($orders)
                        <div>
                            <label>عنوان الطلب</label>
                            <input type="text" disabled value="{{$orders->title}}">
                        </div>
                        <div>
                            <label>مرسل الطلب</label>
                            <input type="text" disabled value="{{$orders->user->name}}">
                        </div>
                        <div>
                            <label>نوع الطلب</label>
                            <input type="text" disabled value="{{$orders->category->name}}">
                        </div>
                        <div>
                            <label>جهة الطلب</label>
                            <input type="text" disabled value="{{$orders->club->name}}">
                        </div>
                        <div>
                            <label>حالة الطلب</label>
                            @can('editOrders' , App\Models\User::class)
                                @if($orders->category->name === 'تغيير النادي الأساسي')
                                    @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                        <div style="display: flex; flex-direction: row; gap: 20px; align-items: center;">
                                            <section style="display: flex; align-items: end; gap: 10px;">
                                                <input style="width: 30px;" wire:click="status('تحت التنفيذ')"  name="status" type="radio" value="تحت التنفيذ" @disabled($orders->status === 'تحت التنفيذ') @checked($orders->status === 'تحت التنفيذ')/>
                                                <label style="margin-bottom: 0">تحت التنفيذ</label>
                                            </section>
                                            <section style="display: flex; align-items: end; gap: 10px;">
                                                <input style="width: 30px;" wire:click="status('ملغاة')"  name="status" type="radio" value="ملغاة" @disabled($orders->status === 'ملغاة') @checked($orders->status === 'ملغاة')/>
                                                <label style="margin-bottom: 0">ملغاة</label>
                                            </section>
                                            <section style="display: flex; align-items: end; gap: 10px;">
                                                <input style="width: 30px;" wire:click="status('مكتملة')" name="status"  type="radio" value="مكتملة" @disabled($orders->status === 'مكتملة') @checked($orders->status === 'مكتملة')/>
                                                <label style="margin-bottom: 0">مكتملة</label>
                                            </section>
                                        </div>
                                    @endif
                                @else
                                    <div style="display: flex; flex-direction: row; gap: 20px; align-items: center;">
                                        <section style="display: flex; align-items: end; gap: 10px;">
                                            <input style="width: 30px;" wire:click="status('تحت التنفيذ')"  name="status" type="radio" value="تحت التنفيذ" @disabled($orders->status === 'تحت التنفيذ') @checked($orders->status === 'تحت التنفيذ')/>
                                            <label style="margin-bottom: 0">تحت التنفيذ</label>
                                        </section>
                                        <section style="display: flex; align-items: end; gap: 10px;">
                                            <input style="width: 30px;" wire:click="status('ملغاة')"  name="status" type="radio" value="ملغاة" @disabled($orders->status === 'ملغاة') @checked($orders->status === 'ملغاة')/>
                                            <label style="margin-bottom: 0">ملغاة</label>
                                        </section>
                                        <section style="display: flex; align-items: end; gap: 10px;">
                                            <input style="width: 30px;" wire:click="status('مكتملة')" name="status"  type="radio" value="مكتملة" @disabled($orders->status === 'مكتملة') @checked($orders->status === 'مكتملة')/>
                                            <label style="margin-bottom: 0">مكتملة</label>
                                        </section>
                                    </div>
                                @endif
                            @else
                                <input type="text" disabled value="{{$orders->status}}">
                            @endcan
                        </div>
                        <div>
                            <label for="body">المحتوى</label>
                            <textarea disabled>{{$orders->body}}</textarea>
                        </div>
                        @if ($orders->image)
                            <div>
                                <label for="body">صور من الطلب</label>
                                <img style="border-radius: 6px;border: 1px solid #ccc;" src="{{asset('uploads/files/'.$orders->image)}}">
                            </div>
                        @endif
                    @if(!($orders->status === 'مكتملة' || $orders->status === 'ملغاة'))
					<div>
						<form wire:submit.prevent="storeReply">
							<div>
								<label for="body">إضافة رد</label>
								<textarea id="body" placeholder="اكتب هنا ردا على الطلب" wire:model.debounce.10800000ms="body" name="body"></textarea>
								@error('body') <span class="error">{{ $message }}</span> @enderror
							</div>
							<button type="submit">إضافة رد</button>
						</form>
					</div>
					@else
						 @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
								<div>
									<form wire:submit.prevent="storeReply">
										<div>
											<label for="body">إضافة رد</label>
											<textarea id="body" placeholder="اكتب هنا ردا على الطلب" wire:model.debounce.10800000ms="body" name="body"></textarea>
											@error('body') <span class="error">{{ $message }}</span> @enderror
										</div>
										<button type="submit">إضافة رد</button>
									</form>
								</div>
							@endif
                    @endif
                    @if($orders->replies->count() > 0)
                        <div style="gap: 20px;">
                            <label for="body">الردود</label>
                            @foreach($orders->replies as $reply)
                                <div class="comment-container">
                                    <div>
                                        <div>
                                            <img style="object-fit: cover;" src="{{asset('uploads/files/'.$reply->user->avatar)}}">
                                            <div style="display: flex;flex-direction: column;">
                                                <span style="color: #299829">{{$reply->user->name}}</span>
                                                <span style="margin-top: 6px;color: gray;font-size: 10px;opacity: 0.6;">من {{$reply->user->ClubStatus->name}}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $reply->created_at)->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                    <div style="flex-direction: row; align-items: center">
                                        <p>{{$reply->body}}</p>
                                        @if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
                                            <span wire:click="deleteReply({{$reply->id}})" style="color: #E84545; cursor: pointer">حذف</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @else
                @endif
            </section>
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
