@extends('layouts.side')
@section('style')
    <style>
        .b-container{
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
        }
        .b-container table{
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
            padding: 10px 12px;
            table-layout: auto;
            border-radius: 6px;
            overflow: hidden;
            white-space: nowrap;
        }
        .b-container table thead th {
            padding: 16px 12px;
            font-size: 15px;
            background-color: #356195;
            color: white;
            text-align: center;

        }
        .b-container table thead th:first-child{
            border-top-right-radius: 6px;
        }
        .b-container table thead th:last-child{
            border-top-left-radius: 6px;
        }
        .b-container table tbody td{
            padding: 13px 10px;
            text-align: center;
            background-color: white;
            font-size: 13px;
            line-height: 1.3;
        }
        .b-container table tbody td:last-child{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .b-container table tbody td:last-child span{
            display: flex;
            background-color: #F1F6F5;
            padding: 4px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin-left: 6px;
            cursor: pointer;
        }
        .b-container table tbody tr:not(:last-of-type){
            border-bottom: 1px solid #ccc;
        }
        .home-title{
            margin: 20px 0;
            font-size: 20px;
            color: gray;
            position: relative;
            padding-right: 30px;
        }
        .home-title:before{
            content: '';
            width: 20px;
            height: 20px;
            background-color: #356195;
            display: block;
            right: 0;
            position: absolute;
            border-radius: 3px;
            font-weight: normal;
        }
    </style>
@endsection
@section('content')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <div class="row stat-cards">
                <div>
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon primary">
                            <svg fill="#636ba1" width="60px" height="60px" viewBox="-4.8 -4.8 33.60 33.60" xmlns="http://www.w3.org/2000/svg" stroke="#636ba1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="package-sended"> <path d="M18.5,3H5.5A2.503,2.503,0,0,0,3,5.5v13A2.5026,2.5026,0,0,0,5.5,21h7a.5.5,0,0,0,0-1h-7A1.5017,1.5017,0,0,1,4,18.5V5.5A1.5017,1.5017,0,0,1,5.5,4H9V9.5a.5.5,0,0,0,.5.5h5a.5.5,0,0,0,.5-.5V4h3.5A1.5017,1.5017,0,0,1,20,5.5v8a.5.5,0,0,0,1,0v-8A2.503,2.503,0,0,0,18.5,3ZM14,9H10V4h4Z"></path> <path d="M20.8535,16.8535l-3.5,3.5a.5.5,0,0,1-.707,0l-1.5-1.5a.5.5,0,0,1,.707-.707L17,19.293l3.147-3.1465a.5.5,0,0,1,.707.707Z"></path> </g> </g></svg>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">{{$activitiesToday}}</p>
                            <p class="stat-cards-info__title">عدد فعاليات اليوم</p>
                        </div>
                    </article>
                </div>
                <div>
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon warning">
                            <svg fill="#c19a9a" width="60px" height="60px" viewBox="-10 -10 70.00 70.00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M7.90625 1.96875C7.863281 1.976563 7.820313 1.988281 7.78125 2C7.316406 2.105469 6.988281 2.523438 7 3L7 12L16 12C16.359375 12.003906 16.695313 11.816406 16.878906 11.503906C17.058594 11.191406 17.058594 10.808594 16.878906 10.496094C16.695313 10.183594 16.359375 9.996094 16 10L10.3125 10C14.101563 6.292969 19.277344 4 25 4C36.609375 4 46 13.390625 46 25C46 36.609375 36.609375 46 25 46C13.390625 46 4 36.609375 4 25C4 21.527344 4.855469 18.257813 6.34375 15.375L4.5625 14.46875C2.929688 17.625 2 21.207031 2 25C2 37.691406 12.308594 48 25 48C37.691406 48 48 37.691406 48 25C48 12.308594 37.691406 2 25 2C18.773438 2 13.140625 4.503906 9 8.53125L9 3C9.011719 2.710938 8.894531 2.433594 8.6875 2.238281C8.476563 2.039063 8.191406 1.941406 7.90625 1.96875 Z M 25 5C24.449219 5 24 5.449219 24 6C24 6.550781 24.449219 7 25 7C25.550781 7 26 6.550781 26 6C26 5.449219 25.550781 5 25 5 Z M 34.5 7.53125C33.949219 7.53125 33.5 7.980469 33.5 8.53125C33.5 9.082031 33.949219 9.53125 34.5 9.53125C35.050781 9.53125 35.5 9.082031 35.5 8.53125C35.5 7.980469 35.050781 7.53125 34.5 7.53125 Z M 41.46875 14.5C40.917969 14.5 40.46875 14.949219 40.46875 15.5C40.46875 16.050781 40.917969 16.5 41.46875 16.5C42.019531 16.5 42.46875 16.050781 42.46875 15.5C42.46875 14.949219 42.019531 14.5 41.46875 14.5 Z M 18.375 16.90625C15.601563 16.90625 13.625 18.714844 13.625 21.3125L13.625 21.34375L15.6875 21.34375L15.6875 21.3125C15.6875 19.808594 16.726563 18.8125 18.28125 18.8125C19.734375 18.8125 20.84375 19.773438 20.84375 21.0625C20.84375 22.097656 20.386719 22.847656 18.5 24.8125L13.75 29.75L13.75 31.34375L23.25 31.34375L23.25 29.375L16.78125 29.375L16.78125 29.21875L19.9375 26.03125C22.300781 23.640625 23 22.429688 23 20.9375C23 18.613281 21.050781 16.90625 18.375 16.90625 Z M 31.59375 17.25C29.082031 21.011719 26.980469 24.289063 25.71875 26.59375L25.71875 28.625L32.59375 28.625L32.59375 31.34375L34.6875 31.34375L34.6875 28.625L36.65625 28.625L36.65625 26.65625L34.6875 26.65625L34.6875 17.25 Z M 32.5 19.1875L32.625 19.1875L32.625 26.71875L27.8125 26.71875L27.8125 26.5625C29.472656 23.679688 31.105469 21.207031 32.5 19.1875 Z M 6 24C5.449219 24 5 24.449219 5 25C5 25.550781 5.449219 26 6 26C6.550781 26 7 25.550781 7 25C7 24.449219 6.550781 24 6 24 Z M 44 24C43.449219 24 43 24.449219 43 25C43 25.550781 43.449219 26 44 26C44.550781 26 45 25.550781 45 25C45 24.449219 44.550781 24 44 24 Z M 8.53125 33.5C7.980469 33.5 7.53125 33.949219 7.53125 34.5C7.53125 35.050781 7.980469 35.5 8.53125 35.5C9.082031 35.5 9.53125 35.050781 9.53125 34.5C9.53125 33.949219 9.082031 33.5 8.53125 33.5 Z M 41.46875 33.5C40.917969 33.5 40.46875 33.949219 40.46875 34.5C40.46875 35.050781 40.917969 35.5 41.46875 35.5C42.019531 35.5 42.46875 35.050781 42.46875 34.5C42.46875 33.949219 42.019531 33.5 41.46875 33.5 Z M 15.5 40.46875C14.949219 40.46875 14.5 40.917969 14.5 41.46875C14.5 42.019531 14.949219 42.46875 15.5 42.46875C16.050781 42.46875 16.5 42.019531 16.5 41.46875C16.5 40.917969 16.050781 40.46875 15.5 40.46875 Z M 34.5 40.46875C33.949219 40.46875 33.5 40.917969 33.5 41.46875C33.5 42.019531 33.949219 42.46875 34.5 42.46875C35.050781 42.46875 35.5 42.019531 35.5 41.46875C35.5 40.917969 35.050781 40.46875 34.5 40.46875 Z M 25 43C24.449219 43 24 43.449219 24 44C24 44.550781 24.449219 45 25 45C25.550781 45 26 44.550781 26 44C26 43.449219 25.550781 43 25 43Z"></path></g></svg>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">{{$activitiestomorrow}}</p>
                            <p class="stat-cards-info__title">عدد فعاليات الغد</p>
                        </div>
                    </article>
                </div>
                <div>
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon purple">
                            <svg height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-9.03 -9.03 63.23 63.23" xml:space="preserve" fill="#efeafd"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#756a95;" d="M38.255,7.859v2.597c0,2.414-1.964,4.378-4.378,4.378s-4.378-1.964-4.378-4.378V7.5H15.5v2.956 c0,2.414-1.964,4.378-4.378,4.378s-4.378-1.964-4.378-4.378v-2.53C4.983,8.7,3.75,10.454,3.75,12.5v27.667c0,2.761,2.239,5,5,5 h27.667c2.761,0,5-2.239,5-5V12.5C41.417,10.39,40.105,8.593,38.255,7.859z M37.338,40.672H7.828V19h29.51V40.672z"></path> <path style="fill:#756a95;" d="M11.122,12.834c1.314,0,2.378-1.065,2.378-2.378V7.5V2.378C13.5,1.065,12.435,0,11.122,0 C9.808,0,8.744,1.065,8.744,2.378v5.123v2.955C8.744,11.77,9.809,12.834,11.122,12.834z"></path> <path style="fill:#756a95;" d="M33.877,12.834c1.314,0,2.378-1.065,2.378-2.378V7.5V2.378C36.255,1.065,35.19,0,33.877,0 s-2.378,1.065-2.378,2.378V7.5v2.956C31.499,11.77,32.564,12.834,33.877,12.834z"></path> <path style="fill:#756a95;" d="M35.338,21H9.828v17.672h25.51V21z M26.524,26.893l-4.681,8.495 c-0.333,0.617-0.733,0.866-1.233,0.866c-0.683,0-1.316-0.417-1.316-1.15c0-0.216,0.1-0.565,0.233-0.799l4.331-7.596h-4.464 c-0.617,0-1.116-0.483-1.116-1.1c0-0.616,0.499-1.116,1.116-1.116h6.33c0.717,0,1.166,0.417,1.166,1.15 C26.89,26.026,26.74,26.493,26.524,26.893z"></path> </g> </g> </g></svg>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">{{$activitiesaftersevendays}}</p>
                            <p class="stat-cards-info__title">عدد فعاليات الأسبوع</p>
                        </div>
                    </article>
                </div>
                <div>
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon success">
                            <svg style="margin-right: -7px;" width="50px" height="50px" viewBox="-9.6 -9.6 67.20 67.20" xmlns="http://www.w3.org/2000/svg" fill="#edfcf4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="document" d="M451,471a5.005,5.005,0,0,1-5-5V428a5.006,5.006,0,0,1,5-5h21.07a.9.9,0,0,1,.489.138.876.876,0,0,1,.219.157l8.908,8.977a1,1,0,0,1,.314.7c0,.008,0,.017,0,.025v33a5.006,5.006,0,0,1-5,5Zm-3-43v38a3,3,0,0,0,3,3h26a3,3,0,0,0,3-3V433h-4a3.626,3.626,0,0,1-4-4v-4H451A3,3,0,0,0,448,428Zm25,1a3,3,0,0,0,3,3h3l-6-6Zm-20,32a1,1,0,1,1,0-2h12a1,1,0,0,1,0,2Zm0-7a1,1,0,1,1,0-2h22a1,1,0,1,1,0,2Zm0-7a1,1,0,1,1,0-2h22a1,1,0,1,1,0,2Zm0-7a1,1,0,0,1,0-2h22a1,1,0,0,1,0,2Z" transform="translate(-446 -423)" fill="#619479"></path> </g></svg>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">{{$posts}}</p>
                            <p class="stat-cards-info__title">عدد المنشورات</p>
                        </div>
                    </article>
                </div>
            </div>
            <div style="margin-top: 20px">
                <h3 class="home-title">فعاليات اليوم</h3>
                @if($activities->count() >= 1)
                <div class="b-container">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>النادي</th>
                            <th>المقدم</th>
                            <th>المكان</th>
                            <th>النوع</th>
                            <th>من</th>
                            <th>إلى</th>
                            <th>التاريخ</th>
                        </tr>
                        </thead>
                        <tbody class="bodyNewData">
                        @foreach($activities->reverse() as $activity)
                            <tr>
                                <td>{{Str::limit($activity->title, 20)}}</td>
                                <td>{{$activity->club ? $activity->club->name : '---'}}</td>
                                <td>{{Str::limit($activity->presenter, 20)}}</td>
                                <td>{{$activity->location ? $activity->location->name : '---'}}</td>
                                <td>{{$activity->type->name}}</td>
                                <td>{{$activity->from}}</td>
                                <td>{{$activity->to}}</td>
                                <td>{{$activity->date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p style="margin: 30px 0; color: gray; text-align: center;">لا توجد اليوم فعاليات.</p>
                @endif
            </div>
			<div style="margin-top: 20px">
                <h3 class="home-title">فعاليات 7 أيام قادمة 🔥</h3>
                @if($activities_after_seven_days->count() >= 1)
                <div class="b-container">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>النادي</th>
                            <th>المقدم</th>
                            <th>المكان</th>
                            <th>النوع</th>
                            <th>من</th>
                            <th>إلى</th>
                            <th>التاريخ</th>
                        </tr>
                        </thead>
                        <tbody class="bodyNewData">
                        @foreach($activities_after_seven_days->reverse() as $activities_after_seven_day)
                            <tr>
                                <td>{{Str::limit($activities_after_seven_day->title, 20)}}</td>
                                <td>{{$activities_after_seven_day->club ? $activities_after_seven_day->club->name : '---'}}</td>
                                <td>{{Str::limit($activities_after_seven_day->presenter, 20)}}</td>
                                <td>{{$activities_after_seven_day->location ? $activities_after_seven_day->location->name : '---'}}</td>
                                <td>{{$activities_after_seven_day->type->name}}</td>
                                <td>{{$activities_after_seven_day->from}}</td>
                                <td>{{$activities_after_seven_day->to}}</td>
                                <td>{{$activities_after_seven_day->date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p style="margin: 30px 0; color: gray; text-align: center;">لا توجد في الأسبوع القادم فعاليات.</p>
                @endif
            </div>
        </div>
    </main>
@endsection
