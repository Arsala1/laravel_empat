@extends('admin.layouts.app')

@section('isi')


            <form action="{{url('mahasiswa/update')}}" method="post">
              <input type="hidden" name="id" value="{{$mahasiswa->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Depan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name" value="{{$mahasiswa->first_name}}">  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Belakang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name" value="{{$mahasiswa->last_name}}">  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="{{$mahasiswa->email}}">  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="{{$mahasiswa->password}}">  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'Laki-laki') ? 'checked' : ''}} > Laki - Laki <br>
					  <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'Perempuan') ? 'checked' : ''}}  >  Perempuan <br>
					  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="textarea" name="alamat" value="{{$mahasiswa->alamat}}"> <br> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}"> <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="agama_id" value="{{$mahasiswa->agama_id}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              {{csrf_field()}}

                <button type="submit" class="btn btn-info pull-right">UPDATE</button>
            </form>

@endsection