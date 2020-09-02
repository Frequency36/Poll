<?php 
include"conn.php";
$stmt = $link->prepare("SELECT name,title,post_id FROM `post`");
$stmt->execute();
$counts= $stmt->rowCount();
$arr = $stmt->fetchAll();

//print_r($arr);
//echo $counts
foreach($arr as $que){
	
	$c=$que["post_id"];
	echo"<br/>";
		echo $que["name"];
	echo "<br/>";
	echo $que["title"];
	
$Qstmt = $link->prepare("SELECT `cid`, `c_name`, `c_email`, `c_title`, `c_desc`, `c_dob`, `post_id`, `image` FROM `candidate` WHERE post_id = :Q");
$Qstmt->execute(["Q"=>$c]);
//$Qcounts= $Qstmt->rowCount();
$Qarr = $Qstmt->fetchAll();
foreach($Qarr as $q){

	echo"<br/>";
	echo $q["c_name"];
	
	
}
	
	
}

 ?>