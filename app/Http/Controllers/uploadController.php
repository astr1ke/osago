<?php

namespace App\Http\Controllers;

use App\Mail\sendScan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class uploadController extends Controller
{
    public function upload(){
        return view('upload.upload',['icon'=>'']);
    }
    public function uploadPost(Request $request){
        $dir = rand(100,999);
        $number = $request->number;
        $files = $request->file('uploadFiles');

        foreach ($files as $file) {
            Storage::disk('local')->putFile('скрины/'.$dir, $file);
        }


        $files = Storage::disk('local')->files('скрины/'.$dir);
        Storage::disk('local')->makeDirectory('скрины/'.$number);

        foreach ($files as $file){
            $f = '../storage/app/'.$file;
            $img = Image::make($f);
            $img->resize(800, 800);
            $ext = substr(strrchr($file,'.'),1);
            $filePath = strrchr($file,'/');
            Storage::disk('local')->put('скрины/'.$number.$filePath, $img->encode($ext, 80));
        }
        //Storage::disk('local')->deleteDirectory('скрины/'.$oldDir);


        $sendDir = Storage::disk('local')->files('скрины/'.$number);
        $attach = new sendScan();
        $attach->attach = $sendDir;
        $attach->number = $number;
        $attach->comment = $request->comment;
        Mail::to('mail.usa.va@gmail.com')->send($attach);
       // Storage::disk('local')->deleteDirectory('скрины/'.$number);

        dd($request);
        return redirect('done');
    }

    public function done(){
        return view('upload.done');
    }


}
