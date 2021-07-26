<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LiterasiModel extends Model
{
    public function allData()
	{
		return DB::table('literasi')->get();
	}

	public function modalData($judul)
	{
		return DB::table('literasi')->where('judul', $judul)->first();
	}

	public function addData($data)
    {
      DB::table('literasi')->insert($data);
    }
    
}
