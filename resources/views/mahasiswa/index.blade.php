@extends('admin.layouts.app')
@section('isi')

			<a href="{{url('mahasiswa/create')}}" class="btn btn-primary pull-right" style="margin: 0 0 10px 0;">Add Mahasiswa</a>
			<table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Jenis kelamin</th>
						<th>Tanggal lahir</th>
						<th>Agama id</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php
						$no = 1;
					@endphp

					@foreach($mahasiswa as $row)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$row->first_name}} {{$row->last_name}}</td>
						<td>{{$row->email}}</td>
						<td>{{$row->jenis_kelamin}}</td>
						<td>{{$row->tanggal_lahir}}</td>
						<td>{{$row->agama_id}}</td>
						<td>
							<a href="{{url('mahasiswa/show/'.$row->id)}}" class="btn btn-primary btn-sm">Show</a>
				 			<a href="{{url('mahasiswa/edit/'.$row->id)}}" class="btn btn-success btn-sm">Edit</a>
				 			<a href="{{url('mahasiswa/hapus/'.$row->id)}}" class="btn btn-danger btn-sm">Hapus</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
@endsection