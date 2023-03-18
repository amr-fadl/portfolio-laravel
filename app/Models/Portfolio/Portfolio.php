<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $with = ['filters'];

    public function filters(){
        return $this->belongsToMany(Filter::class,'filter_portfolio','portfolio_id','filter_id','id','id');
    }

}
