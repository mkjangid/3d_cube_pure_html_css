<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--CSS file -->
		<link type="text/css" rel="stylesheet" href="resume.css" />
		<!--Font Merienda one from google fonts file -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Merienda+One" />
		<!--Font awesome link-->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
		<!-- bxSlider CSS file-->
		 <link type="text/css" rel="Stylesheet" href="basic-jquery-slider/bjqs.css" />
		<!--link href="bxslider/jquery.bxslider.css" rel="stylesheet"/-->
		<!--Jquery CSS file --->
		<link rel="stylesheet" href="/jquery-ui-1.11.4/jquery-ui.min.css">
		<title>Manish Jangid</title>
	</head>
	
	<body>
	<!--?php include_once("analyticstracking.php") ?-->
	<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!--script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script-->
	<!--Jquery UI source files-->
	<script src="/jquery-ui-1.11.4/external/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/jquery-ui-1.11.4/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
	<!--Quotes api --> 
	<script src="http://quotesondesign.com/api/3.0/api-3.0.js" type="text/javascript" charset="utf-8"></script>
	<!--script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<!--script language="javascript" type="text/javascript" src="jquery-1.11.1.js"></script-->
	<script type="text/javascript" src="resume.js" type="text/javascript" charset="utf-8"></script>
	<!-- Includes the slide plugin *after* the jQuery library -->
	<script src="basic-jquery-slider/js/bjqs-1.3.min.js" type="text/javascript" charset="utf-8"></script>
		<nav>	
			<ul id="nav" >
				<li><button class="front contact navmenubtn">Get in touch</button></li>
				<li><button class="right navmenubtn">Education</button></li>
				<li><button class="back navmenubtn">Where Am I Now ? </button></li>
				<li><button class="top skill navmenubtn">Skills</button></li>
				<li><button class="left navmenubtn">Email_me</button></li>
				<li><button class="down quote navmenubtn">Quotes</button></li>
			</ul>
		</nav>
		<img id="work_in_progress_pic" src="http://vignette3.wikia.nocookie.net/gotascent/images/c/c0/Work_In_Progress.png/revision/latest?cb=20140715110801" width="200px"/>
		<div id="instructions">
			Use arrow keys to navigate
		</div>
		<section class="container">
			<div id="cube">
				<div class="face about_contact front">
					<img class="rubik" src="http://ih1.redbubble.net/image.22455953.9484/flat,800x800,075,t.jpg" alt="rubic cube"/>
					<!--img src="http://i57.tinypic.com/rrobbb.jpg" border="0" alt="Profile Pic from TinyPic"-->
					<!--div id="circ" ></div-->
					<svg id="svgcirc" width="400" height="400" xmlns="http://www.w3.org/2000/svg">
						<!-- Created with SVG-edit - http://svg-edit.googlecode.com/ -->
						<!--circle fill-opacity="0" id="svg_1" r="120" cy="200" cx="200" stroke-width="7" stroke="#065b10" fill="#ff0000"/-->
						<path id="path1" d=" M 200, 200 m -120, 0 a 120,120 0 1,0 240,0 a 120,120 0 1,0 -240,0" stroke-width="7" stroke="#065b10" fill-opacity="0" fill=none/>
					</svg>
					<div id="image-cont">
						<!--img id="a" src="http://s12.postimg.org/ezpzo4819/random.jpg" border="0" alt="Profile Pic from TinyPic"-->
					</div>
					<div id="text1">
						<span id="edit1" style="font-size:20px" ></span>
						<span id="edit2"></span>
						<span id="edit3"></span>
						<span id="cursorf" class="cursor"><img class ="svgcurs" src="/images/curs.svg" alt="cursor"></span>
					</div>	
				</div>	
				
				<div class="face random_quote down">
					<img class="rubik" src="http://ih1.redbubble.net/image.22455953.9484/flat,800x800,075,t.jpg" alt="rubic cube"/>
					<div id="textard">
						<!--blockquote id="qod-quote">... loading ...</blockquote-->
						<blockquote id="qod-quote">
						   <p class="qod-text">
							  Keep it simple, stupid!
						   </p>
						   <p class="qod-author">
							  <a target="_blank" href="http://quotesondesign.com/?p=194">&mdash; Old Saying </a>
						   </p>
						</blockquote>
						<blockquote id="myquote">
							<span id="edit-text"></span>
							<span id="edit-author"></span>
							<span id="cursord" class="cursor"><img class ="svgcurs" src="/images/curs.svg" alt="cursor"></span>
						</blockquote>
					</div>
				</div>
				
				<div class="face education right">
					<img class="rubik" src="http://ih1.redbubble.net/image.22455953.9484/flat,800x800,075,t.jpg" alt="rubic cube"/>
					<div id="education_container">
						<div id="education_heading">
							<h2>Education</h2>
						</div>
						<div id="education_slider1">
							<ul class="bjqs">
							<li>
								<div id="education_graduate_school_name_cont">
									<div id="education_graduate_school_logo">
										<!--img id="iitd_log_pic" src="https://upload.wikimedia.org/wikipedia/en/6/66/IIT_Delhi_logo.gif" alt="IITD_logo"/-->
									</div>
									<div id="education_graduate_school_name">
										<h3>IIT Delhi<br>
										Class of 2015</h3>
									</div>
								</div>
							</li>
							<li>
								<div id="education_graduate_school_gpa">
									B. Tech<br>
									Electrical Engineering<br>
									GPA - 7.75
								</div>
							</li>
							<li>
								<div id="education_graduate_school_course1">
									Data Structures<br>
									Computer Architecture<br>
									Computer System Software<br>
								</div>  
							</li>
							<li>
								<div id="education_graduate_school_course2">
									Computer Vision <br>
									Operating Systems<br>
									Multimedia Systems
								</div>
							</li>
							<li>
								<div id="education_graduate_school_course3">
									Digital Electronic Circuits<br>
									Signals and Systems<br>
									Digital Signal Processing<br>
								</div>
							</li>
							</ul>
						</div>
						<div id="education_slider2">
									<div id="education_senior_school_label">
									XII
									</div>
									<div id="education_senior_school_board">
									CBSE
									</div>
									<div id="education_senior_school_marks">
									89.4%
									</div>
						</div>
						<div id="education_slider3">
							<div id="education_junior_school_label">
										X
							</div>
							<div id="education_junior_school_board">
										CBSE
							</div>
							<div id="education_junior_school_marks">
								      92.6%
							</div> 
						</div>
							<!--div id="education_graduate_school_image_slider_circle">
									<i class="fa fa-circle active_slider"></i>&nbsp;<i class="fa fa-circle-o">&nbsp;</i><i class="fa fa-circle-o"></i>&nbsp;<i class="fa fa-circle-o"></i>&nbsp;<i class="fa fa-circle-o"></i>
							</div-->
					</div>
				</div>
					
				<div class="face work_exp back">
					<img class="rubik" src="http://ih1.redbubble.net/image.22455953.9484/flat,800x800,075,t.jpg" alt="rubic cube"/>
					<div id="work_exp_container">
						<div id="work_exp_title">
							<h2>Experience</h2>
						</div>
						<div id="work_exp1">
							&nbsp;<i class="fa fa-user"></i>&nbsp;Management Trainee<br>
							<i class="fa fa-university"></i>&nbsp;ICICI Bank - Digital Channels<br>
							&nbsp;<i class="fa fa-map-marker"></i>&nbsp;Mumbai&nbsp;&nbsp;&nbsp;
							<i class="fa fa-calendar"></i>&nbsp;Oct'15 - Jan'15
							<a href="http://www.icicibank.com" target="_blank">
								<div id="icici_logo">
								<!--img src="icici-bank-logo.png" alt="icici_bank_logo"/-->
								</div>
							</a>
						</div>
						<div id="work_exp2">
							&nbsp;<i class="fa fa-user"></i>&nbsp;Management Trainee<br>
							<i class="fa fa-university"></i>&nbsp;ICICI Bank - Business Intelligence<br>
							&nbsp;<i class="fa fa-map-marker"></i>&nbsp;Hyderabad&nbsp;&nbsp;&nbsp;
							<i class="fa fa-calendar"></i>&nbsp;Jul'15-Sept'15
							<a href="http://www.icicibank.com" target="_blank">
								<div id="icici_logo" >
								<!--img src="icici-bank-logo.png" alt="icici_bank_logo"/-->
								</div>
							</a>
						</div>
						<div id="work_exp3">
							&nbsp;<i class="fa fa-user"></i>&nbsp;Student Intern<br>
							<i class="fa fa-university"></i>&nbsp;SunSwitch India Ltd<br>
							&nbsp;<i class="fa fa-map-marker"></i>&nbsp;Delhi&nbsp;&nbsp;&nbsp;
							<i class="fa fa-calendar"></i>&nbsp;May'14- Jun'14<br>
							<a href="http://www.sunswitch.in" target="_blank">
								<div id="sunswitch_logo">
								<!--img src="sunswitch.png" alt="sunswitch_logo"/-->
								</div>
							</a>
						</div>
					</div>
				</div>
				
				
				<div class="face email_me left">
					<img class="rubik" id="rubel" src="http://ih1.redbubble.net/image.22455953.9484/flat,800x800,075,t.jpg" alt="rubic cube"/> 
					<!--object id= "rolling_svg" type="image/svg+xml" data="/images/rolling.svg">Your browser does not support SVG</object-->
					<img id="rolling_svg" src="/images/rolling.svg"/>
					<div id="email_sent_status_text">
								Eroor
					</div>
					<div id="email_me_container">
							<div id="email_me_heading">
								<h2>Message Me</h2>
							</div>
							<div id="email_me_form_fields_container">
									<div id="email_me_div_cont_name">
										<input type="text" name="name" size="37" id="email_me_field_name" placeholder="Your Name"><br><br>
									</div>
									<div id="email_me_field_name_error_div"></div>
									<div id="email_me_div_cont_email">
										<input type="text" name="email_id" size="37" id="email_me_field_email" placeholder="Your Email"> <br> <br>
									</div>
									<div id="email_me_field_email_error_div"></div>
									<div id="email_me_div_cont_name">
										<textarea name="email_message" rows="7" cols="40" id="email_me_field_message" placeholder= "Your Message" ></textarea>
									</div>
									<div id="email_me_field_message_error_div"></div>
									<div id="email_me_submit">
										<input type="submit" value="Send" name="send_email" id="email_me_button_submit">
									</div>
							</div>
						
					</div>
				</div>
				
				<div class="face skills top">
					<img class="rubik" id="rubet" src="http://ih1.redbubble.net/image.22455953.9484/flat,800x800,075,t.jpg" alt="rubic cube"/>
					<div id="textbox_skill_wrapper">
						<object class= "hzline" id="hzline1_skill" type="image/svg+xml" data="/images/hzline.svg">Your browser does not support SVG</object>
						<div id="textbox_skill">
							<span id="skill_rating_label">Beginner&nbsp;:&nbsp;Familiar&nbsp;:&nbsp;Proficient&nbsp;:&nbsp;Master&nbsp;:&nbsp;Expert</span>
							<table id="table_skill">
								<tr>
									<td><div class="ed-skill" id="edit-skill1"> JAVA,C/C++ </div></td>
									<td style="padding-left: 20px;" ><img id="skill_1_a"src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp;  
									<img id="skill_1_b" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_1_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_1_d" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_1_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
								<tr>
									<td><div class="ed-skill" id="edit-skill1"> HTML, CSS, SVG</div></td>
									<td style="padding-left: 20px;"><img id="skill_2_a" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_2_b" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_2_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_2_d" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_2_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
								<tr>
									<td><div class="ed-skill" id="edit-skill1"> Javascript, Jquery</div></td>
									<td style="padding-left: 20px;"><img id="skill_3_a" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_3_b" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_3_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_3_d"  src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_3_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
								<tr>
									<td><div class="ed-skill" id="edit-skill1"> MySQL, Django </div></td>
									<td style="padding-left: 20px;"><img id="skill_4_a" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_4_b" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_4_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_4_d" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_4_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
								<tr>
									<td><div class="ed-skill" id="edit-skill1">AngularJS</div></td>
									<td style="padding-left: 20px;"><img id="skill_5_a"  src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_5_b"  src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_5_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_5_d" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_5_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
								<tr>
									<td><div class="ed-skill" id="edit-skill1">Android Studio, GIT</div></td>
									<td style="padding-left: 20px;"><img id="skill_6_a" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_6_b" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_6_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_6_d" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_6_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
								<tr>
									<td><div class="ed-skill" id="edit-skill1">R, Hadoop</div></td>
									<td style="padding-left: 20px;"><img id="skill_7_a" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_7_b" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_7_c" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_7_d" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/>&nbsp;&nbsp; 
									<img id="skill_7_e" src="/images/pic_bulboff.gif" alt= "bulb_pic" width="20px"/></td>
								</tr>
							</table>
						</div>
						<object class= "hzline" id="hzline2_skill" type="image/svg+xml" data="/images/hzline.svg">Your browser does not support SVG</object>
					</div>
				</div>
				
				
			</div>
		</section>
	</body>
</html>
