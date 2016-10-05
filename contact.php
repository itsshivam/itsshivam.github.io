<!DOCTYPE html>
<html>
<head>
	

	<title>Shivam Pal | IIT Kanpur</title>
	<link rel="shortcut icon" href="website/images/favicon.ico" />
	
	<meta charset="UTF-8">
	<meta name="description" content="Shivam Pal profile">
	<meta name="keywords" content="shivam pal, resume, project">
	<meta name="author" content="Shivam Pal">
	
	<link rel="stylesheet" href="website/css/bootstrap.css"/>
	<link rel="stylesheet" href="website/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="website/css/general.css" type="text/css">
	<link rel="stylesheet" href="website/css/home.css" type="text/css">
	<link rel="stylesheet" href="website/css/font-awesome.min.css">
	<link rel="stylesheet" href="website/css/animate.css">
	<script type="text/javascript" src="website/css/jquery-3.0.0.min.js"></script>
	<script src="website/css/jquery.flip.min.js"></script>

	<script src="website/css/sweetalert.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="website/css/sweetalert.css">


	<script>


		
		
		$(document).ready(function(){
    		
    		$(".head1,.head2,.head3,.head4").fadeTo(0,0);
			$(".head1,.head2,.head3,.head4").fadeTo(2000,0.75);

			$(".sub,h1,h2,p.aboutme,hr.style1,hr.style2,img.project,input.forum,textarea.forum").fadeTo(0,0);
			$(".sub,h1,h2,p.aboutme,hr.style1,hr.style2,img.project,input.forum,textarea.forum").fadeTo(2000,1);
					


        	$(".head1").mouseenter(function(){
        		$(".head1").animate({margin: "-=1px",fontSize : '15px'},250);
        		$(".head1").fadeTo(50,1);
        		$(".head2").fadeTo(50,0.1);
        		$(".head3").fadeTo(50,0.1);
        		$(".head4").fadeTo(50,0.1);
        	});
        	$(".head2").mouseenter(function(){
        		$(".head2").animate({margin: "-=1px",fontSize : '15px'},250);
        		$(".head2").fadeTo(50,1);
        		$(".head1").fadeTo(50,0.1);
        		$(".head3").fadeTo(50,0.1);
        		$(".head4").fadeTo(50,0.1);
        	});
        	$(".head3").mouseenter(function(){
        		$(".head3").animate({margin: "-=1px",fontSize : '15px'},250);
        		$(".head3").fadeTo(50,1);
        		$(".head2").fadeTo(50,0.1);
        		$(".head1").fadeTo(50,0.1);
        		$(".head4").fadeTo(50,0.1);
        	});
        	$(".head4").mouseenter(function(){
        		$(".head4").animate({margin: "-=1px",fontSize : '15px'},250);
        		$(".head4").fadeTo(50,1);
        		$(".head2").fadeTo(50,0.1);
        		$(".head3").fadeTo(50,0.1);
        		$(".head1").fadeTo(50,0.1);
        	});
        	$(".head1,.head4,.head3,.head2").mouseleave(function(){
        		$(".head1").animate({marginLeft: "20px",fontSize : '13px'},50);
        		$(".head2").animate({marginLeft: "20px",fontSize : '13px'},50);
        		$(".head3").animate({marginLeft: "20px",fontSize : '13px'},50);
        		$(".head4").animate({marginLeft: "20px",fontSize : '13px'},50);
        		$(".head1").fadeTo(50,0.75);
        		$(".head2").fadeTo(50,0.75);
        		$(".head3").fadeTo(50,0.75);
        		$(".head4").fadeTo(50,0.75);
        	});
		
        	$("#circle1").mouseenter(function(){
        		$("#circle1").fadeTo(10,1);
        		$("#circle2").fadeTo(100,0.1);
        		$("#circle3").fadeTo(100,0.1);
        	});
        	$("#circle2").mouseenter(function(){
        		$("#circle2").fadeTo(100,1);
        		$("#circle1").fadeTo(100,0.1);
        		$("#circle3").fadeTo(100,0.1);
        	});
        	$("#circle3").mouseenter(function(){
        		$("#circle3").fadeTo(100,1);
        		$("#circle1").fadeTo(100,0.1);
        		$("#circle2").fadeTo(100,0.1);
        	});
        	$("#circle1,#circle2,#circle3").mouseleave(function(){
        		$("#circle1").fadeTo(100,1);
        		$("#circle2").fadeTo(100,1);
        		$("#circle3").fadeTo(100,1);
        	});
		

		});

	</script>


</head>
<body>
	

	<?php
	$to = "shivam.pal128@gmail.com";
	$subject = "My website";
	$txt = "Nmae = <?php echo $_POST["name"]; ?>, email = <?php echo $_POST["email"]; ?>, message = <?php echo $_POST["message"]; ?>";
	$headers = "From: itsshivam.github.io" . "\r\n" .
	"CC: itsshivam.github.io";

	mail($to,$subject,$txt,$headers);
	?>






	<div class="cont">
		<div class="row">
			<div class="container-fluid">
				<div class="col-md-8 col-md-offset-2">
					<p class="name animated fadeInDown">Shivam Pal</p>
				</div>
				<div class="col-md-12">
				<div class="col-md-3 col-md-offset-2">
					<p class="sub" style="margin-top: -20px;">Student, IIT Kanpur</p>
				</div>
				<div class="col-md-4">
					<a href="index.html" class="head1">HOME</a>
					<a href="resume.html" class="head2">RESUME</a>
					<a href="project.html" class="head3">PROJECTS</a>
					<a href="" style="color : rgb(255,145,255);" class="head4">CONTACT</a>
				</div>
				</div>
			</div>
		</div>
	</div>
	




	
	<div class="cont">
		<div class="row">
			<div class="container-fluid">




				<div class="col-md-8 col-md-offset-2" style="padding-top : 80px;">
					<div class="col-md-5" style="padding-top : 30px;">
						<h1 class="contact" style="margin-left : 30px;">CONTACT US</h1>
					</div>
					<div class="col-md-7">
						
						<div class="col-md-12">
							<h2 style="font-size : 20px;">Feel comfortable for sharing your problem or giving suggestions</h2>
						</div>
						<div class="col-md-12" style="margin-top : 35px;">


							<form action="contact.php" method="post" name="myform" onsubmit="return(validate())">

								<input type="text" class="form-control forum" name="name" id="name" placeholder="Name" style="color : rgb(155,77,77); border-radius: 20px 20px; border : 2px solid rgba(255,77,77,0.8);">
			
								<input type="text" class="form-control forum" name="email" id="email" placeholder="Email Id" style="color : rgb(155,77,77); border-radius: 20px 20px; border : 2px solid rgba(255,77,77,0.8); margin-top: 20px; ">
					
								<textarea rows="8" class="form-control forum" name="message" id="message" placeholder="Enter your message" style="color : rgb(155,77,77); border-radius: 20px 20px; border : 2px solid rgba(255,77,77,0.8); margin-top: 20px; "></textarea>
								
								<div class="col-md-12" style="margin-top : 30px; margin-bottom : 20px;">
									<div class="col-md-4 col-md-offset-4"><input type="submit" class="form-control forum" name="submit" value="SUBMIT" style="color : rgb(155,77,255); border-radius: 20px 20px; border : 2px solid rgba(255,77,77,0.8); margin-top: 20px; font-size: 15px; " /></div>
								</div>
							

							</form>



							<script>
								function validate()
								{
									if(document.myform.name.value == "")
									{
										sweetAlert("Ooops ERROR!!!","Please, fill your name","error");
										myform.name.focus();
										return(false);
									}

									

									if(document.myform.email.value=="")
									{
										sweetAlert("Ooops ERROR!!!","Please fill your email-id","error");
										myform.email.focus();
										return(false);
									}

									if(1)
									{
										var x = document.myform.email.value;
    									var atpos = x.indexOf("@");
    									var dotpos = x.lastIndexOf(".");
    									if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    									{
        									sweetAlert("Ooops ERROR!!!","Please fill valid E-Mail address","error");
											myform.email.focus();
        									return false;
    									}
									}

									if(document.myform.message.value == "")
									{
										sweetAlert("Ooops ERROR!!!","Your message box is empty","error");
										myform.name.focus();
										return(false);
									}

									sweetAlert('Congratulations!', 'Your message has been successfully sent', 'success');
								}

							</script>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	




	<div class="cont" style="margin-top : 100px; width : 100%; background-color : rgb(255,70,70);">
		<div class="row">
			<div class="container-fluid">
				<div class="col-md-12" style="margin-top : 30px;">
					<div class="col-md-3 col-md-offset-1">
					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive" src="website/images/contact.png" width="40px" alt = "contact" float="left" />
						</div>
						<div class="col-md-8">
							<p class="elementhead">CALL</p>
							<p class="elements">P : 8896922795</p>
						</div>
					</div>
					</div>
					<div class="col-md-2">
					<div class="col-md-12">
						<div class="col-md-5">
							<img class="img-responsive" src="website/images/email.png" width="60px" alt = "e-mail" float="left" />
						</div>
						<div class="col-md-7">
							<p class="elements">shivampa@iitk.ac.in</p>
							<p class="elements">shivam.pal128@gmail.com</p>
						</div>
					</div>
					</div>
					<div class="col-md-3 col-md-offset-1">
					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive" src="website/images/social.png" width="60px" alt = "social" float="left" />
						</div>
						<div class="col-md-8">
							<a href="https://www.facebook.com/profile.php?id=100005740335037" style="margin: 0px;"><i class="fa fa-facebook-square" style="font-size:30px; color:white; margin-top : 20px; margin-right : 10px;"></i></a>
							<a href="" style="margin: 0px;"><i class="fa fa-linkedin-square" style="font-size:30px; color:white; margin-top : 20px; margin-right : 10px;"></i></a>
							<a href="https://github.com/itsshivam" style="margin: 0px;"><i class="fa fa-github-square" style="font-size:30px; color:white; margin-top : 20px;"></i></a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-12">
					<p class="footer">&#169; Copyright 2016 | All Rights Reserved | Designed and Developed by Shivam Pal</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
