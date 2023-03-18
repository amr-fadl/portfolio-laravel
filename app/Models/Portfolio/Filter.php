<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;
    public $guarded = [];
    // protected $with = ['portfolios'];


    public function Portfolios(){
        return $this->belongsToMany(Portfolio::class,'filter_portfolio','filter_id','portfolio_id','id','id');
    }

}
