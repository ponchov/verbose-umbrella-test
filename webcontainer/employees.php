<?php 

$con = mysqli_connect('db', 'root', 'userpass', 'employees');

//$employees = mysqli_query($con, "SELECT * FROM  employees WHERE gender =  'M' AND birth_date =  '1965-02-01' AND hire_date > '1990-01-01' ORDER BY first_name ASC");

$LIMIT = $_POST['LIMIT'];
$LIMIT1 = $_POST['LIMIT1'];

$employees = mysqli_query($con, "SELECT * FROM  employees ORDER BY first_name ASC LIMIT $LIMIT, $LIMIT1");

$array = [];
while($row = $employees->fetch_object()){
	//echo "<table><th></th><tr><td>".($row->emp_no)."</td><td>".($row->birth_date)."</td><td>".($row->first_name)."</td><td>".($row->last_name)."</td><td>".($row->gender)."</td><td>".($row->hire_date)."</td></tr>";
	$array[] = array('emp_no' => $row->emp_no, 'birth_date' => $row->birth_date, 'first_name' => $row->first_name, 'last_name' => $row->last_name, 'gender' => $row->gender, 'hire_date' => $row->hire_date);
}


echo json_encode($array);


?>
