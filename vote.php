<?php
if(isset($_POST) && !empty($_POST)){
include"conn.php";
$user = $_SESSION["user"];
$message = [];
//print_r($_POST);
// since we have that let first insert the data in vote

			$check = $link->prepare("SELECT `u_id`, `address` FROM `users` WHERE `address` = ?");
			$check->execute([$user]);
			$k= $check->rowCount();
			//if user already exist
			if($k > 0)
			{
				echo "you already voted";
				header("location:home.asp");
				exit();
				
			}else{
				//create user if not exist
				$users=$link->prepare("INSERT INTO `users`(`address`) VALUES (?)");
				$users->execute([$user]);
								foreach($_POST as $a => $k){
									
									//check if candidate exist
									$candidate = $link->prepare("SELECT `v_id`, `c_id`, `post_name` FROM `votes` WHERE c_id= ?");
									$candidate->execute([$k]);
									$cc=$candidate->rowCount();
									if($cc > 0){
										//if candidate exist giver her a vote
											$vote = $link->prepare("UPDATE `votes` SET `votes`= votes + 1 WHERE c_id = ?");
													if($vote->execute([$k])){
													$message[]="poll completed";
													header("location:home.asp");
													exit();
													}else{
														$message[]="no votes";
													}
									}else{
									//if candidate dont exist create one
										$query = $link->prepare("INSERT INTO `votes`(`c_id`) VALUES (?)");
										
											if($query->execute([$k])){
													
													$vote = $link->prepare("UPDATE `votes` SET `votes`= votes + 1 WHERE c_id = ?");
															if($vote->execute([$k])){
																$message[]= "poll completed";
																header("location:home.asp");
																exit();
															}else{
																$message[]="no vote";
															}	
												
											}else{
												
												$message[]= "No Data INSERTED";
												
											}
									}
				
						}	
}

//then we update the column where candidate id and user exist
print_r(json_encode($message));

}else{
	header("location:home.asp");
	exit();
}
?>