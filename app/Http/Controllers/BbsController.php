<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $pogoda = new Pogoda;
        $data = $pogoda->pogoda();

        $context = ['bbs' => Bb::latest()->paginate(10), 'data'=>$data];
        return view('index', $context);
    }

    public function detail(Bb $bb)
    {
        return view('detail', ['bb' => $bb]);
    }

}
