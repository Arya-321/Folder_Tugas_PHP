<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <br><br>

    <form method = 'GET'>
        <table border=1 cellpadding=10% width=35% align='center'>
            <th colspan='1' bgcolor='lightblue' >Data Pegawai</th>
            <tr>
                <td>Name</td>
                <td> <input type="text" name="Name" style="width:100%"></td>
            </tr>
            <tr>
                <td>Jobs</td>
                <td>
                    <select name='Jobs' style="width:100%">
                    <option>---Choose Jobs---</option>
                    <option value='Manajer'>Manajer</option>
                    <option value='Asisten'>Asisten</option>
                    <option value='Kepala_Bagian'>Kepala Bagian</option>
                    <option value='Staff'>Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name='Status'  width="100%">
                        <option>---Choose Status---</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum_Menikah">Belum Menikah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Child</td>
                <td>
                    <select name='Child' width="100%">
                        <option>---Number Of Children---</option>
                        <option value=0>Tidak mempunyai</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Religion</td>
                <td>
                    <select name="Religion" width="100%">
                        <option>---Choose Religion---</option>
                        <option value="Islam">Islam</option>        
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Kristen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align='center' bgcolor='lightblue' colspan='2'>
                    <button name='Simpan' type='submit'>Simpan </button>
                </td>
            </tr>
        </table>
    </form>


    <br><br>
    <fieldset>
    <center>
    <?php
    error_reporting(0);

    $Name = $_GET['Name'];
    $Jobs = $_GET['Jobs'];
    $Status = $_GET['Status'];
    $Child = $_GET['Child'];
    $Religion = $_GET['Religion'];


    //Gaji Pokok Dengan Menggunakan Switch Case
    switch ($Jobs){
        case 'Manajer' : $G_Pokok = 20000000; break;
        case 'Asisten' : $G_Pokok = 15000000; break;
        case 'Kepala_Bagian' : $G_Pokok = 10000000; break;
        case 'Staff' : $G_Pokok = 4000000; break;
        default: $G_Pokok ="";
    }

    // Tunjangan Jabatan
    $T_Jabatan = 0.2 * $G_Pokok;

    //Tunjangan keluarga dengan menggunakan if multi condition
    if( $Status=="Menikah" && $Child == 2){
        $T_keluarga = 0.05 * $G_Pokok;
    }else if( $Status=="Menikah" && $Child >=3 && $Child <=5){
        $T_keluarga = 0.1 * $G_Pokok;
    }else{
        $T_keluarga = 0;
    }


    // Gaji Kotor 
    $G_Kotor = $G_Kotor + $T_Jabatan + $T_keluarga;

    //Zakat Profesi dengan menggunakan ternary
    $Zakat = ($Religion == "Islam" && $G_Kotor >= 6000000) ? 0.025 * $G_Kotor: 0;

    // Take Home Pay
    $thp = $G_Kotor - $Zakat;

    if(isset($bttuon)){}
    
    ?>

    <br>Nama Pegawai : <?= $Name ?>
    <br>Jobs : <?= $Jobs ?>
    <br>Gaji Pokok : <?= $G_Pokok ?>
    <br>Tunjangan Jabatan : <?= $T_Jabatan ?>
    <br>Status : <?= $Status ?>
    <br>Child : <?= $Child ?>
    <br>Tunjangan Anak : <?= $T_keluarga ?>
    <br>Gaji Kotor : <?= $G_Kotor ?>
    <br>Religion : <?= $Religion ?>
    <br>Zakat : <?= $Zakat ?>
    <br>Take Home Pay : <?= $thp ?>


    </fieldset>
    </center>    
</body>
</html>