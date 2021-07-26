@extends('layout/template_admin')
@section('content1')
<br><br><br>

            <!-- <div class="row row-cols-1 row-cols-md-2 g-4">

					<div class="col">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title" align="left">

								</h5>
								<a href="/literasi/cerita/">
									<button type="button" class="btn btn-primary float-end" style="width: 30%;">
										Baca
									</button>
								</a>
							</div>
						</div>
					</div>


			</div> -->
			<center>
				<div class="card " style="width:85%;">
					<center>
				 		<table class="justify-content-center w-90" style="width:90%;">
							<div>
								<tr class="shadow p-3 mb-5 bg-body rounded" style="border-bottom:solid black 1px;width:95%;">
									<th>JUDUL</th>
									<th class="float-end" style="margin-right:90px;">AKSI</th>
								</tr>
							</div>
							<?php foreach ($literasi as $data): ?>
							<tr>
								<td style="margin-bottom:30px; margin-top:20px;">{{ $data -> judul}}</td>
								<td class="float-end">
									 <!-- <a href="/literasi/cerita/{{ $data->judul }}">
										<button type="button" class="btn btn-primary" style="width: 100px;">
											Baca
											<i class="bi bi-book"></i>
										</button>
									</a> -->
									<!-- Button trigger modal -->
									<button type="button" style="width: 100px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $data -> id}}">
										Baca	<i class="bi bi-book"></i>
									</button>


									<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $data -> id}}" style="width: 100px;">
										Hapus
										<i class="bi bi-trash"></i>
									</button>

								</td>
							</tr>
							<?php endforeach; ?>
						</table>
					<!-- <table class="table justify-content-center" style="width:97%;">
							<thead>
								<tr>
								<th scope="col">Judul</th>
								<th scope="col" class=>Aksi</th>
								</tr>
							</thead>
							<tbody> -->

								<!-- <tr>
								<td>{{ $data -> judul}}</td>
								<td> -->
									<!-- lihat -->
									<!-- <a href="/literasi/cerita/{{ $data->judul }}">
										<button type="button" class="btn btn-primary" style="width: 100px;">
											Baca
											<i class="bi bi-book"></i>
										</button>
									</a>

									<a href="/literasi/cerita/{{ $data->judul }}">
										<button type="button" class="btn btn-danger" style="width: 100px;">
											Delete
											<i class="bi bi-trash"></i>
										</button>
									</a>
								</td>
								</tr>

							</tbody>
						</table> -->
					</center>
				</div>
			</center>

<?php foreach ($literasi as $data): ?>
			<!-- Modal View-->
			<div class="modal fade" id="staticBackdrop{{ $data -> id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">{{ $data -> judul}}</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
								{{ $data -> cerita}}
						</div>
						<div class="modal-footer">
							<small>
								SupportByStevanus2021
							</small>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade " id="delete{{ $data -> id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog ">
			    <div class="modal-content bg-danger">
			      <div class="modal-header">
			        <h5 class="modal-title text-light" id="exampleModalLabel">Menghapus</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body text-light">
			        Apakah Anda Yakin Ingin Menghapus data dari <b>{{ $data -> judul}}</b>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger border border-light" data-bs-dismiss="modal">Tidak</button>
			        <a href="/dashboard/delete/{{ $data -> judul}}" class="btn btn-danger border border-light">Gasss</a>
			      </div>
			    </div>
			  </div>
			</div>
<?php endforeach; ?>

@endsection
