document.addEventListener("DOMContentLoaded", function () {
    // Assuming your backend has API routes for the total and year expenses
    fetch('/api/total-expense')
        .then(response => response.json())
        .then(data => {
            document.getElementById('total-expense').textContent = data.totalExpense;
        });

    fetch('/api/year-expense')
        .then(response => response.json())
        .then(data => {
            document.getElementById('year-expense').textContent = data.yearExpense;
        });
});