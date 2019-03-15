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

<h3 class="text-center">Add New Lecture</h3>
<br>

<div class="form">
     <form class="" action="" method="post" enctype="multipart/form-data">
      <?php add_lecture();?>
    <label for="fname"></label> 
    &nbsp<input type="text" id="fname" name="name_title" placeholder="name_title"required="required" >

    <label for="lname"></label>

    &nbsp &nbsp &nbsp<input type="text" id="lname" name="first_name" placeholder=" first_name">

<label for="last_name"></label>

    &nbsp &nbsp &nbsp<input type="text" id="last_name" name="last_name" placeholder="last_name"> 
   
  <label for="course"></label>  <br>
   &nbsp  <input type="text" id="course" name="course" placeholder="Course">

    <label for="level"></label>
  &nbsp &nbsp <select id="level" name="level">
    <option value="level">Edu Level</option>
      <option value=" Associate's degree"> Associate's degree</option>
      <option value="Bachelor's degree">Bachelor's degree</option>
       <option value="Master's degree ">Master's degree  </option>
      <option value="Doctoral degree">Doctoral degree</option>
      
    </select>
   
<label for="Marital"></label>

   &nbsp  &nbsp &nbsp<input type="text" id="Marital" name="mariatal" placeholder="Marital Status">
   

<label for="Email"></label>  <br>
   &nbsp  <input type="text" id="Email" name="Email" placeholder="Email">

  

 



<label for="Gender"></label>
  &nbsp &nbsp <select id="Gender" name="Gender">
      <option value="Gender">Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      
    </select>




      <input name="submit" type="submit" value="Add Lecture">
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
