<?php
  include 'include/koneksi.php';

  $sql = "SELECT id_siswa, nomor_ujian, nama_siswa, id_jenis, id_jurusan, bhs_indonesia, bhs_inggris, matematika, produktif, jumlah, id_keterangan FROM siswa";

  $query = mysqli_query($koneksi, $sql);

  function Jenis($idJenis, $koneksi){
    $sql = "SELECT jenis_kelamin FROM jenis_kelamin WHERE id_jenis=$idJenis";
    $data = mysqli_query($koneksi, $sql);
    $jenis = mysqli_fetch_assoc($data);
    return $jenis['jenis_kelamin'];
  }

  function Jurusan($idJurusan, $koneksi){
    $sql = "SELECT jurusan FROM jurusan WHERE id_jurusan=$idJurusan";
    $data = mysqli_query($koneksi, $sql);
    $jurusan = mysqli_fetch_assoc($data);
    return $jurusan['jurusan'];
  }

  function Keterangan($idKeterangan, $koneksi){
    $sql = "SELECT keterangan FROM keterangan WHERE id_keterangan=$idKeterangan";
    $data = mysqli_query($koneksi, $sql);
    $keterangan = mysqli_fetch_assoc($data);
    return $keterangan['keterangan'];
  }

      //var_dump($query);
      /*if ($query) {
      	echo "Bisa";
      } else{
      	echo "Tidak Bisa";
      	echo mysqli_error($koneksi);
      }*/

?>

<!DOCTYPE html>
  <head>
  <title>SCRORE APPS</title>
    
    <link rel="shortcut icon" href="images/un.jpeg">
    <link rel="stylesheet" type="text/css" href="include/css/bootstrap.css">
  </head>
  <body>
     <center><h1>Hasil Nilai Ujian Nasional </h1></center><br><br><center>
<a href="admin/login.php"><button class="btn btn-success">Login</button></a></center>
  <div>
     <div class="container">
     <div class="row">
     <div class="col-sm-12">
    
     <br/>

   <table class="table table-striped">
      <div>
      <div class="container">
      <div class="row">
      <div class="col-sm-12">
      <br/><tr>
          <th>NO UJIAN</th>
          <th>NAMA</th>
          <th>JENIS KELAMIN</th>
          <th>JURUSAN</th>
          <th>BIND</th>
          <th>BING</th>
          <th>MTK</th>
          <th>PRODUKTIF</th>
          <th>JUMLAH</th>
          <th>KETERANGAN</th>
           
      </tr>
<?php
  foreach ($query as $nilai):
  ?>

      <tr>
          <td><?php echo $nilai['nomor_ujian'];?></td>
          <td><?php echo $nilai['nama_siswa'];?></td> 
          <td><?php echo Jenis($nilai['id_jenis'],$koneksi);?></td>
          <td><?php echo Jurusan($nilai['id_jurusan'],$koneksi);?></td>
          <td><?php echo $nilai['bhs_indonesia'];?></td>  
          <td><?php echo $nilai['bhs_inggris'];?></td>
          <td><?php echo $nilai['matematika'];?></td>
          <td><?php echo $nilai['produktif'];?></td>
          <td><?php echo $nilai['jumlah'];?></td>
          <td><?php echo Keterangan($nilai['id_keterangan'],$koneksi);?></td>
        
      </tr>
        <?php endforeach; ?>
   
    </table>

   </div>
  </div>
</div>
</div>
<footer>
<div class="navbar navbar-inverse ">
<div class="container"><br><br>
<center><p>Copyright &copy; 2017 - Design by<a href="">JUBIL RPL</a></center></p>
</div></div></footer>
</body>
</html>
