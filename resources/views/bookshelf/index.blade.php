<x-auth.layout>
    @include('layouts.table')
    <x-slot name="title">bookshelves Book</x-slot>
    <div class="card mb-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm">Selamat {{ Auth()->user()->name }}! 🎉</h4>
                    <p class="mb-0">Kamu mempunyai {{ $books }} buku yang tersimpanr dalam
                        {{ $bookshelves->count() }} rak buku saat ini.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            @include('bookshelf.store')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Buku</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookshelves as $no => $bookshelf)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $bookshelf->name }}</td>
                                <td>{{ $bookshelf->books->count() }} Buku</td>
                                <td>
                                    <div class="d-flex gap-3 align-items-center justify-content-center">
                                        @include('bookshelf.update')
                                        @include('bookshelf.destroy')
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layout>
