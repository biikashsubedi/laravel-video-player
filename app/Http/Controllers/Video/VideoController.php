<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        return view('video.index');
    }

    public function show($name)
    {
        $name = str_replace('=', ' ', $name);
        $name = str_replace('&', '/', $name);
        $path = 'public/vid/' . $name;

        if (!Storage::disk('public')->exists('/vid/' . $name)) {
            dd('File Error or Removed');
        }

        $link = \Illuminate\Support\Facades\URL::to('/storage/vid/'.$name);


        return view('video.index', compact('link'));
    }
}
