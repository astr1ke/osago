<?php

namespace App\Http\Controllers;

use App\Mail\sendScan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class uploadController extends Controller
{
    public function upload(){
        return view('upload.upload',['icon'=>'', 'mass' => ['nastia','dima','vlad']]);
    }
    public function uploadPost(Request $request){
        $user = rand(100,999);
        dd($request);

        Storage::disk('local')->putFile('скрины/'.$user, $request->file('upload1'));
        Storage::disk('local')->putFile('скрины/'.$user, $request->file('upload2'));

        Storage::disk('local')->putFile('скрины/'.$user, $request->file('upload1'));
        Storage::disk('local')->putFile('скрины/'.$user, $request->file('upload2'));

        $number = $request->number;
        $oldDir = $user;
        $files = Storage::disk('local')->files('скрины/'.$oldDir);
        Storage::disk('local')->makeDirectory('скрины/'.$number);

        foreach ($files as $file){
            $f = '../storage/app/'.$file;
            $img = Image::make($f);
            $img->resize(800, 800);
            $ext = substr(strrchr($file,'.'),1);
            $filePath = strrchr($file,'/');
            Storage::disk('local')->put('скрины/'.$number.$filePath, $img->encode($ext, 80));
        }
        Storage::disk('local')->deleteDirectory('скрины/'.$oldDir);


        $sendDir = Storage::disk('local')->files('скрины/'.$number);
        $attach = new sendScan();
        $attach->attach = $sendDir;
        $attach->number = $number;
        $attach->comment = $request->comment;
        Mail::to('mail.usa.va@gmail.com')->send($attach);
        Storage::disk('local')->deleteDirectory('скрины/'.$number);

        return redirect('done');
    }

    public function done(){
        return view('upload.done');
    }


}
