<form action="{{ route('penalties.store') }}" method="post">
    @csrf
    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
    <input type="hidden" name="amount" value="{{ $amount }}">
    <input type="hidden" name="lates_day" value="{{ $lates_day }}">
    <input type="hidden" name="payment_date" value="{{ now() }}">
    <button type="submit" class="btn btn-primary w-100">Bayar</button>
</form>
