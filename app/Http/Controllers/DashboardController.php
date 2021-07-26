<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardModel;

class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this ->DashboardModel = new DashboardModel();
  }
  public function index()
  {
    $data = [
      'literasi' => $this-> DashboardModel->allData()

  ];
    return view('dashboard', $data);

  }
  public function delete($judul)
  {
    $this->DashboardModel->deleteData($judul);
    return redirect()->route('dashboard');
  }
}
