<!DOCTYPE html>
<html>
<head>
    <title>Number Operations</title>
</head>
<body>
    <h1>Number Operations</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = (int)$_POST["num"];
        $op = $_POST["op"];
        
        if ($op == "fib") {
            $fib = [0, 1];
            for ($i = 2; $i < $num; $i++) {
                $fib[] = $fib[$i-1] + $fib[$i-2];
            }
            echo "<p>Fibonacci: " . implode(" ", array_slice($fib, 0, $num)) . "</p>";
        } 
        elseif ($op == "sum") {
            echo "<p>Sum of digits: " . array_sum(str_split($num)) . "</p>";
        }
    }
    ?>
    
    <form method="post">
        Number: <input type="number" name="num" required><br><br>
        Operation:
        <select name="op" required>
            <option value="fib">Fibonacci Series</option>
            <option value="sum">Sum of Digits</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>