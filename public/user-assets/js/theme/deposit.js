const confirmDepositForm = document.getElementById('confirm_deposit_form');
const depositBtc = document.querySelector('[data-node="deposit_btc"]')
const depositEth = document.querySelector('[data-node="deposit_eth"]')
const closeEthModal = document.querySelector('[data-button="deposit_eth"]');
const closeBtcModal = document.querySelector('[data-button="deposit_btc"]');
const closeConfirmModal = document.querySelector('[data-button="confirm_deposit"]');
const confirmBtcButton = document.querySelector('[data-confirm="deposit_btc"]');
const confirmEthButton = document.querySelector('[data-confirm="deposit_eth"]');
const confirmModal = document.querySelector('[data-node="confirm_deposit"]');
const btcAmount = document.querySelector('[data-btc="amount"]');
const ethAmount = document.querySelector('[data-eth="amount"]');
let setBtc = 0;
let setEth = 0;


//****************************
function openModal(data) {
    if (data.node === 'deposit_btc') {
        depositBtc.classList.add('active')
        depositEth.classList.remove('active')
    }
    if (data.node === 'deposit_eth') {
        depositEth.classList.add('active')
        depositBtc.classList.remove('active')
    }
}
// CLOSE MODAL

closeEthModal?.addEventListener('click', () => {
    document.querySelector('[data-node="deposit_eth"]').classList.remove('active');
});

closeBtcModal?.addEventListener('click', () => {
    document.querySelector('[data-node="deposit_btc"]').classList.remove('active');
});

closeConfirmModal?.addEventListener('click', () => {
    document.querySelector('[data-node="confirm_deposit"]').classList.remove('active');
})

// CONFRIM DEPOSIT
confirmBtcButton?.addEventListener('click', (event) => {
    event.preventDefault();
    const setBtcValue = btcAmount.value;
    const minBtc = parseInt(tierData.min);
    const maxBtc = parseInt(tierData.max);

    if (setBtcValue > maxBtc || setBtcValue < minBtc) {
        return swal({
            title: "Invalid Amount",
            text: `Amount should be between ${minBtc} and ${maxBtc}`,
            icon: "error",
        });
    }

    const fileInput = event.target.closest('form').querySelector('input[type="file"]');
    if (fileInput.files.length === 0) {
        return swal({
            title: "Invalid File",
            text: "Please upload a valid proof of payment",
            icon: "error",
        });
    }

    event.target.closest('form').submit();

});

confirmEthButton?.addEventListener('click', (e) => {
    e.preventDefault();
    const setEthValue = ethAmount.value;
    const minEth = parseInt(tierData.min);
    const maxEth = parseInt(tierData.max);

    if (setEthValue > maxEth || setEthValue < minEth) {
        return swal({
            title: "Invalid Amount",
            text: `Amount should be between ${minEth} and ${maxEth}`,
            icon: "error",
        });
    }

    const fileInput = e.target.closest('form').querySelector('input[type="file"]');
    if (fileInput.files.length === 0) {
        return swal({
            title: "Invalid File",
            text: "Please upload a valid proof of payment",
            icon: "error",
        });
    }
    e.target.closest('form').submit();

});


//****************************
confirmDepositForm?.addEventListener('submit', function (e) {
    e.preventDefault();
    if ((parseInt(setBtc > parseInt(tierData.max))) || (parseInt(setBtc) < parseInt(tierData.min))) {
        return swal({
            title: "Invalid Amount",
            text: `Amount should be between ${parseInt(tierData.min)} and ${parseInt(tierData.max)}`,
            icon: "error",
        })
    }
    if ((parseInt(setEth > parseInt(tierData.max))) || (parseInt(setEth) < parseInt(tierData.min))) {
        return swal({
            title: "Invalid Amount",
            text: `Amount should be between ${parseInt(tierData.min)} and ${parseInt(tierData.max)}`,
            icon: "error",
        })
    }
    swal({
        title: "Are you sure?",
        text: "Once confirmed, the deposit will be processed, please make sure the transaction ref is correct.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willConfirm) => {
        if (willConfirm) {
            this.submit();
        }
    });
})
