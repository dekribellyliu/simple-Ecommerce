<?php 
$h=mysql_query("INSERT INTO komentar SET 
				transaksi_detailID 	=	'$_GET[id]',
				komentar 			=	'$_POST[alamat]',
				user 				=   '$_SESSION[pelanggan]'") or die (mysql_error());

if ($h){
	?>
	<script>
	alert('Berhasil : komentar telah di kirim!');
	document.location=("index.php?f=history_view&id=<?php echo $_GET['id'] ?>");
	</script>
	<?
}