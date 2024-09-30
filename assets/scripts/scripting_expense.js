function calculateTotal() {
    let total = 0;
    const costs = document.querySelectorAll('.cost');
    costs.forEach(cost => {
        total += parseFloat(cost.value) || 0;
    });
    document.getElementById('total-cost').textContent = total.toFixed(2);
}