<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
    public function allData()
	{
		return DB::table('literasi')->get();
	}

  public function deleteData($judul)
  {
    DB::table('literasi')
        ->where('judul', $judul)
        ->delete();
  }
}
