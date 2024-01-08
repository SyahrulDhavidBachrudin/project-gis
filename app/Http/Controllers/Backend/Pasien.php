<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DataPasien;
use App\Models\Spot;
use Attribute;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Pasien extends Controller
{

    protected $DBModel;

    public function __construct()
    {
        $this->DBModel = new DataPasien;
    }

    public function index()
    {
        return view('leaflet.data-pasien');
    }

    public function create()
    {
        $data = DataPasien::all();
        return view('backend/create-pasien', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            HasFactory::class => 'DataPasien',
        ]);
        // DataPasien::find($id)->update($request->all());

        $data = DataPasien::find($id)->update($request->all());
        // dd($data);
        if ($request->hasFile('Foto')) {
            $request->file('Foto')->move('img/', $request->file('Foto')->getClientOriginalName());
            $data->Foto = $request->file('Foto')->getClientOriginalName();
            $data->save();
        }

        // Refresh Titik Pointer
        $result = $this->DBModel->DatabaseMap();
        json_encode($result);

        return redirect()->route('data-pasien')->with('success', 'Data berhasil di Updated');
    }

    public function show($id)
    {
        $data = DataPasien::find($id);
        return view('backend/update-pasien', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            HasFactory::class => 'DataPasien',
        ]);
        if (isset($request['submit'])) {
            unset($request['submit']);
        }
        if (isset($request->submit)) {
            unset($request->submit);
        }
        $data = DataPasien::create($request->all());
        // dd($data);
        if ($request->hasFile('Foto')) {
            $request->file('Foto')->move('img/', $request->file('Foto')->getClientOriginalName());
            $data->Foto = $request->file('Foto')->getClientOriginalName();
            $data->save();
        }

        // Refresh Titik Pointer
        $result = $this->DBModel->DatabaseMap();
        json_encode($result);

        return redirect()->route('data-pasien')->with('success', 'Sukses input bro');
    }

    public function destroy($id)
    {
        $dataPasien = DataPasien::find($id);
        $dataPasien->delete();

        // Refresh Titik Pointer
        $result = $this->DBModel->DatabaseMap();
        json_encode($result);

        return redirect()->route('data-pasien')->with('success', 'Data dihapus');
    }
}
