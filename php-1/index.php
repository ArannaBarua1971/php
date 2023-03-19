<?php

    // ** is alphabet or number checker
    function dtcheck($value){
        if(is_numeric($value)){
            echo "$value is a number";
        }
        elseif(ctype_alpha($value)){
            echo "$value is a character or string";
        }
        else {
            echo "$value is not a character and number";
        }
    }

    dtcheck("^");
    echo "<br>";

    // ** find greater number in 4 digit;
    function greater($num1,$num2,$num3,$num4){
        if($num1>$num2 && $num1>$num3 && $num1>$num4) echo "$num1 is greater than of all";
        else if($num2>$num3 && $num2>$num4) echo "$num2 is greater than of all";
        else if($num3>$num4) echo "$num3 is greater than of all";
        else echo "$num4 is greater than of all";
    }
    greater(453412341234,2345643,3454,33241343);
    echo "<br>";

    // ** checking positive ,negative and nutral or odd and even
    function numberchecker($num){
        if($num>0){
            echo "$num is a positive number <br>";

            if($num%2==0) echo "$num is a even number <br>";
            else echo "$num is a odd number <br>";
        }
        else if($num<0){
            echo "$num is a negative number <br>";
        }
        else {
            echo "$num is nutral number <br>";
        }
    }
    numberchecker(0);
    echo "<br>";

    // ** authentication system
    function authorize($name,$age,$gender,$position){
        if(ctype_alpha($name)){
            echo "your name is $name <br>";
            if(is_numeric($age)) {
                echo "your age is $age <br>";
                if(ctype_alpha($gender)) {
                    echo "your gender is $gender <br>";
                    if(ctype_alpha($position)) {
                        echo "your position is $position <br>";
                    }
                    else echo "you give wrong input in position <br>";
                }
                else echo "you give wrong input in gender <br>";
            }
            else echo "you give wrong input in age <br>";
        }
        else echo "you give wrong input in name <br>";
    }
    authorize("aranna","20","male","cenior programmer");//** problem 01 */
    echo "<br>";


    // loan system
    function loanPayment_PerMonth($totalLoan,$duration,$interest){
        $payment_permonth=$totalLoan/$duration;
        $interest/=100;
        $interest_permonth=$interest/$duration;
        $interest_amount =$payment_permonth * $interest_permonth;
        $totalamount_permonth=$interest_amount+$payment_permonth;

        return ceil($totalamount_permonth);
    }

    function ableToloan($income,$consume,$minimumSavings){
        $saving=$income-$consume;

        echo $minimumSavings<=$saving ? "you are eligible to get loan":"you are not eligible to get loan";
    }

    ableToloan(40000,20000,loanPayment_PerMonth(100000,12,10));
    echo "<br>";
    echo "<br>";

    // bill system
    function gift($totalprize)
    {
        if($totalprize>999){
            echo "You got a gift sir ,CONGRATULATIONS!!!!";
        }
        else echo "NO gift Sir.";
    }
    gift(6783);
