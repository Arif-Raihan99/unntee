<?php

namespace App\Helper;

class Helper
{
//  Generate Image Url
    public static function getImageUrl($image, $imageDirectory, $existFileUrl=null){
        if ($image) {
            if (file_exists($existFileUrl))
            {
                unlink($existFileUrl);
            }
            $fileName = time().rand(10,10000).'.'.$image->getClientOriginalExtension();
            $image->move($imageDirectory, $fileName);
            $fileUrl = $imageDirectory . $fileName;
        }
        else {
            if (isset($existFileUrl))
            {
                $fileUrl = $existFileUrl;
            } else {
                $fileUrl = '';
            }
        }
        return $fileUrl;
    }
}
