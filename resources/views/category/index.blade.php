<x-auth.layout>
    @include('layouts.table')
    <x-slot name="title">Categories Book</x-slot>
    <div class="card">
        <div class="card-header">
            @include('category.store')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $no => $category)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="d-flex gap-3 align-items-center justify-content-center">
                                        @include('category.update')
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                                Hapus</button>
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
