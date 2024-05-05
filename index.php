<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
</head>
<body>
    <h2>Currency Converter</h2>
    <form action="convert.php" method="post">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required><br><br>
        
        <label for="from">From:</label>
        <select id="from" name="from_currency" required>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <!-- Add more currencies as needed -->
        </select><br><br>
        
        <label for="to">To:</label>
        <select id="to" name="to_currency" required>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <!-- Add more currencies as needed -->
        </select><br><br>
        
        <button type="submit">Convert</button>
    </form>
</body>
</html>
