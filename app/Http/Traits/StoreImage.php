<?php

namespace App\Http\Traits;
use Illuminate\Http\Request;
use App\Models\Upload;
trait StoreImage {

    public function store_image(Request $request , $image)
    {
        $loc = 'http://localhost/Traits/storage/app/profile/';
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('images', $name);

        $result = Upload::create([
            'name'=>$name,
            'path'=>$loc.$name,
        ]);    
        if($result){
            return back();
        }
        
        
    }
}