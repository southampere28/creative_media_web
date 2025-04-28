<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $posts = Service::with('author')->get();
        return view('admin.service', compact('posts'));
    }

    public function show($slug)
    {
        $posts = Service::where('name', $slug)->latest()->get();

        if ($posts->isEmpty()) {
            abort(404);
        }

        return view('detail.detailservice', compact('posts', 'slug'));
    }

    public function edit($id)
    {
        $edit = Service::findOrFail($id);
        return view('form.serviceform', compact('edit'));
    }

    public function store(Request $request)
    {
        
        try {

            $validated = $request->validate([
                // 'author' => 'required|integer|exists:users,id',
                'studyname' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'editordata' => 'required|string',
                'description' => 'required|string',
                'service_detail' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // bisa juga 'nullable|image' jika upload file beneran
            ],[
                'description.required' => 'isi dulu guys, jangan kosong'
            ]);
            
            // Menyimpan gambar jika ada
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('service_images', 'public');
            }
    
            // Menyimpan data ke database
            Service::create([
                // 'id_users' => $validated['author'], => aktifkan kalau sudah jadi fitur loginnya
                'id_users' => 1,
                'name' => $validated['studyname'],
                'title' => $validated['title'],
                'content' => $validated['editordata'],
                'service_detail' => $validated['service_detail'] ?? null,
                'description' => $validated['description'],
                'image' => $imagePath, // Menyimpan path gambar yang sudah disimpan
            ]);
    
            return redirect()->route('adminview.services')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.services')->with('error','Something went wrong')->withInput();
        }
    }

    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'studyname' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'editordata' => 'required|string',
            'description' => 'required|string',
            'service_detail' => 'nullable|string',
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

            Service::where('id', $id)->update([
                'name' => $validated['studyname'],
                'title' => $validated['title'],
                'description' => $validated['description'],
                'service_detail' => $validated['service_detail'] ?? null,
                'content' => $validated['editordata'],
                'image' => $imagePath,
            ]);

            return redirect()->route('adminview.services')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('adminview.services')->with('error','Something went wrong')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
