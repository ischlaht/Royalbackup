<?php include('upload.php') ?>
<?php 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="structure.css">
</head>



<body>
	<div class="container" id="loggedincontainer">
	<div id="loggedinheader">
		Logged in
	</div>

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> you are Logged in!</p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>

  
   
   <div class="container" id="homepagetotalcontainer">
    
     
      
       
         
<body>
   <div class="container" id="homepagetitle">
      Royal Backup Private Server
   </div>
   
   
<form method="post" action="homepage.php" enctype="multipart/form-data">
       <div class="container" id="uploadcontainer">
           <header>Codes(code) and comments(code_text)</header>
                <div class ="container" id="choosefilecontainer">
           		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image" id="choosefiletitle">
		</div>
		<div>
			<textarea id="textbox" cols="40" rows="4" name="image_text" placeholder="Comments!!!!!!!!!!!!!!! Leave name here"></textarea>

		</div>
           <input type="submit" name="upload" class="uploadbtn" value="Upload">
           </div>
        <div id="uploadedtitle"?>Uploaded files!</div>
        
           
           

           
        
<!--        ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
        <div class="container" id="imagescontainer">
       <?php
        $db = mysqli_connect("localhost", "root", "", "fileupload");
        $sql = "SELECT * FROM filedetails";
        $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)) {
                echo "<img  src='images/".$row['image']."'download>";
                echo "<div id='imagetext''>";
                echo "<a href='images/" .$row['image']."'>VIEW!!</a>";
                echo $row['image_text'];
                    echo "</div>";
            }
 
                
            

        ?>
        </div>
<!--        =================================================================================-->
        
        
        
       </div>
         <div class="container" id="uploadcontainer">
           <header>Images(image)(image_text)</header>
           
       </div>
         <div class="container" id="uploadcontainer">
          <header>Music(music)(music_text)</header>
           
       </div>
</form>
    
    
    
    
    
</body>
























</div>
</html>