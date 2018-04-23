<form action="{{url('mahasiswa/create')}}" method="post">
	Nama depan		: <input type="text" name="first_name"> <br><br>
	Nama belakang	: <input type="text" name="last_name"> <br><br>
	Email 			: <input type="email" name="email"> <br><br>
	Password 		: <input type="password" name="password"> <br><br>
	Jenis kelamin	: --> <input type="radio" name="jenis_kelamin" value="L" > Laki - Laki --> 
					  <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br><br>
	Alamat			: <input type="textarea" name="alamat"> <br><br>
	Tanggal lahir	: <input type="date" name="tanggal_lahir"> <br><br>
	Agama			: <input type="text" name="agama_id">


	{{csrf_field()}}

	<button type="submit" >GOL</button>
</form>