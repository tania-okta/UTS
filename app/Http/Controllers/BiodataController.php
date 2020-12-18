<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BiodataController extends Controller
{
    public function biodata()
    {
        return view('biodata.biodata');
    }
 
    public function tambah(Request $request)
    {
        $validasi = $request->validate([
            "nama" => ["required"],
            "ttl" => ['required'],
            "umur" => ['numeric'],
            "jenisKelamin" => ['required'],
            "alamat" => ['required'],
            "hobi" => ['required'],
        ]);

        echo $request->get("nama"), "<br>";
        echo $request->get("ttl"), "<br>";
        echo $request->get("umur"), "<br>";
        echo $request->get("jenisKelamin"), "<br>";
        echo $request->get("alamat"), "<br>";
        echo $request->get("hobi"), "<br>";

        echo "Biodata sedang di proses";
    }
}