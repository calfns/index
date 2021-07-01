<!DOCTYPE html>
<html>
    <?php    
    echo "<font size=6>";
    echo "<table>";
    echo "<b><p><center>CIELO AQUINO ALFONSO</center></p></b>";
    echo "<p><center>Basic Calculator</center></p>";
    echo "<hr/>";
    echo "<br/>";
    ?>
    <head>
        <meta charset="UTF-8">
        <title> Basic Calculator </title>
    </head>

    <body>
        <form>
            <input type="text" name = "num1" placeholder="Number 1">
            <input type="text" name = "num2" placeholder="Number 2">
            <select name ="operator">
                <option> Add </option>
                <option> Subtract </option>
                <option> Multiply </option>
                <option> Divide </option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit"> Calculate</button>
        </form>
<br>
<?php

define("ANSWER", "The answer is: ",true);
echo ANSWER;

     if (isset($_GET['submit'])) {
         $result1=$_GET['num1'];
         $result2=$_GET['num2'];
         $operator=$_GET['operator'];
        switch ($operator) {
            case "Add":
                echo $result1 + $result2;
            break;            
            case "Subtract":
                echo $result1 - $result2;
            break;            
            case "Multiply":
                echo $result1 * $result2;
            break;            
            case "Divide":
                echo $result1 / $result2;
            break;          
         }
     }
echo "<hr/>";
echo "<p><center>Two Dimensional Array</center></p>";

function writeMsg(){
    echo "Enter n for nxn : <br>";
    }
   writeMsg();

echo "<form method='POST'>
    Row:<input type='number' min='2'
            max='5' name='1d' value='1'/>
    Column:<input type='number' min='2'
            max='5' name='2d' value='1'/>
    <input type='submit' name='submit'
            value='Submit'/>
</form>";
  

if (isset($_POST['submit'])) {
      
    $dimention1 = $_POST["1d"];
    $dimention2 = $_POST["2d"];
    echo "<br/>";
    echo "<br/>"; 
    echo "Entered 2d nxn: " . $dimention1
            . "x" . $dimention2 . " <br>";
    $d = [];
    $k = 0;
      
    for($row = 0; $row < $dimention1; $row++) {
        for ($col = 0; $col < $dimention2; $col++) {
            $d[$row][$col]= $k++;
        }
    }
      
    for ($row = 0; $row < $dimention1; $row++) {
        for ($col = 0; $col < $dimention2; $col++) {
            echo $d[$row][$col]." ";
        }
        echo "<br>";
    }
}

   ?>
 
</body>
</html>