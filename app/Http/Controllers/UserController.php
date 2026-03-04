<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // tambah data user dengan Eloquent Model
        $data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 3 // <--- Ganti jadi 3 agar tidak error
        ];
        UserModel::insert($data); // nyalakan kembali

        // coba akses model UserModel
        $user = UserModel::all(); 
        return view('user', ['data' => $user]);
    }
}