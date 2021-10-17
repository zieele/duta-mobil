<?php
  
namespace App\Http\Controllers;
   
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
  
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Car::orderBy('id','desc')->paginate(5);
        $data['title'] = 'Cars';
    
        return view('cars.index', $data);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('cars.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'color' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $car = new car;
        $car->brand = $request->brand;
        $car->type = $request->type;
        $car->color = $request->color;
        $car->price = $request->price;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('img/car'), $filename);
            $car->image = $filename;
        }
        $car->save();
     
        return redirect()->route('cars.index')
                        ->with('success','car has been created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Car $post)
    {
        // return view('cars.show',compact('post'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $post)
    {
        // return view('cars.edit',compact('post'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'color' => 'required',
            'price' => 'required',
        ]);
        
        $car = Car::find($id);
        if($request->hasFile('image'))
        {
            $destination = 'img/car/'.$car->imgae;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('img/car'), $filename);
            $car->image = $filename;
        }
        $car->brand = $request->brand;
        $car->type = $request->type;
        $car->color = $request->color;
        $car->price = $request->price;
        $car->save();
    
        return redirect()->back()->with('success','Car updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $destination = 'img/car/'.$car->imgae;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $car->delete();
    
        return redirect()->back()->with('success','Post has been deleted successfully');
    }
}