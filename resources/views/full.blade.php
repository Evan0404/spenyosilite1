@extends('layout/template')
@section('content')
    <br><br><br><br><br><br>

    <center>
        <div class="card d-flex justify-content-center" style="width: 90%;">
            <div class="card-title">
                <h2 align="left">{{$literasi->judul}}</h2>
            </div>
            <div class="card-body">
                <p align="justify">
                 {{$literasi->cerita}}
                </p>
            </div>
        </div>
    </center>
       


@endsection