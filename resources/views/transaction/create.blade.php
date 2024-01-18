<x-auth.layout>
    <x-slot name="title">Transaction Library</x-slot>
    @include('layouts.bs-select')

    <div class="card mb-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm">Hello {{ Auth()->user()->name }}!🎉</h4>
                    <p class="mb-0">Saat ini ada {{ $walking->count() }} transaksi peminjaman buku.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <h5 class="card-header pb-0">
            Tambah Peminjaman Buku
        </h5>
        <div class="card-body">
            @include('transaction.store')
        </div>
    </div>
</x-auth.layout>
