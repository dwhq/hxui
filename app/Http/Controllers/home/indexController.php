<?php

namespace App\Http\Controllers\home;

use App\Model\image;
use Encore\Admin\Widgets\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index(image $image,Table $table)
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
}
