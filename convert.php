<?php
// Retrieve form data
$amount = $_POST['amount'];
$from_currency = $_POST['from_currency'];
$to_currency = $_POST['to_currency'];

// ExchangeRate-API URL
$url = "https://api.exchangerate-api.com/v4/latest/$from_currency";

// Fetch exchange rates from API
$response = file_get_contents($url);
$data = json_decode($response, true);

// Calculate converted amount
if ($data && isset($data['rates'][$to_currency])) {
    $rate = $data['rates'][$to_currency];
    $converted_amount = $amount * $rate;

    // Display result
    echo "<h2>Conversion Result</h2>";
    echo "<p>$amount $from_currency = $converted_amount $to_currency</p>";
} else {
    echo "<p>Unable to fetch exchange rates. Please try again later.</p>";
}
?>
<p><a href="index.php">Back to Converter</a></p>
