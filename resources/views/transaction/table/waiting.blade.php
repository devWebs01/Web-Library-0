<x-auth.layout>
    <x-slot name="title">Transaction Library</x-slot>
    @include('layouts.table')

    <div class="card mb-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm">Hello {{ Auth()->user()->name }}!🎉</h4>
                    <p class="mb-0">Saat ini ada {{ $waiting->count() }} booking buku menunggu konfirmasi</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">
            Konfirmasi Booking Buku
        </h5>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>nama lengkap</th>
                            <th>status</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($waiting as $no => $item)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $item->user->name ?? '-' }}</td>
                                <td><span class="badge bg-success">{{ $item->status }}</span></td>
                                <td>{{ $item->borrow_date ?? '-' }}</td>
                                <td>{{ $item->return_date ?? '-' }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('transactions.show', $item->id) }}" role="button">lihat</a>
                                        <form action="{{ route('transactions.reject', $item->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                        </form>
                                        <form action="{{ route('transactions.confirmation', $item->id) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success btn-sm">Konfirmasi</button>
                                        </form>
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
