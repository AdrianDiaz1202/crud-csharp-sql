<?php include('dbcon.php'); ?>

<?php

if (isset($_POST['add_students'])){

// echo "Si usted oprimio el boton de formulario";
$idocumento=$_POST['i_documento'];
$fname=$_POST['f_name'];
$lname=$_POST ['l_name'];
$age=$_POST ['age'];

$query = "insert into `students` (`id_documento`,`first_name`,`last_name`,`age`)
values('$idocumento','$fname', '$lname', '$age')";

$result =mysqli_query($connection,$query);

header('location:index.php?insert_msg="este es mi primer post"');

}
?>