<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactFeedback;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
  public function contactFeedback(ContactRequest $request)
  {
//    $this->validated();

    dispatch(new SendContactFeedback());

    $request->session()->flash('success-message', 'Сообщение успешно отправлено');

    return back();
  }
}
