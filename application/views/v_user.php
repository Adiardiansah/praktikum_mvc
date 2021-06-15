<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD di CodeIgniter 3</title>
</head>
<body>
<h1 style="margin: 20px auto;"> Belajar CRUD di CodeIgniter 3 </h1>
    <table style="margin: 20px auto;" "border="1">
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            </tr>
            <?php
    $no = 1;
    foreach($user as $u){
        ?>
        <tr>
            <th><?php echo $no++ ?></th>
            <th><?php echo $u->nama ?></th>
            <th><?php echo $u->alamat ?></th>
            <th><?php echo $u->pekerjaan ?></th>
            </tr>
        <?php } ?>
    </table>

   
    }
</body>
</html>
    