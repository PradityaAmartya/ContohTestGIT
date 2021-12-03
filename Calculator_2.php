<?php
    if (isset($_POST['hitung]'])) {
    $txt_1 = $_POST['$txt_1'];
    $txt_2 = $_POST['$txt_2'];
    $operator = $_POST['operator'];
?>
}

<?php
switch ($operator) {
    case 'tambah':
        $hasil = $txt_1+$txt_2;
    break;
    case 'kurang':
        $hasil = $txt_1-$txt_2;
    break;        
    case 'kali':
        $hasil = $txt_1*$txt_2;
    break;
    case 'bagi':
        $hasil = $txt_1/$txt_2;
    break;
?>    
}