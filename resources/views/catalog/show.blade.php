<x-guest.layout>
    <x-slot name="title">Book {{ $book->title }}</x-slot>
    <div class="card m-5 mt-1 shadow-none">
        <u class="fw-bold text-center display-5 mb-4 text-black">{{ $book->title }}</u>
        <div class="row g-3">
            <div class="col-md">
                <div class="card-body">
                    <div class="cursor-pointer">
                        <img src="{{ Storage::url($book->image) }}" class="img-fluid rounded object-fit-cover"
                            width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card-body">
                    <div class="justify-content-between">
                        <h5>Tentang Buku</h5>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="me-5">
                            <p class="text-nowrap"><i class="mdi mdi-format-title mdi-24px me-2"></i>Judul:
                                {{ $book->title }}</p>
                            <p class="text-nowrap"><i class="mdi mdi-identifier mdi-24px me-2"></i>ISBN:
                                {{ $book->isbn }}</p>
                            <p class="text-nowrap"><i class="mdi mdi-shape mdi-24px me-2"></i>Kategori:
                                {{ $book->category->name }}</p>
                            <p class="text-nowrap"><i class="mdi mdi-counter mdi-24px me-2"></i>Jumlah Buku:
                                {{ $book->title }}</p>
                        </div>
                        <div>
                            <p class="text-nowrap"><i class="mdi mdi-face-man mdi-24px me-2"></i>Penulis:
                                {{ $book->author }}</p>
                            <p class="text-nowrap"><i class="mdi mdi-clipboard-text-clock mdi-24px me-2"></i>Tahun
                                Terbit:
                                {{ $book->year_published }}</p>
                            <p class="text-nowrap"><i class="mdi mdi-domain mdi-24px me-2"></i>Penerbit:
                                {{ $book->publisher }}</p>
                            <p class="text-nowrap"><i class="mdi mdi-bullseye  mdi-24px me-2"></i>Jumlah Buku:
                                {{ $book->book_count }}</p>
                        </div>
                    </div>
                    <hr class="my-4">
                    <h5 class="mb-2">Sinopsis</h5>
                    <p class="mb-0">{{ $book->synopsis }}</p>
                </div>
                <div class="card-footer">
                    @include('catalog.create')
                </div>
            </div>
        </div>
    </div>
</x-guest.layout>
