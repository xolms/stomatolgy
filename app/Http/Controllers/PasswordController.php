<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasswordController extends Controller
{
    public function get() {
        $user = User::where('id', 4)->first();
        return view('admin.pass.edit', ['user' => $user]);
    }
    public function patch(Request $request) {
        $user = User::where('id', 4)->first();
        $input['password'] = bcrypt($request->password);
        $status = $user->fill($input)->save();
        if($status) {
            Session::flash('flash_message','Успешно обновлен');
            return redirect($request->url);
        }
    }
}
