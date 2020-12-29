<?php



class BracketStack extends SplStack
{

    public function __construct($expression)
    {
        $this->expression = $expression;
    }

    public function checkBracket()
    {

        $arr = [];
        $arrEx =  str_split($this->expression, 1);

        foreach ($arrEx as $key => $value) {
            if ($value === '(') {
                $arr[] = $value;
            } elseif ($value === ')') {
                if (empty($arr)) {
                    return false;
                } else {
                    array_shift($arr);
                }
            }
        }
        if (empty($arr)) {
            return true;
        } else {
            return false;
        }
    }
}





echo "<pre>";

$obj1 = 's * (s – a) * (s – b) * (s – c)';
$obj2 = '(– b + (b2 – 4*a*c)^0.5) / 2*a';
$obj3 = 's * (s – a) * (s – b * (s – c)';
$obj4 = 's * (s – a) * s – b) * (s – c)';
$obj5 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';
echo "<hr>";
$objBracketStack = new BracketStack($obj5);
if ($objBracketStack->checkBracket($obj5) == true) {
    echo $obj5 . ' is Well!!';
} else {
    echo $obj5 . " isn't Well!!";
}

// (var_dump($objBracketStack->checkBracket($obj5)));
