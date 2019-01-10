<?php
/**
 * Created by PhpStorm.
 * User: diwuh
 * Date: 2019/1/10
 * Time: 11:04
 */
namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class uploadController extends Controller
{
    public function upload(Request $request)
    {
//        return response()->json(['ResultData' => 0, 'info' => '请选择文件']);
        $file = $request->file();
        // dd($file);
        if (!empty($file)) {

            foreach ($file as $key => $value) {
                $path = $request->file($key)->store('admin');
                $data[] = $path;
            }

        } else {
            return response()->json(['ResultData' => 5, 'info' => '请选择文件']);
        }
        return response()->json(['ResultData' => 0,'data'=>$data]);
    }
}