<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $guarded = [];

    public function ServicesList()
    {
        return $this->hasMany(ServicesList::class);
    }

}
