<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoStruktur;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class PhotoStrukturController extends Controller
{
    public function AllPhotoStruktur(){

        $struktur = PhotoStruktur::latest()->get();
        return view('backend.struktur.all_photo',compact('struktur'));
    }

    public function AddPhotoStruktur(){
        return view('backend.struktur.add_photo');
    }// End Method

    public function StorePhotoStruktur(Request $request){

        $image = $request->file('multi_image');

        foreach($image as $mulit_image){

        $name_gen = hexdec(uniqid()).'.'.$mulit_image->getClientOriginalExtension();
        Image::make($mulit_image)->resize(700,400)->save('upload/struktur/'.$name_gen);
        $save_url = 'upload/struktur/'.$name_gen;

        PhotoStruktur::insert([
            'photo_struktur' => $save_url,
            'jabatan' => $request->jabatan,
            'post_date' => Carbon::now()->format('d F Y'),

        ]);
        } // End Foreach

        $notification = array(
            'message' => 'Photo Struktur Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.photo.struktur')->with($notification);

    }// End Method

    public function EditPhotoStruktur($id){

        $photostruktur = PhotoStruktur::findOrFail($id);
        return view('backend.struktur.edit_photo',compact('photostruktur'));

    }// End Method

    public function UpdatePhotoStruktur(Request $request){
        $photo_idd = $request->id;

        if ($request->file('multi_image')) {

            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(700,400)->save('upload/struktur/'.$name_gen);
            $save_url = 'upload/struktur/'.$name_gen;

            PhotoStruktur::findOrFail($photo_idd)->update([
                'photo_struktur' => $save_url,
                'jabatan' => $request->jabatan,
                'post_date' => Carbon::now()->format('d F Y'),

            ]);

        $notification = array(
            'message' => 'Photo Struktur Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.photo.struktur')->with($notification);

        } // End If

    }// End Method

    public function DeletePhotoStruktur($id){

        $photo = PhotoStruktur::findOrFail($id);
        $img = $photo->photo_struktur;
        unlink($img);

        PhotoStruktur::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Photo Struktur Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);


    }// End Method
}
