<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" contents="IE=edge">
	<meta name="viewport" contents="width=device-width, initial-scale=1.0">
	<title>Cetak Data Akun</title>
	<link href="<?= base_url('assets/vendor/nucleo/css/nucleo.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all,min.css') ?>" rel="stylesheet">
	<link href="<? base_url('assets/bootstrap/bootstrap.min.css') ?>" rel="styleesheet">
</head>

<body>
	<div class="container mt-10">
		<div class="row">
			<div class="col">
				<center>
					<h3 class="mt-10">Laporan Data Akun</h3>
				</center>
			</div>
		</div>
	</div>
	
	<hr>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<table class="table table-striped">
					<thead>
						<tr>
							<style>
        *{
            font-family:sans-serif;
        }
        table{
            width:100%;
        }
        table,tr,th,td{
            border:1px solid black;
            border-spacing:0;
        }
        table,tr,th,td{
            border:1px solid black;
            border-spacing:0;
        }
        .text-center{
            text-align:center;
        }
        .text-right{
            text-align:right;
        }
        .font-bold{
            font-weight:bold;
        }
        .m-fix{
            margin:10px;
        }
        .mt-fix{
            margin-top:10px;
        }
        .mb-fix{
            margin-bottom:10px;
        }
        hr{
            width:800px;
            margin-bottom:20px;
        }
        .d-flex{
            display:flex;
        }
        .w-100{
            width:100%;
        }
    </style>
							<th>No</th>
							<th>No. Reff</th>
							<th>Nama Reff</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					</tbod>
						<?php
                    $no = 1;
                    foreach($data as $row): 
                  ?>
                  <tr>
                    <td>
                      <?= $no++ ?>
                    </td>
                    <td>
                      <?php

                      $noAwal = $row->no_reff;

                      $digitPertama = substr($noAwal, 0, 3);
                      $digitKedua = substr($noAwal, 3, 3);
                      $digitKetiga = substr($noAwal, 6, 4);

                      $noReff = $digitPertama . '.' . $digitKedua . '.' . $digitKetiga;

                      echo $noReff;

                      ?>
                    </td>
                    <td><?= $row->nama_reff; ?></td>
                    <td><?= $row->keterangan; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
</body>

</html>				
