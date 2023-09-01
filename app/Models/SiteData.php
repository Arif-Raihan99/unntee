<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteData extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveSiteData($request){
        if (SiteData::count() < 1){
            $data = new SiteData();
        }else{
            $data = SiteData::find(1);
        }
        $data->logo             = isset($data->logo) ? Helper::getImageUrl($request->logo, 'assets/uploaded/', $data->logo) : Helper::getImageUrl($request->logo, 'assets/uploaded/');
        $data->favicon          = isset($data->favicon) ? Helper::getImageUrl($request->favicon, 'assets/uploaded/', $data->favicon) : Helper::getImageUrl($request->favicon, 'assets/uploaded/');
        $data->footer_copyright = $request->footer_copyright;
        $data->save();
    }
}
