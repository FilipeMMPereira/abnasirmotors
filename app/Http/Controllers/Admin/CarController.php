<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Car;
use App\Province;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::paginate(10);
        return view('admin.car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces=Province::all();
        return view('admin.car.create',compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'province_id'=>'required',
            'brand'=>'required',
            'image'=>'required|file|mimes:png,jpg,jpeg',
            'body'=>'required',
            'fuel_type'=>'required',
            'seats'=>'required',
            'date'=>'required',
            'dor'=>'required',
            'mileage'=>'required',
            'engine'=>'required',
            'price'=>'required',
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $slug=str_slug($request->brand);
            $name=uniqid(date('HisYmd'));
            $type=$request->file('image')->extension();
            $nameImage=$slug.'-'.$name.'.'.$type;

            $save=$request->file('image')->storeAs('car',$nameImage);
            if(!$save){
                return 'erro';
            }
        }


        Car::create([
            'province_id'=>$data['province_id'],
            'brand'=>$data['brand'],
            'image'=>$nameImage,
            'body'=>$data['body'],
            'fuel_type'=>$data['fuel_type'],
            'seats'=>$data['seats'],
            'date'=>$data['date'],
            'dor'=>$data['dor'],
            'mileage'=>$data['mileage'],
            'engine'=>$data['engine'],
            'price'=>$data['price'],
        ]);

        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car=Car::find($id);
        $provinces=Province::all();
        return view('admin/car/edit',compact('car','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car=Car::find($id);

        $data=$request->validate([
            'province_id'=>'required',
            'brand'=>'required',
            'image'=>'file|mimes:png,jpg,jpeg',
            'body'=>'required',
            'fuel_type'=>'required',
            'seats'=>'required',
            'date'=>'required',
            'dor'=>'required',
            'mileage'=>'required',
            'engine'=>'required',
            'price'=>'required',
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            Storage::delete("car/$car->image");
            $slug=str_slug($request->brand);
            $name=uniqid(date('HisYmd'));
            $type=$request->file('image')->extension();
            $nameImage=$slug.'-'.$name.'.'.$type;

            $save=$request->file('image')->storeAs('car',$nameImage);
            if(!$save){
                return 'erro';
            }
        }else{
            $nameImage=$car->image;
        }


        $car->update([
            'province_id'=>$data['province_id'],
            'brand'=>$data['brand'],
            'image'=>$nameImage,
            'body'=>$data['body'],
            'fuel_type'=>$data['fuel_type'],
            'seats'=>$data['seats'],
            'date'=>$data['date'],
            'dor'=>$data['dor'],
            'mileage'=>$data['mileage'],
            'engine'=>$data['engine'],
            'price'=>$data['price'],
        ]);

        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car=Car::find($id);
        Storage::delete("car/$car->image");
        foreach($car->images as $image){
            Storage::delete("car_images/$image->image"); 
        }
        $car->delete();
        return redirect()->route('car.index');
    }


    //search
    public function search(request $request){
        $province=Province::where('province','like','%'.$request->search.'%')->first();
        if($province==null){
            $cars=Car::where('brand','like','%'.$request->search.'%')
            ->orWhere('body','like','%'.$request->search.'%')
            ->orWhere('fuel_type','like','%'.$request->search.'%')
            ->orWhere('seats','like',$request->search.'%')
            ->orWhere('date','like',$request->search.'%')
            ->orWhere('mileage','like',$request->search.'%')
            ->orWhere('engine','like',$request->search.'%')
            ->orWhere('price','like',$request->search.'%')
            ->get();
            return view('admin.car.search',compact('cars'));
        }else{
            $cars=Car::where('brand','like','%'.$request->search.'%')
            ->orWhere('body','like','%'.$request->search.'%')
            ->orWhere('fuel_type','like','%'.$request->search.'%')
            ->orWhere('seats','like',$request->search.'%')
            ->orWhere('date','like',$request->search.'%')
            ->orWhere('mileage','like',$request->search.'%')
            ->orWhere('engine','like',$request->search.'%')
            ->orWhere('price','like',$request->search.'%')
            ->orWhere('province_id',$province->id?$province->id:0)
            ->get();
            return view('admin.car.search',compact('cars'));
        }

        //return json_encode($this->list($car));
        // $cars=$this->list($car);
        return view('admin.car.search',compact('cars'));
    }


    //list
    protected function list($cars){
        $quest='Do you want to delete';
        $i=1;
        $interrogation='?';
        $output='';
        foreach ($cars as $car){
            $output.='<tr>
                <td>'.$i++.'</td>
                <th>'.$car->province->province.'</th>
                <td>'.$car->brand.'</td>
                <td>'.$car->body.'</td>
                <td>'.$car->fuel_type.'</td>
                <td>'.$car->seats.'</td>
                <td>'.$car->date.'</td>
                <td>'.$car->dor.'</td>
                <td>'.$car->mileage.'</td>
                <td>'.$car->engine.'</td>
                <td>'. number_format($car->price,2,',','.') .'MT</td>
                <td>'.'<a href="car/'.$car->id.'/edit/" class="btn btn-warning">Edit</a></td>
                <td>
                    <form id="delete-form-'.$car->id.'" action="car/'.$car->id.'" method="post">

                    <button class="btn btn-danger" onclick="if(confirm('.$quest.' '.$car->brand.' '.$interrogation.')){
                        event.preventDefault()
                        document.getElementById("delete-form-'.$car->id.'").submit();
                    }else{
                        event.preventDefault()
                    }">Delete</button>
                    </form>
                </td>
            </tr>';
        }
        //$links=$cars->links();
        return$output;
         //$list=['output'=>$output,'links'=>$links];
    }


}



// where('brand','like','%'.$request->search.'%')
//                     ->orWhere('body','like','%'.$request->search.'%')
//                     ->orWhere('fuel_type','like','%'.$request->search.'%')
//                     ->orWhere('seats','like','%'.$request->search.'%')
//                     ->orWhere('date','like','%'.$request->search.'%')
//                     ->orWhere('mileage','like','%'.$request->search.'%')
//                     ->orWhere('engine','like','%'.$request->search.'%')
//                     ->orWhere('price','like','%'.$request->search.'%')