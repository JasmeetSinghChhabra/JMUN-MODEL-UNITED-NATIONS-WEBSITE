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
$age = s($_POST['qu2']);
$year = s($_POST['qu3']);
$institute = s($_POST['qu4']);
$phone = s($_POST['qu5']);
$email = s($_POST['qu6']);
$a=s($_POST['qu7']);
$b= s($_POST['qu8']);
$c= s($_POST['qu9']);
$d= s($_POST['qu10']);
$e= s($_POST['qu11']);
$f = s($_POST['qu12']);
$g = s($_POST['qu13']);
$h= s($_POST['qu14']);
$i = s($_POST['qu15']);
$j = s($_POST['qu16']);
$k = s($_POST['qu17']);


$con=mysqli_connect($db_host,$db_user,$db_pass,"jmun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"INSERT INTO delegate (name,age,year,institute,phone,email,committee1,country1,committee2,country2,committee3,country3,muns,experience,ques1,ques2,acc) VALUES  
        ('$name','$age','$year','$institute','$phone','$email','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");
		
header("Location:../coming_soon/rs.html");

}		

?>
<!--[if IE]>
<?php //header("Location:/coming_soon/rs.html");
?>
<![endif]-->
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>JMUN | Delegate Form</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
					<h1>JMUN | Delegate Form</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="../index.php"><span>Back</span></a>
						</div>
				</div>
                <form id="myform" class="fs-form fs-form-full" method="post" action=" " >
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu1">What's your name?</label>
							<input class="fs-anim-lower" id="qu1" name="qu1" type="text" placeholder="Enter your name here" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu2">Age</label>
							<input class="fs-anim-lower" id="qu2" name="qu2" type="text" placeholder="Enter your age" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu3">Course-Year/Class</label>
							<input class="fs-anim-lower" id="qu3" name="qu3" type="text" placeholder="Enter here" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu4">Institution Name</label>
							<input class="fs-anim-lower" id="qu4" name="qu4" type="text" placeholder="Enter here" required/>
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu5">Phone No</label>
							<input class="fs-anim-lower" id="qu5" name="qu5" type="text"  required/>
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu6" data-info="We won't send you spam, we promise...">What's your email address?</label>
							<input class="fs-anim-lower" id="qu6" name="qu6" type="email"  required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" style="font-size:20px;" for="qu7" >
                            
                            Committee Preference 1<br>
						1. UN GENERAL ASSEMBLY (DISEC)<br>
						2. INTERNATIONAL ATOMIC ENERGY AGENCY <br>
						3. UN HUMAN RIGHTS COUNCIL <br>
						4. UN COMMISSION ON SCIENCE AND TECHNOLOGY FOR DEVELOPMENT <br>
						5. NATIONAL SECURITY COUNCIL 
						</label>
						<input class="fs-anim-lower" id="qu7" name="qu7" type="text" placeholder="eg:3" required/>
						</li>
						 <li>
							<label class="fs-field-label fs-anim-upper" for="qu8">Enter your 3 country/portfolio preferences</label>
							<textarea class="fs-anim-lower" id="qu8" name="qu8" placeholder="India,England,Canada"></textarea>					            									
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" style="font-size:20px;" for="qu9" >
                            
                            Committee Preference 2<br>
						1. UN GENERAL ASSEMBLY (DISEC)<br>
						2. INTERNATIONAL ATOMIC ENERGY AGENCY <br>
						3. UN HUMAN RIGHTS COUNCIL <br>
						4. UN COMMISSION ON SCIENCE AND TECHNOLOGY FOR DEVELOPMENT <br>
						5. NATIONAL SECURITY COUNCIL 
						</label>
						<input class="fs-anim-lower" id="qu9" name="qu9" type="text" placeholder="eg:3" required/>
						</li>
						 <li>
							<label class="fs-field-label fs-anim-upper" for="qu10">Enter your 3 country/portfolio preferences</label>
							<textarea class="fs-anim-lower" id="qu10" name="qu10" placeholder="India,England,Canada"></textarea>					            									
						</li>
                        <li>
							<label class="fs-field-label fs-anim-upper" style="font-size:20px;" for="qu11" >
                            
                            Committee Preference 3<br>
						1. UN GENERAL ASSEMBLY (DISEC)<br>
						2. INTERNATIONAL ATOMIC ENERGY AGENCY <br>
						3. UN HUMAN RIGHTS COUNCIL <br>
						4. UN COMMISSION ON SCIENCE AND TECHNOLOGY FOR DEVELOPMENT <br>
						5. NATIONAL SECURITY COUNCIL 
						</label>
						<input class="fs-anim-lower" id="qu11" name="qu11" type="text" placeholder="eg:3" required/>
						</li>
						
                         <li>
							<label class="fs-field-label fs-anim-upper" for="qu12">Enter 3 country/portfolio preferences</label>
							<textarea class="fs-anim-lower" id="qu12" name="qu12" placeholder="India,England,Canada"></textarea>					            									
						</li>
					<li>
							<label class="fs-field-label fs-anim-upper" for="qu13">Number of MUNs attended?</label>
							<input class="fs-anim-lower" id="qu13" name="qu13" type="text" placeholder="3" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu14">Prior Experience <br><span style="font-size:20px;">Institution/Committee/Country/Awards (If any)</span></label>
							<textarea class="fs-anim-lower" id="qu14" name="qu14" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu15">"The UN has failed as a Peace Making Body" Comment (150-200 Words)<br><span style="font-size:20px;">Only for delegates with experience less than 3 MUN's</span></label>
							<textarea class="fs-anim-lower" id="qu15" name="qu15" placeholder="Comment here"></textarea>
						
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu16">"The Principle of deterrence has become an excuse for arms and proliferation." Comment (150-200 Words)<br><span style="font-size:20px;">Only for delegates with experience less than 3 MUN's</span></label>
							<textarea class="fs-anim-lower" id="qu16" name="qu16" placeholder="Describe here"></textarea>
						
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="qu17">Do you need Accommodation?</label>
							<textarea class="fs-anim-lower" id="qu17" name="qu17"></textarea>
						
						</li>
					
                    
					</ol>
					<button class="fs-submit" type="submit" id="submit2" name="submit2">Send answers</button>
		
				</form>
			</div>

			

		</div>
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