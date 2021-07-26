<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LiterasiModel;
use App\Models\SetorModel;

class LiterasiController extends Controller
{
    public function __construct()
	{
		$this ->LiterasiModel = new LiterasiModel();
	}

    public function index()
    {
        $data = [
            'literasi' => $this-> LiterasiModel->allData(),
            
        ];

      return view('literasi', $data);
  
    }

    public function modal($judul)
    {
        
        $data = [
            'literasi' => $this-> LiterasiModel->modalData($judul),
            
        ];

      return view('full', $data);
    }

    public function insert()
    {
        // request()->validate([
        //     'judul' => 'required|unique:literasi,judul|min:5',
        //     'cerita' => 'required',
        // ],[
        //     'judul.required' => 'wajib di isi ::',
        //     'judul.uniqe' => 'sudah ada::'
        // ]);

        $data =[
            'judul' => request()->judul,
            'cerita' => request()->cerita,
        ];

        $this->LiterasiModel->addData($data);
        return redirect()->route('literasi')->with('pesan', 'Cerita Berhasil di publish::');
    }

}
