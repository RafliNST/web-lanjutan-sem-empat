@include('temmplate.header')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <th scope="row">{{ $mhs['no'] }}</th>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['prodi'] }}</td>
                <td>{{ $mhs['kelas'] }}</td>
                <td>aksi</td>
            </tr>
            @endforeach                
        </tbody>
    </table>
</div>
@include('temmplate.footer')