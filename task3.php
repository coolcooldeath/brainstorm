<?php
//3.1


//$arr = array(
//    0 => array("1","3","9",),
//    1 => array("25","2","6"),
//    2 => array("4","1","7")
//);
//
//
//function get_diagonal_sum($arr){
//    $sum = 0 ;
//    for ($i = 0; $i < count($arr); ++$i) {
//        $sum += $arr[$i][$i];
//    }
//    return $sum;
//}
//
//function get_sum_upper_diagonal($arr){
//    $sum = 0 ;
//    for ($i = 0; $i < count($arr) - 1; $i++)
//   for ($j = $i + 1; $j < count($arr); $j++)
//       $sum += $arr[$i][$j];
//    return $sum;
//}
//
//
//function get_sum_under_diagonal($arr){
//    $sum = 0 ;
//    for ($i = 0; $i < count($arr); $i++)
//        for ($j = 0; $j < $i; $j++)
//            $sum += $arr[$i][$j];
//    return $sum;
//}
//
//echo '<pre>';
//print_r (get_sum_under_diagonal($arr));
//echo '<pre>';


//3.2

//$arr = array(
//    0 => array("1","3","-9","4","1","1"),
//    1 => array("3","2","6","1","2","1","1"),
//    2 => array("-4","1","-7","-1","-1","-1","1","-1","1","1"),
//    3 => array("5","6","10")
//);
//
//function get_sum_average($arr)
//{
//    $min_sum = 0;
//    $count_of_str;
//    for ($j = 0; $j < count($arr[0]); $j++)
//        if($arr[0][$j]>0)
//            $min_sum += $arr[0][$j];
//    $min_average = $min_sum/ count($arr[0]);
//    $count_of_str = 0;
//
//    for ($i = 0; $i < count($arr); $i++){
//        $sum = 0;
//        for ($j = 0; $j < count($arr[$i]); $j++)
//            if($arr[$i][$j]>0)
//            $sum += $arr[$i][$j];
//        if($min_average>$sum/count($arr[$i])){
//            $count_of_str = $i;
//            $min_average = $sum/count($arr[$i]);
//        }
//
////    echo $min_average . "\n";
//    }
//
//    return "Наименьшее среднее - " . $min_average . " строка номер  " . $count_of_str ."\n";
//}
//
//echo get_sum_average($arr);


//3.3


//function is_sorted($arr, $comparator){
//
//    $answer = true;
//    foreach ($arr as $key => $current) {
//        if(!isset($arr[$key + 1]))
//            continue;
//
//        $next = $arr[$key + 1];
//
//        $answer = $answer && $comparator($current, $next);
//    }
//
//    return $answer;
//}
//
//$arr = array(
//    0 => array("5","22","10"),
//    1 => array("30","5","4"),
//    2 => array("2","6","10")
//);
//
//function get_min_max($arr)
//{
//    $min = PHP_INT_MAX;
//    $max = -PHP_INT_MAX;
//    $asc_comparator = function($current, $next) {
//        return $current < $next;
//    };
//    $desc_comparator = function($current, $next) {
//        return $current > $next;
//    };
//    for ($i = 0; $i < count($arr); $i++){
//
//        for ($j = 0; $j < count($arr[$i]); $j++)
//            if(is_sorted($arr[$i],$asc_comparator)||is_sorted($arr[$i],$desc_comparator)){
//               if($max<$arr[$i][$j])
//                   $max= $arr[$i][$j];
//               if($min>$arr[$i][$j])
//                   $min=$arr[$i][$j];
//            }
//
////    echo $min_average . "\n";
//    }
//
//    return "Наименьшее  - " . $min . " наибольшее  " . $max ."\n";
//}
//
//echo get_min_max($arr);



//3.4


//$arr = array(
//    0 => array("5","22","10"),
//    1 => array("30","5","4"),
//    2 => array("30","85","1019"),
//    3 => array("2","6","10")
//);
//
//function is_0138($num){
//    while($num!=0){
//        if (($num % 10)==0||($num % 10)==1||($num % 10)==3||($num % 10)==8)
//            $num = $num/10;
//
//        else
//            return false;
//
//
//    }
//    return true;
//}
//function get_sum_0138($arr)
//{
//    $sum = 0;
//
//    for ($i = 0; $i < count($arr); $i++)
//        for ($j = 0; $j < count($arr[$i]); $j++){
//            if(is_0138($arr[$i][$j]))
//                $sum+=$arr[$i][$j];
//
//    }
//
//    return "Сумма - " . $sum;
//}
//
//echo get_sum_0138($arr);


//3.5


//$arr = array(
//    0 => array("5","22","10"),
//    1 => array("30","6","4"),
//    2 => array("30","2","2")
//);
//
//function get_all_elem_mod_p($arr,$p)
//{
//    $sum = 0;
//
//    for ($i = 0; $i < count($arr); $i++){
//        $column_sum = 0;
//        for ($j = 0; $j < count($arr[$i]); $j++){
//
//            $column_sum+=$arr[$j][$i];
//            if ($arr[$j][$i]%$p!=0)
//            {
//
//                $column_sum = 0;
//                break;
//            }
//
//        }
//        $sum += $column_sum;
//    }
//
//
//    return "Сумма - " . $sum;
//}
//
// echo get_all_elem_mod_p($arr,2);



//3.6


//$arr = array(
//    0 => array("-1","2","3"),
//    1 => array("-2","1","3"),
//    2 => array("2","2","2")
//);
//
//
//echo '<pre>';
//print_r ($arr);
//echo '</pre>';
//
//function get_mult_arr_and_vect($arr)
//{
//
//    $str_num;
//    $vector = [];
//    $new_arr = [];
//    for ($i = 0; $i < count($arr); $i++){
//        $is_positive = true;
//        for ($j = 0; $j < count($arr[$i]); $j++){
//            if ($arr[$i][$j]<=0){
//                $is_positive = false;
//                break;
//            }
//        }
//        if($is_positive){
//            $str_num = $i;
//            break;
//        }
//    }
//
//    for ($j = 0; $j < count($arr[$str_num]); $j++){
//        $vector[$j] = $arr[$str_num][$j];
//    }
//
//    for ($i = 0; $i < count($arr); $i++){
//        $sum = 0;
//        for ($j = 0; $j < count($arr[$i]); $j++){
//           $sum += $arr[$i][$j]* $vector[$j];
//        }
//        $new_arr[$i] = $sum;
//    }
//
//    return $new_arr;
//}
//
//
//echo '<pre>';
//print_r (get_mult_arr_and_vect($arr));
//echo '</pre>';


//3.7

//$arr = array(
//    0 => array("-1","2","20"),
//    1 => array("10","5","3"),
//    2 => array("2","11","2")
//);
//
//
//function get_index_max_elem_upper_diagonal($arr){
//    $max = -PHP_INT_MAX;
//    $x_y_index = [];
//    for ($i = 0; $i < count($arr) - 1; $i++)
//   for ($j = $i + 1; $j < count($arr); $j++)
//       if($max < $arr[$i][$j]){
//           $max = $arr[$i][$j];
//           $x_y_index[0] = $i;
//           $x_y_index[1] = $j;
//       }
//
//    return $x_y_index;
//}
//
//
//function get_index_max_elem_under_diagonal($arr)
//{
//
//    $max = -PHP_INT_MAX;
//    $x_y_index = [];
//    for ($i = 0; $i < count($arr); $i++)
//        for ($j = 0; $j < $i; $j++)
//            if ($max < $arr[$i][$j]) {
//                $max = $arr[$i][$j];
//                $x_y_index[0] = $i;
//                $x_y_index[1] = $j;
//            }
//    return $x_y_index;
//}
//
//
//
//function get_arr($arr)
//{
//    $new_arr = $arr;
//    $max_index_upper = get_index_max_elem_upper_diagonal($arr);
//    $max_index_under = get_index_max_elem_under_diagonal($arr);
//    $upper_max_elem = $new_arr[$max_index_upper[0]][$max_index_upper[1]];
//    $new_arr[$max_index_upper[0]][$max_index_upper[1]] = $new_arr[$max_index_under[0]][$max_index_under[1]];
//    $new_arr[$max_index_under[0]][$max_index_under[1]] = $upper_max_elem;
//    return $new_arr;
//}
//
//
//echo '<pre>';
//print_r ($arr);
//print_r (get_arr($arr));
//echo '</pre>';


//3.8


//$arr = array(
//    0 => array("10","2","2","30"),
//    1 => array("10","5","3"),
//    2 => array("20","2","4")
//);
//
//
//function get_max_elems_indexes($arr){
//
//    $first_max = -PHP_INT_MAX;
//    $second_max = -PHP_INT_MAX;
//    $first_index = 0;
//    $second_index = 0;
//    $indexes = [];
//    for ($i = 0; $i < count($arr); $i++){
//        if($first_max<$arr[$i]){
//            $first_index  = $i;
//            $first_max= $arr[$i];
//        }
//    }
//
//
//    for ($i = 0; $i < count($arr); $i++){
//        if($second_max<$arr[$i] && $arr[$i] != $first_max){
//            $second_index  = $i;
//            $second_max = $arr[$i];
//        }
//    }
//
//    if($first_index < $second_index){
//        $indexes[] = $first_index;
//        $indexes[] = $second_index;
//    }
//    else
//    {
//        $indexes[] = $second_index;
//        $indexes[] = $first_index;
//    }
//
//    return $indexes;
//}
//
//function get_arr($arr)
//{
//
//    for ($i = 0; $i < count($arr); $i++){
//
//       $indexes = get_max_elems_indexes($arr[$i]);
//        for ($j = 0; $j < count($arr[$i]); $j++){
//            if($j>$indexes[0]&&$j<$indexes[1]&&$arr[$i][$j]%2==0&&$arr[$i][$j]>0)
//            unset($arr[$i][$j]);
//        }
//
//    }
//    return $arr;
//}
//
//
//echo '<pre>';
//print_r (get_arr($arr));
//echo '</pre>';



//3.9



//3.10


//$arr = array(
//    0 => array("-1","2","20"),
//    1 => array("10","5","3"),
//    2 => array("2","11","2")
//);
//
//function swap($arr)
//{
//    $rows_count = count($arr);
//    $max = -PHP_INT_MAX;
//    $min = PHP_INT_MAX;
//    $num_max_col = 0;
//    $num_min_col = 0;
//
//    for ($i = 0; $i < $rows_count; $i++) {
//        for ($j = 0; $j < count($arr[0]); $j++) {
//            if ($arr[$i][$j] > $max) {
//                $max = $arr[$i][$j];
//                $num_max_col = $j;
//            }
//            if ($arr[$i][$j] < $min) {
//                $min = $arr[$i][$j];
//                $num_min_col = $j;
//            }
//        }
//    }
//
//    for ($i = 0; $i < $rows_count; $i++) {
//        $tmp = $arr[$i][$num_max_col];
//        $arr[$i][$num_max_col] = $arr[$i][$num_min_col];
//        $arr[$i][$num_min_col] = $tmp;
//    }
//
//    return $arr;
//}
//
//echo '<pre>';
//print_r (swap($arr));
//echo '</pre>';


//3.11

//$arr = array(
//    0 => array("-1","2","20"),
//    1 => array("0","0","0"),
//    2 => array("10","5","3"),
//    3 => array("0","0","0"),
//    4 => array("2","11","2")
//);
//
//function is_row_null($arr)
//{
//    $is_null = true;
//
//    for($i=0;$i<count($arr);$i++)
//        if($arr[$i]!=0)
//        {
//            $is_null = false;
//            break;
//        }
//    return  $is_null;
//
//}
//function delete_null_rows($arr)
//{
//    $new_array = [];
//    for($i=0;$i<count($arr);$i++)
//        if(!is_row_null($arr[$i]))
//            $new_array[] = $arr[$i];
//
//
//        return $new_array;
//}
//
//
//echo '<pre>';
//print_r (delete_null_rows($arr));
//echo '</pre>';

//3.12


//$arr = array(
//    0 => array("2","1","20"),
//    1 => array("2","1","2"),
//    1 => array("2","1","2"),
//    2 => array("2","0","3")
//
//);
//
//function is_prime($num)
//{
//    $is_prime = true;
//
//    if ($num == 0 || $num == 1)
//        $is_prime = false;
//     else
//        for ($i = 2; $i <= $num / 2; ++$i)
//            if ($num % $i == 0) {
//                $is_prime = false;
//                break;
//            }
//    return $is_prime;
//}
//
//function delete($arr)
//{
//    $countOfCols = count($arr[0]);
//    $countOfRows = count($arr);
//
//    for ($col= 0; $col < count($arr); $col++) {
//        $is_prime_nums = 0;
//        for ($row = 0; $row < count($arr[$col]); $row++) {
//            $is_prime_nums += is_prime($arr[$row][$col]);
//        }
//        if ($is_prime_nums == count($arr)) {
//            for ($row = 0; $row < count($arr); $row++) {
//                unset($arr[$row][$col]);
//            }
//        }
//    }
//
//    return $arr;
//}
//
//
//echo "<pre>";
//print_r(delete($arr));
//echo "</pre>";





//3.13

//$arr = array(
//    0 => array("1","3","5"),
//    1 => array("1","3","5"),
//    2 => array("1","1","0")
//
//);
//
//function find_null_col ($arr)
//{
//    $index = 0;
//    $is_null = false;
//    for ($col = 0; $col < count($arr); $col++) {
//        $is_null = false;
//        for ($row = 0; $row < count($arr); $row++){
//            if ($arr[$row][$col] == 0)
//                $is_null = true;
//        }
//        if ($is_null)
//            $index = $col;
//
//
//    }
//
//    if(!$is_null)
//        return false;
//
//    return $index;
//}
//
//
//
//function insert_col($insert_arr, $arr)
//{
//
//    $new_array = [[]];
//   $null_col_index =  find_null_col($arr);
//    if($null_col_index){
//        for ($col = 0; $col < $null_col_index; $col++) {
//            for ($row = 0; $row < count($arr); $row++) {
//                $new_array[$row][$col] = $arr[$row][$col];
//            }
//        }
//
//
//        for ($col = 0; $col < count($arr); $col++) {
//            for ($row = 0; $row < count($arr); $row++) {
//                if($null_col_index == $col){
//                    $new_array[$row][$col] = $insert_arr[$row];
//                }
//            }
//        }
//
//        for ($col = $null_col_index; $col < count($arr); $col++) {
//            for ($row = 0; $row < count($arr); $row++) {
//                $new_array[$row][] = $arr[$row][$col];
//
//            }
//        }
//
//        return $new_array;
//    }
//    else{
//
//        for ($col = count($arr); $col < count($arr)+1; $col++) {
//            for ($row = 0; $row < count($arr); $row++) {
//                $arr[$row][$col] = $insert_arr[$row];
//
//            }
//        }
//
//        return $arr;
//    }
//
//
//
//
//}
//
//$insert_arr = [9,9,9];
//
//
//
//
//
//echo "<pre>";
//print_r(insert_col($insert_arr,$arr));
//echo "</pre>";



//3.14


//$arr = array(
//    0 => array("1","2","20"),
//    1 => array("0","0","0"),
//    2 => array("10","5","3"),
//    3 => array("0","0","0"),
//    4 => array("2","-11","2")
//);
//
//function swap ($arr)
//{
//    $rows_count = count($arr);
//    $max_row_arr = [];
//
//    for ($row = 0; $row < $rows_count; $row++) {
//        $count = 0;
//        for ($col = 0; $col < count($arr[$row])-1; $col++) {
//            if ($arr[$row][$col] * $arr[$row][$col+1] < 0) {
//                $count++;
//            }
//        }
//
//        $max_row_arr[] = $count;
//    }
//
//    $max = -PHP_INT_MAX;
//    $max_row_index = 0;
//
//    for ($i = 0; $i < count($max_row_arr); ++$i) {
//        if ($max_row_arr[$i] > $max) {
//            $max = $max_row_arr[$i];
//            $max_row_index = $i;
//        }
//    }
//
//    $tmp = $arr[$max_row_index];
//    $arr[$max_row_index] = $arr[0];
//    $arr[0] = $tmp;
//
//    return $arr;
//}
//
//
//echo "<pre>";
//print_r(swap($arr));
//echo "</pre>";




//3.15



//$arr = array(
//    0 => array("2","4","9"),
//    1 => array("2","4","10"),
//    2 => array("3","4","11")
//);
//
//function swap($arr)
//{
//
//    $min_count_elems = PHP_INT_MAX;
//    $num_min_col = 0;
//
//
//
//    for( $col = 0;$col < count($arr); $col++) {
//        $count_of = 0;
//        for ($row = 0; $row < count($arr[$col]); $row++) {
//            if ($arr[$row][$col] % 2 != 0)
//                $count_of++;
//        }
//        if ($min_count_elems > $count_of) {
//            $min_count_elems = $count_of;
//            $num_min_col = $col;
//        }
//
//
//    }
//
//
//
//    echo $num_min_col;
//    for ($i = 0; $i < count($arr); $i++) {
//        $tmp = $arr[$i][count($arr)-1];
//        $arr[$i][count($arr)-1] = $arr[$i][$num_min_col];
//        $arr[$i][$num_min_col] = $tmp;
//    }
//
//    return $arr;
//}
//
//echo '<pre>';
//print_r (swap($arr));
//echo '</pre>';


//3.16

//$arr = array(
//    0 => array("-1","2","20"),
//    1 => array("4","0","0"),
//    2 => array("10","5","3"),
//    3 => array("0","50","0"),
//    4 => array("2","11","2")
//);
//
//function my_max($arr)
//{
//    $max = -PHP_INT_MAX;
//    for($i=0;$i<count($arr);$i++)
//    if($max<$arr[$i])
//        $max = $arr[$i];
//
//    return $max;
//}
//function desc_rows($arr)
//{
//
//
//    for ($j = 0; $j < count($arr) - 1; $j++){
//        for ($i = 0; $i < count($arr) - $j - 1; $i++){
//
//            if (my_max($arr[$i]) < my_max($arr[$i+1])){
//                $tmp_var = $arr[$i + 1];
//                $arr[$i + 1] = $arr[$i];
//                $arr[$i] = $tmp_var;
//            }
//        }
//    }
//
//        return $arr;
//}
//
//
//echo '<pre>';
//print_r (desc_rows($arr));
//echo '</pre>';


//3.17

//$arr = array(
//    0 => array("-1","2","20"),
//    1 => array("4","1","2"),
//    2 => array("10","5","3"),
//    3 => array("5","50","2","5"),
//    4 => array("2","11","2")
//);
//
//    function my_sort($arr)
//{
//    for ($j = 0; $j < count($arr) - 1; $j++){
//    for ($i = 0; $i < count($arr) - $j - 1; $i++){
//        if ($arr[$i] > $arr[$i + 1]){
//            $tmp_var = $arr[$i + 1];
//            $arr[$i + 1] = $arr[$i];
//            $arr[$i] = $tmp_var;
//        }
//    }
//}
//
//    return $arr;
//}
//function get_arr($arr,$p)
//{
//
//
//    for ($i = 0; $i < count($arr); $i++){
//        $new_arr = [];
//        $col_counts =  count($arr[$i]);
//        for ($j = 0; $j <$col_counts; $j++){
//            if($arr[$i][$j]%$p==0){
//                $new_arr[] = $arr[$i][$j];
//                unset($arr[$i][$j]);
//            }
//
//        }
//
//        $tmp = my_sort($new_arr);
//
//        for ($j = 0; $j < $col_counts; $j++)
//            if(isset($arr[$i][$j]))
//
//                $tmp[] =$arr[$i][$j];
//
//
//
//
//
//
//        $arr[$i] = $tmp;
//
//    }
//
//    return $arr;
//}
//
//
//echo '<pre>';
//print_r (get_arr($arr,2));
//echo '</pre>';
//


//3.18

//$arr = array(
//    0 => array("1","2","-9"),
//    1 => array("4","0","-2"),
//    2 => array("10","-5","3"),
//
//);
//
//function get_arr($arr)
//{
//    $l = count($arr);
//
//    for ($i = 0; $i < $l; $i++) {
//        for ($j = 0; $j < $l; $j++) {
//            if ($arr[$i][$j] < 0) {
//                [$arr[$i][$j], $arr[$i][$i]] = [$arr[$i][$i], $arr[$i][$j]];
//            }
//        }
//    }
//
//    return $arr;
//}
//
//echo '<pre>';
//print_r (get_arr($arr));
//echo '</pre>';



//3.19

//$arr = array(
//    0 => array("-1","2","9"),
//    1 => array("4","0","0"),
//    2 => array("10","5","3"),
//    3 => array("0","50","0"),
//    4 => array("2","11","2")
//);
//
//function insert_into_arr($arr,$p)
//{
//        $new_arr = [];
//        $elem_on_place = false;
//        for($t=0;$t<count($arr);$t++){
//
//            if($p>=$arr[$t] && !$elem_on_place){
//                $new_arr[] = $p;
//                $elem_on_place = true;
//            }
//            $new_arr[] = $arr[$t];
//
//        }
//        if(!$elem_on_place)
//            $new_arr[] = $p;
//        $arr = $new_arr;
//
//    return $new_arr;
//
//}
//
//function desc_arr($arr)
//{
//
//
//    for ($j = 0; $j < count($arr) - 1; $j++)
//        for ($i = 0; $i < count($arr) - $j - 1; $i++)
//            if ($arr[$i] < $arr[$i+1]){
//                $tmp_var = $arr[$i + 1];
//                $arr[$i + 1] = $arr[$i];
//                $arr[$i] = $tmp_var;
//            }
//
//        return $arr;
//}
//
//
//    function desc_arr_and_insert_p($arr,$p)
//{
//
//    for($i=0;$i<count($arr);$i++)
//        $arr[$i] = insert_into_arr(desc_arr($arr[$i]),$p);
//        return $arr;
//}
//
//
//echo '<pre>';
//print_r (desc_arr_and_insert_p($arr,10));
//echo '</pre>';



//3.20

//$arr = array(
//    0 => array("-1","2","9"),
//    1 => array("4","0","0"),
//    2 => array("10","5","3"),
//    3 => array("0","50","0"),
//    4 => array("2","11","2")
//);
//
//
//function asc_rows($arr)
//{
//
//
//    for ($j = 0; $j < count($arr) - 1; $j++){
//        for ($i = 0; $i < count($arr) - $j - 1; $i++){
//
//            if ($arr[$i][0] < $arr[$i+1][0]){
//                $tmp_var = $arr[$i + 1];
//                $arr[$i + 1] = $arr[$i];
//                $arr[$i] = $tmp_var;
//            }
//        }
//    }
//
//        return $arr;
//}
//
//
//function get_sum($arr)
//{
//
//    $sum = 0;
//    for ($j = 0; $j < count($arr); $j++){
//        $sum += $arr[$j];
//    }
//
//    return $sum;
//}
//
//function get_arr($arr)
//{
//    $arr = asc_rows($arr);
//    $num_max_rows = 0;
//    $new_array = [];
//    $max = -PHP_INT_MAX;
//    for ($i = 0; $i < count($arr); $i++)
//            if (get_sum($arr[$i]) > $max) {
//                $max = get_sum($arr[$i]);
//                $num_max_rows = $i;
//            }
//
//    $new_array[] = $arr[$num_max_rows];
//    for ($i = 0; $i < count($arr); $i++)
//        if($i!=$num_max_rows)
//        $new_array[] =$arr[$i];
//
//    return $new_array;
//}
//
//
//echo '<pre>';
//print_r (get_arr($arr));
//echo '</pre>';
