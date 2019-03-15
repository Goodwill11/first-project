<?php require_once("../resources/config.php") ?>
<?php  include(TEMPLATE_FRONT.DS."header.php")                                      ?>
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

          <h3 class="text-center">Add Course</h3>
         

   
 
        </div> 
            
<style> 
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit] {
  width: 50%;
  background-color:indigo;
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
</style>
</head>
<body>



 <form class="" action="" method="post" enctype="multipart/form-data">
  <?php add_course()?>
<label for="Course_NO"></label>
 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" id="Course_NO" name="course_No" placeholder="Course_number">
<br>
 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="Course_title" name="course_title" placeholder="course_title">
<br>

<label for="fname"></label>
 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" id="Course_date" name="date_course"placeholder="2019*02*07">
<br>
<br>
<br>
&nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp <input name="submit" type="submit" value="Register Student">     

</form>




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
