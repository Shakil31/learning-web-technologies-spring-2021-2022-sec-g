<?php
echo"Task-1";
echo"<br>";
$length=5;
$width=6;
echo "The area of a Rectangle = " ;             
echo $length*$width;
echo "<br>";
echo "The area of a Perimeter = " ;
echo 2*($length*$width);
echo"<br>";
echo"<br>";
echo"<br>";

echo"Task-2";
echo"<br>";
$amount=100;
echo "Vat =15% of the amount = ";
echo $amount*0.15;
echo"<br>";
echo"<br>";
echo"<br>";



echo"Task-3";
echo"<br>";
$number =10;
if($number%2==0){
echo "The given number is odd.";
}
else{
    echo "The given number is even.";
}
echo"<br>";
echo"<br>";
echo"<br>";





echo"Task-4";
echo"<br>";
$number1 = 10;
$number2 = 20;
$number3 = 30;
if($number1 > $number2 ){
    if($number1 > $number3)
    {
        echo "The largest number from three given numbers is :".$number1;
        }
    else
    {
            echo "The largest number from three given numbers is :".$number3;
        }
    }
if($number2 > $number1 ){
    if($number2 > $number3)
    {
        echo "The largest number from three given numbers is :".$number2;
        }
    else
    {
            echo "The largest number from three given numbers is :".$number3;
        }
    }
echo"<br>";
echo"<br>";
echo"<br>";



echo"Task-5";
echo"<br>";
for($i=11;$i<=99;$i+=2){
       if($i%2==0){
           echo "The even number between 10 to 100 are =".$i ."<br>";
       }
       else{
           echo "The odd number between 10 to 100 are =".$i ."<br>";
       }
   }    
echo"<br>";
echo"<br>";
echo"<br>";     



echo"Task-6";
echo"<br>";
$name = array('abc','def','ghi');
foreach ($name as $n) {
    echo $n."<br>";
}
if(array('def',$n)){
    echo "Find successfully.";
}else{
    echo "Can't find.";
}

echo"<br>";
echo"<br>";
echo"<br>";

?>