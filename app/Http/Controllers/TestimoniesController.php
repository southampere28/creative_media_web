<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniesController extends Controller
{
    public function index()
    {
        $posts = Testimoni::with('author')->get();
        return view('admin.testimoni', compact('posts'));
    }

    public function edit($id)
    {
        $edit = Testimoni::findOrFail($id);
        return view('form.testimoniform', compact('edit'));
    }

    public function store(Request $request)
    {
        
        try {

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'comment' => 'required|string',
                'type' => 'required|string|max:255',
                'video' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // bisa juga 'nullable|image' jika upload file beneran
            ]);
            
            // Menyimpan gambar jika ada
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('alumni_images', 'public');
            }
    
            // Menyimpan data ke database
            Testimoni::create([
                // 'id_users' => $validated['author'], => aktifkan kalau sudah jadi fitur loginnya
                'id_users' => 1,
                'name' => $validated['name'],
                'comment' => $validated['comment'],
                'type' => $validated['type'],
                'video' => $validated['video'] ?? null,
                'image' => $imagePath, // Menyimpan path gambar yang sudah disimpan
            ]);
    
            return redirect()->route('adminview.testimoni')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.testimoni')->with('error', 'Something went wrong')->withInput();
        }
    }

    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'type' => 'required|string|max:255',
            'video' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'old_image' => 'nullable|string',
        ]);

        try {
            $imagePath = $validated['old_image'] ?? null;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $imagePath = $file->storeAs('alumni_images', $filename, 'public');

                // Hapus gambar lama kalau ada
                if ($validated['old_image'] && Storage::disk('public')->exists($validated['old_image'])) {
                    Storage::disk('public')->delete($validated['old_image']);
                }
            }

            Testimoni::where('id', $id)->update([
                'name' => $validated['name'],
                'comment' => $validated['comment'],
                'type' => $validated['type'],
                'video' => $validated['video'] ?? null,
                'image' => $imagePath, // Menyimpan path gambar yang sudah disimpan
            ]);

            return redirect()->route('adminview.testimoni')->with('success', 'Data berhasil diupdate!');
        } catch (\Exception $th) {
            return redirect()->route('adminview.testimoni')->with('error','Something went wrong')->withInput();

        }
    }

    public function destroy($id)
    {
        try {
            $study = Testimoni::findOrFail($id);
            $study->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
