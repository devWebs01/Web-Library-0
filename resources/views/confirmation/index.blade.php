<x-auth.layout>
    <x-slot name="title">Confirmation Account</x-slot>
    @include('layouts.table')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>nama lengkap</th>
                            <th>NIS/etc.</th>
                            <th>role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $no => $user)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->identify }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <div class="d-flex gap-3 justify-content-center">
                                        @include('confirmation.show')
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
