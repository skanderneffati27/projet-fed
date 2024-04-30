<?php 

$conn = mysqli_connect("localhost","root","","fca") ;
if ($conn==true){
    $mid = $_POST['mid'];
    $em = $_POST['em'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $all = $_POST['all'];
    $ccn = $_POST['cc'];
    $req = "INSERT INTO member ('Member_id','Email','Weight','Height','Age','Allergies','Credit_card_num') VALUES ($mid,$em,$weight,$height,$age,$all,$ccn)";
    $res = mysqli_query($req);
    if (mysqli_affected_rows($res)>0){
        echo "User added succefuly ";
    }
}
?>



