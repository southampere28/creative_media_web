<?php

namespace App\Http\Controllers;

use App\Models\StudentWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class studentWorksController extends Controller
{
    public function index()
    {
        $posts = StudentWork::with('author')->get();
        return view('admin.karyasiswa', compact('posts'));
    }
    
    public function showall()
    {  
        $studentWorks = StudentWork::with('author')->get();
        return view('detail.karyasiswa', compact('studentWorks'));
    }

    public function edit($id)
    {
        $edit = StudentWork::findOrFail($id);
        return view('form.studentworkform', compact('edit'));
    }

    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
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
                $imagePath = $file->storeAs('studentwork_images', $filename, 'public');

                // Hapus gambar lama kalau ada
                if ($validated['old_image'] && Storage::disk('public')->exists($validated['old_image'])) {
                    Storage::disk('public')->delete($validated['old_image']);
                }
            }

            StudentWork::where('id', $id)->update([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'image' => $imagePath,
            ]);

            return redirect()->route('adminview.karyasiswa')->with('success', 'Data berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.karyasiswa')->with('error', 'Something went wrong')->withInput();
        }
    }

    public function store(Request $request)
    {
        
        try {

            $validated = $request->validate([
                // 'author' => 'required|integer|exists:users,id',
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // bisa juga 'nullable|image' jika upload file beneran
            ],[
                'description.required' => 'isi dulu guys, jangan kosong'
            ]);
            
            // Menyimpan gambar jika ada
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('studentwork_images', 'public');
            }
    
            // Menyimpan data ke database
            StudentWork::create([
                // 'id_users' => $validated['author'], => aktifkan kalau sudah jadi fitur loginnya
                'id_users' => 1,
                'name' => $validated['name'],
                'description' => $validated['description'],
                'image' => $imagePath, // Menyimpan path gambar yang sudah disimpan
            ]);
    
            return redirect()->route('adminview.karyasiswa')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.karyasiswa')->withErrors('Something went wrong')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $service = StudentWork::findOrFail($id);
            $service->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
