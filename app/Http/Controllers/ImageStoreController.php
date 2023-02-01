<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageStoreController extends Controller
{
    public function uploadImage(Request $request)
    {
        $image =  $request->image;
        $firstname = $request->firstname;
        $surname = $request->surname;
        $email = $request->email;
        $phone = $request->phone;
        $comments = $request->comments;
        $path = $image->store('public');
        $part1 = substr($path, 6);

        $loc = 'storage' . $part1;



//        DB::insert('insert into gamestable (gameImagePath) values (?)', array($path));
        $data=array(
             'gameImagePath' => $loc,
            'firstname' => $firstname,
            'surname' => $surname,
            'email' => $email,
            'phone' => $phone,
            'comments' => $comments
    );

        DB::table('gamestable')->insert($data);
        return back()->with('success', 'Image uploaded Successfully!')
            ->with('image', $path);
    }
    public function index() {
        $games = DB::select('select * from gamestable');

        return view('admin.overview', ['games'=>$games] );
    }
}
