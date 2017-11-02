<?php include('server.php') ?>
<?php include('errors.php') ?>

<?php


$errors = array(); 
	$db = mysqli_connect("localhost", "root", "", "fileupload");
	$msg = "";
//-----------------------------------------------------------Error Handeling
//    $mustuploaderror = '<script>alert ("Must select file to upload!")</script>';
    $error_array = array("<script>alert ('Must select file to upload!');</script>", "<script>alert ('Upload successfull!')</script>", "echo 'uploading failed'");
  

if (isset($_POST['upload'])) {
      if (($_FILES['image']['size'] == 0)){
    echo $error_array[0];
}
  }


if ($_FILES['image']['size'] >= 1) {
    if (isset($_POST['upload'])) {
//        $filesize = $_FILES['image']['size'];
		$image = $_FILES['image']['name'];
            $target = "images/".basename($_FILES['image']['name']);


		$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

		$sql = "INSERT INTO filedetails (image, image_text) VALUES ('$image', '$image_text')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			echo $error_array[1];
            
            
        }
                           }
        else{
			echo $error_array[3];
            
		}
                                 
	}


	$result = mysqli_query($db, "SELECT * FROM filedetails");
//heellloo testing for github

?>
<!--  JQuery Mobile  -->
