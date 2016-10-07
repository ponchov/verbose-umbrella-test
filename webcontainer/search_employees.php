<?php 

$con = mysqli_connect('db', 'root', 'userpass', 'employees');

$gender = $_POST['gender'];
$bd_cond = $_POST['bd_cond'];
$bd_text = $_POST['bd_text'];
$hd_cond = $_POST['hd_cond'];
$hd_text = $_POST['hd_text'];
$lim = $_POST['limit'];
$limi = $_POST['limit1'];
$employees = mysqli_query($con, "SELECT * FROM  employees WHERE gender =  '$gender' AND birth_date $bd_cond  '$bd_text' AND hire_date $hd_cond '$hd_text' ORDER BY first_name ASC LIMIT $lim, $limi");



$array = [];
while($row = $employees->fetch_object()){
	$array[] = array('emp_no' => $row->emp_no, 'birth_date' => $row->birth_date, 'first_name' => $row->first_name, 'last_name' => $row->last_name, 'gender' => $row->gender, 'hire_date' => $row->hire_date);
}


	echo json_encode($array);

?>
