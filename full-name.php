<?php
//echo '<pre>';
//print_r($_POST);

//echo $_POST ['first_name'];

//   $x=100;
// echo isset($x);

//print_r($_POST);
//echo isset($_POST['btn']);

//        if(isset($_POST['btn'])){
//                $firstName=$_POST['first_name'];
//                $lastName=$_POST['last_name'];
//                $fullName=$firstName.''.$lastName;
//                echo $fullName;
//        }



//$firstName=$_POST['first_name'];
//$lastName=$_POST['last_name'];
//$fullName=$firstName.''.$lastName;
//echo $fullName;


$result=' ';
if (isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName=new FullName();
    $result=$fullName->makeFullNamme($_POST['first_name'],$_POST['last_name']);
}




?>



<form action="" method="post">
<table>
    <tr>
        <th>First Name</th>
        <th><input type="text" name="first_name"></th>
    </tr>
    <tr>
        <th>Last Name</th>
        <th><input type="text" name="last_name"></th>
    </tr>
    <tr>
        <th>Full Name</th>
        <th><input type="text" value="<?php echo $result; ?>" name="full_name"></th>
    </tr>
    <tr>
        <th></th>
        <th><input type="submit" name="btn" value="SubmiT"></th>
    </tr>
</table>
</form>