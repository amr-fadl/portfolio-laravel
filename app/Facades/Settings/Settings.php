<?php

namespace App\Facades\Settings;

use App\Models\Social\Social;
use App\Models\Setting\Setting;

class Settings
{
    public function All()
    {
        $setting = Setting::first();
        return $setting;
    }
    public function Social()
    {
        $setting = Social::all();
        return $setting;
    }
}
