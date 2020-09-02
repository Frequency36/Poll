<?php include "conn.php";
$stmt = $link->prepare("SELECT post_id,name FROM `post`");
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
if(!$arr){
 $output .=" No   data avaailable";
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

    <title>McAnderson Institute of Technology :: Home</title>
    <link rel="icon" type="image/png" href="assets/img/logos/MITLogoIcon.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="assets/css/bulma.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/core_kit8.css" />
    <link rel="stylesheet" href="assets/css/core_demo.css" />
    <link rel="stylesheet" href="assets/css/mit.css" />
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
              <img src="assets/img/logos/MITLogo.png" alt="" />
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
          <div id="is-cloned" class="navbar-menu">
            <!-- Navbar Start -->
            <div class="navbar-start">
              <!-- Dropdown -->
              <div
                class="navbar-item has-dropdown is-hoverable is-mega is-hidden-mobile"
              >
                <div class="navbar-link">
                  Courses
                </div>
                <div
                  class="navbar-dropdown is-megamenu animated prefadeInUp fadeInUp"
                  data-style="width: 18rem;"
                >
                  <div class="mega-inner">
                    <div class="container">
                      <div class="columns">
                        <div class="column">
                          <h2 class="title is-6 is-mega-menu-title">
                            Courses
                          </h2>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Sidebar-Window"></i>
                            <div class="navbar-content">
                              <!-- <p>
                                <small class="color-secondary">Boards</small>
                              </p> -->
                              <p>Web Development</p>
                            </div>
                          </a>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Smartphone-4"></i>
                            <div class="navbar-content">
                              <!-- <p>
                                <small class="color-secondary"
                                  >Productivity</small
                                >
                              </p> -->
                              <p>Mobile App Development</p>
                            </div>
                          </a>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Structure"></i>
                            <div class="navbar-content">
                              <!-- <p>
                                <small class="color-secondary">Security</small>
                              </p> -->
                              <p>Data Science</p>
                            </div>
                          </a>
                        </div>
                        <div class="column">
                          <h2 class="title is-6 is-mega-menu-title">
                            <!-- Accounting -->
                          </h2>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Dropbox"></i>
                            <div class="navbar-content">
                              <p>Artificial Intelligence</p>
                            </div>
                          </a>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Download-fromCloud"></i>
                            <div class="navbar-content">
                              <p>Network Engineering</p>
                            </div>
                          </a>
                        </div>

                        <div class="column">
                          <h2 class="title is-6 is-mega-menu-title">
                            Get Started
                          </h2>
                          <p class="is-cta">
                            Start your journey here.
                          </p>
                          <p class="is-cta">
                            <a
                              href="signup.html"
                              class="button btn-align mega-btn secondary-btn"
                              >Learn more</a
                            >
                          </p>
                        </div>
                      </div>
                    </div>

                    <hr class="navbar-divider" />
                    <div class="navbar-item is-footer is-hidden-mobile">
                      <div class="navbar-content">
                        <div class="level is-mobile">
                          <div class="level-left">
                            <div class="level-item">
                              <strong>Follow us</strong>
                            </div>
                          </div>
                          <div class="level-right">
                            <div class="level-item">
                              <a class="social-link" href="#"
                                ><i class="fa fa-twitter"></i
                              ></a>
                              <a class="social-link" href="#"
                                ><i class="fa fa-facebook"></i
                              ></a>
                              <a class="social-link" href="#"
                                ><i class="fa fa-linkedin"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="menu-image is-hidden-mobile">
                      <img
                        src="assets/img/bg/shapes/megamenu-blue.svg"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Navbar item -->
              <a
                class="navbar-item is-slide is-centered-tablet is-hidden-desktop is-hidden-tablet"
                href="#"
              >
                Courses
              </a>
              <!--search-->
              <div class="navbar-item is-slide is-centered-tablet">
                <div class="component-block">
                  <div class="field">
                    <div class="control auto-cpl-control has-icons-left">
                      <input
                        id="basic-autocpl"
                        class="input is-medium autocpl w-35"
                        type="text"
                        placeholder="Search  ..."
                      />
                      <span class="icon is-left">
                        <i class="sl sl-icon-magnifier"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navbar end -->
            <div class="navbar-end">
              <!-- Navbar item -->
              <a
                class="navbar-item is-slide is-centered-tablet"
                href="login.html"
              >
                Login
              </a>
              <!-- Signup button -->
              <div class="navbar-item is-button is-centered-tablet">
                <a
                  id="#signup-btn"
                  href="signup.html"
                  class="button button-cta is-bold btn-align secondary-btn raised"
                >
                  Sign up
                </a>
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
              <img src="assets/img/logos/MITLogo.png" alt="" />
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
            <!-- Navbar Start -->
            <div class="navbar-start">
              <!-- Dropdown -->
              <div
                class="navbar-item has-dropdown is-hoverable is-mega is-hidden-mobile"
              >
                <div class="navbar-link">
                  Courses
                </div>
                <div
                  class="navbar-dropdown is-megamenu animated prefadeInUp fadeInUp"
                  data-style="width: 18rem;"
                >
                  <div class="mega-inner">
                    <div class="container">
                      <div class="columns">
                        <div class="column">
                          <h2 class="title is-6 is-mega-menu-title">
                            Courses
                          </h2>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Sidebar-Window"></i>
                            <div class="navbar-content">
                              <!-- <p>
                              <small class="color-secondary">Boards</small>
                            </p> -->
                              <p>Web Development</p>
                            </div>
                          </a>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Smartphone-4"></i>
                            <div class="navbar-content">
                              <!-- <p>
                              <small class="color-secondary"
                                >Productivity</small
                              >
                            </p> -->
                              <p>Mobile App Development</p>
                            </div>
                          </a>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Structure"></i>
                            <div class="navbar-content">
                              <!-- <p>
                              <small class="color-secondary">Security</small>
                            </p> -->
                              <p>Data Science</p>
                            </div>
                          </a>
                        </div>
                        <div class="column">
                          <h2 class="title is-6 is-mega-menu-title">
                            <!-- Accounting -->
                          </h2>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Dropbox"></i>
                            <div class="navbar-content">
                              <!-- <p>
                              <small class="color-secondary">Reporting</small>
                            </p> -->
                              <p>Artificial Intelligence</p>
                            </div>
                          </a>
                          <a class="navbar-item is-flex" href="#">
                            <i class="im im-icon-Download-fromCloud"></i>
                            <div class="navbar-content">
                              <!-- <p>
                              <small class="color-secondary"
                                >Transactions</small
                              >
                            </p> -->
                              <p>Network Engineering</p>
                            </div>
                          </a>
                          <!-- <a
                          class="navbar-item is-flex"
                          href="#"
                        >
                          <i class="im im-icon-Bank"></i>
                          <div class="navbar-content">
                            <p>
                              <small class="color-secondary"
                                >Transactions</small
                              >
                            </p>
                            <p>Accounts</p>
                          </div>
                        </a> -->
                        </div>
                        <!-- <div class="column">
                        <h2 class="title is-6 is-mega-menu-title">
                          Document Management
                        </h2>
                        <a
                          class="navbar-item is-flex"
                          href="#"
                        >
                          <i class="im im-icon-Folder-Archive"></i>
                          <div class="navbar-content">
                            <p>
                              <small class="color-secondary"
                                >Records Management</small
                              >
                            </p>
                            <p>File Plan</p>
                          </div>
                        </a>
                        <a
                          class="navbar-item is-flex"
                          href="#"
                        >
                          <i class="im im-icon-Mail-Attachement"></i>
                          <div class="navbar-content">
                            <p>
                              <small class="color-secondary">Emails</small>
                            </p>
                            <p>Attachments Extraction</p>
                          </div>
                        </a>
                      </div> -->
                        <div class="column">
                          <h2 class="title is-6 is-mega-menu-title">
                            Get Started
                          </h2>
                          <p class="is-cta">
                            Start your journey here.
                          </p>
                          <p class="is-cta">
                            <a
                              href="signup.html"
                              class="button btn-align mega-btn secondary-btn"
                              >Learn more</a
                            >
                          </p>
                        </div>
                      </div>
                    </div>

                    <hr class="navbar-divider" />
                    <div class="navbar-item is-footer is-hidden-mobile">
                      <div class="navbar-content">
                        <div class="level is-mobile">
                          <div class="level-left">
                            <div class="level-item">
                              <strong>Follow us</strong>
                            </div>
                          </div>
                          <div class="level-right">
                            <div class="level-item">
                              <a class="social-link" href="#"
                                ><i class="fa fa-twitter"></i
                              ></a>
                              <a class="social-link" href="#"
                                ><i class="fa fa-facebook"></i
                              ></a>
                              <a class="social-link" href="#"
                                ><i class="fa fa-linkedin"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="menu-image is-hidden-mobile">
                      <img
                        src="assets/img/bg/shapes/megamenu-blue.svg"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Navbar item -->
              <a
                class="navbar-item is-slide is-centered-tablet is-hidden-desktop is-hidden-tablet"
                href="#"
              >
                Courses
              </a>
              <!--search-->
              <div class="navbar-item is-slide is-centered-tablet">
                <div class="component-block">
                  <div class="field">
                    <div class="control auto-cpl-control has-icons-left">
                      <input
                        id="basic-autocpl"
                        class="input is-medium autocpl w-35"
                        type="text"
                        placeholder="Search  ..."
                      />
                      <span class="icon is-left">
                        <i class="sl sl-icon-magnifier"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navbar end -->
            <div class="navbar-end">
              <!-- Navbar item -->
              <a
                class="navbar-item is-slide is-centered-tablet"
                href="login.html"
              >
                Login
              </a>
              <!-- Signup button -->
              <div class="navbar-item is-button is-centered-tablet">
                <a
                  id="#signup-btn-double"
                  href="signup.html"
                  class="button button-cta is-bold btn-align secondary-btn raised"
                >
                  Sign up
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- Bulma steps -->
    <div class="section">
      <div class="container">
        <div id="step-form" class="section-title-wrapper has-text-centered">
          <div class="bg-number">@</div>
          <h2 class="title section-title has-text-centered dark-text text-bold">
            Create Candidates
          </h2>
        </div>
		<form id=""method="post"action="insert.php"enctype="multipart/form-data">
        <div class="columns mt-20">
          <div class="column is-8 is-offset-2">
            <!-- Wrapper -->
            <div class="steps-wrapper">
              <!-- Indicators -->
              <div class="steps" id="stepsDemo">
                <!-- Indicator -->
                <div class="step-item is-active">
                  <div class="step-marker">1</div>
                  <div class="step-details">
                    <p class="step-title">Account</p>
                  </div>
                </div>
                <!-- Indicator -->
                <div class="step-item">
                  <div class="step-marker">2</div>
                  <div class="step-details">
                    <p class="step-title">Profile Image</p>
                  </div>
                </div>
                <!-- Indicator -->
                
                <!-- Indicator -->
                <div class="step-item">
                  <div class="step-marker">3</div>
                  <div class="step-details">
                    <p class="step-title">Finish</p>
                  </div>
                </div>
                <!-- Steps content wrapper -->
                <div class="steps-content">
                  <!-- Step content -->
                  <div class="step-content has-text-centered is-active">
                    <!-- Field -->
                    <div class="field">
                      <div class="field-label is-normal">
                        <label class="label">Full name</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <div class="control">
                            <input class="input"name="fullname" id="fullname" type="text" placeholder="Username" autofocus data-validate="require"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Field -->
                    <div class="field">
                      <div class="field-label is-normal">
                        <label class="label">Title</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <div class="control has-icon has-icon-right">
                            <input class="input"type="text"name="title" id="title" placeholder="Occupation" data-validate="require"/>
                          </div>
                        </div>
                      </div>
                    </div>
					     <!-- Field -->
                    <div class="field">
                      <div class="field-label is-normal">
                        <label class="label">Email</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <div class="control has-icon has-icon-right">
                            <input class="input"type="email"name="email" id="email" placeholder="email" data-validate="require"/>
                          </div>
                        </div>
                      </div>
                    </div>
					     <!-- Field -->
                    <div class="field">
                      <div class="field-label is-normal">
                        <label class="label">D.O.B</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <div class="control has-icon has-icon-right">
                            <input class="input"type="date"name="dob" id="dob" data-validate="require"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Field -->
                    <div class="field">
                      <div class="field-label is-normal">
                        <label class="label">Aspiring</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <div class="control has-icon has-icon-right">
                            <select class="chosen-select" data-placeholder="Select category"name="asp"id="asp">
                              <option label="Select category"></option>
                            <?php foreach($arr as $list): ?>
                              
                              <option value="<?php echo $list["post_id"];?>"><?php echo $list["name"];?></option>
                             
                              <?php endforeach;?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
					 <!-- Field -->
                    <div class="field">
                      <div class="field-label is-normal">
                        <label class="label">Description</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <div class="control has-icon has-icon-right">
							<textarea class="textarea is-grow" rows="5"name="desc"id="desc" placeholder="Description ..."></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Step content -->
                  <div class="step-content has-text-centered">
                    <!-- Field photo -->
                    <div class="columns is-vcentered pb-60">
                      <div class="column"></div>
                      <div class="column is-5">
                        <div id="uploade" class="section-wrapper">
                          <div class="uploader-controls has-text-centered animated preFadeInUp fadeInUp">
                            <input type="file" name="file"id="file"/>
                          </div>
                        </div>
                      </div>
                      <div class="column"></div>
                    </div>
                    <!-- profile photo end-->
                  </div>
					
                 <div class="step-content has-text-centered">
				 <a class="button button-cta btn-danger is-bold" name="submit"id="submit"type="submit">Create</a>
                    <!--<img class="confirm-image" src="assets/img/illustrations/icons/account.svg"/>
                    <h1 class="title is-5">Instructor is now created!</h1>-->
                  </div>
                </div>
                <!-- Steps Navigation -->
                <div class="steps-actions">
                  <div class="steps-action">
                    <a href="#" data-nav="previous" class="button is-light button-cta is-bold btn-align">Back</a>
                    <a href="#"data-nav="next" class="button secondary-btn button-cta is-bold raised btn-align" >Next</a >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		</form>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="columns job-results-wrapper">
          <div class="column is-4 is-hidden-mobile">
		<br/>
		  <h3 class="title is-4">Category</h3>
		  <form>
		  <div class="control-material is-primary">
			<input class="material-input" type="text" placeholder="Enter category Title ">
		</div>
		<br/>
		<div class="control-material is-primary">
			<textarea class="textarea is-grow" rows="5" placeholder="Focus me, i can grow ..."></textarea>
		</div>
		<div class="control-material">
		<a class="button button-cta btn-danger is-bold ">Create</a>
		</div>
		  </form>
              <div class="checkbox-list pt-30">
                <ul>
                  <li>
                    <div class="field pb-5">
                      <div class="control">
                        <label class="checkbox-wrap is-small muted-text">
                          <input id="check1"type="checkbox" class="d-checkbox"/>
                          <span></span>
                          Artificial Intelligence (30)
                        </label>
                      </div>
                    </div>
                  </li>
               
                
                
                  <li></li>
                </ul>
              </div>
		  
		  
		  <a class="button button-cta btn-danger is-bold ">Delete</a>
		  
		  </div>
		  
		  <!-- stop-->
          <div class="column is-6">
            <div class="job-results">
              <div class="job-results-section">
                <h3 class="title is-4">Recently Added</h3>

                <div class="result-list">
                  <!--Job Result-->
                  <a class="result-list-item" href="single-user.html">
                    <img src="" data-demo-src="assets/img/logos/custom/slicer.svg"alt=""/>
                    <div class="meta">
                      <span>Dr.Vokee Okpeka (PhD)</span>
                      <div class="details">
                        <span>
						<i class="sl sl-icon-user"></i> Artificial
                          Intelligence</span>
						  <br/>
                        <span class="time">
						<i class="sl sl-icon-clock"></i> Apr 12, 2020</span >
                      </div>
                    </div>
                    <div class="end">
                      <button class="button is-small btn-align danger-btn raised rounded btn-outlined" >
                        Delete
                      </button>
                    </div>
                  </a>
                  <!--Job Result-->
                
             

              
                  <!--Job Result-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Dark footer -->
    <footer id="dark-footer" class="footer footer-dark">
      <div class="container">
        <div class="columns">
          <div class="column is-4">
            <div class="footer-column">
              <div class="footer-header">
                <div class="footer-logo">
                  <img src="assets/img/logos/MITLogoIcon.png" alt="" />
                </div>
              </div>
              <h4>
                Founded in 2015, our forward-thinking institute is building a
                community of great minds in MIT where you get real tech world
                experience, a breadth of current & up to date globally relevant
                and practical knowledge, and a head start to the career you
                need.
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
                <h3>Links</h3>
              </div>
              <ul class="link-list">
                <li class="column-item"><a href="#">About Us</a></li>
                <li class="column-item"><a href="#">Careers</a></li>
                <li class="column-item"><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                <h3>Resources</h3>
              </div>
              <ul class="link-list">
                <li class="column-item"><a href="#">Projects</a></li>
                <li class="column-item"><a href="#">Support center</a></li>
                <li class="column-item">
                  <a href="#">FAQs</a>
                </li>
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
                <span class="moto light-text"
                  >Alright Reserved <i class="fa fa-heart color-red"></i> by
                  Frequency.</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Dark footer -->
    <!-- Side navigation -->
    <div class="side-navigation-menu">
      <!-- Categories menu -->

      <!-- Navigation menu -->
      <div
        id="demo-pages"
        class="navigation-menu-wrapper animated preFadeInRight fadeInRight"
      >
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
          <span>Dashboard</span>
          <a
            class="ml-auto hamburger-btn navigation-close"
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
        <!-- Navigation Body -->
        <ul class="navigation-menu">
          <li class="">
            <a class="" href="index.html"
              ><span class="material-icons">weekend</span> Admin Dashboard</a
            >
          </li>
          <li class="">
            <a class="" href="manage-user.html"
              ><span class="material-icons">wb_incandescent</span>Manage admin
              user</a
            >
          </li>
          <li class="">
            <a class="parent-link" href="#"
              ><span class="material-icons">apps</span> Activity</a
            >
          </li>

          <li class="">
            <a class="" href="#"
              ><span class="material-icons">backspace</span>Logout</a
            >
          </li>
        </ul>
      </div>
      <!-- /Navigation menu -->
    </div>
    <!-- /Side navigation -->
    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>
    <!-- Concatenated jQuery and plugins -->
    <script src="assets/js/app.js"></script>
	<script src="assets/js/jquery-3.3.1.min"></script>
	 <script src="raw.js"></script>
	 

    <!-- Bulkit js -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script src="assets/js/bulma-steps.min.js"></script>
  </body>
</html>
