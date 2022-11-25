init();

function init() {
    calculateTotalPrice();
}

const removeBtn = document.querySelectorAll('.remove-btn');
removeBtn.forEach(btn => {
    btn.addEventListener('click', function () {
        this.parentElement.parentElement.remove()
        calculateTotalPrice();
    })
})

const qtyInput = document.querySelectorAll('.qty-input');
qtyInput.forEach(input => {
    input.addEventListener('change', () => {
        calculateItemTotal(input)
    })
})

function calculateItemTotal(input) {
    const qty = input.value;
    const unitPrice = parseFloat(input.parentElement.previousElementSibling.innerText)
    const itemTotalPrice = qty * unitPrice;
    input.parentElement.nextElementSibling.innerText = itemTotalPrice;
    calculateTotalPrice();
}

function calculateTotalPrice() {
    const cartRows = document.querySelector('#cartItems').children;
    let totalPrice = 0;
    for (i = 0; i < cartRows.length; i++) {
        totalPrice += parseFloat(cartRows[i].children[4].innerText)
    }
    document.getElementById('totalPrice').innerText = totalPrice
}

// async function getCartItems() {
//     const fetchCartItems = await fetch('http://127.0.0.1:8000/api/cart')
//     return fetchCartItems.json()
// }

// getCartItems().then(result => {
//     const tbody = document.getElementById('cartItems');
//     tbody.innerHTML = `${result.data.map(row => {
//         return `<tr>
//                     <td>1</td>
//                     <td>${row.title}</td>
//                     <td>${row.unitPrice}</td>
//                     <td><input type="number" value="1" class="qty-input" /></td>
//                     <td>100000</td>
//                     <td><button class="remove-btn">Remove</button></td>
//                 </tr>`
//     }).join(" ")}`
//     init();
// })
