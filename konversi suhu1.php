<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konversi Suhu</title>
    </head>
    <body>
        <form action="calculate.php" method="post">
            <input type="text" name="temprature" value="0">
            <select name="from" id="">
                <option value="C">C</option>
                <option value="F">F</option>
                <option value="K">K</option>
            </select>
            <select name="to" id="">
                <option value="C">C</option>
                <option value="F">F</option>
                <option value="K">K</option>
            </select>
            <input type="submit" value="Convert" name="convert">
        </form>

        <h2>
            <!-- menampilkan hasil konversi -->
            <?php
            if(!empty($_GET['message'])){
                echo $_GET['message'];
            }else{
                echo "Hasil Konversi";
            }
            ?>
        </h2>
    </body>
</html>
