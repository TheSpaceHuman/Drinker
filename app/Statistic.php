<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Statistic extends Model
{
    static function logIp()
    {
      $logMessage = 'URL: '.request()->url().' IP: '.request()->ip().' UserAgent: '.request()->userAgent();
      Log::info($logMessage);
    }
}
