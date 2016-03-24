<?php
if(!empty($_POST)){
    
    $sum = (int)$_POST['sum'];
    $firstPay = (int)$_POST['firstPay'];
    $credit  = (int)$_POST['credit'];
    
    if(101 <= $firstPay || 0 > $firstPay){
        die("<b>Взнос в % </b>");
    }
    if(8 <= $credit || 0 >= $credit){
        die("<b>Укажите срок</b>");
    }
    switch ($credit) {
        case 1:
            $x = 9;
            break;
        case 2:
            $x = 11;
            break;
        case 3:
            $x = 13;
            break;
        case 4:
            $x = 15;
            break;
        case 5:
            $x = 17;
            break;
        case 6:
            $x = 19;
            break;
        case 7:
            $x = 21;
            break;
    }
    $last = $sum - (($sum * $firstPay)/100);
    $percent = (($last * $x) /100) * $credit ;
    $total = $last + $percent;
    $monthPay = $total / ($credit * 12);
    $monthPay = (int)$monthPay;
    $month = 0;

    echo "<tr><th> Месяц </th><th> Взнос </th><th> Остаток </th></tr>";
    
    while($monthPay < $total){
        $month++;
        $total = $total - $monthPay;
        echo  "<tr><td>" . $month . "</td><td>" . $monthPay . " грн</td><td>" .$total . " грн</td></tr>";
    }
}















