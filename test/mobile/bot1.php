<?php
include('Template/top.php');
?>
<? 

/* DISCORD OAUTH */

$json = file_get_contents('../Template/bot3Owners.json');

$owners = json_decode($json, true);

if (is_array($owners)) {

    foreach ($owners as $obj) {

        $ownerID = $obj['id'];

        if ($_SESSION['user_id'] == $ownerID) {

            $x = 1;
    
        }else{

        }   
    }
}

if($x == 1){

}else{

    $x = 0;
    header("Location: ../error.php");
    die();   

}


?>
<?php
include('../Net/SSH2.php');
#Log in
$ip = "$bot1IP";
$user = "$bot1User";
$password = "$bot1Password";
$ssh = new Net_SSH2($ip);
if (!$ssh->login($user, $password)) {
    exit('<!DOCTYPE html><html><style>body {background: #fff;font: 16px Georgia, serif;line-height: 1.3;margin: 0;padding: 0;}#content;height: 225px;margin: 80px auto 0;padding: 75px 50px 0 300px;width: 375px;}h1 {font-size: 34px;font-weight: normal;margin-top: 0;}p {margin: 0 0 10px 5px;}</style><div id="content"><h1>A error has arrived...</h1><p>Looks like the server login details do not work...</p><p>No need to worry though! Its fixable!<p><p>You can try these steps to fix it:<p> <ul><li>Check config file to see if there there</li><li>See if the login details are right</li><li>Check if the server is up and working</li></ul> <p>If none of these work join the offical discord server for support:<a href="https://discord.gg/q2RDufd"> Here</a>.<p></div>');
}
?>
<?php
if(!empty($_POST['lobby-stop'])) { #Watch if the button is pressed
    $ssh->exec('killall -9 node'); #Execution in SSH
}
if(!empty($_POST['lobby-restart'])) { #Watch if the button is pressed
    $ssh->exec('cd /$bot1location; node bot.js'); #Execution in SSH
}
?>
<?php
include('Template/nav.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> <?php echo $bot1; ?> Panel</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1> <?php echo $bot1; ?> Panel</h1>
          	<!-- SIMPLE TO DO LIST -->
          	<div class="row mt">
          		<div class="col-md-12">
          			<div class="white-panel pn">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo $bot1; ?> Controls</h5></div>
	                        <br>
	                 	</div>
						<h5> About <?php echo $bot1; ?>:</h5>
						<p><?php echo $Bot1about; ?></p>
						<div class="custom-check goleft mt">
<br>
<br>
<br>
<br>
<br>
   <center><button type="button" class="btn btn-success">Start</button>   <button type="button" class="btn btn-danger">Stop</button></center>

						</div><!-- /table-responsive -->
					</div><!--/ White-panel -->
          		</div><! --/col-md-12 -->
          	</div><! -- row -->        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>2017-2018 DiscordPanel</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
