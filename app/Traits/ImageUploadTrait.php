<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

trait ImageUploadTrait
{


    public function uploadImages($disk, $dir, $photos, $username = 'null')
    {
//        $this->deleteOldImage($oldImages);

        if (is_array($photos))
        {
            $images = [];

            foreach ($photos as $image)
            {
                $time = Carbon::now();
                $directory = date_format($time, 'Y').'/';
                $month = date_format($time, 'm').'/';
                $fileName = $username.'-'.date_format($time, 'H').'-'.date_format($time, 'i').'-'.date_format($time, 's').'-'.rand(1, 20).'.'.$image->extension();
                Storage::disk($disk)->putFileAs('/'.$dir, $image, $fileName);

                $images[] = $dir.'/'.$fileName;
            }
            return $images;
        }else{

            $time = Carbon::now();
            $directory = date_format($time, 'Y').'/';
            $month = date_format($time, 'm').'/';
            $fileName = $username.'-'.date_format($time, 'H').'-'.date_format($time, 'i').'-'.date_format($time, 's').'-'.rand(1, 20).'.'.$photos->extension();
            Storage::disk($disk)->putFileAs('/'.$dir, $photos, $fileName);

            return $dir.'/'.$fileName;
        }
    }
}
