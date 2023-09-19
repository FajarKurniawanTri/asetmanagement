<?php

namespace App\Http\Controllers;

use App\Exports\ExportAcctv;
use Illuminate\Http\Request;
use App\Models\Cctv;
use App\Models\a_unit;
use App\Models\a_location;
use App\Models\a_vr;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;


class CctvController extends Controller
{
    public function acctv()
    {
        $cc = Cctv::with('unit','location','vr')->paginate(1000);
        return view('A-CCTV.acctv', compact('cc'));
    }

    public function export_excel(){
        return Excel::download(new ExportAcctv, "cctv.xlsx");
    }

    public function create()
    {
        $vr = a_vr::all();
        $units = a_unit::all();
        $locations = a_location::all();
        return view('A-CCTV.create', compact('units', 'locations','vr'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:jpeg,png,jpg,gif', // Validasi gambar
            // ... validasi lainnya
        ],[
            'foto.required' => 'Silahkan masukkan foto',
            'foto.mimes' => 'Foto hanya diperbolehkan dalam format JPEG, JPG, PNG, dan GIF'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('cctv_fotos', 'public'); // Simpan gambar
        }

        // Buat catatan CCTV dengan path gambar
        Cctv::create([
            'unit_id' => $request->input('unit_id'),
            'location_id' => $request->input('location_id'),
            'vr_id' => $request->input('vr_id'),
            'ip' => $request->input('ip'),
            'merk'=> $request->input('merk'),
            'type'=> $request->input('type'),
            'view_area'=> $request->input('view_area'),
            'ponumber'=> $request->input('ponumber'),
            'condition'=> $request->input('condition'),
            'foto' => $fotoPath, // Simpan path gambar
        ]);

        return redirect()->route('A-CCTV')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(string $id)
    {
        {
            $cc = Cctv::findOrFail($id);      
      
            return view('A-CCTV.show', compact('cc'));
        }
    }

    public function edit(string $id)
    {
        $vr = a_vr::all();
        $cc = Cctv::findOrFail($id);
        $units = a_unit::all();
        $locations = a_location::all();

        return view('A-CCTV.edit', compact('cc', 'units', 'locations', 'vr'));
    }

    public function update(Request $request, string $id)
    {
        try {
            // Cari produk berdasarkan id
            $cc = Cctv::where('id', $id)->firstOrFail();

            // Validasi foto jika ada
            if ($request->hasFile('foto')) {
                $request->validate([
                    'foto' => 'mimes:jpeg,png,jpg,gif', // Validasi gambar
                ], [
                    'foto.mimes' => 'Foto hanya diperbolehkan dalam format JPEG, JPG, PNG, dan GIF'
                ]);

                // Simpan gambar baru
                $fotoPath = $request->file('foto')->store('cctv_fotos', 'public');
                // Hapus gambar lama jika ada
                if ($cc->foto && Storage::disk('public')->exists($cc->foto)) {
                    Storage::disk('public')->delete($cc->foto);
                }
                

                $cc->update([
                    'foto' => $fotoPath, // Simpan path gambar baru
                ]);
            }

            // Update informasi produk kecuali foto
            $cc->update($request->except(['_token', '_method', 'foto']));

            return redirect()->route('A-CCTV')->with('success', 'Data berhasil diperbarui');

        } catch (\Exception $e) {
            // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
            return redirect()->route('A-CCTV')->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        {
            $cc = Cctv::findOrFail($id);
      
            $cc->delete();
      
            return redirect()->route('A-CCTV')->with('success', 'Data berhasil dihapus');
        }
    }
}
