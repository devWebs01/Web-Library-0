<x-guest.layout>
    <x-slot name="title">Book {{ $book->title }}</x-slot>
    <div class="card m-5 mt-1 pb-5 shadow-none">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-center text-danger">
                    {{ $error }}
                </p>
            @endforeach
        @endif
        <h5 class="fw-bold text-center mb-4 text-black">{{ $book->title }}</h5>
        <div class="row g-3">
            <div class="col-md">
                <div class="card-body border rounded">
                    <div class="cursor-pointer row">
                        <img src="{{ Storage::url($book->image) }}" class="img rounded" alt="">
                        @include('catalog.store')
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card-body border rounded">
                    <div class="justify-content-between">
                        <h5>Tentang Buku</h5>
                    </div>
                    <div class="d-flex flex-wrap mb-0">
                        <div class="me-2">
                            <p class="text-wrap"><i class="mdi mdi-format-title mdi-24px me-2"></i>Judul:
                                {{ $book->title }}</p>
                            <p class="text-wrap"><i class="mdi mdi-identifier mdi-24px me-2"></i>ISBN:
                                {{ $book->isbn }}</p>
                            <p class="text-wrap"><i class="mdi mdi-shape mdi-24px me-2"></i>Kategori:
                                {{ $book->category->name }}</p>
                            <p class="text-wrap"><i class="mdi mdi-counter mdi-24px me-2"></i>Jumlah Buku:
                                {{ $book->book_count }}</p>
                        </div>
                        <div>
                            <p class="text-wrap"><i class="mdi mdi-face-man mdi-24px me-2"></i>Penulis:
                                {{ $book->author }}</p>
                            <p class="text-wrap"><i class="mdi mdi-clipboard-text-clock mdi-24px me-2"></i>Tahun
                                Terbit:
                                {{ $book->year_published }}</p>
                            <p class="text-wrap"><i class="mdi mdi-domain mdi-24px me-2"></i>Penerbit:
                                {{ $book->publisher }}</p>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mb-2">Sinopsis</h5>
                    <p class="mb-0">{{ $book->synopsis }}</p>
                </div>
            </div>
        </div>
    </div>
</x-guest.layout>
