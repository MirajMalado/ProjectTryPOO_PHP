<?php
class Calc {
    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1, $num2, $cal) {

        $this-> num1 = $num1;
        $this-> num2 = $num2;
        $this-> cal = $cal;
    }
    public function calcMethod () {
        switch ($this-> num1) {
            case 'add':
                $result = $this-> num1 + $this-> num2 ;
                break;
                case 'sub':
                    $result = $this-> num1 - $this-> num2 ;
                    break;
                    case 'mul':
                        $result = $this-> num1 * $this-> num2 ;
                        break;

                        default:
                        $result = " C'est faux mon pote";
                        break;


        }
        return $result;
    }
}