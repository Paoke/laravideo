<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginForm()
    {
        return view('admin.entry.login');
    }

    public function login(Request $request)
    {
        $status = Auth::guard('admin')->attempt([
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
        ]);

        dd($status);
    }
}
