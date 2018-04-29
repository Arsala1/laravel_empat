@extends('admin.layouts.app')

@section('isi')


            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('mahasiswa/show')}}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Depan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$mahasiswa->first_name}}" disabled >  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Belakang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$mahasiswa->last_name}}" disabled >  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" value="{{$mahasiswa->email}}" disabled >  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" value="{{$mahasiswa->password}}" disabled >  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="radio" name="jenis_kelamin" value="L" disabled {{($mahasiswa->jenis_kelamin == 'Laki-laki') ? 'checked' : ''}} > Laki - Laki <br>
					  <input type="radio" name="jenis_kelamin" value="P"  disabled {{($mahasiswa->jenis_kelamin == 'Perempuan') ? 'checked' : ''}}  >  Perempuan <br>
					  <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="textarea" name="alamat" value="{{$mahasiswa->alamat}}" disabled > <br> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" disabled  > <br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" disabled  >
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
            </form>

@endsection