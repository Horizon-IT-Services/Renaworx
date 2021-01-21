<?php
// 

$text = "<span style='color:red; font-size: 15px; line-height: 10px; magin: 15px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "info@horizon.com.ng";
	$subject = "Contact Us";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Horizon IT Services";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 15px; line-height: 10px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<?php include('head.inc'); ?>
	</div>
	<div class="wrap-bann">
		<div id="menu">
			<nav>
				<div class="wrap-nav">
				   <ul>
					 <li><a href="index.php">HOME</a></li>
					 <li><a href="about.php">ABOUT</a></li>
                     <li><a href="values.php">VALUES</a></li>
                      <!--<li><a href="we.php">OUR TEAM</a></li>-->
					 <li><a href="service.php">SERVICES</a></li>
                     <li><a href="proj.php">PROJECTS</a></li>
					 <li class="active"><a href="cont.php">CONTACT</a></li>
				   </ul>
			  </div>
			</nav>
		</div>
		<div class="zerogrid">
			<div class="col-2-3">
				<div class="wrap-col">
					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					
			  </div>
			</div>
		</div>
	</div>
</header>

<!--////////////////////////////////////Container-->

<section id="container" style="padding-top:20px">
 
	<div class="wrap-container clearfix">
   
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact" style="margin-bottom:20px">
						<h2>Contact</h2>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="cont.php">
								<label>
								<span>Enter your name:</span>
								<input type="text"  name="name" id="name" required placeholder="YOUR NAME">
								</label>
								<label>
								<span>Enter your email:</span>
								<input type="email"  name="email" id="email" required placeholder="YOUR EMAIL">
								</label>
								<label>
								<span>Your message here:</span>
								<textarea name="message" id="message" required placeholder="YOUR MESSAGE"></textarea>
								</label>
								<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
							</form>
						</div>
					</div>
			  </div>
			</div>
            
		  <div id="sidebar" class="col-1-3">
          <div class="widget wid-tag">
						<div class="wid-header">
							<h5>ADDRESS</h5>
						</div>
						<div class="wid-content">
	No.23 Custom Street,<br> Maiduguri Road
 Bauchi,<br>
Bauchi state,<br> Nigeria.

						</div>
					</div>
			   <?php include('side.inc'); ?>
			</div>
		</div>
	</div>
  </section>
		<!-----------------content-box-2-------------------->
		<section class="content-box boxstyle-2 box-2"></section>
		<!-----------------content-box-3--------------------><!-----------------content-box-4--------------------><!-----------------content-box-5--------------------><!-----------------content-box-6-------------------->
  <section class="content-box boxstyle-2 box-6"></section>
	</div>
<!--////////////////////////////////////Footer-->
<footer>
	<?php include('foot.inc'); ?>
</footer>
</body></html>