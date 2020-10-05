<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Province;
use App\Car;
use App\CarImage;
class ImageController extends Controller
{
    //index
    public function index(){
        $cars=Car::paginate(10);
        return view('admin.car_image.index',compact('cars'));
    }
    //create
    public function create($id){
        $car=Car::find($id);
        return view('admin.car_image.create',compact('car'));
    }

    //store
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            foreach($request->file('image') as $image)
            {
    
                if($image->isValid()){
                    $name=uniqid(date('HisYmd'));
                    $extension=$image->extension();
                    echo $imageName=$name.'.'.$extension;
                    $sucesso=$image->storeAs('car_images',$imageName);
                    if(!$sucesso){
                        return 'echo';
                    }
                }
                CarImage::create([
                    'car_id'=>$request['car_id'],
                    'image'=> $imageName
                ]);
            }
        }
        
        return redirect()->route('admin.car_image.index');
        
    }

    //show
    public function show($id){
        $car=Car::find($id);
        return view('admin.car_image.show',compact('car'));
    }

    //edit
    public function edit($car_id,$image_id){
       $car=Car::find($car_id);
        $carImage=CarImage::find($image_id);
        
        return view('admin.car_image.edit',compact('carImage','car'));
    }

    //update
    public function update(request $request,$car_id,$image_id){
                $image=CarImage::find($image_id);

                if($request->hasFile('image') && $request->file('image')->isValid()){
                    Storage::delete('car_images/'.$image->image);
                    $name=uniqid(date('HisYmd'));
                    $extension=$request->file('image')->extension();
                    echo $imageName=$name.'.'.$extension;
                    $sucesso=$request->file('image')->storeAs('car_images',$imageName);
                    if(!$sucesso){
                        return 'echo';
                    }
                }else{
                    $imageName=$image->image;
                }

                $image->update([
                    'image'=> $imageName
                ]);

        
        return redirect()->route('admin.car_image.show',$car_id);
    }


    public function destroy($car_id,$image_id){
        $carImage=CarImage::find($image_id);
        Storage::delete('car_images/'.$carImage->image);
        $carImage->delete();
        return back();
    }


    //search
    public function search(request $request){
        
        $province=Province::where('province','like', '%'.$request->search.'%')->first();
        if($province==null){
            
            $cars=Car::where('brand','like','%'.$request->search.'%')
            ->orWhere('body','like','%'.$request->search.'%')
            ->orWhere('seats','like',$request->search.'%')
            ->orWhere('date','like',$request->search.'%')
            ->orWhere('dor','like',$request->search.'%')
            ->orWhere('mileage','like',$request->search.'%')
            ->orWhere('engine','like',$request->search.'%')
            ->get();
            return view('admin.car_image.search',compact('cars'));
        }else{
            
            $cars=Car::where('brand','like','%'.$request->search.'%')
            ->orWhere('body','like','%'.$request->search.'%')
            ->orWhere('seats','like',$request->search.'%')
            ->orWhere('date','like',$request->search.'%')
            ->orWhere('dor','like',$request->search.'%')
            ->orWhere('mileage','like',$request->search.'%')
            ->orWhere('engine','like',$request->search.'%')
            ->orWhere('province_id',$province->id)
            ->get();
            return view('admin.car_image.search',compact('cars'));
        }

    }

}
