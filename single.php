<?php
if(isset($_GET["code"])){
	$code =(int)$_GET["code"];
include"conn.php";
$stmt = $link->prepare("SELECT `cid`, `c_name`, `c_email`, `c_title`, `c_desc`, `c_dob`, `post_id`, `image`,votes.votes,votes.c_id
				FROM `candidate`INNER JOIN votes ON candidate.cid = votes.c_id
				WHERE  cid = :c");
$stmt->execute(["c"=>$code]);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!$arr){
	header("location:../home.asp");
	exit();
	
	}

}else{
	header("location:../home.asp");
	exit();
}




?>
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
    <link rel="icon" type="image/png" href="../uploads/logo.png" />
	
    <!--Core CSS -->
    <link rel="stylesheet" href="../assets/css/bulma.css" />
    <link rel="stylesheet" href="../assets/css/app.css" />
    
    <link rel="stylesheet" href="../assets/css/core_demo.css" />
    
	<link rel="stylesheet" href="../assets/css/core_kit6.css">
	<link rel="stylesheet" href="../assets/css/core_startup.css"/>
	<link rel="stylesheet" href="../assets/css/core_agency.css"/>
	
    <link rel="stylesheet" href="../assets/css/mit.css" />
  </head>

  <body>
    
    <!-- Hero and nav -->
    <!-- Hero and nav -->
    <div class="hero is-cover is-relative is-default is-bold">
      <nav class="navbar navbar-wrapper is-cloned">
        <div class="container">
          <!-- Brand -->
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
              <img src="../uploads/logo.png" alt="jci-logo here" />
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

            
          </div>

          <!-- Navbar menu -->
         

            <!-- Navbar end -->
            
          
          </div>
        </div>
      </nav>

      <nav class="navbar navbar-wrapper is-transparent is-static">
        <div class="container">
          <!-- Brand -->
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
              <img src="../uploads/logo.png" alt="" />
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
    </div> 

    <!-- Portfolio item -->
    <div class="section section-feature-grey is-medium">
	<?php foreach($arr as $q): ?>
        <div class="container">
            <div class="columns">
                <!-- Image side -->
                <div class="column is-6">
                    <!-- Carousel -->
                    <div class="single-image-carousel">
                        <!-- Carousel item -->
                        <div class="carousel-item"style="height:400px">
                            <div class="image-wrapper">
                                <img src="../uploads/<?php echo $q["image"];?>" alt="" data-demo-src="uploads/<?php echo$q["image"];?>">
                                <div class="caption has-text-left">
                                    <span><b><?php echo strtoupper($q["c_title"]); ?></b></span>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel item -->
                       
                    </div>
                </div>

                <!-- Content side -->
                <div class="column">
                    <div class="portfolio-item">
                        <!-- Item title -->
                        <div class="item-title">
                            <h1><b><?php echo $q["c_name"]; ?></b></h1>
                            <div class="title-divider"></div>
                        </div>
						 
                        <div class="project-category">
                            <span><b><?php echo strtoupper($q["c_title"]); ?></b></span>
                           
                        </div>
					
                        <!-- Description -->
                        <div class="project-description"style="overflow:scroll;height:330px">
                            <p><?php echo (nl2br($q["c_desc"])); ?></p>
                          
                        </div>
						<hr/>
                        <!-- Meta made for -->
				
                        <div class="made-for">
                          
							<span class="title is-2 mt-40">Votes</span>
							<i class="im im-icon-thumbs-up"></i>
                           <span class="title is-2 mt-40"><?php echo $q["votes"];?></span>
                        </div>
                        <hr>
                        <!-- Meta details -->
                     
                    </div>
                </div>
            </div>
        </div>
		<?php endforeach; ?>
    </div>

    <!-- Dark footer -->
  <footer id="dark-footer" class="footer footer-dark">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <div class="footer-column">
            <div class="footer-header">
              <div class="footer-logo">
                <img src="../uploads/logo.png" alt="" />
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
			
              <li class="column-item"><a href="#"><?php echo $q["c_name"]; ?></a></li>
              
			 
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
    
  <!-- Back To Top Button -->
  <div id="backtotop"><a href="#"></a></div>
  <!-- Concatenated jQuery and plugins -->
  <script src="../assets/js/app.js"></script>

  <!-- Bulkit js -->
  <script src="../assets/js/functions.js"></script>
  <script src="../assets/js/contact.js"></script>
  <script src="../assets/js/auth.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>