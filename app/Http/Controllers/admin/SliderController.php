<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function allSlider(){;
    $getSliders = Slider::all();
        return view('Backend.Slider.All',compact('getSliders'));
    }

    public function addSlider(){
        return view('Backend.Slider.Add');
    }

    public function saveSlider(Request $request){
        $file            = $request->file('image');
        $destinationPath = '/uploads/slider/';
        $filename        = Str::random(5).'.'. $file->getClientOriginalExtension();
        $request->file('image')->move(public_path().$destinationPath, $filename);

        $save = new Slider();
        $save->title = $request->get('title');
        $save->image = $filename;
        $save->save();
        return redirect()->route('admin::allSlider');
    }

    public function editSlider($id)
    {
        $getSlider  = Slider::find($id);
        return view('Backend.Slider.edit',compact('getSlider'));


    }

    public function updateSlider(Request $request,$id){
        $value = Slider::find($id);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/slider/';
            $filename        = Str::random(10).'.'. $file->getClientOriginalExtension();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $profile_photo = $filename;
        }else{
            $profile_photo = $value->image;
        }
        $update = Slider::find($id);
        $update->image = $profile_photo;
        $update->title = $request->get('title');
        $update->save();
        return redirect()->route('admin::allSlider');
    }

    public function deleteSlider($id){
        $Remove = Slider::find($id);
        $path  = public_path()."/uploads/slider/".$Remove->image;
        if(!empty($path)){
            unlink($path);
        }
        $Remove->delete();
        return redirect()->route('admin::allSlider');
    }
}
