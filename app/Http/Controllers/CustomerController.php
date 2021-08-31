<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
        'company' => 'required|max:255',
		'last_name' => 'required|max:255',
		'first_name' => 'required|max:255',
		'email_address' => 'optional|max:255',
		'job_title' => 'optional|max:255',
		'business_phone' => 'optional|max:255',
		'home_phone' => 'optional|max:255',
		'mobile_phone' => 'optional|max:255',
		'fax_number' => 'optional|max:255',
		'address' => 'optional|max:255',
		'city' => 'optional|max:255',
		'state_province' => 'optional|max:255',
		'zip_postal_code' => 'optional|max:255',
		'country_region' => 'optional|max:255',
		'web_page' => 'optional|max:255',
		'notes' => 'optional|max:255',
		'attachments' => 'optional|max:255',
        ]);
        $customer = Customer::create($storeData);

        return redirect('/customers')->with('completed', 'custoemr saved');
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
        $customer = Customer::findorFail($id);
        return view('edit', compact('customer'));
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
        $updateData = $request->validate([
            'company' => 'required|max:255',
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'email_address' => '|max:255',
            'job_title' => '|max:255',
            'business_phone' => '|max:255',
            'home_phone' => '|max:255',
            'mobile_phone' => '|max:255',
            'fax_number' => '|max:255',
            'address' => '|max:255',
            'city' => '|max:255',
            'state_province' => '|max:255',
            'zip_postal_code' => '|max:255',
            'country_region' => '|max:255',
            'web_page' => '|max:255',
            'notes' => '|max:255',
            'attachments' => '|max:255',
        ]);
        Customer::whereId($id)->update($updateData);
        return redirect('/customer')->with('completed','customer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findorFail($id);
        $customer->delete();

        return redirect('/customers')->with('completed', 'customer has been deleted');
    }
}
