<!-- Modal trigger button -->
<button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal"
    data-bs-target="#edit-{{ Str::slug($bookshelf->name) }}">
    Edit
</button>

<!-- Modal Body -->
<div class="modal fade" id="edit-{{ Str::slug($bookshelf->name) }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content text-start">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Kategori Buku <span
                        class="text-primary">{{ $bookshelf->name }}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('bookshelves.update', $bookshelf->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $bookshelf->name }}" aria-describedby="helpId" placeholder="Enter name category">
                        @error('name')
                            <small class="fw-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
