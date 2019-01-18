<?php

namespace App\Http\Controllers\home;

use App\Model\image;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index(image $image)
    {
        $list = $image->where([['status',1]])->get();
        $app  = $image->where([['status',1],['type','app']])->get();
        $web  = $image->where([['status',1],['type','web']])->get();
        $logo = $image->where([['status',1],['type','logo']])->get();
        return view('home/index',[
            'list' => $list,
            'app'  => $app,
            'web'  => $web,
            'logo' => $logo,
        ]);
    }
    public function about()
    {
        return view('home/about');
    }
    public function content(image $image)
    {
        return view('home/content',[
            'data'=>$image
        ]);
    }
}
