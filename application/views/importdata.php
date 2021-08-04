<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">

    <title>TRY OUT</title>

</head>

<body>
    <div class="container">
        <h1 class="text-center">Jawaban Tryout Siswa</h1>
        <div class="row">
            <div class="col">
                <h3>Import jawaban siswa</h3>
                <form method="post" action="<?php echo base_url() ?>index.php/C_import/import" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="upload_file" class="form-control" placeholder="" id="upload_file" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
                <div class="progress">
                    <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        <span id="status"></span>
                    </div>
			    </div>
            </div>
            
            <div class="col">
                <h3>Import kunci jawaban</h3>
                <form method="post" action="<?php echo base_url() ?>index.php/C_import/importAnswer" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="upload_file" class="form-control" placeholder="" id="upload_file" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                </form>
                <div class="progress">
				    <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%">
					<span id="status"></span>
				</div>
			</div>
            </div> 
        </div>
        <!-- <div class="row">
            <div class="col">
                <h3>Import Hasil Akhir</h3>
                <form method="post" action="<?php echo base_url() ?>index.php/C_import/importHasil" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="upload_file" class="form-control" placeholder="" id="upload_file" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
            </div> 
        </div> -->
    </div>
    </body>

   