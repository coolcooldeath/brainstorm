<?php


class Accommodation
{
    private $str, $n;
    public $result = array();

    function get_result()
    {
        $this->find($this->str,'',$this->n);
        return $this->result;
    }


    function fact($n){
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    function __construct($str, $n)
    {

        try {
            if (strlen($str) < 2) {
                throw new Exception("Длина строки меньше двух символов");
            }
            if (strlen($str) <= ($n)) {
                throw new Exception("Размер подстроки не может быть больше размера строки");
            }

            $this->str = $str;
            $this->n = $n;
        } catch (Exception $e) {
            echo $e."</br>";
            die();
        }


    }

    public function find($str, $prefix, $n)
    {
        if ($n !== 0){
            for ($i = 0; $i < strlen($str); $i++){
                $tmp = substr($str, 0, $i) . substr($str, $i+1);
                $this->find($tmp, $prefix . $str[$i], $n - 1);
            }
        }else
            $this->result[] = $prefix;

    }


    function calculate_accom_count_of_elem()
    {
        try {
            $count = strlen($this->str);
            if($count-($this->n)>0)
                return $this->fact($count) / $this->fact($count-($this->n));
            else
                throw new Exception("Размер подстроки не может быть больше размера строки");

        } catch (Exception $e) {
            echo $e."</br>";
            die();
        }
    }



}

$accom = new Accommodation('bbbr',2);


echo '<pre>';
echo "Количество размещений - " . $accom->calculate_accom_count_of_elem() . "\n";
print_r ($accom->get_result());
echo '<pre>';

