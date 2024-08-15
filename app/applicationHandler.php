<?php
	require_once '../inc/connection.php';
    if (isset($_POST["addApplication"]) && $_POST["addApplication"] === "Apply") {
        $targetDir = "../applicant/cv/";
        $fileName = basename($_FILES["cv"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if(!empty($_FILES["cv"]["name"])) {
            $id = $_POST['postId'];

            $allowTypes = array('docx','pdf');
            if(in_array($fileType, $allowTypes)){
                //upload file to server
                if(move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFilePath)){
                   
                    if (mysqli_query($con, "insert into application (postId, applicantEmail, education, gpa, cv) values ('$id', '".$_POST['email']."','".$_POST['edu']."', '".$_POST['gpa']."' ,'$fileName' ) ")) {
                        echo "<script> alert('Your application has been submited please wait for response'); </script> .<script>window.location='../applicant/application.php'</script>";
                    } else {
                        echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/apply.php?id=$id'</script>";
                    }
                }else{
                   echo "Sorry, there was an error uploading your file.";
                }
            }else{
                echo "<script> alert('Sorry, only  PDF & DOCX files are allowed to upload.'); </script> .<script>window.location='../applicant/apply.php?id=$id'</script>";
            }
        }else{
           $id = $_POST['postId'];
            echo "<script> alert('Please upload your cv'); </script> .<script>window.location='../applicant/apply.php?id=$id'</script>";
        }
        

        echo "send data here ".$_POST['gpa'];
    } else {
        echo "something wrong try again";
    }