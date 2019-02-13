<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;
use App\Form;
use App\Mail\ShareDeal;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{

    /**
     * store form and send email
     *
     * @return void
     */
    public function store(FormRequest $request)
    {
        // Retrieve the validated input data...
        $data = $request->validated();

        // save data to database
        $form = Form::create($data);

        // send email
        Mail::to($data['friend_email'])->send(new ShareDeal($form));

        // flash success to the session
        $request->session()->flash('success', true);

        return redirect()->home();
    }
}
