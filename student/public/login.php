<?php require_once("../resources/config.php") ?>
<?php  include(TEMPLATE_FRONT.DS."header.php")                                      ?>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <h3 class="text-center"><?php display_message();?></h3>
             <form class="" action="" method="post" enctype="multipart/form-data">
            <?php login()?>
            <div class="form-group">
              <div class="form-label-group">
                <input name="user_name" type="user_name" id="user_name" class="form-control" placeholder="user_name" required="required" autofocus="autofocus">
                <label for="user_name">user_name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="password" 
                type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            
            <input type="submit" value="login" name="submit" class="btn btn-lg btn-success btn-block">
          </form>
         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
