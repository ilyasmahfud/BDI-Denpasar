5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>

<head>
    <title>Simple Calculator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container" style="margin-top: 50px">


        <?php
 
        // If the submit button has been pressed
        if(isset($_POST['submit'])){
            // Check number values
            if(is_numeric($_POST['number1']) && is_numeric($_POST['number2'])){
                // Calculate total
                if($_POST['operation'] == 'penjumlahan'){
                    $total = $_POST['number1'] + $_POST['number2']; 
                    }
                if($_POST['operation'] == 'minus'){
                    $total = $_POST['number1'] - $_POST['number2']; 
                    }
                if($_POST['operation'] == 'multiply'){
                    $total = $_POST['number1'] * $_POST['number2']; 
                    }
                if($_POST['operation'] == 'divided by'){
                    $total = $_POST['number1'] / $_POST['number2']; 
                    }
                
                echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";    
            } else {
                echo 'Numeric values are required';
            }
        }
        ?>

        <form method="post" action="calculator.php">
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            <select name="operation">
                <option value="penjumlahan">penjumlahan</option>
                <option value="minus">Minus</option>
                <option value="multiply">Multiply</option>
                <option value="divided by">Devide</option>
            </select>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
        </form>

    </div>

</body>

</html>