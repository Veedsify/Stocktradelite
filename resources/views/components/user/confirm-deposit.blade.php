{{-- MODALS --}}
<div class="confirm-modal">
    <div class="bg-white p-5 rounded-2">
        <div class="mb-4 modal-header">
            <h3 class="fw-bold">
                Confirm Deposit
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="card-subtitle mb-4">
                After depositing, click the button below to confirm your deposit
            </p>
            <form>
                <div class="mb-3">
                    <input type="file" class="form-control border border-primary" placeholder="Address">
                    <label>
                        <img src="" id="" alt="" class="img-fluid">
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control border border-primary" placeholder="Email">
                    <label><i class="ti ti-currency-dollar me-2 fs-4 text-primary"></i><span
                            class="border-start border-primary ps-3">
                            Transaction Ref</span></label>
                    <small>
                        Paste the transaction reference here
                    </small>
                </div>
                <div class="d-md-flex align-items-center">
                    <div class="mt-3 mt-md-0 ms-auto">
                        <button type="submit" class="btn btn-primary  rounded-pill px-4">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-send me-2 fs-4"></i>
                                Submit Confirmation
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>