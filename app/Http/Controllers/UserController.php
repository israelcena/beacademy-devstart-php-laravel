<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome' => [
                'israel neves',
                'Sara Nunes'
            ]
        ];

        dd($users);
    }

    public function show($id)
    {
        dd("O Id do usuário é {$id}");
    }
};
