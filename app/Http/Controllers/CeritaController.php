<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class CeritaController extends Controller
{
    public function cerita()
    {
        return view('cerita.cerita');
    }
 
    public function tambah(Request $request)
    {
        $validasi = $request->validate([
            "nama" => ["required"],
            "email" => ["required"],
            "cerita" => ['required'],
        ]);

        echo $request->get("nama"), "<br>";
        echo $request->get("email"), "<br>";
        echo $request->get("cerita"), "<br>";

        echo "Cerita kamu sedang di proses";
    }
}