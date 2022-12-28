<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include '../cek.php';
    if($role!=='User'){
        header("location:../login.php");
    };
    $userid = $_SESSION['userid'];
    $cekdulu = mysqli_query($conn,"select * from userdata where userid='$userid'");
    $ambil = mysqli_fetch_array($cekdulu);
    $status = $ambil['status']
	?>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../assets/css/main.css">

<div class="container">
      <div class="row">
      <div class="col-md-4  toppad  pull-right col-md-offset-3">
         <a href="verified.php" class="btn btn-danger">Back</a>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h1 class="panel-title" align="center">Bukti Pendaftaran</h1>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $ambil['foto']?>" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>NISN</td>
                        <td>: <?php echo $ambil['nisn']?></td>
                      </tr>
                      <tr>
                        <td>NIK</td>
                        <td>: <?php echo $ambil['nik']?></td>
                      </tr>
                      <tr>
                        <td>NAMA</td>
                        <td>: <?php echo $ambil['namalengkap']?></td>
                      </tr>
                      <tr>
                        <td>TTL</td>
                        <td>: <?php echo $ambil['tempatlahir']?>, <?php echo $ambil['tanggallahir']?></td>
                      </tr>
                         <tr>
                             <tr>
                        <td>ASAL SEKOLAH</td>
                        <td>: <?php echo $ambil['sekolahnama']?></td>
                      </tr>                     
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
      </div>
    </div>