<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Contact::with('author')->get();
        return view('admin.contact', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validated = $request->validate([
                'location' => 'required|string|max:30',
                'address' => 'required|string',
                'contact' => 'required|string',
                'email' => 'required|email',
            ]);
    
            // Menyimpan data ke database
            Contact::create([
                // 'id_users' => $validated['author'], => aktifkan kalau sudah jadi fitur loginnya
                'id_users' => 1,
                'location' => $validated['location'],
                'address' => $validated['address'],
                'contact' => $validated['contact'],
                'email' => $validated['email'],
            ]);
    
            return redirect()->route('adminview.contact')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.contact')->with('error', 'Something went wrong')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Contact::findOrFail($id);
        return view('form.contactform', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'location' => 'required|string|max:30',
            'address' => 'required|string',
            'contact' => 'required|string',
            'email' => 'required|email',
        ]);

        try {

            Contact::where('id', $id)->update([
                'location' => $validated['location'],
                'address' => $validated['address'],
                'contact' => $validated['contact'],
                'email' => $validated['email'],
            ]);

            return redirect()->route('adminview.contact')->with('success', 'Data berhasil diupdate!');
        } catch (\Exception $th) {
            return redirect()->route('adminview.contact')->with('error','Something went wrong')->withInput();

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
