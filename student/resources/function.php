<?php
function query($sql){
global $connection;
return mysqli_query($connection,$sql);
}
function escape_string($string){
	global $connection;
	return mysqli_real_escape_string($connection,$string);
}
function confirm($result){
 global $connection;
 if (!$result) {
 die("QUERY FAILED".mysqli_error($connection));
 }
}
function redirect($location){
return header("Location:$location");
}


function set_message($msg){
    if (!empty($msg)) {
        $_SESSION['message']=$msg;

}else{
    $msg="";
    }
}
function display_message(){
if (isset($_SESSION['message'])) {
	echo $_SESSION['message'];
	unset($_SESSION['message']);
}
}
function fetch_array($result){

return mysqli_fetch_array($result);
}

function login(){

  if (isset($_POST['submit'])) {
$username=escape_string($_POST['user_name']);
$password=escape_string($_POST['password']);
$query=query("SELECT * FROM users WHERE user_name='{$username}'AND password ='{$password}'");
confirm($query);
if (mysqli_num_rows($query)==0){
set_message("Wrong Password ");
    redirect("login.php");

}else{
  $_SESSION['user_name']=$username ; 
    redirect("index.php");
}
}  
}

/******************FUNCTION REGISTER STUDENT*********/
function register(){
if (isset($_POST['submit'])) {
$Firstname=escape_string($_POST['first_name']);
$Lastname=escape_string($_POST['last_name']);
$Middlename=escape_string($_POST['middle_name']);
$course=escape_string($_POST['course']);
$Telephone=escape_string($_POST['Telephone']);
$mariatal=escape_string($_POST['mariatal']);
$Email=escape_string($_POST['Email']);
$Religion=escape_string($_POST['Religion']);
$Occupation=escape_string($_POST['Occupation']);
$country=escape_string($_POST['country']);
$Gender=escape_string($_POST['Gender']);
if (!empty($Firstname)&&!empty($Lastname)&&!empty($Middlename) &&!empty($course) &&!empty($Telephone) &&!empty($mariatal)&&!empty($Email)&&!empty($Religion)&&!empty($Occupation)&&!empty($country)&&!empty($Gender)) {
 $query=query("INSERT INTO register(first_name,last_name,middle_name,course,Telephone,mariatal,Email,Religion,Occupation,country,Gender)VALUES('{$Firstname}','{$Lastname}','{$Middlename}','{$course}','{$Telephone}','{$mariatal}','{$Email}','{$Religion}','{$Occupation}','{$country}','{$Gender}')");
confirm($query);
redirect("registed_students.php");
}else{
set_message("Fill in the fields");
}

}
}
function registed_students(){
$query=query("SELECT * FROM register");
confirm($query);
while ($row=fetch_array($query)) {
$display=<<<DELIMETER
<tr>


                     <td>{$row['first_name']}</td>
                      <td>{$row['last_name']}</td>
                      <td>{$row['middle_name']}</td>
                      <td>{$row['course']}</td>
                      <td>{$row['Email']}</td>
                      
                      <td>{$row['Occupation']}</td>
                     
</tr>
DELIMETER;
echo $display;
}
}
function show_courses(){
$query=query("SELECT * FROM course");
confirm($query);
while ($row=fetch_array($query)) {
$show=<<<DELIMETER

<tr>
 <td>{$row['id']}  </td>
  <td>{$row['course_No']}  </td>
   <td>{$row['course_title']}  </td>
    <td>{$row['date_course']}  </td>
</tr>


DELIMETER;
echo $show;
}
}
function add_course(){
if (isset($_POST['submit'])) {
$course_No=escape_string($_POST['course_No']);
$course_title=escape_string($_POST['course_title']);

$date=escape_string($_POST['date_course']);
$query=query("INSERT INTO course(course_No,course_title,date_course)VALUES('{$course_No}','{$course_title}','{$date}')");
confirm($query);
redirect("show_courses.php");

}
}

function add_lecture(){
if (isset($_POST['submit'])) {
$name_title=escape_string($_POST['name_title']);
$first_name=escape_string($_POST['first_name']);
$last_name=escape_string($_POST['last_name']);
$course=escape_string($_POST['course']);
$level=escape_string($_POST['level']);
$mariatal=escape_string($_POST['mariatal']);
$Email=escape_string($_POST['Email']);
$query=query("INSERT INTO lectures(name_title,first_name,last_name,course,Nlevel,mariatal,Email)VALUES('{$name_title}',     '{$first_name}','{$last_name}','{$course}','{$level}','{$mariatal}','{$Email}')");
confirm($query);

redirect("show_lectures.php");
send_message("New Lecture Added");
}
}
function show_lectures(){

$query=query("SELECT * FROM lectures");
confirm($query);
while ( $row=fetch_array($query)) {
$show_lectures=<<<DELIMETER

<tr>
 <td>{$row['name_title']}  </td>
  <td>{$row['first_name']}  </td>
   <td>{$row['last_name']}  </td>
    <td>{$row['Nlevel']}  </td>
</tr>




DELIMETER;
echo $show_lectures;
}
}

?>