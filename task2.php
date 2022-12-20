<?php

//task 2.1
//function find_first_negative_num($arr)
//{
//    for($i=0;$i<count($arr);$i++){
//        if($arr[$i]<0)
//            return $i;
//    }
//
//}
//
//function sum_after_last_negative_num($arr)
//{
//    $sum = 0;
//    for($i=count($arr)-1;$i>=0;$i--){
//        if($arr[$i] % 2 !=0)
//        {
//            if($arr[$i]<0)
//                return $sum;
//          $sum+=$arr[$i];
//        }
//        if($arr[$i]<0)
//            return $sum;
//    }
//
//}
//
//echo sum_after_last_negative_num(array(-1,2,3,4,6,8,3,4,5));
//echo find_first_negative_num(array(1,2,3,4,-6,8,2,4,5));

//task 2.2

//function get_new_abs_arr($arr)
//{
//    $abs_array = [];
//
//    for($i=0;$i<count($arr);$i++){
//        $sum = 0;
//
//        for($t=0;$t<=$i;$t++){
//            $sum+=$arr[$t];
//
//        }
//
//
//        $abs_array[$i] =  $sum/($i+1);
//    }
//
//    return $abs_array;
//
//}
//
//echo  var_dump(get_new_abs_arr(array(1,2,3,4,5,6,7,8,9)));



//task 2.3

//function get_unique_nums($arr)
//{
//    $array_of_unique = [];
//    $is_unique = true;
//    for($i=0;$i<count($arr);$i++){
//
//        for($t=0;$t<count($array_of_unique);$t++){
//
//            if($array_of_unique[$t]==$arr[$i])
//                $is_unique = false;
//
//        }
//        if($is_unique)
//        $array_of_unique[] = $arr[$i];
//        $is_unique = true;
//    }
//
//    return $array_of_unique;
//
//}
//
//
//echo '<pre>';
//print_r (get_unique_nums(array(1,1,1,2,2,3,3,4,5,5,6,7,8,9,3,4,4,5,1,9,9,9,10)));
//echo '</pre>';


//task 2.4

//function get_arr($arr,$params)
//{
//
//
//    for($i=0;$i<count($params);$i++){
//        $new_arr = [];
//        $elem_on_place = false;
//        for($t=0;$t<count($arr);$t++){
//
//            if($params[$i]<=$arr[$t] && !$elem_on_place){
//                $new_arr[] = $params[$i];
//                $elem_on_place = true;
//            }
//            $new_arr[] = $arr[$t];
//
//        }
//        if(!$elem_on_place)
//            $new_arr[] = $params[$i];
//        $arr = $new_arr;
//    }
//
//    return $new_arr;
//
//}
//
//echo '<pre>';
//print_r (get_arr(array(1,2,3,5,7),array(10,4,6,8,9)));
//echo '<pre>';


//task 2.5

//function swap(&$arr, $index_one, $index_two)
//{
//    $temp = $arr[$index_one];
//    $arr[$index_one] = $arr[$index_two];
//    $arr[$index_two] = $temp;
//}
//
//
//function sort_mas($arr)
//{
//    $ind = 0;
//    for ($i=0; $i<count($arr); $i++)
//    {
//        if ($arr[$i]==0)
//        {
//            swap($arr,$i,$ind);
//            ++$ind;
//        }
//    }
//    for ($i=$ind; $i<count($arr); $i++)
//    {
//        if ($arr[$i]==2)
//        {
//            swap($arr,$i,$ind);
//            ++$ind;
//        }
//    }
//
//    return $arr;
//
//}
//
//echo '<pre>';
//print_r (sort_mas(array(1,2,1,2,0,0,2,1,2,0,0,0,1)));
//echo '<pre>';


//2.6

//function get_arr($arrA,$arrB)
//{
//
//
//    for($i=0;$i<count($arrB);$i++){
//        $arrC = [];
//        $elem_on_place = false;
//        for($t=0;$t<count($arrA);$t++){
//
//            if($arrB[$i]<=$arrA[$t] && !$elem_on_place){
//                $arrC[] = $arrB[$i];
//                $elem_on_place = true;
//            }
//            $arrC[] = $arrA[$t];
//
//        }
//        if(!$elem_on_place)
//            $arrC[] = $arrB[$i];
//        $arrA = $arrC;
//    }
//
//    return $arrC;
//
//}
//
//echo '<pre>';
//print_r (get_arr(array(1,2,3,5,7),array(1,2,3,6,8,9)));
//echo '<pre>';



