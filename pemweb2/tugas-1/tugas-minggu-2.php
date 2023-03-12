<!doctype html>
<html>
    <head>
        <title>Tugas PWL Minggu ke-2.php</title>
    </head>

    <body>
        <!--
            Risky Luthfan Maladzi
            A11.2022.14734
            Pemrograman Web Lanjut
            Week 2
            Tugas 1    
        -->
        <h2>Soal 1</h2>
            <ul>
            <p><i>Buatlah sebuah program PHP yang menggunakan perulangan while untuk mencetak angka 1 sampai dengan 10!</i></p>
            
            <ul>
                <?php
                    
                    $x = 1;

                    while ($x <= 10)
                    {
                        echo "kentang $x<br>";
                        $x++;
                    }                    
                ?>
            </ul></ul>
        
        <h2>Soal 2</h2>
            <ul>
            <p><i>Buatlah sebuah program PHP yang menggunakan perulangan do-while untuk menghitung
                jumlah bilangan ganjil antara 1 dan 50!</i></p>

            <ul>
                <?php
                    $y = 0;
                    $z = 0;

                    do 
                    {
                        $y++;
                        if ($y%2 != 0)
                        {
                            echo " $y ";
                            $z++;
                        }
                        else
                        {
                            echo " _ ";
                        }
                        
                    } while ($y < 50);

                    echo "<br><br>";
                    echo "Total bilangan ganjil antara 1 & 50 adalah <b>$z</b>";
                ?>
            </ul></ul>
        
        <h2>Soal 3</h2>
            <ul>
            <p><i>Buatlah sebuah program PHP yang menggunakan perulangan for untuk mencetak angka genap antara 1 dan 20!</i></p>

            <ul>
                <?php
                    for ($a=1; $a <= 20 ; $a++)
                    {
                        if ($a%2 == 0)
                        {
                            echo "$a ";
                        }
                        else
                        {
                            echo ">> ";
                        }                            
                    }
                ?>
            </ul></ul>

        <h2>Soal 4</h2>
            <ul>
            <p><i>Buatlah sebuah program PHP yang menggunakan perulangan foreach untuk menampilkan setiap elemen pada array berikut:
            <br>$daftar_nilai = array("Daspro" => 89.5, "Alpro" => 90, "PBO" => 98.4 , "Web" => 95)!</i></p>
            <ul>
                <?php
                    $daftar_nilai = array("Daspro" => 89.5, "Alpro" => 90, "PBO" => 98.4 , "Web" => 95);

                    foreach($daftar_nilai as $matkul => $skor) {
                      echo "<li>$matkul = $skor</li><br>";
                    }
                ?>
            </ul></ul>


    </body>

</html>