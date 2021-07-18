<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {

    }
    public function UploadImage($file)
    {
        //dd($file);

//        $filename=time()."-".$file->getClientOriginalName();
        $filename=$file->getClientOriginalName();
        $path=public_path('/uploads/');
        $file->move($path,$filename);
        /*$files=$file->move($path,$filename);
        $img=Image::make($files->getRealPath());
        $img->resize(200,150);
        $img->save($path."small-".$filename);*/
        return "/uploads/".$filename;
    }

    public function UploadFile1($file2)
    {

//        $filename=time()."-".$file2->getClientOriginalName();
        $filename=$file2->getClientOriginalName();
        $path=public_path('/uploads/sample');
        $file2->move($path,$filename);
        /*$files=$file->move($path,$filename);
        $img=Image::make($files->getRealPath());
        $img->resize(200,150);
        $img->save($path."small-".$filename);*/
        return "/uploads/sample/".$filename;
    }
    public function UploadFile2($file3)
    {

//        $filename=time()."-".$file3->getClientOriginalName();
        $filename=$file3->getClientOriginalName();
        $path=public_path('/uploads/original');
        $file3->move($path,$filename);
        /*$files=$file->move($path,$filename);
        $img=Image::make($files->getRealPath());
        $img->resize(200,150);
        $img->save($path."small-".$filename);*/
        return "/uploads/original/".$filename;
    }


}
