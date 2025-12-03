<!DOCTYPE html>
<html>
<head>
    <title>Program 12</title>
    <style>
        input {
            border: solid 2px;
            padding: 5px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h1>PHP – Calculate Electricity Bill</h1>

    <form method="post">
        <input type="number" width="100px" name="units" placeholder="Please enter no. of Units" />
        <input type="submit" name="unit-submit" value="Submit" />
    </form>

    <?php
    $result_str = "";

    if (isset($_POST['unit-submit'])) {

        $units = $_POST['units'];

        if (!empty($units)) {
            $result = calculate_bill($units);
            $result_str = "<h2>Total amount for $units units = ₹ $result</h2>";
            echo $result_str;
        }
    }

    function calculate_bill($units)
    {
        $unit_cost_first  = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third  = 5.20;
        $unit_cost_fourth = 6.50;

        if ($units <= 50) {
            $bill = $units * $unit_cost_first;
        } 
        elseif ($units <= 100) {
            $bill = (50 * $unit_cost_first) +
                    (($units - 50) * $unit_cost_second);
        } 
        elseif ($units <= 200) {
            $bill = (50 * $unit_cost_first) +
                    (50 * $unit_cost_second) +
                    (($units - 100) * $unit_cost_third);
        } 
        else {
            $bill = (50 * $unit_cost_first) +
                    (50 * $unit_cost_second) +
                    (100 * $unit_cost_third) +
                    (($units - 200) * $unit_cost_fourth);
        }

        return number_format((float)$bill, 2, '.', '');
    }
    ?>
</body>
</html>
