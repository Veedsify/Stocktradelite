<div class="deposit-modal" data-node="deposit_eth">
  <div class="bg-white p-5 rounded-2">
    <div class="mb-4 modal-header">
      <h3 class="fw-bold">Deposit Ethereum</h3>
      <button type="button" data-button="deposit_eth" class="btn-close"></button>
    </div>
    <div class="modal-body">
      <h5>Deposit to the address below</h5>
      <p class="card-subtitle mb-4">
        After depositing, click the button below to confirm your deposit
      </p>
      <img width="200" src="{{ asset('user-assets/images/png/ethereum.png') }}" alt="Ethereum" class="d-block mx-auto">
      <form action="{{ route('deposit.eth', [$action['action'] ?? "upgrade"]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="tier_id" value="{{$tier}}">
        <div class="mb-5">
          <div class="d-flex align-items-center">
            <input type="text" class="form-control form-control-lg border py-3 border-primary"
              placeholder="Wallet Address" value="{{ $wallet->eth_address ?? ""}}">
            <button type="button" class="btn btn-primary ms-2 h-100 px-3 py-3">
              <div class="d-flex align-items-center">
                <i class="ti ti-clipboard me-2 fs-4"></i>
                Copy
              </div>
            </button>
          </div>
        </div>
        <div class="form-floating mb-5">
          <input required type="number" name="amount" autocomplete="false" data-eth="amount" value="0"
            class="form-control border border-primary">
          <label>
            <i class="ti ti-currency-dollar me-2 fs-4 text-primary"></i>
            <span class="border-start border-primary ps-3">Amount</span>
          </label>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Upload Proof of Payment</label>
          <input required type="file" name="payment_proof" class="form-control border border-primary"
            placeholder="Proof Of Payment">
          <label>
            <img src="" id="" alt="" class="img-fluid">
          </label>
        </div>
        <div class="d-md-flex align-items-center">
          <div class="mt-3 mt-md-0 ms-auto">
            <button type="submit" class="btn btn-primary rounded-pill px-4" data-confirm="deposit_eth">
              <div class="d-flex align-items-center">
                <i class="ti ti-send me-2 fs-4"></i>
                Confirm Deposit
              </div>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>