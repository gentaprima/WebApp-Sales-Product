
<?php
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Laporan.xls"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
    th{
        height:50px;
        background-color:red;
        color:#fff;
    }
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 10px 10px 10px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 

</head>
<body>
    <table>
        <tr>
            <th data-field="id">#</th>
            <th data-field="tanggal" >Tanggal</th>
            <th data-field="bulan" >Bulan</th>
            <th data-field="company" >Nama Sales</th>
            <th data-field="price" >Lokasi Visit</th>
            <th data-field="date" >Channel</th>
            <th data-field="task" >Pelanggan</th>
            <th data-field="layanan" >Layanan</th>
            <th data-field="bandwith" >Bandwith</th>
            <th data-field="prospek" >Prospek</th>
            <th data-field="deal" >Deal</th>
            
        </tr>
        <tr>
            <td>1</td>
            <td>10</td>
            <td>April</td>
            <td>Tri Gunawan</td>
            <td>Jl Cakung Cilincing Timur Raya KM.2 RT.11, RW.06, Cakung, Jakarta Timu 13910</td>
            <td>STO PSR</td>
            <td>Dapur Seafood</td>
            <td>Wifi Station </td>
            <td>10</td>
            <td>prospek</td>
            <td>Deal</td>
           
                                                
        </tr>
    </table>    
</body>
</html>