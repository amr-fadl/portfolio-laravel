<?php

namespace App\Models\Social;

use App\Models\Setting\Setting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    public $guarded = [];


    public function Setting(){
        return $this->belongsTo(Setting::class,'settings_id','id');
    }
}
