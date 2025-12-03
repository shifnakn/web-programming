<?php
if(isset($_POST['n1']) && isset($_POST['n2'])){
     $a = $_POST['n1'];
     $b = $_POST['n2'];
     
     $sum = $a + $b;
     
     echo "sum = $sum <br><br>";
}
?>

<form method="POST">
    Number 1: <input type="number" name="n1" required><br><br>
    Number 2: <input type="number" name="n2" required><br><br>
    <button type="submit">Add</button>
</form>    
           
