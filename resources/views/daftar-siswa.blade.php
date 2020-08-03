<table border="1" class="table table-striped">
	<h1>
		<center>DAFTAR SISWA</center>


	</h1>
	<tr>
		<td>id</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Kelas</td>
		<td>Jurusan</td>
			</tr>
	@foreach ($tampil as $data)

	<tr>
		<td>{{$data ['id']}}</td>
		<td>{{$data ['nama']}}</td>
		<td>{{$data ['jenis_kelamin']}}</td>
		<td>{{$data ['kelas']}}</td>
		<td>{{$data ['jurusan']}}</td>

	</tr>
  @endforeach

</table>