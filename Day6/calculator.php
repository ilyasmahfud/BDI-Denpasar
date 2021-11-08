<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container" style="margin-top: 50px" align="center">



        <form method="post" action="calculator.php">
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            <select name="operation">
                <option value="ditambah">penjumlahan</option>
                <option value="dikurangi">pengurangan</option>
                <option value="dikali">perkalian</option>
                <option value="bagi">pembagian</option>
            </select>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
        </form>

        <div class="container">
            <?php
    
            // If the submit button has been pressed
            if(isset($_POST['submit'])){
                // Check number values
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                function operasiAritmatika($number1,$number2 ){
                    if($number1 && $number2){
                        // Calculate total
                        if($_POST['operation'] == 'ditambah'){
                            $total = $number1 + $number2; 
                            }
                        if($_POST['operation'] == 'dikurangi'){
                            $total = $number1 - $number2; 
                            }
                        if($_POST['operation'] == 'dikali'){
                            $total = $number1 * $number2; 
                            }
                        if($_POST['operation'] == 'bagi'){
                            $total = $number1 / $number2; 
                            }
                        
                        echo "<h1>{$number1} {$_POST['operation']} {$number2} = {$total}</h1>";    
                    } else {
                        echo '<h1>angkanya mana Heyy !!</h1>';
                    }
                }
                operasiAritmatika($number1, $number2);
            }
            ?>

        </div>

    </div>

</body>

</html>