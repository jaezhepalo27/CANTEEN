<?php 
include 'header.php'; 
include 'menu.php'; 
?>

<h2>Place Your Order</h2>
<form method="POST" action="process.php">
    <label for="customer_name">Name</label>
    <input type="text" id="customer_name" name="customer_name" required>

    <label for="customer_type">Customer Type</label>
    <select id="customer_type" name="customer_type">
        <option value="student">Student</option>
        <option value="employee">Employee</option>
        <option value="guest">Guest</option>
    </select>

    <label for="product">Product</label>
    <select id="product" name="product">
        <option value="M1">Chicken Adobo Meal</option>
        <option value="M2">Pork Sisig Meal</option>
        <option value="M3">Vegetable Meal</option>
        <option value="D1">Bottled Water</option>
        <option value="D2">Iced Tea</option>
    </select>

    <label for="quantity">Quantity (1–10)</label>
    <input type="number" id="quantity" name="quantity" min="1" max="10" required>

    <label for="budget">Budget (PHP)</label>
    <input type="number" id="budget" name="budget" min="0" step="0.01" required>

    <button type="submit">Process Order</button>
</form>

<?php 
include 'footer.php'; 
?>
