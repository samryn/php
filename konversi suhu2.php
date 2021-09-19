<?php

// membuat fungsi untuk mengkonversi suhu
function convert($temprature, $form, $to){
    if($form == 'C' and $to == 'F'){
        return($temprature * 9/5) + 32;
    }
    if($from == 'F' and $to == 'C'){
        return($temprature - 32) * 5/9;
    }
    if($from == 'C' and $to == 'K'){
        return $temprature + 273;
    }
    if($from == 'K' and $to == 'C'){
        return $temprature - 273;
    }
    if($from == 'K' and $to == 'F'){
        return($temprature - 273) * 9/5 + 32;
    }
    if($from == 'F' and $to == 'K'){ 
        return($temprature - 32) * 5/9 + 273;
    }
    if($from == $to){
        return $temprature;
    }
}

// mengambil data dari inputan
if(isset($_POST['temprature'])){
    $temprature = $_POST['temprature'];
    if($temprature == ''){
        $temprature = 0;
    }
}
if(isset($_POST['from']) and isset($_POST['to'])){
    $from = $_POST['from'];
    $to = $_POST['to'];   
}

// memanggil fungsi konversi
$result = convert($temprature, $from, $to);

// membuat pesan yang akan ditampilkan
$message = "Hasil konversi suhu adalah : " . $result;

// redirect halaman ke input.php dengan membawa pesan sebagai hasil konversi
header("location: input.php?message=" . $message);
?>


