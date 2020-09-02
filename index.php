<?php  

include "conn.php";
$check = $link->prepare("SELECT `u_id`, `address` FROM `users` WHERE `address` = ?");
			$check->execute([$user]);
			$k= $check->rowCount();
			//if user already exist
			if($k > 0)
			{
				header("location:result.php");
				exit();
				
			}




$msg="";
$stmt = $link->prepare("SELECT name,title,post_id FROM `post`");
$stmt->execute();
$counts= $stmt->rowCount();
if($counts<0){
	$msg.="No record to display";
}else{
$arr = $stmt->fetchAll();
}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>JCI :: Home</title>
    <link rel="icon" type="image/png" href="uploads/logo.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="assets/css/bulma.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/core_agency.css" />
    <link rel="stylesheet" href="assets/css/core_demo.css" />
    <link rel="stylesheet" href="assets/css/core_startup.css" />
	<link rel="stylesheet" href="assets/css/core_kit6.css">
	
    <link rel="stylesheet" href="assets/css/mit.css" />
  </head>

  <body>
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <!-- Hero and nav -->
    <!-- Hero and nav -->
    <div class="hero is-cover is-relative is-default is-bold">
      <nav class="navbar navbar-wrapper is-cloned">
        <div class="container">
          <!-- Brand -->
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
              <img src="uploads/logo.png" alt="jci-logo here" />
            </a>
            <!-- Sidebar Trigger -->
            <!-- Sidebar Trigger -->
            <a
              id="navigation-trigger"
              class="navbar-item hamburger-btn"
              href="javascript:void(0);"
            >
              <span class="menu-toggle">
                <span class="icon-box-toggle">
                  <span class="rotate">
                    <i class="icon-line-top"></i>
                    <i class="icon-line-center"></i>
                    <i class="icon-line-bottom"></i>
                  </span>
                </span>
              </span>
            </a>

            <!-- Responsive toggle -->
            <div class="custom-burger" data-target="">
              <a id="" class="responsive-btn" href="javascript:void(0);">
                <span class="menu-toggle">
                  <span class="icon-box-toggle">
                    <span class="rotate">
                      <i class="icon-line-top"></i>
                      <i class="icon-line-center"></i>
                      <i class="icon-line-bottom"></i>
                    </span>
                  </span>
                </span>
              </a>
            </div>
          </div>

          <!-- Navbar menu -->
         

            <!-- Navbar end -->
            
            <div class="navbar-end">
              <!-- Navbar item -->
              <a class="navbar-item is-slide is-centered-tablet">
			  <span class ="fa fa-send"></span> &nbsp;
                EMAIL : OOLABALOGUN@JCI.NG  &nbsp; &nbsp; |
              </a>
              <!-- Signup button -->
			  
              <div class="navbar-item is-button is-centered-tablet">
				<span class ="fa fa-mobile-phone"></span> &nbsp;
                 TEL : +234 803 375 1414
              </div>
            </div>
          </div>
        </div>
      </nav>

      <nav class="navbar navbar-wrapper is-transparent is-static">
        <div class="container">
          <!-- Brand -->
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
              <img src="uploads/logo.png" alt="" />
            </a>

            <!-- Sidebar Trigger -->
            <a
              id="navigation-trigger"
              class="navbar-item hamburger-btn"
              href="javascript:void(0);"
            >
              <span class="menu-toggle">
                <span class="icon-box-toggle">
                  <span class="rotate">
                    <i class="icon-line-top"></i>
                    <i class="icon-line-center"></i>
                    <i class="icon-line-bottom"></i>
                  </span>
                </span>
              </span>
            </a>

            <!-- Responsive toggle -->
            <div class="custom-burger" data-target="is-static">
              <a class="responsive-btn" href="javascript:void(0);">
                <span class="menu-toggle">
                  <span class="icon-box-toggle">
                    <span class="rotate">
                      <i class="icon-line-top"></i>
                      <i class="icon-line-center"></i>
                      <i class="icon-line-bottom"></i>
                    </span>
                  </span>
                </span>
              </a>
            </div>
            <!-- /Responsive toggle -->
          </div>

          <!-- Navbar menu -->
          <div id="is-static" class="navbar-menu">
           

            <!-- Navbar end -->
            <!-- Navbar end -->
            <div class="navbar-end">
              <!-- Navbar item -->
              <a class="navbar-item is-slide is-centered-tablet">
			  <span class ="fa fa-send"></span> &nbsp;
                EMAIL : OOLABALOGUN@JCI.NG  &nbsp; &nbsp; |
              </a>
              <!-- Signup button -->
			  
              <div class="navbar-item is-button is-centered-tablet">
				<span class ="fa fa-mobile-phone"></span> &nbsp;
                 TEL : +234 803 375 1414
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="hero is-cover is-relative is-medium is-default is-bold">
        
		
          
			<div class="Wallop Wallop--fade">
            <div class="Wallop-list">
                <!-- Slide -->
                <div class="Wallop-item Wallop-item--current has-background-image" data-background="uploads/jct.png" data-demo-background="uploads/jct.png">
                    <div class="Wallop-overlay"></div>
                    <div class="Wallop-caption-wrapper">
                        <div class="container">
                            <div class="columns is-gapless is-vcentered">
                                <div class="column is-5">
                                    <div class="caption-inner">
                                        <h1> Welcome to JCI Polling Platform</h1>
                                        <div class="caption-divider"></div>
                                        <div class="caption-text">
                                       
                                            <div class="action">
                                                <a href="#services" class="button button-cta primary-btn rounded">Get started now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
          </div>
    </div>
	
	<!--- section check vote-->
	    <div id="services" class="section is-small">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <h2 class="title section-title has-text-centered dark-text"> Voting Instructions</h2>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered is-multiline has-text-centered">
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="startup-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Checked-User"></i>
                            </div>
                            <div class="box-title">Select prefered nominee</div>
                            <p class="box-content is-tablet-padded"> Click on the circle in front of each candidate to select your prefered nominee.</p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="startup-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Eyeglasses-Smiley"></i>
                            </div>
                            <div class="box-title">View Profile</div>
                            <p class="box-content is-tablet-padded">Click on nominee  name to view   profile.<br/> Our nominees have lots of interesting details you might find exciting </p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="startup-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Male-2"></i>
                            </div>
                            <div class="box-title">Select Conditions</div>
                            <p class="box-content is-tablet-padded"> You are only allowed to select one nominee per category. <br/> Nominees of the same category can not be both selected</p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="startup-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Like"></i>
                            </div>
                            <div class="box-title">Vote nominees</div>
                            <p class="box-content is-tablet-padded">After Selecting your prefered nominees, Click the vote button .<br/>Note you can only vote once and be redirected to view poll results</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	
	
	
	  <!-- News section -->
    <div class="section is-medium">
        <div class="container">
		<form action="vote.php"method="POST">
		<?php foreach($arr as $que): 
		$c=$que["post_id"];
		?>
			
            <div class="title-wrap has-text-centered">
                <h2 class="title is-spaced is-3"><?php echo strtoupper($que["name"]); ?></h2>
                <h3 class="subtitle"><?php echo strtoupper($que["title"]); ?></h3>
                <!-- Special divider -->
                <img src="../assets/img/icons/divider.svg" class="special-divider" alt="">
            </div>
            <!-- Wrapper -->
			<?php $Qstmt = $link->prepare("SELECT `cid`, `c_name`, `c_email`, `c_title`, `c_desc`, `c_dob`, `post_id`, `image` FROM `candidate` WHERE post_id = :Q");
					$Qstmt->execute(["Q"=>$c]);
					//$Qcounts= $Qstmt->rowCount();
						$Qarr = $Qstmt->fetchAll();
						foreach($Qarr as $q){?>
            <div class="content-wrapper">
                <div class="columns">
                    <!-- Featured Post -->
                    
                    <div class="column is-8 is-offset-2">
                        <!-- Recent Post -->
                        <div class="side-post">
							
                            <!-- Featured image -->
                            <div class="post-image">
                                <img src="uploads/<?php  echo $q["image"];?>" alt="" data-demo-src="uploads/<?php  echo $q["image"];?>">
                                <div class=""></div>
                            </div>
                            <!-- Featured content -->
							
                            <div class="post-content">
							<br/>
                                <h3><a href="user/<?php  echo $q["cid"]; ?>"><?php echo strtoupper(htmlentities($q["c_name"])); ?></h3>
                                <p><?php echo strtoupper($q["c_title"]);?></p>
                            </div>
							<!--radio button-->
							<div class="field">
								<div class="control">
									<ul>
										<li class="mb-20">
										<!-- Radio -->
											<label class="radio-wrap is-small">
												<input type="radio" class="b-radio" name="<?php echo $que["name"];?>"value="<?php echo $q["cid"];?>">
													<span></span>
													</label>
										<!-- /Radio -->
										</li>
									</ul>
								</div>
							</div>
							<!-- close radio-->
						</div>
						
					<!-- button -->
                    </div>
                </div>
            </div>
			<?php }
			endforeach; ?>
			<a href="poll.asp"class="button button-cta secondary-btn btn-outlined">Show Poll</a>
			<button class="button button-cta primary-btn btn-outlined is-pulled-right"type="submit">Vote</button>
			</form>
        </div>
    </div>


	   
    <!-- Dark footer -->
   <!-- Dark footer -->
  <footer id="dark-footer" class="footer footer-dark">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <div class="footer-column">
            <div class="footer-header">
              <div class="footer-logo">
                <img src="uploads/logo.png" alt="" />
              </div>
            </div>
            <h4>
              
            </h4>
            <div class="footer-header">
              <nav class="level is-mobile">
                <div class="level-left level-social">
                  <a href="#" class="level-item">
                    <span class="icon"><i class="fa fa-facebook"></i></span>
                  </a>
                  <a href="#" class="level-item">
                    <span class="icon"><i class="fa fa-twitter"></i></span>
                  </a>
                  <a href="#" class="level-item">
                    <span class="icon"><i class="fa fa-linkedin"></i></span>
                  </a>
                </div>
              </nav>
            </div>
          </div>
        </div>
        <div class="column is-offset-1">
          <div class="footer-column">
            <div class="footer-header">
              <h3>Polls</h3>
            </div>
            <ul class="link-list">
				<?php  foreach($arr as $d): ?>
              <li class="column-item"><a href="#"><?php echo $d["name"]; ?></a></li>
              
			  <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="column">
          <div class="footer-column">
            <div class="footer-header">
              <h3>Pages</h3>
            </div>
            <ul class="link-list">
              <li class="column-item"><a href="index.php">Home</a></li>
             
            </ul>
          </div>
        </div>
        <div class="column">
          <div class="footer-column">
            <div class="footer-header">
              <h3>Terms</h3>
            </div>
            <ul class="link-list">
              <li class="column-item"><a href="#">Terms of Service</a></li>
              <li class="column-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <div class="copyright">
              <span class="moto light-text">Alright Reserved <i class="fa fa-heart color-red"></i> by
                Frequency.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Dark footer -->
    <!-- Modal Markup -->
      
        <!-- /Modal Markup -->
 
  <!-- Back To Top Button -->
  <div id="backtotop"><a href="#"></a></div>
  <!-- Concatenated jQuery and plugins -->
  <script src="assets/js/app.js"></script>

  <!-- Bulkit js -->
  <script src="assets/js/functions.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/auth.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>