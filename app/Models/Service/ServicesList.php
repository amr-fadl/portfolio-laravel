<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesList extends Model
{
    use HasFactory;
    public $guarded = [];

    public function Service()
    {
        return $this->belongsTo(Service::class);
    }
}
