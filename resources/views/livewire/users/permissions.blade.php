<div>
    <div wire:loading.class="loading-status">
        <span class="cancel" wire:click="indexUsers()">رجوع</span>
        <div class="content-profile">
            <form>
                <div style="grid-column: span 4">
                    <label style="color: gray; margin-bottom: 20px; font-size: 18px">الصلاحيات</label>
                    <ul>
                        @if($usersPermission)
                            @if($usersPermission->count() >= 1)
                                @foreach($usersPermission as $permissionUser)
                                    <li>
                                        <p>{{$permissionUser->name}}</p>
                                        <label style="margin: 0" for="permission{{$permissionUser->id}}">
                                            <span style="cursor: pointer; color: #F55050;background-color: #eeeeee; border: 1px dashed #ccc;padding: 2px 10px; border-radius: 6px;">حذف</span>
                                            <input style="display: none" id="permission{{$permissionUser->id}}" wire:click="deletePermissions()" wire:model.lazy="deletePermissions" type="checkbox" value="{{$permissionUser->id}}">
                                        </label>
                                    </li>
                                @endforeach
                            @else
                                <p>لا توجد لهذا المستخدم صلاحيات.</p>
                            @endif
                        @else
                        @endif
                    </ul>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div style="grid-column: span 4">
                    <label style="color: gray; margin-bottom: 20px; font-size: 18px">إضافة صلاحية جديدة</label>
                    <ul>
                        @foreach($permissionsAll as $permission)
                            <li>
                                <p>{{$permission->name}}</p>
                                <label style="margin: 0" for="permission{{$permission->id}}">
                                    <span style="cursor: pointer; color: green;background-color: #eeeeee; border: 1px dashed#ccc;padding: 2px 10px; border-radius: 6px;">إضافة</span>
                                    <input style="display: none" id="permission{{$permission->id}}" wire:click="addPermission()" wire:model.lazy="permissions" type="checkbox" value="{{$permission->id}}">
                                </label>
                            </li>
                        @endforeach
                    </ul>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>
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
