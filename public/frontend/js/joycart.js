function calculateItemTotal() {
    let totalPrice = 0;
    let itemTable = document.querySelector('.item-table');
    let itemTableBody = itemTable.children[1];
    for(let i=0; i<itemTableBody.children.length; i++) {
        let unitPrice = parseFloat(itemTableBody.children[i].children[1].innerText);
        let quantity = parseFloat(itemTableBody.children[i].children[2].children[0].children[0].value);
        itemTableBody.children[i].children[3].innerText = unitPrice * quantity;
        totalPrice += (unitPrice * quantity);
    }
    let totalPriceShow = document.querySelector('.total-price');
    totalPriceShow.innerText = totalPrice;
}

calculateItemTotal();

const qtyInput = document.querySelectorAll('.user-input');
qtyInput.forEach(input => {
    input.addEventListener('change', () => {
        calculateItemTotal(input)
        console.log('change');
    })
})
