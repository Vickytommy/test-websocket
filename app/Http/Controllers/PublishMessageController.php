<?php

namespace App\Http\Controllers;

use App\Events\MessagePublished;
use Illuminate\Http\Request;

class PublishMessageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate(['message' => 'required|string']);

        event(new MessagePublished($request->message));

        return redirect()->back();
    }
}
