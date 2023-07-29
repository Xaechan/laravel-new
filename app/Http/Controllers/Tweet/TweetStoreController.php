<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;

class TweetStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    
    public function __invoke(): RedirectResponse
    {
        Tweet::create([
            'user_id' => Auth::id(),
            'content' => Request('content')
        ]);

        return redirect()->back();
    }
}
