 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$db_host="localhost";
$db_user="jmun2015";
$db_pass="letsdoit";
$db_name="jmun";


function s($str) {

		$str = @trim($str);

		if(get_magic_quotes_gpc()) {

			$str = stripslashes($str);
			$str = str_replace("'","", $str);

		}
	
		return ($str);

	}


if(isset($_POST['submit2']))
{

$name = s($_POST['qu1']);
$course = s($_POST['qu2']);
$college = s($_POST['qu3']);
$year = s($_POST['qu4']);
$dob = s($_POST['qu5']);
$phone = s($_POST['qu6']);
$email = s($_POST['qu7']);
$post = s($_POST['qu8']);
$exp_delegate = s($_POST['qu9']);
$exp_other = s($_POST['qu10']);
$ques11 = s($_POST['qu11']);

$con=mysqli_connect($db_host,$db_user,$db_pass,"jmun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"INSERT INTO ip (name,course,college,year,dob,phone,email,post,exp_delegate,exp_other,ques11 ) VALUES  
        ('$name','$course','$college','$year','$dob','$phone','$email','$post','$exp_delegate','$exp_other','$ques11')");
header("Location:../coming_soon/rs.html");

}		

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>JMUN | International Press Form</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>JMUN | International Press Form</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="../index.php"><span>Back</span></a>
						</div>
				</div>
				<form id="myform" class="fs-form fs-form-full" method="post" action=" ">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu1">What's your name?</label>
							<input class="fs-anim-lower" id="qu1" name="qu1" type="text" placeholder="Enter your name here" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu2">Course Structure</label>
							<input class="fs-anim-lower" id="qu2" name="qu2" type="text" placeholder="What are you pursuing?" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu3">School/College</label>
							<input class="fs-anim-lower" id="qu3" name="qu3" type="text" placeholder="Enter your School/College Name" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu4">Year/Class</label>
							<input class="fs-anim-lower" id="qu4" name="qu4" type="text" placeholder="What are you pursuing?" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu5">Date of Birth</label>
							<input class="fs-anim-lower" id="qu5" name="qu5" type="text" placeholder="DD/MM/YYYY" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu6">Phone No</label>
							<input class="fs-anim-lower" id="qu6" name="qu6" type="text" placeholder="09876543210" required/>
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu7" data-info="We won't send you spam, we promise...">What's your email address?</label>
							<input class="fs-anim-lower" id="qu7" name="qu7" type="email" placeholder="abc@xyz.com" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu8">Which post would you like to apply for?<br><span style="font-size:18px;">Editor / Journalist / Photographer / Caricaturist</span><br><span  style="font-size:15px;">If applying for the post of PHOTOGRAPHER, send us 5 pictures from your work to <span style="color:yellow;">jpmun2015@gmail.com</span></span></label>
							<textarea class="fs-anim-lower" id="qu8" name="qu8" placeholder="Mention here"></textarea>
						
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu9">MUN Experience as International Press</label>
							<textarea class="fs-anim-lower" id="qu9" name="qu9" placeholder="Describe here"></textarea>
						
						</li>
                        <li>
							<label class="fs-field-label fs-anim-upper" for="qu10">Other Related Experiences </label>
							<textarea class="fs-anim-lower" id="qu10" name="qu10" placeholder="Describe here"></textarea>
						
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" style="font-size:20px;" for="qu11">For Reporters:
                                                                                                                 Write an Editorial article on 
                                                                                                                 "Indian Prime Minister Narendra Modi's maiden speech at the UN General Assembly" in not more than 300 words.</label>
							<textarea class="fs-anim-lower" id="qu11" name="qu11" placeholder="Describe here"></textarea>
						</li>
                    
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit" id="submit2" name="submit2">Send answers</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>