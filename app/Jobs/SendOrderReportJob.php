<?php

namespace App\Jobs;


use App\Mail\OrderReport;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendOrderReportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $data;
    protected $reportData;

    public function __construct($data)
    {
        $this->reportData = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      $sendEmail = setting('contacts.email');

      Mail::to($sendEmail)->send(new OrderReport($this->reportData));
    }
}
