<?php

namespace App\Jobs;

use App\Mail\ContactFeedback;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendContactFeedback implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      $sendEmail = setting('contacts.email');

      $data['name'] = request('name');
      $data['email'] = request('email');
      $data['message'] = request('message');

      Mail::to($sendEmail)->send(new ContactFeedback($data));
    }
}
