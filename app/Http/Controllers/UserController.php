<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create([
        'username' => 'manager11',
        'nama'     => 'Manager11',
        'password' => Hash::make('12345'),
        'level_id' => 2,
    ]);

    $user->username = 'manager12';

    $user->save();

    $user->wasChanged();                      // true  → ada yang berubah
    $user->wasChanged('username');            // true  → username berubah
    $user->wasChanged(['username', 'level_id']); // true  → salah satu berubah
    $user->wasChanged('nama');                // false → nama tidak berubah
    $user->wasChanged(['nama', 'username']);  // true  → salah satu berubah

    dd($user->wasChanged(['nama', 'username']));
    }
}
