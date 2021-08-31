<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('contact.index',compact('contacts', $contacts));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');

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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:App\Models\Contact,email',
            'phone' => 'required|max:10|min:10'
        ]);
        $contact = new Contact;
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();
       
        return redirect()->route('contact')
            ->with('success', 'Contact created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact =  Contact::find($id);
        return view('contact.show', compact('contact', $contact));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contact =  Contact::find($id);
        return view('contact.update', compact('contact', $contact));
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
       $contact =  Contact::find($id);
       
       $contact->email == $request->email ?
       $request->validate([
           'firstname' => 'required',
           'lastname' => 'required',
        'email' => 'required',
        'phone' => 'required|max:10|min:10'
        ]) :
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:App\Models\Contact,email',
            'phone' => 'required|max:10|min:10'
            ]);
            
            $contact->firstname = $request->firstname;
            $contact->lastname = $request->lastname;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
        $contact->save();
        return redirect()->route('contact')
        ->with('success', 'Contact Updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact =  Contact::find($id);
        $contact->delete();
        return redirect()->route('contact')
            ->with('danger', 'Contact deleted successfully.');
        
    }

    public function history($id)
    {
        $contacts = DB::table('contacts')
        ->select('contacts.id','revisions.*')
        ->join('revisions','revisions.revisionable_id','=','contacts.id')
        ->where('revisions.revisionable_id','=', $id)->paginate(5);
        

        return view('contact.history', compact('contacts', $contacts));
    }
}
