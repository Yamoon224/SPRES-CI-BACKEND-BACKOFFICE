<?php

namespace App\Http\Controllers;

use App\Models\User;

class LocaleController extends Controller
{
    public function switch($locale) 
    {
        if (auth()->check()) {
            /** @var User $user */
            $user = auth()->user();
            $user->update(compact('locale'));
        }
        
        session()->put(compact('locale'));
        app()->setLocale(session('locale'));
        return back()->with(['message'=>'']);
    }
}
