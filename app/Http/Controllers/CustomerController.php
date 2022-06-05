<?php

namespace App\Http\Controllers;
 
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\CustomerController;


class CustomerController extends Controller
{

    public function index()
    {
        // $user= auth()->user()->id;
        $customer = Customer::with(['contact','follow'])
        // ->where(['user_id'=> $user, 'isApproval'=>'approve'])
        ->where(['approval'=>'approved'])
        ->latest()
        ->get();

        return view('customer.index', [
            'customers'=> $customer,
            'title' => 'Customer List'
        ]);

        // return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData = $request->validate([
            'name' => 'required|',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email:rfc,dns', 
            'fax' => 'required', //iki gak required, boleh kosong seharuse
            'website' => 'required', //iki gak required, boleh kosong seharuse
            'pic' => 'required', 
            'contact' => 'required|numeric',
            'note' => 'required' //iki gak required, boleh kosong seharuse
        ]);
        $validatedData['approval'] = False;
        $validatedData['is_order'] = False;
        $validatedData['status'] = 'cold';


        Customer::create($validatedData);

        return redirect('/customer')->with('success', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {

        $badge = $this->badge($customer->id);
        
        $contact = Contact::where('customer_id', $customer->id)->get();

        return view('customer.show', [
            'customer' => $customer,
            'badge' => $badge,
            'contacts' => $contact,
        ]);
        //  $badge = badge-danger
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {

        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData = $request->validate([
            'name' => 'required|',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'fax' => 'required',
            'website' => 'required',
            'pic' => 'required',
            'contact' => 'required',
            'note' => 'required'
        ]);
        $validatedData['approval'] = False;
        $validatedData['is_order'] = False;

        Customer::where('id', $customer)
            ->update($validatedData);

        return redirect('/customer')->with('success', 'data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer);
        return redirect('/customer')->with('success', 'data telah dihapus');
    }

    public function badge($id){
        switch ($id) {
            case 'hot':
                $badge = 'badge-danger';
                break;
            case 'warm':
                $badge = 'badge-warning';
                break;
            case 'cold':
                $badge = 'badge-info';
                break;
            case 'expired':
                $badge = 'badge-dark';
                break;
            default:
                $badge = 'badge-success';
        }
        return $badge;
    }

    public function pending(){
        // $user= auth()->user()->id;
        $customer = Customer::with(['contact','follow'])
        // ->where(['user_id'=> $user, 'isApproval'=>'pending'])
        ->where(['approval'=>'pending'])
        ->latest()
        ->get();

        return view('customer.index', [
            'customers'=> $customer,
            'title' => 'Pending Customer'
        ]);

        // return view('customer.index');
    }

    public function declined(){
        // $user= auth()->user()->id;
        $customer = Customer::with(['contact','follow'])
        // ->where(['user_id'=> $user, 'isApproval'=>'declined'])
        ->where(['approval'=>'declined'])
        ->latest()
        ->get();

        return view('customer.index', [
            'customers'=> $customer,
            'title' => 'declined customer'
        ]);
    }
}
