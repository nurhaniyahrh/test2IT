<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">

    <title>Hasil Tryout</title>

</head>

<body>
    <div class="container">
        <h1><?php echo $title ?></h1>
            <form action="<?php echo base_url() ?>index.php/C_export/export" method="post">
                <input class="btn btn-dark" type="submit" value="Export to Excel" name="export">
            </form>
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th>No</th>
                    <th>NAMA</th>
                    <th>Jumlah Jawaban Benar</th>
                    <th>Jumlah Jawaban Salah</th>
                    <th>Jumlah Jawaban Kosong</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach($tryout as $ty) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?php echo $ty->nama ?></td>
                    <td><?php echo $ty->benar ?></td>
                    <td><?php echo $ty->salah ?></td>
                    <td><?php echo $ty->kosong ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    </body>
</html>