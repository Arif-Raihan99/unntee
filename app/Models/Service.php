<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    public static function saveService($requist){
        $service = new Service();
        $service->name = $requist->name;
        $service->slug = Str::slug($requist->name);
        $service->save();
    }
}
