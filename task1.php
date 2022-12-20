<?php


//task 1.1
//function rec_count($num)
//{
//    if($num < 10)
//        return ($num < 5);
//    else
//        return ($num % 10 < 5) + rec_count($num/10);
//}
//echo rec_count(124990);





//task 1.2

//function is_asc($num)
//{
//    $asc_prev = 9;
//    while($num!=0){
//        if (($num % 10)< $asc_prev){
//            $asc_prev = $num % 10;
//            $num = $num/10;
//        }
//        else
//            break;
//    }
//
//        if($num<1)
//            return true;
//        else
//            return false;
//}
//echo var_dump(is_asc(123455));




// task 1.3

//function is_asc($a)
//{
//    $asc_prev = 9;
//    while ($a != 0) {
//        if (($a % 10) < $asc_prev) {
//            $asc_prev = $a % 10;
//            $a = $a / 10;
//        } else
//            break;
//    }
//    if($a<1)
//            return true;
//        else
//            return false;
//}
//
//function is_desc($a)
//{
//
//    $desc_prev = 0;
//    while($a!=0){
//        if (($a % 10) > $desc_prev){
//            $desc_prev = $a % 10;
//            $a = $a/10;
//        }
//        else
//            break;
//    }
//    if($a < 1)
//        return true;
//    else
//        return false;
//}
//
//function find_numbers()
//{
//    $all_numbers = [];
//    $max = 9999;
//    while ($max>1233){
//        if($max % 2==0 && (is_desc($max) || is_asc($max)))
//            $all_numbers[] =  $max;
//        $max--;
//    }
//
//    return $all_numbers;
//
//}
//
//echo var_dump(find_numbers());




// task 1.4

//function find_numbers()
//{
//    $all_numbers = [];
//    $max = 9999;
//    while ($max > 2000){
//        $n=$max%10;
//
//        if(($n==0 || $n==2 || $n==3 || $n == 7 ))
//        {
//            $k=$max/10%10;
//
//            if(($k==0 || $k==2 || $k==3 || $k == 7 ) && $k!=$n){
//                $t=$max/100%10;
//
//                if(($t==0 || $t==2 || $t==3 || $t == 7 ) && $t!=$n && $t!=$k){
//                    $d=$max/1000%10;
//
//                    if(($d==0 || $d==2 || $d==3 || $d == 7 ) && $d!=$n && $d!=$k && $d!=$t){
//
//                        $all_numbers[] =  $max;
//                    }
//                }
//            }
//        }
//
//        $max--;
//    }
//
//    return $all_numbers;
//
//}
//echo  var_dump(find_numbers());

//task 1.5

//function is_symmetry($num){
//    $tmp = $num;
//    $length = 0;
//    $is_symmetry = false;
//    while ($tmp != 0){
//        $tmp = floor($tmp / 10);
//        $length++;
//    }
//    if($length % 2 == 0){
//        $tmp = $num;
//        $reverse_num = 0;
//        while ($tmp != 0) {
//            $reverse_num = $reverse_num * 10;
//            $reverse_num = $reverse_num + $tmp % 10;
//            $tmp = floor($tmp / 10);
//        }
//        if($num == $reverse_num) {
//            $is_symmetry = true;
//        }
//    }
//
//    return $is_symmetry;
//}
//
//echo var_dump(is_symmetry(145541));


//task 1.6

//    function gcd($a, $b)
//{
//    while ($a!=0 && $b!=0){
//        if ($a > $b)
//           $a = $a % $b;
//        else
//        $b = $b % $a;
//
//    }
//  return $a + $b;
//}
//echo  gcd(1244,41244);

