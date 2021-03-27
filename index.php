<!-- The 1st task: -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$colors = ['white','blue','green'];
$table = []; // array of numbers for table
$k = rand(4, 10); // count of rows
echo "<table>";
for ($i = 1; $i<=$k; $i++){
    $table[$i] = rand(0, 9);
    echo "<tr><td>".$table[$i]."</td>";
    echo "<td>".$table[$i]."</td></tr>";
}
echo "</table><br><hr>";
?>
</body>
</html>

<!-- The 2nd task: -->
<?php
echo 'The 2nd task: <br>';
$arr = [];
$x = rand(4, 9);//array dimension
for ($i=1;$i<=$x;$i++){
    $arr[$i] = rand(1, 9)+($i+2);
    echo $arr[$i] . "_";
}
$min = $max = $arr[1]; //min and max elements
$imin = 1; $imax = 0; //keys of min and max elements
$result = 1; //product of numbers
foreach ($arr as $key=>$a){
    if($min>$a){//the first minimum number is taken
        $min = $a;
        $imin = $key;
    }
    if($max<=$a){//the last maximum number is taken
        $max = $a;
        $imax = $key;
    }
}
for($j = $imin+1;$j<$imax;$j++){
    $result *= $arr[$j];
}
echo "<br>Result: " . $result;
echo "<br><hr>";

//The 3rd task:
echo 'The 3rd task: <br>';
$arr = [];//the main array
$arr1 = [];//an array of odd numbers
$arr2 = [];//an array of even numbers
$arr3 = [];//the final array
$x = rand(4, 9);//$arr dimension
for ($i=0;$i<=$x;$i++){
    $arr[$i] = rand(1, 9);
    echo $arr[$i] . "_";
}
echo "<br>";
foreach($arr as $key=>$a){
    if(($key == 0)||($key % 2 == 0)){
        $arr2[$key]=$a;
    }
    else{
        $arr1[$key]=$a;
    }
}
$arr3 = $arr1+$arr2;
foreach($arr3 as $a3){
    echo $a3 . "_";
}
echo "<br><hr>";

//The 4th task:
echo 'The 4th task: <br>';
$matrix=[];
$x = rand(1, 5);//$arr dimension
$y = rand(1,5);//$arr dimension
for($i=0;$i<$x;$i++){
    for($j=0;$j<$y;$j++){
        $matrix[$i][$j] = rand(0, 9);
    }
}
echo "<table>";
foreach($matrix as $m){
    echo "<tr>";
    foreach($m as $m_m){
        echo "<td>{$m_m}</td>";
    }
    echo "</tr>";
}
echo "</table>";
for($j=0;$j<$y;$j++){
    $column = array_column($matrix, $j);
    if (in_array(0,$column)){
        echo "There is zero in this column:". $j+1 . "<br>";
    } 
    else {
        $pr = 1;
        foreach($column as $c){
            $pr*=$c;
        }
        echo "The product of the numbers in column ". $j+1 ." is: " . $pr . "<br>";
    }
}