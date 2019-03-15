<?php require_once("../resources/config.php") ?>
<?php  include(TEMPLATE_FRONT.DS."header.php")                                      ?>
<?php 
if (!isset($_SESSION['user_name'])) {
  redirect("login.php");
}
 ?>
  <body id="page-top">

  <?php  include(TEMPLATE_FRONT.DS."top_nav.php")?>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
        <?php  include(TEMPLATE_FRONT.DS."side_nav.php")?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <h3 class="text-center"> Welcome To Admin</h3>
         

   
 
        </div> 
            



<style>
input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3 class="text-center">Student Registration Form</h3>
<br>
<h1 class="text-center"><?php display_message();   ?></h1>
<div class="form">
     <form class="" action="" method="post" enctype="multipart/form-data">
      <?php register();?>
    <label for="fname"></label> 
    &nbsp<input type="text" id="fname" name="first_name" placeholder="Your name.."required="required" >

    <label for="lname"></label>

    &nbsp &nbsp &nbsp<input type="text" id="lname" name="last_name" placeholder="Your last name..">

<label for="Middle"></label>

    &nbsp &nbsp &nbsp<input type="text" id="Middle" name="middle_name" placeholder="Middle Name"> 
   
  <label for="course"></label>  <br>
   &nbsp  <input type="text" id="course" name="course" placeholder="Course">

    <label for="Number"></label>

    &nbsp &nbsp&nbsp <input type="text" id="Number" name="Telephone" placeholder="Tel Number">
   
<label for="Marital"></label>

   &nbsp  &nbsp &nbsp<input type="text" id="Marital" name="mariatal" placeholder="Marital Status">
   

<label for="Email"></label>  <br>
   &nbsp  <input type="text" id="Email" name="Email" placeholder="Email">

    <label for="religion"></label>

  
   &nbsp  
   &nbsp  &nbsp<input type="text" id="Religion" name="Religion" placeholder="Religion">

  <label for="Occupation"></label>
  &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="Occupation" name="Occupation" placeholder="Occupation">

 


 <label for="country"></label><br>
  &nbsp   <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

<label for="Gender"></label>
  &nbsp &nbsp <select id="Gender" name="Gender">
      <option value="Gender">Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      
    </select>




      <input name="submit" type="submit" value="Register Student">
      <br>
  </form>  
</div>
             




<div>




<?php include (TEMPLATE_FRONT.DS."footer.php");         ?>

      </div>
      
</div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
