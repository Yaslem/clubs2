@section('title', '- أوقات الحجز')
<div>
    <section wire:loading.class="loading-status" class="b-index" id="container">
        @if($indexCountry == true)
            <div class="head-date">
                <span class="cancel" id="cancelCountry" wire:click="indexTools()">رجوع</span>
                <span wire:click="addCountry()" id="addUserCountry" class="addUser">إضافة جنسية جديدة</span>
            </div>
            @if($countries->count() >= 1)
                <div id="index">
                    <div class="b-container-date">
                        <table id="table">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الرمز</th>
                                <th>عدد الطلاب المسجلين</th>
                                <th>خيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td>{{$country->name}}</td>
                                    <td>{{$country->code}}</td>
                                    <td>{{$country->users->count()}}</td>
                                    <td>
                                        <span wire:click="editCountry({{$country->id}})">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".4" d="M19.993 18.953h-5.695c-.555 0-1.007.46-1.007 1.024 0 .565.452 1.023 1.007 1.023h5.695c.555 0 1.007-.458 1.007-1.023s-.452-1.024-1.007-1.024z" fill="#fff"/><path
                                                    d="M10.309 6.904l5.396 4.36a.31.31 0 01.05.429L9.36 20.028a2.1 2.1 0 01-1.63.817l-3.492.043a.398.398 0 01-.392-.312l-.793-3.45c-.138-.635 0-1.29.402-1.795l6.429-8.376a.3.3 0 01.426-.051z"
                                                    fill="#000"/><path opacity=".4"  d="M18.12 8.665l-1.04 1.299a.298.298 0 01-.423.048c-1.265-1.023-4.503-3.65-5.401-4.377a.308.308 0 01-.043-.432l1.003-1.246c.91-1.172 2.497-1.28 3.777-.258l1.471 1.172c.604.473 1.006 1.096 1.143 1.752.16.721-.01 1.43-.486 2.042z" fill="#000"/>
                                            </svg>
                                        </span>
                                        <span onclick="swal({
                                        title: 'هل أنت متأكد؟',
                                        text: 'هل أنت متأكد من أنك تريد حذف الجنسية  ' + '[ ' + '{{$country->name}}' + ' ]',
                                        icon: 'warning',
                                        buttons: {
                                        cancel: {
                                        text: 'إلغاء',
                                        value: null,
                                        visible: true,
                                        className: '',
                                        closeModal: true,
                                        },
                                        confirm: {
                                        text: 'موافق',
                                        value: true,
                                        visible: true,
                                        className: '',
                                        closeModal: true
                                        },
                                        },
                                        dangerMode: true,
                                        }).then((willDelete) => {
                                        if (willDelete) {
                                        @this.willDeleteCountry({{$country->id}});
                                        }
                                        });">
                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                                opacity=".4"
                                                d="M19.643 9.488c0 .068-.533 6.81-.837 9.646-.19 1.741-1.313 2.797-2.997 2.827-1.293.029-2.56.039-3.805.039-1.323 0-2.616-.01-3.872-.039-1.627-.039-2.75-1.116-2.931-2.827-.313-2.847-.836-9.578-.846-9.646a.794.794 0 01.19-.558.71.71 0 01.524-.234h13.87c.2 0 .38.088.523.234.134.158.2.353.181.558z"
                                                fill="#FD8A8A" fill-opacity=".5"/><path
                                                d="M21 5.977a.722.722 0 00-.713-.733h-2.916a1.281 1.281 0 01-1.24-1.017l-.164-.73C15.738 2.618 14.95 2 14.065 2H9.936c-.895 0-1.675.617-1.913 1.546l-.152.682A1.283 1.283 0 016.63 5.244H3.714A.722.722 0 003 5.977v.38c0 .4.324.733.714.733h16.573A.729.729 0 0021 6.357v-.38z"
                                                fill="#DC3535" fill-opacity=".5"/>
                                        </svg>
                                    </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="i-pagination">
                        {{$countries->links('pagination.default')}}
                    </div>
                </div>
            @else
                <span style="text-align: center;display: block;  color: gray;opacity: 0.5;">لا توجد دول مضافة.</span>
            @endif
        @endif
        @if($addCountry == true)
            <livewire:tools.countries.add>
        @endif
        @if($editCountry == true)
            <livewire:tools.countries.edit>
        @endif
    </section>
    <script>
        function areYouDelete(id, title) {
            swal({
                title: "هل أنت متأكد؟",
                text: "هل أنت متأكد من أنك تريد حذف الجنسية  " + '[ ' + title + ' ]',
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "إلغاء",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "موافق",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                },
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                @this.willDeleteCountry(id);
                }
            });
        }
    </script>
    <div wire:loading="hello" class="loading">
        <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
    </div>
</div>
