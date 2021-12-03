<?php
    
    if (isset($_POST['hitung'])) {
        $txt_1 = $_POST['txt_1'];
        $txt_2 = $_POST['txt_2'];
        $operator = $_POST['operator'];

            if ($operator == "tambah")
                $hasil = $txt_1+$txt_2;

            elseif ($operator == "kurang")
                $hasil = $txt_1-$txt_2;

            elseif ($operator == "kali")
                $hasil = $txt_1*$txt_2;
            
            elseif ($operator == "bagi")
                $hasil = $txt_1/$txt_2;
            
            else
                echo "tidak ada hasil";
    }   
?>