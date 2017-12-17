<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION['status']=='admin'){
    $aksi="mod/data_master/kasir/kasir_aksi.php";
  ?>
    <div class="judul"><h2>Tambah Data Kategori</h2></div>
    <div class="area_main">
     <form class="form-horizontal" role="form">
         <div class="form-group">
             <label for="firstname" class="col-sm-2 control-label">Nama Lengkap</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="firstname"placeholder="Enter First Name">
             </div>
         </div>
         <div class="form-group">
             <label for="lastname" class="col-sm-2 control-label">Username</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
             </div>
         </div>
         <div class="form-group">
             <label for="lastname" class="col-sm-2 control-label">Password</label>
             <div class="col-sm-10">
                 <input type="password" class="form-control" id="lastname" placeholder="Enter Last Name">
             </div>
         </div>
         <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Tambah Kasir</button>
             </div>
         </div>
    </form>
    </div>
<?php
   }
}
?>