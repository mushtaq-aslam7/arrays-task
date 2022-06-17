<?php
$cars = array('honda', 'toyota', 'suzuki', 'kia', 'audi', 'bmw');
//an instance of unsorted array cars
$usCars=$cars;
//sorting the array cars
sort($cars);
echo "<p>Q1 (a) Output</p>";

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
   
  echo $cars[$x];
  if ($x !== 5)
  {
  echo ", ";
  }
}

echo "<p>Q1 (b) Output</p>";

$cars = \array_filter($cars, static function ($element) {
    return $element !== "suzuki";
    //                   ↑
    // Array value which you want to delete
});
$cars[4]=$cars[5];
$cars[5]=null;
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
   echo $cars[$x];
  if ($x !== 4)
  {
  echo ", ";
  }
}
echo "<br/>";
echo "<p>Q1 (c) Output</p>";
echo $usCars[0];
echo "<br/>";
array_push($cars,"mazda");
echo "<br/>";
echo "<p>Q1 (d) Output</p>";
echo "<br/>";
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
   if ($x !== 5)
   {
   echo ", ";
   }
 }
 echo "<br/>";
 echo "<br/>";
 echo "<p>=========================================================================</p>";

 $a_array=array("Ahmed"=>"55000","Rida"=>"41000","Hanif"=>"93000","Rimsha"=>"20000");
 echo "<p>Q2 Output</p>";
 echo "<p>sorted according to the value</p>";
 asort($a_array);
 
 echo "<br/>";

foreach($a_array as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
   echo "<br/>";
   echo "<br/>";
   echo "<p>sorted according to the key</p>";
   ksort($a_array);

foreach($a_array as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

   echo "<p>=========================================================================</p>";
   echo "<p>Q3 Output</p>";
   echo "<br/>";

   $temperatures=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
   $average = array_sum($temperatures) / count($temperatures);
   echo "<p>(a)Average Temperature is : </P>" .$average;
   sort($temperatures);
   $clength = 7;
   echo "<br>";
   echo "<p>(b) list of seven lowest temperatures:</p>";
for($x = 0; $x < $clength; $x++) {
    echo $temperatures[$x];
   if ($x !== 6)
   {
   echo ", ";
   }
 }

 rsort($temperatures);
  
   echo "<br>";
   echo "<p>(c) list of seven Highest temperatures:</p>";
for($x = 7; $x >= 0; $x--) {
    echo $temperatures[$x];
   if ($x !== 8)
   {
   echo ", ";
   }
 }

 echo "<p>=========================================================================</p>";

 $values=array(55, 26, 59, 89, 59, 86, 26, 26, 49, 59, 86);
 $T_array=array_unique($values);
 echo "<p>Q4 Output</p>";

 $clength = count($values);
for($x = 0; $x < $clength; $x++) {
   
  if(isset($T_array[$x])){echo $T_array[$x];}
  if ($x !== 6)
  {
    if(isset($T_array[$x])){echo ",";}
}
}

echo "<p>=========================================================================</p>";

echo "<p>Q5 Output</p>";

function check_strings_in_array($arr) 
{
    return array_sum(array_map('is_string', $arr)) == count($arr);
}
$v2=array('abc', '55', '78', 'de', 're', 'ef', '15');
$v3=array('abc', 55, 78, 'de', 're', 'ef', 15);
echo "<br/>";
if(check_strings_in_array($v2) == true)
{
    echo "<p>This Array contains all the strings</p>";
}
else
{
    echo "<p>This Array doesn't contains  all the strings</p>";

}
if(check_strings_in_array($v3) == true)
{
    echo "<p>This Array contains all the strings</p>";
}
else
{
    echo "<p> This Array doesn't contains  all the strings</p>";

}
echo "<p>============================END=============================================</p>";


?>

