<?php

namespace App\Models\Setting;

use App\Models\Social\Social;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $with = ['social'];


    public function social(){
        return $this->hasMany(Social::class,'settings_id','id');
    }
}
