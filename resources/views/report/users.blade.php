<x-auth.layout>
    <x-slot name="title">Laporan Anggota Perpustakaan</x-slot>
    @include('layouts.report')
    <div class="card">
        <div class="card-body table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Role</th>
                        <th>Jurusan</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>NIS/Etc.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $no => $user)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>+62{{ $user->telp }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->majors ?? '-' }}</td>
                            <td>{{ $user->birthdate }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->identify }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-auth.layout>
