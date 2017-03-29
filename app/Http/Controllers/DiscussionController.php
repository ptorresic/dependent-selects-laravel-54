<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    /**
     * Show the application discussion.
     *
     * @return \Illuminate\Http\Response
     */
    public function discussion()
    {
        return view('discussion');
    }
}
