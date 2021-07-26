@extends('layout/template')
@section('content')
<br><br><br><br><br><br>

	<h4 class="shadow-sm p-3 mb-5 bg-body rounded">Kirim Literasi</h4>
	<center>
		<card class="card d-flex justify-content-center " style="width: 90%;">
			<form action="/setor/insert" method="POST" enctype="multipart/form-data">
				@if (session('pesan'))
					<div class="alert alert-success d-flex align-items-center" role="alert">
						<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
						<div>
							{{session('pesan')}}
						</div>
					</div>
				@endif
				@csrf
					<div class="mb-3">
						<label  class="form-label" style="padding-top: 10px; font-family: 'Rubik', sans-serif;" >
							<b>
								Judul
							</b>
						</label><br>
						<input name="judul" class=" w-100" style="border:solid 1px black;" type="text" class="form-control" placeholder="" style="font-family: 'Open Sans Condensed', sans-serif;">
						<div class="invalid-feedback">
						@error('judul')
							{{ $message }}
						@enderror
						</div>
					</div>
					<br>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label" style="font-family: 'Rubik', sans-serif;">
							<b>
							Cerita
							</b>
						</label>
						<textarea type="text" name="cerita" style="border:solid 1px black;" class="form-control "  rows="8" style="font-family: 'Open Sans Condensed', sans-serif;"></textarea>
					</div>
					<button  class="btn btn-primary float-end" style=" width:150px;">Kirim Cerita</button>
			</form>
		</card>
	</center>
	<br><br>
		
@endsection