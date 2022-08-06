<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

public funcition index()
{
    // echo 'data semua prodi';
    $nama = 'ILKKOM';

    $prodis =[
        'ilkom', 'kti','rpl','hukum'

    ];
    return view('prodi/index', compact('nama','prodis'));

}