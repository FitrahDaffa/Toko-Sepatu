<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi post</title>
</head>
<body>
    <form action="ProsesTabung.php" method="post">
        masukan saldo awal <input type="text" name="saldo_awal" id=""> <br>
        bunga <select name="bunga"> <br>
            <option value="0.10"> 10% </option>
            <option value="0.05"> 5% </option>
            <option value="0.03"> 3% </option>
         </select>
         bulan <input type="text" name="bulan" id=""> <br>
         <input type="submit" value="proses"> 
    </form>
</body>
</html>