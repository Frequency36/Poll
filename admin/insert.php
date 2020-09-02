<?php 
$uploadDir = '../uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['fullname']) || isset($_POST['title']) || isset($_POST['email'])|| isset($_POST['asp'])|| isset($_POST['desc'])|| isset($_POST['file'])){ 
    // Get the submitted form data 
    $fullname = htmlspecialchars($_POST['fullname']);
	$title = htmlspecialchars($_POST['title']);
	$email = htmlspecialchars($_POST['email']);
    $asp = htmlspecialchars($_POST['asp']);
	$dob = htmlspecialchars($_POST['dob']);
	$desc = htmlspecialchars($_POST['desc']);
     
    // Check whether submitted data is not empty  
    if(isset($fullname)){ 
        // Validate email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
           // $response['message'] = 'Please enter a valid email.'; 
        }else{ 
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                include_once 'conn.php'; 
                 try{
					$stmt = $link->prepare("INSERT INTO `candidate`(`c_name`, `c_email`, `c_title`, `c_desc`, `c_dob`, `post_id`, `image`)VALUES (?, ?, ?, ?, ?, ?, ?)");
						if($stmt->execute([$fullname,$email,$title,$desc,$dob,$asp,$uploadedFile])){ 
							$response['status'] = 1; 
							$response['message'] = 'Candidate Created successfully!'; 
						} 
				 }catch(Exception $e){
					  error_log($e->getMessage());
						exit('Something weird happened'); //something a user can understand
				 }
               
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 
 
// Return response 
echo json_encode($response);