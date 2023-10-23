<x-auth.layout>
    <x-slot name="title">Penalties</x-slot>
    @include('layouts.table')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Jumlah Denda</th>
                            <th>Jumlah Hari</th>
                            <th>Tanggal Pembayaran</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penalties as $no => $penalty)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $penalty->transaction->user->name }}</td>
                                <td>Rp. {{ $penalty->amount }}</td>
                                <td>{{ $penalty->lates_day }} Hari</td>
                                <td>{{ $penalty->payment_date }}</td>
                                <td>@include('penalty.detail')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layout>
