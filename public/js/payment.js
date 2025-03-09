function calculatePrice(){
    let subTotal = 0;
    let quantity = parseInt(document.getElementById('quantity').textContent);
    let bookPrice = parseInt(document.getElementById('bookPrice').value);


    const tourPrice = bookPrice;
    subTotal = tourPrice * quantity;
    // const totalGrandTotal = subTotal 

    const btnAddQty = document.getElementById('add-quantity');
    const btnRemoveQty = document.getElementById('remove-quantity');

    document.getElementById('quantity').textContent = quantity;


    document.getElementById('grandtotal').textContent = 'Rp ' +subTotal.toLocaleString('id');

    document.getElementById('total_quantity').textContent = quantity;

    // document.getElementById('grandtotal').textContent = 'Rp '+totalGrandTotal.toLocaleString('id');

}

function addQuantity() {
    console.log('hello')
    let quantityElement = document.getElementById('quantity');
    let quantityInput = document.getElementById('quantity_input');
    let quantity = parseInt(quantityElement.textContent);
    quantity++;
    quantityInput.value = quantity;  // Update hidden input
    quantityElement.textContent = quantity;
    calculatePrice();
}

function removeQuantity() {
    let quantityInput = document.getElementById('quantity_input');
    let quantityElement = document.getElementById('quantity');
    let quantity = parseInt(quantityElement.textContent);
    if (quantity > 1) { // Prevents quantity from going below 1
        quantity--;
        quantityInput.value = quantity;  // Update hidden input
        quantityElement.textContent = quantity;
        calculatePrice();
    }
}

document.addEventListener('DOMContentLoaded', function(){
    console.log('hello')

    document.getElementById('add-quantity').addEventListener('click', addQuantity);
    document.getElementById('remove-quantity').addEventListener('click', removeQuantity);
    calculatePrice(); // Initial calculation
});