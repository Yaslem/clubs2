@section('style')
    <style>
        /*.clubs-content{*/
        /*    padding: 20px;*/
        /*}*/
        .clubs-header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }
        .clubs-header > h4{
            font-size: 17px;
            margin: 20px;
            color: gray;
            font-weight: 500;
        }
        .clubs-header > span{
            padding: 8px;
            background-color: #025464;
            border-radius: 6px;
            color: white;
            cursor: pointer;
        }
        .clubs-containers{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
        .clubs-reports{
            overflow: hidden;
            border: 2px solid #ededed;
            margin: 10px;
            background-color: white;
            border-radius: 6px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .clubs-reports:hover{
            border: 2px solid rgba(17, 45, 78, 0.57);
        }
        .clubs-reports > img{
            width: 100%;
            border-bottom: 2px solid #ededed;
            height: auto;
        }
        .clubs-reports > div{
            padding: 8px;
        }
        .clubs-reports > div > h4{
            line-height: 2;
            font-size: 17px;
            margin: 10px 0;
            font-weight: 500;
            text-align: center;
            color: #356195;
        }
        .clubs-reports > div > div{
            display: flex;
            gap: 10px;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .clubs-reports > div > div > span{
            padding: 8px;
            background-color: #025464;
            border-radius: 6px;
            color: white;
            text-align: center;
            width: 50%;
        }
        .clubs-reports > div > div > span:first-of-type{
            background-color: #025464;
        }
        .clubs-reports > div > div > span:last-of-type{
            background-color: #B04759;
        }
        .add-club-reports{
            padding: 10px;
            margin: 20px 10px;
            background-color: white;
            border-radius: 6px;
        }
        .add-club-reports > form{
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .add-club-reports > form > div{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .add-club-reports > form > div > label{
            font-size: 16px;
            color: gray;
        }
        .add-club-reports > form > div > input,
        .add-club-reports > form > div > select{
            width: 100%;
            border-radius: 6px;
            border: 1px solid #356195;
            height: 40px;
            padding: 8px;
            font-size: 14px;
        }
        .add-club-reports > form > div > select:focus,
        .add-club-reports > form > div > input:focus{
            border: 2px solid rgba(53, 97, 149, 0.6);
        }
        .add-club-reports > form > button{
            padding: 8px;
            background-color: #356195;
            color: white;
            font-size: 20px;
        }
        /*.cancel{*/
        /*    padding: 8px;*/
        /*    border-radius: 6px;*/
        /*    background-color: white;*/
        /*    margin: 20px 10px;*/
        /*    display: block;*/
        /*    color: gray;*/
        /*    cursor: pointer;*/
        /*    font-size: 16px;*/
        /*    text-align: center;*/
        /*    width: 100px;*/
        /*}*/
        .b-container {
            overflow-x: auto;
            overflow-y: hidden;
            border-radius: 6px;
            margin: 0 20px;
        }
         .table-search {
            font-size: 13px;
            border-radius: 6px;
            margin: 20px 20px 16px;
        }
        .table-search div input[type="text"] {
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f5f6f7;
            width: 100%;
        }

        .table-search div select {
            width: 100%;
            color: rgb(0 0 0 / 50%);
            padding: 8px 10px;
            background-color: #f9fcff;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 2%) 0px 1px 3px 0px, rgb(27 31 35 / 15%) 0px 0px 0px 1px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #ccc;
            height: 40px;
        }

        .b-container table {
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

        .b-container table thead th:first-child {
            border-top-right-radius: 6px;
        }

        .b-container table thead th:last-child {
            border-top-left-radius: 6px;
        }

        .b-container table tbody td {
            padding: 13px 10px;
            text-align: center;
            background-color: white;
            font-size: 13px;
            line-height: 1.3;
        }
        .b-container table tbody tr:not(:last-of-type) {
            border-bottom: 1px solid #ccc;
        }
        .clubs-info{
            padding: 8px;
            background-color: white;
            border-radius: 6px;
            display: flex;
            margin: 20px 0 10px;
            gap: 10px;
            flex-direction: column;
        }
        .clubs-info > div{
            padding: 8px;
            background-color: #f6f6f6;
            border-radius: 6px;
        }
        .clubs-info > div > ul{
            display: flex;
            justify-content: space-between;
            width: 100%;
            font-size: 17px;
            color: gray;
        }
        .head-plans{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }
        .head-plans .add{
            background-color: #2C74B3;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            color: white;
            margin: 10px 0;
            width: fit-content;
            display: block;
            cursor: pointer;
        }
    </style>
@endsection

<div>
    @if($index == true)
        <div class="clubs-content">
            <div class="clubs-header">
                <h4 id="clubs-containers">تقارير الأندية الطلابية</h4>
                <span wire:click="add()">إنشاء تقرير</span>
            </div>
            <div class="clubs-containers">
                @if($reports->count() >= 1)
                    @foreach($reports as $report)
                        <div class="clubs-reports">
                            <img src="{{asset('/uploads/files/'.$report->image)}}">
                            <div>
                                <h4>{{$report->title}}</h4>
                                <div>
                                    <span wire:click="switchAction('{{$report->id}}')">مشاهدة</span>
                                    <span>تحميل</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>لا توجد تقارير</p>
                @endif
            </div>
        </div>
        <div wire:loading class="loading">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="hds-flight-icon--animation-loading"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#1C82AD" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
        </div>
    @endif
    @if($add == true)
        <livewire:clubs-reports.edit>
    @endif
    @if($add == true)
        <livewire:clubs-reports.add>
    @endif
    @if($showActivitesCountOne == true)
        <livewire:clubs-reports.count-activities-one>
    @endif
    @if($managers == true)
        <livewire:clubs-reports.managers>
    @endif
    @if($clubPlans == true)
        <livewire:clubs-reports.club-plans>
    @endif
</div>
