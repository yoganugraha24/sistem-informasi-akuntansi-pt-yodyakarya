
<!DOCTYPE html>
<html>
<head>
	<title> Laporan Jurnal Umum</title>
</head>
<style>
        *{
            font-family:sans-serif;
        }

        .merah{
            background-color: red;
            color: white;
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
	<h3>Laporan Jurnal Umum</h3>
</center>
	<hr>

	<br>
	<table>
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama Akun</th>
			<th>No. Reff</th>
			<th>Debit</th>
			<th>Kredit</th>
		</tr>
		<tbody>
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
			<td><center>Rp. <?= ($row->jenis_saldo == 'debit') ? number_format($row->saldo,0,'','.') : 0?></center></td>
			<td><center>Rp. <?= ($row->jenis_saldo == 'kredit') ? number_format($row->saldo,0,'','.') : 0?></center></td>
		</tr>
		<?php endforeach; ?>
        <tr>
            <td colspan="4"><center><b>Jumlah Total</b></center></td>
            <td><center><b>Rp. <?= number_format($total_debit[0]['saldo'],0,'','.')?></b></center></td>
            <td><center><b>Rp. <?= number_format($total_kredit[0]['saldo'],0,'','.')?></b></center></td>
            <tr  class="text-center bg-danger <?=  ($total_debit !== $total_kredit) ? 'merah' : '' ?>">
                    <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px"><?=  ($total_debit == $total_kredit) ? 'SEIMBANG' : 'TIDAK SEIMBANG' ?></td>
                  </tr>
        </tr>
	</tbody>
	</table>
</body>
</html>