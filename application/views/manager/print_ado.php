<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Analisis Daerah Operasi</title>
</head>
<body>
	<table class="table  table-striped table-hover table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Alamat</th> 
                            <th>No.Telepon</th>
                            <th>Jenis Daerah Operasi</th>
                            <th>Keterangan</th>
                            
                        </tr>
                        <?php 
                            $no = 1;
                            foreach ($ado as $dp) :?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img width="50px" src="<?= base_url().'/upload/'.$dp->foto_ado ?>" alt="">
                                        </td>
                                    <td><?= $dp->nama_ado ?></td>
                                    <td><?= $dp->alamat_ado ?></td>
                                    <td><?= $dp->telepon_ado ?></td>
                                    <td><?= $dp->jenis_ado ?></td>
                                    <td><?= $dp->keterangan_ado ?></td>
                                   
                                </tr>

                        <?php endforeach; ?>                         
                    </table>
                    <script type="text/javascript">
                    	window.print();
                    </script>
</body>
</html>