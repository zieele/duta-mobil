<?php
  
//   UPDATE AND DELETE NEEDED ID    
//   UPDATE AND DELETE NEEDED ID    
//   UPDATE AND DELETE NEEDED ID    

namespace App\Http\Controllers;
   
use App\Models\Customer;
use Illuminate\Http\Request;
  
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Customer::orderBy('created_at','desc')->paginate(5);
        $data['title'] = 'Customers';
    
        return view('customers.index', $data);
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
            'ktp' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $item = new Customer;
        $item->ktp = $request->ktp;
        $item->name = $request->name;
        $item->address = $request->address;
        $item->phone = $request->phone;
        $item->save();
     
        return redirect()->route('customers.index')
                        ->with('success','Customer has added.');
        dd($item);
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $post)
    {
        // return view('cars.show',compact('post'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $post)
    {
        // return view('cars.edit',compact('post'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ktp)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        
        $item = Customer::find($ktp);
        $item->name = $request->name;
        $item->address = $request->address;
        $item->phone = $request->phone;
        $item->save();
    
        return redirect()->back()->with('success','Customer data was updated.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return redirect()->back()->with('success','Post has been deleted successfully');
    }
}