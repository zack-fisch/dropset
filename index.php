<?php
    $to = 'zack@zfisch.com';
    $subject ='Dropset Work Request';

    $name = $_POST['Name'];
    $company = $_POST['Company'];
    $email = $_POST['Email_Address'];
    $message = $_POST['Description'];
    $message = <<<EMAIL

 From: $name
 
 $message

 Email: $email   

EMAIL;

$header = $subject;

if($_POST) {
    mail($to, $subject, $message, $header);
    $feedback = 'Email sent!';
}

?>

<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dropset Studios | Web Design and Development</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="dropsetindex.css" rel="stylesheet" type="text/css">
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="dropsetimages/favicon.png"/>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script src="jquery-2.1.3.min.js"></script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
</head>
<body>
	<!-- top button -->
    <a href="#header"><div id="go_to_top_button"><img src="dropsetimages/rocket.png"/></div></a>
	<!-- Above the fold -->
    <div class="page_top">
		<div id="header">
        	<div id="logo_holder"></div>
        </div>
        <h1 class="tagline">WEB DESIGN <span id="tagline_and"><br>&<br></span> DEVELOPMENT</h1>
        <a href="#section3">
            <div class="CTA_main">
                GET IN TOUCH
            </div>
        </a>
        <div class="spacer_100"></div>
	</div>
    <!-- section 1 -->
    <div id="section1" class="section">
    	<div class="section_holder">
        	<div id="section1_content">
            	<div class="title_bar_blue"></div>
            	<h2 class="title_white">SMALL & POWERFUL</h2>
                <p class="text_grey">We're a small team, allowing us to give you the attention you deserve. We'll work closely with you to ensure that your ideas are thoroughly understood and implemented well.<br><br> All hands on deck.</p>
                <div class="spacer_40"></div>
                <a href="#section3">
            		<div class="CTA_2">
               			 GET STARTED
            		</div>
        		</a>
            </div>
        </div>
    </div>
    <!-- section 2 -->
    <div id="section2" class="section">
    	<div class="section_holder">
        		<div class="spacer_100"></div>
            	<div class="title_bar_blue_middle"></div>
            	<h2 class="title_white_center">OUR WORK</h2>
                <p class="text_grey_center">We’re not just pixel-pushers and software gurus.<br> We’re great partners who bring your ideas to life. See for yourself:</p>
                <!--work items-->
                <div id="section2">
                	<div class="spacer_40"></div>
                    <a href="#null">
                        <div id="babychronicles" class="work_item">
                            <div class="work_overlay">
                                <p class="work_title">Baby Chronicles</p>
                                <div class="title_bar_white"></div>
                                <p class="work_description">Web App Design & Development<br><i>(Case study coming soon...)</i></p>
                            </div>
                        </div>
                    </a>
                    <a href="#null">
                        <div id="test_item" class="work_item">
                            <div class="work_overlay">
                                <p class="work_title">North Star Leasing</p>
                                <div class="title_bar_white"></div>
                                <p class="work_description">Branding, Web Design & Development<br><i>(Case study coming soon...)</i></p>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    <!-- section 3 -->
    <div id="section3" class="section">
    	<div class="section_holder">
        		<div class="spacer_100"></div>
            	<div class="title_bar_blue_middle"></div>
            	<h2 class="title_black_center">CONTACT US</h2>
                <p class="text_grey2_center">Get in touch to start creating the best digital experience for your customers and your users.</p>
                <p id='feedback'><?php echo $feedback; ?></p>
    	<form id="contact_us" enctype="text/plain" method="post" action="?">
        	<input class="form_field" type="text" name="Name" placeholder="Full Name">
            <br>
            <input class="form_field" type="text" name="Company" placeholder="Company Name">
            <br>
            <input class="form_field" type="email" name="Email_Address" placeholder="Email Address">
            <br>
            <textarea class="form_field" rows="10" cols="20" name="Description" wrap="hard" placeholder="Project Description"></textarea>
            <br>
            <p id="required"><i>Please fill in all the fields*</i></p>
            <input class="submit" type="submit" value="SUBMIT">
        </form>
        <div class="spacer_100"></div>
        </div>
    </div>
    <!-- footer -->
    <div id="footer">
    	<div class="section_holder">
        	<div id="copyright">&copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> Dropset Studios</div>
            <a href="https://dribbble.com/wlebovics"><div class="social_link"><img src="dropsetimages/icon_dribbble.png"/></div></a>
            <!--<a href="#"><div class="social_link"><img src="dropsetimages/icon_insta.png"/></div></a>-->
            <a href="https://www.linkedin.com/company/9246560?trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1424501572954%2Ctas%3Adropset%20&trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1424501572954%2Ctas%3Adropset%20"><div class="social_link"><img src="dropsetimages/icon_linkedin.png"/></div></a>
            <!--<a href="#"><div class="social_link"><img src="dropsetimages/icon_facebook.png"/></div></a>-->
            <a href="mailto:wlebovics@gmail.com?subject=Dropset - Work Inquiry"><div class="social_link"><img src="dropsetimages/icon_email.png"/></div></a>
        </div>
    </div>
</body>
</html>
