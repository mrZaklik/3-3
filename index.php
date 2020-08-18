<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>DZ_3-3</title>
</head>

<body>

    <?php 
    echo '<b>TASK 1</b><br/>';
    function cube(){
        $cube = 4;
        echo $cube ** 3;
    }
    cube();
    echo '<br/><br/>';
    

    echo '<b>TASK 2</b><br/>';
    function sum($a, $b){
        return $a + $b;
    }
    echo sum(4, 3);
    echo '<br/><br/>';


    echo '<b>TASK 3</b><br/>';
    function weeks($weeks){
    switch ($weeks) {
        case 1:
            echo 'Пн';
        break;
        case 2:
            echo 'Вт';
        break;
        case 3:
            echo 'Ср';
        break;
        case 4:
            echo 'Чт';
        break;
        case 5:
            echo 'Пт';
        break;
        case 6:
            echo 'Сб';
        break;
        case 7:
            echo 'Вс';
        break;
        default:
            echo 'Введите число от 1 до 7';
        break;
    }
    }
    weeks(4);
    echo '<br/><br/>';


    echo '<b>TASK 4</b><br/>';
    function op($op){
        echo $op < 0 ? 'true' : 'false';
    }
    op(-1);
    echo '<br/><br/>';


    echo '<b>TASK 5</b><br/>';
    function getDigitsSum($digit){
        $sum = 0;
        $str = (string)$digit;
        for($i = 0; $i < strlen($str); $i++){
        $sum += +($str[$i]);
    }
        return $sum;
    }
    echo getDigitsSum(123);
    echo '<br/><br/>';


    echo '<b>TASK 6</b><br/>';
    function yearSum13(){
        for($i = 1; $i < 2020; $i++){
            if (getDigitsSum($i) == 13)
            echo $i.', ';
        }
    }
    yearSum13();
    echo '<br/><br/>';


    echo '<b>TASK 7</b><br/>';
    function isEven($even){
        echo $even % 2 ? 'не чётное' : 'чётное';
    }
    isEven(8);
    echo '<br/><br/>';


    echo '<b>TASK 8</b><br/>';
    function translit($text) {
    $ru = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ь', 'ы', 'ъ', 'э', 'ю', 'я', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ь', 'Ы', 'Ъ', 'Э', 'Ю', 'Я');
    $en = array('a', 'b', 'v', 'g', 'd', 'e', 'jo', 'zh', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'cz', 'ch', 'sh', 'shh', '`', 'y', '``', 'ee', 'yu', 'ya', 'A', 'B', 'V', 'G', 'D', 'E', 'JO', 'ZH', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'CZ', 'CH', 'SH', 'SHH', '`', 'Y', '``', 'EE', 'YU', 'YA');
    return str_replace($ru, $en, $text);
    }
    echo translit('Сутормин С. А.');
    echo '<br/><br/>';


    echo '<b>TASK 9</b><br/>'; 
    function apples($num, $one, $three, $six){
        $str = $num;
        $str = str_split($str);
        $sum = 0;
        for ($i=0; $i < count($str); $i++) {
            if ($num == 1 < 10){
            $sum = $str[$i];
        } elseif
            ($num == 0 || 10 < 20){
            $sum = 5;
        } elseif 
            ($num == 20 < count($str)){
            $sum = $str[$i]; 
        }
    }
//    не работает 2й диапозон

//     for ($i=0; $i < count($str); $i++) {
//         $sum = $str[$i]; 
// }
        
        switch ($sum) {
            case 1:
                echo $num.' '.$one;
            break;
            case 2:
            case 3:
            case 4:
                echo $num.' '.$three;
            break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 0:
                echo $num.' '.$six;
            break;
            default:
                echo 'Введите число';
            break;
        }
        }
        echo apples(121, 'яблоко', 'яблока', 'яблок');
    echo '<br/><br/>';


echo '<b>TASK 10</b><br/>';
function sequentialElements ($arr, $i = 0){
    if (!empty($arr[$i])) {
        echo $arr[$i];
        $i++;
        sequentialElements($arr,$i);
    }
}
sequentialElements([9,8,7,6,5,4,3,2,1]);
echo '<br/><br/>';


echo '<b>TASK 11</b><br/>';
function sum9($digit){
    for($i = 1; $i < 2020; $i++){
        if (getDigitsSum($i) == 13)
        echo $i.', ';
    }
}
sum9(123456789);
echo '<br/><br/>';


echo '<b>TASK 12</b><br/>';
    function calc($num, $poz){
    switch ($poz) {
        case 'km':
            echo $num. ' км/ч = '.$num / 3.6. ' м/с';
        break;
        case 'm':
            echo $num. ' м/с = '.$num * 3.6. ' км/ч';
        break;
        default:
            echo 'Введите km(км/ч) или m(м/с)';
        break;
    }
    }
    calc(4, 'km');
    echo '<br/><br/>';


    echo '<b>TASK 14</b><br/>';
    $str='abcwcbwa';
    $strrev=strrev($str);
    if ($str==$strrev) {echo $str. ' - палиндром';}
    else {echo $str. ' - не палиндром';}
    echo '<br/><br/>';


    echo '<b>TASK 16</b><br/>';
    $text = "There are different kinds of animals on our planet, and all of them are very important for it.";
    $words  = explode(' ', $text);
    $LengthWord = 0;
    $longestWord = '';
    
    foreach ($words as $word) {
          if (strlen($word) > $LengthWord) {
             $LengthWord = strlen($word);
             $longestWord = $word;
          }
    }
    echo $longestWord;
    echo '<br/><br/>';



    ?>

</body>
</html>