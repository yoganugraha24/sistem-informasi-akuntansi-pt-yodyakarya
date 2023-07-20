
<!DOCTYPE html>
<html>
<head>
	<title> Laporan Buku Besar</title>
</head>

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
            margin:15px;
        }
        .mt-fix{
            margin-top:15px;
        }
        .mb-fix{
            margin-bottom:15px;
        }
        hr{
            width:800px;
            margin-bottom:30px;
        }
        .d-flex{
            display:flex;
        }
        .w-100{
            width:100%;
        }
    </style>
<body>
    <center>
	<h3>Laporan Buku Besar</h3>
</center>
	<hr>

	<br>
	<table>
		<tr>
            <th>No</th>
            <th >Tanggal</th>
            <th >Keterangan </th>
            <th >No reff</th>
            <th >Saldo</th>
         </tr>
		<?php
		$no = 1;
		foreach ($data as $row) : ?>
		<tr>
			<td><?= $no++?></td>
			<td><?= $row->tgl_transaksi ?></td>
			<td><?= $row->nama_reff ?></td>
			<td><?php

                      $noAwal = $row->no_reff;

                      $digitPertama = substr($noAwal, 0, 3);
                      $digitKedua = substr($noAwal, 3, 3);
                      $digitKetiga = substr($noAwal, 6, 4);

                      $noReff = $digitPertama . '.' . $digitKedua . '.' . $digitKetiga;

                      echo $noReff;

                      ?></td>
			<td>Rp. <?= number_format($row->saldo,0,'','.') ?></td>
			
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>