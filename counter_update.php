<?php
    $con = mysqli_connect("localhost","root","","register");
    mysqli_set_charset($con,"utf8");

    $user_id = $_POST["user_id"];
    $user_name = $_POST["user_name"];
    // $ut_id = $_POST["ut_id"];
    $user_username = $_POST["user_username"];
    $user_password= $_POST["user_password"];
    $image2= $_POST["image2"];
  
    // //upload image
	// $ext = pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
	// $new_image_name = 'img_'.uniqid().".".$ext;
	// $image_path ="images/";
	// $upload_path = $image_path.$new_image_name;
	// //uploading
	// move_uploaded_file($_FILES['image']['tmp_name'],$upload_path);
    // $image = $new_image_name;
    
    $data1 = date("Ymd_His");
    $numrand = (mt_rand());
    $image = (isset($_POST['image']) ? $_POST['image'] : '');
    $upload = $_FILES['image']['name'];
    if($upload !='') {
        $path = "assets/images/users/";
        $type = strrchr($_FILES['image']['name'],".");
        $newname = $numrand.$data1.$type;
        $path_copy = $path.$newname;
        $path_link = "assets/images/users/".$newname;

        move_uploaded_file($_FILES['image']['tmp_name'],$path_copy);
    } else {
        $newname = $image2;
    }

    // $query= "INSERT INTO settingg VALUES
    // ('','$Iname','$department', '$username', '$passwordd','$Confirmpassword', '$path_copy')";
    // mysqli_query($con, $query);

    $query ="UPDATE user SET user_name='$user_name',user_username='$user_username',user_password='$user_password',image='$newname' WHERE user_id='$user_id'";
    mysqli_query($con,$query);
    
     header("Location:counter_editprofile.php");

    
?>