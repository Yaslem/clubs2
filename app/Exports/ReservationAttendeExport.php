<?php

namespace App\Exports;

use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Attende;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class ReservationAttendeExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, WithTitle {

    use Exportable;
    public function __construct(int $id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function collection()
    {
        return Attende::query()->whereHas('reservation', function (Builder $query) {
            $query->where('id', $this->id);
        })->get();
    }
    public function map($attende): array
    {
        $activity_date = Carbon::parse($attende->reservation->date);

        return [
                [
                    $attende->user->name,
                    $attende->user->username,
                    $attende->reservation->type->name,
                    $attende->reservation->title,
                    $attende->reservation->club->name,
                    Hijri::Date('Y-m-d', $activity_date),
                    $attende->reservation->date,
                    $this->times($attende->reservation->from, $attende->reservation->to),
                    $attende->benefit,
                    $attende->lecturer,
                    $attende->attended,
                ],
        ];
    }

    public function headings(): array
    {
        return [
                'الاسم',
                'الرقم الجامعي',
                'نوع الفعالية',
                'عنوان الفعالية',
                'النادي',
                'تاريخ الفعالية (هـ)',
                'تاريخ الفعالية (م)',
                'المدة',
                'تقييم الفعالية',
                'تقييم المدرب',
                'حضر من الفعالية',
        ];
    }

    public function title(): string
    {
        return $this->title;
    }

    public function times($from, $to){
        $times = [];

        $start_time = strtotime($from);
        $end_time = strtotime($to);

        for( $i=$start_time; $i <= $end_time; $i+=1800) {
            $times[] = date("H:i",$i);
        }

        switch (count($times) - 1){
            case 1:
                return 'نصف ساعة';
                break;
            case 2:
                return 'ساعة';
                break;
            case 3:
                return 'ساعة ونصف';
                break;
            case 4:
                return 'ساعتين';
                break;
            case 5:
                return 'ساعتين ونصف';
                break;
            case 6:
                return 'ثلاث ساعات';
                break;
            case 7:
                return 'ثلاث ساعات ونصف';
                break;
            case 8:
                return 'أربع ساعات';
                break;
            case 9:
                return 'أربع ساعات ونصف';
                break;
            case 10:
                return 'خمس ساعات';
                break;
            case 11:
                return 'خمس ساعات ونصف';
                break;
            case 12:
                return 'ستة ساعات';
                break;
            case 13:
                return 'ستة ساعات ونصف';
                break;
            case 14:
                return 'سبع ساعات';
                break;
            case 15:
                return 'سبع ساعات ونصف';
                break;
            case 16:
                return 'ثماني ساعات';
                break;
            case 17:
                return 'ثماني ساعات ونصف';
                break;
            case 18:
                return 'تسع ساعات';
                break;
            case 19:
                return 'تسع ساعات ونصف';
                break;
            case 20:
                return 'عشر ساعات';
                break;
            case 21:
                return 'عشر ساعات ونصف';
                break;
            case 22:
                return 'اثنا عشر ساعة';
                break;
            case 23:
                return 'اثنا عشر ساعة ونصف';
                break;
            case 24:
                return 'ثلاثة عشر ساعة';
                break;
            case 25:
                return 'ثلاثة عشر ساعة ونصف';
                break;
            case 26:
                return 'أربعة عشر ساعة';
                break;
            case 27:
                return 'أربعة عشر ساعة ونصف';
                break;
            case 28:
                return 'خمسة عشر ساعة';
                break;
            case 29:
                return 'خمسة عشر ساعة ونصف';
                break;
            case 30:
                return 'ستة عشر ساعة';
                break;
            case 31:
                return 'ستة عشر ساعة ونصف';
                break;
            case 32:
                return 'سبعة عشر ساعة';
                break;
            case 33:
                return 'سبعة عشر ساعة ونصف';
                break;
            case 34:
                return 'ثمانية عشر ساعة ';
                break;
            case 35:
                return 'ثمانية عشر ساعة ونصف';
                break;
            case 36:
                return 'تسعة عشر ساعة';
                break;
            case 37:
                return 'تسعة عشر ساعة ونصف';
                break;
            case 38:
                return 'عشرين ساعة';
                break;
            case 39:
                return 'عشرين ساعة ونصف';
                break;
            case 40:
                return 'إحدى وعشرين ساعة';
                break;
            case 41:
                return 'إحدى وعشرين ساعة ونصف';
                break;
            case 42:
                return 'اثنين وعشرين ساعة';
                break;
            case 43:
                return 'اثنين وعشرين ساعة ونصف';
                break;
            case 44:
                return 'ثلاث وعشرين ساعة';
                break;
            case 45:
                return 'ثلاث وعشرين ساعة ونصف';
                break;
            case 46:
                return 'أربع وعشرين ساعة';
                break;
            default:
                return '---';
        }
    }
}
