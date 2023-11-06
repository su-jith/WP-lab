<?php
// Initialize the total variable
$total = 0;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the first row of data
    $item1 = $_POST["c1r2"];
    $qty1 = $_POST["c1r3"];
    $price1 = $_POST["c1r4"];
    $total += $qty1 * $price1;

    // Process the second row of data
    $item2 = $_POST["c2r2"];
    $qty2 = $_POST["c2r3"];
    $price2 = $_POST["c2r4"];
    $total += $qty2 * $price2;
}
?>


<?php
if (isset($_POST['submit'])) {
    // Retrieve item data from the form
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $quantity1 = $_POST["quantity1"];
    $quantity2 = $_POST["quantity2"];
    $price1 = $_POST["price1"];
    $price2 = $_POST["price2"];

    // Calculate the total price for each item
    $total1 = $quantity1 * $price1;
    $total2 = $quantity2 * $price2;

    // Calculate the grand total
    $grandTotal = $total1 + $total2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Billing</title>
</head>
<body>
    <h3>Supermarket Billing</h3>
    <form method="post">
        <label for="item1">Item 1:</label>
        <input type="text" name="item1">
        <label for="quantity1">Quantity:</label>
        <input type="text" name="quantity1">
        <label for="price1">Price:</label>
        <input type="text" name="price1"><br>

        <label for="item2">Item 2:</label>
        <input type="text" name="item2">
        <label for="quantity2">Quantity:</label>
        <input type="text" name="quantity2">
        <label for="price2">Price:</label>
        <input type="text" name="price2"><br>

        <input type="submit" name="submit" value="Calculate Total">
    </form>

    <?php
    if (isset($grandTotal)) {
        echo "<h4>Bill Details</h4>";
        echo "Item 1 Total: $" . number_format($total1, 2) . "<br>";
        echo "Item 2 Total: $" . number_format($total2, 2) . "<br>";
        echo "Grand Total: $" . number_format($grandTotal, 2);
    }
    ?>
</body>
</html>