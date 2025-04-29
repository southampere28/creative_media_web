<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Client::with('author')->get();
        return view('admin.client', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validated = $request->validate([
                'nama' => 'required|string|max:100',
                'link' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // bisa juga 'nullable|image' jika upload file beneran
            ]);
            
            // Menyimpan gambar jika ada
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('client_images', 'public');
            }
    
            // Menyimpan data ke database
            Client::create([
                'id_users' => 1,
                'nama' => $validated['nama'],
                'link' => $validated['link'] ?? null,
                'image' => $imagePath, // Menyimpan path gambar yang sudah disimpan
            ]);
    
            return redirect()->route('adminview.client')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.client')->with('error','Something went wrong')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Client::findOrFail($id);
        return view('form.clientform', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'link' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // sekarang validasi file image beneran
            'old_image' => 'nullable|string',
        ], [
            'description.required' => 'isi dulu guys, jangan kosong'
        ]);

        try {
            $imagePath = $validated['old_image'] ?? null;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $imagePath = $file->storeAs('service_images', $filename, 'public');

                // Hapus gambar lama kalau ada
                if ($validated['old_image'] && Storage::disk('public')->exists($validated['old_image'])) {
                    Storage::disk('public')->delete($validated['old_image']);
                }
            }

            Client::where('id', $id)->update([
                'nama' => $validated['nama'],
                'link' => $validated['link'] ?? null,
                'image' => $imagePath,
            ]);

            return redirect()->route('adminview.client')->with('success', 'Data berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.client')->with('error','Something went wrong')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
