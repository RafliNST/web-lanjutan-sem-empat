@include('temmplate.header')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $d)
            <tr>
                <th scope="row">{{ $d['no'] }}</th>
                <td>{{ $d['nip'] }}</td>
                <td>{{ $d['nama'] }}</td>
                <td>{{ $d['no_hp'] }}</td>
                <td>aksi</td>
            </tr>
            @endforeach                
        </tbody>
    </table>
</div>
@include('temmplate.footer')