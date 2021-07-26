@extends('layout/template')
@section('content')
    <br><br><br><br><br><br>
	<center>
		<div class="card" style="width: 97%;" >
			<h2 align="left" class="card-title" style=" font-family: 'Ubuntu', sans-serif;">
				Literasinya Spenyosi
			</h2><br>
			<!-- <div class="card-title">
				<h6>
				</h6>
			</div>
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			Baca
			</button> -->
			
				<div class="row row-cols-1 row-cols-md-2 g-4">
				<?php foreach ($literasi as $data): ?>
					<div class="col">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title" align="left">
										{{ $data -> judul}}
								</h5>
								<a href="/literasi/cerita/{{ $data->judul }}">
									<button type="button" class="btn btn-primary float-end" style="width: 30%;">
										Baca
									</button> 
								</a>
							</div>
						</div>
					</div>
					
				<?php endforeach; ?>
				</div>
			
		</div>
	</center>
@endsection