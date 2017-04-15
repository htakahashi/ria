<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    /**
     * Edit frontpage data.
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $table = new Admin;
        $table->headline_text_1 = $input['headline-text-1'];
        $table->headline_text_2 = $input['headline-text-2'];
        $table->headline_text_3 = $input['headline-text-3'];
        $table->heading_text = $input['heading-text'];
        $table->button_text = $input['button-text'];
        $table->action_text = $input['action-text'];


        // Save changes
        $table->save();

        return back();
    }
}
