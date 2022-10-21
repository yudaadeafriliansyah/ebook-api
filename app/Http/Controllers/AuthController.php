<?php

namespace App\Http\Controllers;

use Illuminate\Htpp\Request;

class AuthController extends controller
{
    public function me(){
        return [
            'Nis' => 3103120235,
            'Name'=> 'Yuda Ade Afriliansyah',
            'Phone'=> '081391517275',
            'Class'=> 'XII RPL 7'
        ];
    }
}