<div>
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
        <div class="card-title mb-0 me-1">
            <h5 class="mb-1">Katalog Buku</h5>
            <p class="mb-0">Total {{ $books->count() }} keseluruhan buku yang tersedia</p>
        </div>
        <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
            <div class="position-relative">
                <select class="form-select" wire:model="category_id" name="" id="">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ Str::limit($category->name, 35, '...') }}</option>
                    @endforeach
                </select>
            </div>

            <label class="switch">
                <input wire:model="search" type="text" class="form-control" name="" id=""
                    aria-describedby="helpId" placeholder="Masukkan judul buku ...">
            </label>
        </div>
    </div>
    <div class="card-body">
        <h5 class="mb-3 text-center fw-bold text-primary">
            <i wire:loading class="mdi mdi-loading mdi-spin mdi-36px text-primary"></i>
            {{ $search }}
        </h5>
        <div class="row gy-4 mb-4">
            @foreach ($books as $book)
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow-none border p-2 h-100">
                        <div class="rounded-2 text-center mb-3">
                            <a href="{{ route('catalog.show', $book->id) }}">
                                <img class="img" style="object-fit: cover" src="{{ Storage::url($book->image) }}"
                                    width="100%" height="200px" alt="Book Cover">
                            </a>
                        </div>
                        <div class="card-body p-3 pt-2">
                            <div class="align-items-center mb-3 ">
                                <span
                                    class="badge rounded-pill bg-label-primary text-wrap">{{ Str::limit($book->category->name, 30, '...') }}</span>
                            </div>
                            <a href="{{ route('catalog.show', $book->id) }}" class="h5">{{ $book->title }}</a>
                            <p class="mt-2">{{ Str::limit($book->synopsis, 50, '...') }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <div
                                class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap">
                                <a class="w-100 btn btn-outline-primary d-flex align-items-center waves-effect"
                                    href="{{ route('catalog.show', $book->id) }}">
                                    <span class="me-1">Continue</span><i
                                        class="mdi mdi-arrow-right lh-1 scaleX-n1-rtl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
