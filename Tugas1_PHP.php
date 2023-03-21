<?php 
echo '<center>';
if(isset($_GET['send'])){
    $Alas = $_GET['Alas'];
    $Tinggi = $_GET['Tinggi'];
    $Sisi_Miring = $_GET['Sisi_Miring']; 
    $Luas = $Alas + $Tinggi;
    $keliling  = 2 + ($Alas + $Sisi_Miring);
    echo '<br> Luas Bangun Datar Ialah' . $Luas;
    echo '<br> Keliling Bangun Datar Ialah ' . $keliling;
}
echo '</center>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas dan Keliling Jajar Genjang</title>
</head>
<body bgcolor="lightblue" >
    <form method="GET">
    <center>    
    <table>
        
    
        <tr>
            <td>Alas</td>
            <td><input type="number" name="Alas"></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td><input type="number" name="Tinggi"></td>
        </tr>
        <tr>
            <td>Sisi Miring</td>
            <td><input type="number" name="Sisi_Miring"></td>
        </tr>
        <tr>
            <td><button name="send">Send</button></td>
            
        </tr>
        

    </table>
    </center>
    </form>



</body>
</html>