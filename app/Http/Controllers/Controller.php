<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Mail;
use App\User;
use Illuminate\Http\Request;
use Mailgun\Mailgun;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function sendMail ()
	{
	
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('aaronwilsonphoto@gmail.com', 'mg.aaronwilsonphoto.com');
		$message->to('aaronwilsonphotography@gmail.com');
	});

	}

}

class UserController extends Controller
{

    // public function sendEmailReminder(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
    //         $m->from('hello@app.com', 'Your Application');

    //         $m->to($user->email, $user->name)->subject('Your Reminder!');
    //     });
    // }
}

