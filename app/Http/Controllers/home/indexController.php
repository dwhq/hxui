<?php

namespace App\Http\Controllers\home;

use App\Model\image;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index(image $image)
    {
        $list = $image->where([['status',1]])->paginate(6);
        $app  = $image->where([['status',1],['type','app']])->paginate(6);
        $web  = $image->where([['status',1],['type','web']])->paginate(6);
        $logo = $image->where([['status',1],['type','logo']])->paginate(6);
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
