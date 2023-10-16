<!-- Modal trigger button -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
    Pinjam Buku
</button>

<!-- Modal Body -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="borrow_date" class="form-label">TanggaL Mulai</label>
                                <input type="date" class="form-control" value="{{ $borrow_date }}"
                                    name="borrow_date" id="borrow_date" aria-describedby="helpId"
                                    placeholder="borrow_date">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="return_date" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" value="{{ $return_date }}"
                                    name="return_date" id="return_date" aria-describedby="helpId"
                                    placeholder="return_date">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>
