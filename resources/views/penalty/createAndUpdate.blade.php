<form action="{{ route('penalties.createAndUpdate') }}" method="post">
    @csrf
    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
    <input type="hidden" name="amount" value="{{ $amount }}">
    <input type="hidden" name="lates_day" value="{{ $lates_day }}">
    <input type="hidden" name="payment_date" value="{{ now() }}">
    <input type="hidden" name="borrow_date" value="{{ $transaction->borrow_date }}">
    <input type="hidden" name="return_date" value="{{ $transaction->return_date }}">
    <button type="submit" class="btn btn-primary w-100 ">Bayar dan Pinjam Lagi</button>
</form>
