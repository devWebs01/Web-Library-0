<x-auth.layout>
    <x-slot name="title">Laporan Buku Perpustakaan</x-slot>
    @include('layouts.report')
    <div class="card">
        <div class="card-body table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>image</th>
                        <th>Kategori</th>
                        <th>Rak Buku</th>
                        <th>isbn</th>
                        <th>Penulis</th>
                        <th>Tahun Publis</th>
                        <th>Penerbit</th>
                        <th>Stok Buku</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $no => $book)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $book->title }}</td>
                            <td>
                                <img src="{{ Storage::url($book->image) }}" class="object-fit-cover rounded-circle"
                                    width="50" height="50" alt="img-cover">
                            </td>
                            <td>{{ $book->category->name }}</td>
                            <td>{{ $book->bookshelf->name }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year_published }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->book_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-auth.layout>
