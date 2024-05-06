<div wire:loading.class="loading-status">
    @if($post)
        <section class="s-index">
            <span style="margin-bottom: 20px" class="cancel" wire:click="clubProfile()">رجوع</span>
            <div class="club-section-left-item">
                <div class="b-index-content">
                    <div>
                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#86C8BC">

                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                            <g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M17 11V4h2v17h-2v-8H7v8H5V4h2v7z"/> </g> </g>

                        </svg>
                        <h3>{{$post->title}}</h3>
                    </div>
                    <div>
                        <p>{{$post->body}}</p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <svg fill="#86C8BC" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 365.702 365.702" xml:space="preserve" stroke="#86C8BC">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                    <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M99.415,163.15c-20.713,0-37.564-16.851-37.564-37.564c0-20.713,16.852-37.564,37.564-37.564 c20.713,0,37.564,16.852,37.564,37.564C136.979,146.299,120.128,163.15,99.415,163.15z M99.415,103.021 c-12.442,0-22.564,10.122-22.564,22.564s10.122,22.564,22.564,22.564c12.442,0,22.564-10.122,22.564-22.564 S111.857,103.021,99.415,103.021z"/> </g> <path d="M358.202,268.162h-9.804V53.142c0-4.143-3.358-7.5-7.5-7.5H24.803c-4.142,0-7.5,3.357-7.5,7.5v215.02H7.5 c-4.143,0-7.5,3.358-7.5,7.5v21.402c0,4.143,3.357,7.5,7.5,7.5h37.323v7.996c0,4.143,3.357,7.5,7.5,7.5h91.805 c4.143,0,7.5-3.357,7.5-7.5v-7.996h206.574c4.143,0,7.5-3.357,7.5-7.5v-21.402C365.702,271.519,362.345,268.162,358.202,268.162z M44.823,289.564H15v-6.402h29.823V289.564z M44.823,188.771v79.391H32.303V60.642h301.096v207.52H151.628v-38.525l28.995,25.609 c2.513,1.964,4.692,1.893,5.113,1.878c2.035-0.036,3.968-0.897,5.354-2.387l59.896-64.362c3.429-3.647,5.194-8.393,4.972-13.364 c-0.182-4.068-1.703-7.869-4.304-10.968l43.962-47.176c2.823-3.03,2.656-7.776-0.374-10.601c-3.03-2.823-7.776-2.654-10.601,0.374 l-43.914,47.125c-3.11-2.292-6.887-3.526-10.848-3.438c-4.962,0.081-9.763,2.21-13.154,5.821l-32.974,35.336 c0,0-25.232-23.617-25.519-23.817c-4.262-3.347-9.564-5.184-14.996-5.184H69.108C55.718,164.484,44.823,175.379,44.823,188.771z M239.604,175.096c0.05,0.047,0.101,0.093,0.151,0.139c0.954,0.849,1.189,1.798,1.218,2.445c0.04,0.891-0.285,1.75-0.954,2.461 l-5.848,6.314l-12.493-11.711l5.964-6.308c0.889-0.946,1.938-1.103,2.483-1.111c0.454,0.002,1.341,0.082,2.027,0.767 c0.053,0.052,0.106,0.104,0.161,0.154L239.604,175.096z M149.093,207.384c-2.21-1.954-5.36-2.427-8.048-1.216 c-2.688,1.213-4.417,3.888-4.417,6.837v92.055H59.823V188.771c0-5.121,4.165-9.287,9.285-9.287h74.129 c2.756,0,4.73,1.151,5.901,2.116c0.003,0.003,0.006,0.005,0.009,0.008l29.849,27.979c1.456,1.366,3.396,2.105,5.393,2.023 c1.995-0.069,3.88-0.933,5.236-2.396l21.801-23.52l12.537,11.752l-38.876,41.73L149.093,207.384z M350.702,289.564H151.628v-6.402 h199.074V289.564z"/> </g> </g> </g>
                                                            </svg>
                                <span>{{$post->user->name}}</span>
                            </li>
                            <li>
                                <svg width="20px" height="20px" viewBox="0 0 6.3500002 6.3500002" id="svg1976" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" fill="#86C8BC">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_iconCarrier"> <defs id="defs1970"/> <g id="layer1" style="display:inline"> <path d="m 4.8950508,3.7044845 c -0.6607016,0 -1.1895931,0.5283747 -1.1895931,1.1890748 0,0.66069 0.5288915,1.1916585 1.1895931,1.1916585 0.660699,0 1.1911413,-0.5309685 1.1911413,-1.1916585 0,-0.6607001 -0.5304423,-1.1890748 -1.1911413,-1.1890748 z M 4.6997142,4.3700769 A 0.2645835,0.2645835 0 0 1 4.9632631,4.6356937 V 4.8997603 H 5.2288809 A 0.2645835,0.2645835 0 0 1 5.4924297,5.1653774 0.2645835,0.2645835 0 0 1 5.2288809,5.428927 H 4.6997142 A 0.26460996,0.26460996 0 0 1 4.4340964,5.1653774 V 4.6356937 A 0.2645835,0.2645835 0 0 1 4.6997142,4.3700769 Z" id="path2452" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.8519521,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path712" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 4.2328121,0.26478431 a 0.2645835,0.2645835 0 0 0 -0.26367,0.26367 V 1.0577543 a 0.2645835,0.2645835 0 0 0 0.26367,0.26562 0.2645835,0.2645835 0 0 0 0.26563,-0.26562 V 0.52845431 a 0.2645835,0.2645835 0 0 0 -0.26563,-0.26367 z" id="path714" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> <path d="m 1.4456487,0.79406771 c -0.6493404,0 -1.1818408,0.53042299 -1.1818408,1.17977299 v 2.1368205 c 0,0.6493502 0.5325004,1.1813233 1.1818408,1.1813233 H 3.2248685 C 3.194235,5.1638306 3.176291,5.0308032 3.176291,4.8935593 c 0,-0.94668 0.772078,-1.7187583 1.7187598,-1.7187583 0.3405214,0 0.6576695,0.1013863 0.9255231,0.2733683 V 1.9738407 c 0,-0.64935 -0.5304208,-1.17977299 -1.1797718,-1.17977299 z M 0.8053782,1.8529179 h 4.474144 c 0.00709,0.03921 0.01188,0.079325 0.01188,0.1209228 V 2.3820845 H 0.7934852 V 1.9738407 c 0,-0.041598 0.00476,-0.081712 0.01188,-0.1209228 z M 1.588275,2.7510543 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,3.0166712 0.2645835,0.2645835 0 0 1 2.1174417,3.2802211 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,3.0166712 0.2645835,0.2645835 0 0 1 1.588275,2.7510543 Z m 1.5978347,0 H 3.7152764 A 0.2645835,0.2645835 0 0 1 3.9788278,3.0166712 0.2645835,0.2645835 0 0 1 3.7152764,3.2802211 H 3.1861097 A 0.2645835,0.2645835 0 0 1 2.9204945,3.0166712 0.2645835,0.2645835 0 0 1 3.1861097,2.7510543 Z M 1.588275,3.8739832 H 2.1174417 A 0.2645835,0.2645835 0 0 1 2.3809905,4.1380498 0.2645835,0.2645835 0 0 1 2.1174417,4.4036666 H 1.588275 A 0.2645835,0.2645835 0 0 1 1.3226572,4.1380498 0.2645835,0.2645835 0 0 1 1.588275,3.8739832 Z" id="path716" style="color:#86C8BC;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#86C8BC;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#86C8BC;solid-opacity:1;vector-effect:none;fill:#86C8BC;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#86C8BC"/> </g> </g>
                                </svg>
                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->diffForHumans()}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="add-comment">
                @if(Auth::user())
                <form wire:submit.prevent="save()">
                    <div>
                        <textarea wire:model.debounce.10800000ms="body" placeholder="اكتب تعليقك"></textarea>
                        <div class="comment-notes">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 14H12" stroke="#FF6464" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M7 5.95996L3.25 2.20996" stroke="#FF6464" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.96002 2.25L3.21002 6" stroke="#FF6464" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M7 10H15" stroke="#FF6464" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 2H16C19.33 2.18 21 3.41 21 7.99V16" stroke="#FF6464" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 9.01001V15.98C3 19.99 4 22 9 22H12C12.17 22 14.84 22 15 22" stroke="#FF6464" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 16L15 22V19C15 17 16 16 18 16H21Z" stroke="#FF6464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <p>ملاحظة: لن يظهر تعليقك للعامة حتى توافق عليه إدارة نادي {{$post->club->name}}.</p>
                        </div>
                        @error('body') <span class="error">{{ $message }}</span> @enderror
                        <input type="submit" value="إرسال">
                    </div>
                </form>
                @else
                    <strong style="line-height: 2; font-size: 14px; color: #ca7d7d;">رجاء سجل الدخول في الموقع لتستطيع التعليق على منشورات {{$post->club->name}}.</strong>
                @endif
            </div>
            <span class="comments">التعليقات</span>
            @if($comments->count() >= 1)
                @foreach($comments->reverse() as $comment)
                    <div class="comment-container">
                        <div>
                            <div>
                                <img style="object-fit: cover;" src="{{asset('uploads/files/'.$comment->user->avatar)}}">
                                <div style="display: flex;flex-direction: column;">
                                    <span>{{$comment->user->name}}</span>
                                    <span style="margin-top: 6px;color: gray;font-size: 10px;opacity: 0.6;">من {{$comment->user->ClubStatus->name}}</span>
                                </div>
                            </div>
                            <div>
                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->diffForHumans()}}</span>
                            </div>
                        </div>
                        <div>
                            <p>{{$comment->body}}</p>
                            @if($comment->is_view === 'منشور')
                                <span style="color: #299829;">{{$comment->is_view}}</span>
                            @else
                                <span style="color: #df5454;">{{$comment->is_view}}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="i-pagination">
                    {{$comments->links('pagination.default')}}
                </div>
            @else
                <p style="text-align: center;color: gray;font-size: 20px; margin-top: 30px;">لا توجد تعليقات حتى الآن.</p>
            @endif
        </section>
    @else
    @endif
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
