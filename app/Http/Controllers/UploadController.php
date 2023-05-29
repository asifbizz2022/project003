<?php

namespace App\Http\Controllers; 
use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Traits\StoreImage;

class UploadController extends Controller
{
    use StoreImage; 
     
    public function store(Request $request)
    {
        $loc = 'http://localhost/Traits/storage/app/images/';

        $details = $this->store_image($request , $request->image);
        
        // if($request->hasFile('image')){
            
        //     // $name = $request->file('image')->getClientOriginalName(); 
        //     // $path = $request->file('image')->store('images');

        //     $name = time().'.'.$request->image->extension();
        //     //$request->image->storeAs('images', $name);
        //     $request->image->move(public_path('images'),$name);

        //     Upload::create([
        //         'name'=>$name,
        //         'path'=>$loc.$name,
        //     ]);
            
        // }
        if($details){
            return back()->with('message', 'Image Uploaded');
        }
        
    } 
     
    public function show(Upload $upload)
    {
        //
    } 
     
    public function edit(Upload $upload)
    {
        //
    } 
     
    public function update(Request $request, Upload $upload)
    {
        //
    } 
     
    public function destroy(Upload $upload)
    {
        //
    }
}
