      <div class="deposit-modal" data-btc="{{$wallet->btc_address}}" data-eth={{$wallet->eth_address}}
        >
        <div class="bg-white p-5 rounded-2">
          <div class="mb-4 modal-header">
            <h3 class="fw-bold">
              Deposit Ethereum
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>
              Deposit to the address below
            </h5>
            <p class="card-subtitle mb-4">
              After depositing, click the button below to confirm your deposit
            </p>
            <img width="200" src="{{asset('user-assets/images/png/ethereum.png')}}" alt="Ethereum" class="d-block mx-auto">
            <form>
              <div class=" mb-5">
                <div class="d-flex align-items-center">
                  <input type="text" class="form-control form-control-lg border py-3 border-primary" placeholder="Wallet Address">
                  <button type="button" class="btn btn-primary ms-2 h-100 px-3 py-3">
                    <div class="d-flex align-items-center">
                      <i class="ti ti-clipboard me-2 fs-4"></i>
                      Copy
                    </div>
                </div>
              </div>
              <div class="form-floating mb-5">
                <input type="email" class="form-control border border-primary" placeholder="Email">
                <label><i class="ti ti-currency-dollar me-2 fs-4 text-primary"></i><span
                    class="border-start border-primary ps-3">
                    Amount</span></label>
              </div>
              <div class="d-md-flex align-items-center">
                <div class="mt-3 mt-md-0 ms-auto">
                  <button type="submit" class="btn btn-primary  rounded-pill px-4">
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