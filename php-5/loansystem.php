<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1{
            background:#8C7696;
            color:white;
            padding:10px;
        }
        h2{
            background:#AA4465;
            color:white;
            padding:10px;
        }
        h3{
            background:#FFA69E;
            color:white;
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="col-lg-5 mx-auto mt-3">
        <?php

            $array=$_GET;
            $income=$array['income'];
            $consume=$array['consume'];
            $totalLoan=$array['loan'];
            $duration=$array['duration'];
            $interest=$array['interest'];

            function loanPayment_PerMonth($totalLoan,$duration,$interest){
                $payment_permonth=$totalLoan/$duration;
                $interest/=100;
                $interest_permonth=$interest/$duration;
                $interest_amount =$payment_permonth * $interest_permonth;
                $totalamount_permonth=$interest_amount+$payment_permonth;
            
                return ceil($totalamount_permonth);
            }

            function ableToloan($income,$consume,$minimumSavings,$totalLoan){
                $saving=$income-$consume;
            
                if($minimumSavings <=$saving){
                    echo "<h1>you can get $totalLoan taka for loan.</h1>";
                }
                else if($saving<0){
                    echo "<h2>you can't get $totalLoan taka for loan.because you already take ". (-1*$saving). " taka loan from bank</h2>";
                }
                else{
                    echo "<h3>you can't get $totalLoan taka for loan.because you have only $saving taka in your bank</h3>";
                }
            }

            ableToloan($income,$consume,loanPayment_PerMonth($totalLoan,$duration,$interest),$totalLoan);
        ?>
    </div>
</body>
</html>