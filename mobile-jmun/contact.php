 <?php

$db_host="localhost";
$db_user="jmun2015";
$db_pass="letsdoit";
$db_name="jmun";

if(isset($_POST['submit']))
{

$name =$_POST['name'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];	
$comments =$_POST['comments'];	

$connect = mysql_connect($db_host,$db_user,$db_pass) or die("Could not Connect");
mysql_select_db("jmun",$connect) or die("Database not found");;	   	  


  
$qry=mysql_query("INSERT INTO contact_us_form (name,mobile,email,comments) VALUES  
        ('$name','$mobile','$email','$comments')");   
		
header("Location: index.php");

}		

?>

<!DOCTYPE html>
<html lang="en"> 


<head>
<meta property="og:title" content="Contact: Jaypee Model United Nations"/>
<meta property="og:image" content="../../../../jmun.co.in/images/uc.png"/>
<meta property="og:site_name" content="JMUN.co.in"/>
<meta property="og:url" content="https://www.jmun.co.in/14/contact.php"/>
<meta property="og:description" content="Parola Literary Hub JIIT Noida presents Jaypee Model United Nations Conference scheduled to be held on 22nd and 23rd February 2014."/>

<meta charset="utf-8">
<title>Contact US | JMUN</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/colors/green.css" id="colors">

<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.okrdx.01.min.js"></script>
<script src="scripts/jquery.okrdx.02.min.js"></script>
<script src="scripts/jquery.okrdx.03.min.js"></script>
<script src="scripts/jquery.easing.min.js"></script>
<script src="scripts/jquery.tooltips.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.twitter.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/jquery.contact.js"></script>
<script src="scripts/jquery.isotope.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="scripts/jquery.gmaps.min.js"></script>
</head>
<body>

<div id="content-wrapper">
<section id="titlebar">
	<div class="container">
		<div class="eight columns">
			<h2><a href="index.html">BACK</a></h2>
		</div>
		
	</div>
</section>
<div class="container">
	<div class="sixteen columns">
		<section class="google-map-container">
			<div id="googlemaps" class="google-map google-map-full"></div>
			<script type="text/javascript">
				jQuery('#googlemaps').gMap({
					maptype: 'ROADMAP',
					scrollwheel: false,
					zoom: 14,
					markers: [
						{
							address: 'Jaypee Institute of Information Technology, Sector 62',
							html: '',
							popup: false,
						}
					],
				});
			</script>
		</section>
	</div>
</div>
<div class="container">
		<div class="sixteen columns">
			<h3 class="headline">Information</h3><span class="line" style="margin-bottom:30px;"></span><div class="clearfix"></div>
		<p>Thank you for your interest in <span class="highlight color">Jaypee Model United Nations</span>. </p>
		<p>Executive Board, Food, Hospitality, Management, from everything to anything, tell us about it. We welcome your comments, critical appreciation so as to improve ourselves.</p>
		<p>Or you just want to grab a coffee and chat with us about politics, world issues,youth, culture, you are most welcome to come visit the campus and chat with us here or drop us an email. </p>
		<p>For JMUN-2015-related enquiries, please see the FAQ section before sending us an email, as you may be able to find your answers there , just by clicking on them. </p>
		<p>If you are experiencing problems with the online application system, please see the <a href="#" class="tooltip bottom" title="Click to open it" target="_blank">applications guidelines</a> page. In case you are unable to find an answer to your question, please email and we will do our best to help you.</p>
		<ul class="contact-informations second">
			<li><i class="icon-envelope-alt"></i> <p>jpmun2015@jmun.co.in</p></li>
		</ul>
		</div>
</div>
<div style="margin: 35px 0;"></div>
<div class="container">
<div class="twelve alt columns">
	<h3 class="headline" style="color:white;">Contact Form</h3><span class="line" style="margin-bottom: 35px;"></span><div class="clearfix"></div>
	<section id="contact">
		<mark id="message"></mark>
		<form method="post" action=" " name="contact2" id="contact">
			<fieldset>
				<div>
					<label for="name" accesskey="U">Name: <span>*</span></label>
						<input name="name" type="text" id="name2" required/>
				</div>
				<div>
					<label for="mobile" accesskey="M">Mobile: <span>*</span></label>
					<input name="mobile" type="text" id="mobile2" pattern="[0-9]{10}" required/>
				</div>
				<div>
					<label for="email" accesskey="E">Email: <span>*</span></label>
					<input name="email" type="email" id="email2" required pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
				</div>
				<div>
					<label for="comments" accesskey="C">Message: <span>*</span></label>
					<textarea style="background:transparent;"name="comments" cols="40" rows="3" id="comments2" required spellcheck="true"></textarea>
				</div>
			</fieldset>
			<input type="submit" class="submit" id="submit2" name="submit" value="Send Message" />
			</form>
	</section>
</div>
<div class="four columns">
	<div class="widget" style="margin-top:0;">
		<h3 class="headline" style="color:white;">Enquiries</h3><span class="line"></span><div class="clearfix"></div>
			<ul class="contact-informations second">
			<li><i class="icon-chevron-right"></i> <p>Delegate</p></li>
			<li><i class="icon-user"></i> <p>Jaya Singh</p></li>
			<li><i class="icon-globe"></i> <p>+91 8130082338</p></li>
		</ul>
		<ul class="contact-informations second">
			<li><i class="icon-chevron-right"></i> <p>Press and media</p></li>
			<li><i class="icon-user"></i> <p>Jishnu Girotra</p></li>
			<li><i class="icon-globe"></i> <p>+91 7838541369</p></li>
		</ul>
		<ul class="contact-informations second">
			<li><i class="icon-chevron-right"></i> <p>Outreach</p></li>
			<li><i class="icon-user"></i> <p>Ritwik Wadhwa</p></li>
			<li><i class="icon-globe"></i> <p>+91 958296636</p></li>
		</ul>
		<ul class="contact-informations second">
			<li><i class="icon-chevron-right"></i> <p>Charity</p></li>
			<li><i class="icon-user"></i> <p>Tabish Tarique</p></li>
			<li><i class="icon-globe"></i> <p>+91 9971212897</p></li>
		</ul>
	
	</div>
</div>
</div>
</div>
<br />


<script>
function analytics(variable)
{
var ip = document.getElementById("ip").value;
var index = variable.id;
var url = document.URL;
if (window.XMLhttpsRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttps=new XMLhttpsRequest();
  }
else
  {// code for IE6, IE5
  xmlhttps=new ActiveXObject("Microsoft.XMLhttps");
  }
xmlhttps.open("GET.html","analyticsb099.html?ip="+ip+"&url="+url+"&index="+index,true);
xmlhttps.send();
}

</script>
<input id="ip" type="hidden" value=""/>
 <script type="text/javascript">
     $.getJSON("https://jsonip.appspot.com/?callback=?",

    function (data) {

        document.getElementById("ip").value = data.ip;

    });

 </script>

		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-45191891-1', 'jmun.co.in');
		ga('send', 'pageview');

		</script>
		
		<script type="text/javascript">
$(document).ready(function(){
 $('#leftfbicon').click(function(){
	 if ( $("div.fblikerbox:visible").length === 0) {
		  $(".fblikerbox").animate({width:'toggle'},600);
		  $('.fblikerbox').css('top','-10px');
		  $('.fblikerbox').css('right','-292px');
		  $('.fblikerbox').css('z-index','9999');
		  $('#leftfbicon').css('right','292px');
		  $('#leftfbicon').css('top','303px');
	 }else {
		 $(".fblikerbox").animate({width:'toggle'},600);
		  $('#leftfbicon').css('right','0px');
		  $('#leftfbicon').css('top','303px');
	 }
  return false;
 });
});
</script>

		<style type='text/css'>

#fbplikebox{display: block;padding: 0;z-index: 99995;position: fixed;}
.fbplbadge {display: block;height: 100px;top: 40%;margin-top: -75px;position: absolute;left: -30px;width: 30px;background-image: url('images/facebook.jpg');background-repeat: no-repeat;overflow: hidden;-webkit-border-top-left-radius: 8px;-webkit-border-bottom-left-radius: 8px;-moz-border-radius-topleft: 8px;-moz-border-radius-bottomleft: 8px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;}
#twitterbox{display: block;padding: 0;z-index: 98999;position: fixed;}
.twbadge {display: block;height: 100px;top: 70%;margin-top: -75px;position: absolute;left: -30px;width: 30px;background-image: url('images/twitter.jpg');background-repeat: no-repeat;overflow: hidden;-webkit-border-top-left-radius: 8px;-webkit-border-bottom-left-radius: 8px;-moz-border-radius-topleft: 8px;-moz-border-radius-bottomleft: 8px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;}

</style>
<script type='text/javascript'>

    (function(w2b){
        w2b(document).ready(function(){
            var $dur = 'medium'; // Duration of Animation
            w2b('#twitterbox').css({right: -250, 'top' : 50 })
            w2b('#twitterbox').hover(function () {
			    w2b('#fbplikebox').hide();
                w2b(this).stop().animate({
                    right: 0
                }, $dur);
            }, function () {
			    w2b('#fbplikebox').show();
                w2b(this).stop().animate({
                    right: -250
                }, $dur);
            });
            w2b('#twitterbox').show();
        });
    })(jQuery);
    (function(w2b2){
        w2b2(document).ready(function(){
            var $dur = 'medium'; // Duration of Animation
            w2b2('#fbplikebox').css({right: -250, 'top' : 50 })
            w2b2('#fbplikebox').hover(function () {
                w2b2(this).stop().animate({
                    right: 0
                }, $dur);
            }, function () {
                w2b2(this).stop().animate({
                    right: -250
                }, $dur);
            });
            w2b2('#fbplikebox').show();
        });
    })(jQuery);
/*]]>*/
</script>
<div id='fbplikebox' style='display:none;'>
    <div class='fbplbadge'></div> 
    <iframe src='https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Ffacebook.com%2FJaypeeMUN&amp;width=250&amp;height=500&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23C4C4C4&amp;stream=true&amp;header=false' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:250px; height:495px;background:#FFFFFF;' allowtransparency='true'></iframe>
</div>
<div id='twitterbox' style='display:none;'>
<div class='twbadge'></div> 
<div style='border:none; overflow:hidden; width:250px; height:495px;background:#FFFFFF;'>
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/JaypeeMUN"  data-widget-id="404377021108596736">Tweets by @JaypeeMUN</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^https:/.test(d.location)?'https':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div></body>

</html>
