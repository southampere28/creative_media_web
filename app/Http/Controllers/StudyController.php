<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudyController extends Controller
{
    public function index()
    {
        $posts = Study::with('author')->get();
        return view('admin.study', compact('posts'));
    }
    
    public function show($slug)
    {
        $posts = Study::where('name', $slug)->latest()->get();

        if ($posts->isEmpty()) {
            abort(404);
        }

        return view('detail.detailstudy', compact('posts', 'slug'));
    }
    public function store(Request $request)
    {
        
        try {

            $validated = $request->validate([
                // 'author' => 'required|integer|exists:users,id',
                'studyname' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'editordata' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // bisa juga 'nullable|image' jika upload file beneran
            ]);
            
            // Menyimpan gambar jika ada
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('study_images', 'public');
            }
    
            // Menyimpan data ke database
            Study::create([
                // 'id_users' => $validated['author'], => aktifkan kalau sudah jadi fitur loginnya
                'id_users' => 1,
                'name' => $validated['studyname'],
                'title' => $validated['title'],
                'content' => $validated['editordata'],
                'image' => $imagePath, // Menyimpan path gambar yang sudah disimpan
            ]);
    
            return redirect()->route('adminview.study')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.study')->with('error', 'Something went wrong')->withInput();
        }
    }
    
    public function edit($id)
    {
        $edit = Study::findOrFail($id);
        return view('form.studyform', compact('edit'));
    }

    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'studyname' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'editordata' => 'required|string',
            'image' => 'nullable|image|max:2048', // sekarang validasi file image beneran
            'old_image' => 'nullable|string',
        ]);

        try {
            $imagePath = $validated['old_image'] ?? null;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $imagePath = $file->storeAs('study_images', $filename, 'public');

                // Hapus gambar lama kalau ada
                if ($validated['old_image'] && Storage::disk('public')->exists($validated['old_image'])) {
                    Storage::disk('public')->delete($validated['old_image']);
                }
            }

            Study::where('id', $id)->update([
                'name' => $validated['studyname'],
                'title' => $validated['title'],
                'content' => $validated['editordata'],
                'image' => $imagePath,
            ]);

            return redirect()->route('adminview.study')->with('success', 'Data berhasil diupdate!');
        } catch (\Exception $th) {
            return redirect()->route('adminview.study')->with('error','Something went wrong')->withInput();

        }
    }

    public function destroy($id)
    {
        try {
            $study = Study::findOrFail($id);
            $study->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
