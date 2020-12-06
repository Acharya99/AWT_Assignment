<!DOCTYPE html>
<html>
<head>
	<title>The Image Gallery | Welcome</title>
  <link rel="icon" type="img/png" href="img.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fe786c7701.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
</head>
<body style="background-color:#ADD8E6;">
	<div class="container">
		<div class="jumbotron mt-2" id="div11">
			<table cellpadding="6">
				<td><h1 id="h11"><a href="index.php"> <span style="color:#008080;">The Image Gallery </span> </a></h1></td>
				<td><img src="./smit_logo.png" alt="" id = "smit_logo"></td>
			</table>

		</div>
		<div id="bdiv">
			<button type="button" class="btn btn-primary" id="movb11" onclick = "window.location.href='./movie_images.php';">Movies</button>
			<button type="button" class="btn btn-warning" id="fampb11" onclick = "window.location.href='./famp_images.php';">Favourite Personalities</button>
			<button type="button" class="btn btn-danger" id="carb11" onclick = "window.location.href='./car_images.php';">Cars</button>
			<br>
		</div>


<!-- SMIT LOGO -->



		<div id="calbmi">
			<center><b>Know your BMI  :</b></center>
			<form name="bmi">
				<center>
					<table bgcolor="#ffffff" border="4"  bordercolor="#2d323e" rules="none" cellspacing="0" cellpadding="7">
						<tr style="color:#2d323e;">
							<td>
								<b><i>Weight(kg) : </i></b>
							</td>
							<td >
									<input type=TEXT size="15" name=weight  value="Enter your weight" onClick=value="">
							</td>
							<td>
								<b><i>Height(cm) : </i></b>
							</td>
							<td >
									<input type=TEXT size="15" name=height  value="Enter your height"  onClick=value="">
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" id="button" value="Calculate" style="background-color:#2c3e50; color:#ecf0f1;" onClick="computeform(this.form)">
							</td>
						</tr>
						<tr>
							<TD>
								<DIV ALIGN=CENTER style="color:#2d323e;">
									<b> <i>Your BMI: </i> </b>
								</DIV>
							</TD>
							<TD>
								<INPUT TYPE=TEXT NAME=bmi     SIZE=8 >
							</TD>
							<TD>
								<DIV ALIGN=CENTER style="color:#2d323e;">
									<b><i>My Comment:</i></b>
								</DIV>
							</TD>
							<TD>
								<INPUT TYPE=TEXT NAME=my_comment size=15>
							</TD>
						</tr>
					</TABLE>


					</form>


					<HR>
					<!-- <B style="color:red;align:center;">Disclaimer :</B> This form is based on the calculation of
					<A HREF="http://phaster.com/unpretentious/bmi.html"><I>"Body Mass Index"</I></A>
					and is only meant to be a demonstration of how Javascript(tm) could be used
					on a Web Page. Information it contains may not be accurate and is not designed
					or intended to serve as medical advice. I am not liable for any physical or
					psychological damages suffered as a result of using this script.
 -->
				<hr>

		</div>

	<!---INTRO-->





  <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="background-color:#ecf0f1; color:#2d323e;; text-align: center; box-shadow: 1px 1px 6px 0px #000; padding: 5px;">
      <h1 style="font-family=Times New Roman, serif;"><b>Contact Me</h1>
      <h3 style="font-family: Zapf Chancery, cursive;">Name : Bhaskar Acharya</h3>
      <h3 style="font-family: Zapf Chancery, cursive;">Regn. No. : 201800547</h3>
      <h3 style="font-family: Zapf Chancery, cursive;">Email : bhaskar_201800547@smit.smu.edu.in</h3>


    </div>
  </div>


	<script type="text/javascript" src="gallery.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
