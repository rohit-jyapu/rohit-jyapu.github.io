<!DOCTYPE html>
<html>
<head>
	<title>bhuwaneshwor</title>
	<?php include ('includes/head.php') ?>
</head>
<body class="feedback">


	<?php include ('includes/header.php') ?>

		<div class="main clearfix">
			<div class="center">
				<article>
					<h1>
						<span>
						<ins>Feedback.</ins>
						</span>
						<strong>
							feedback. inquiry. order.
						</strong>
					</h1>

					<form class="mlbottom clearfix">
						<div class="clearfix">
							<input type="text" size="20" placeholder="Full name:">
							<input type="text" size="35" placeholder="Address:"><br>
						</div>
						<div class="clearfix">
							<input type="text" size="15" placeholder="Country:">
							<input type="text" size="35" placeholder="Company:"><br>
						</div>
						<div class="clearfix">
							<input type="text" size="40" placeholder="Email:">
							<input type="text" size="15" placeholder="Phone/Mobile:"><br>
						</div>
						<div class="clearfix">
							<select id="country" name="country">
							    <option value="au">Subject</option>
							    <option value="ca">Feedback</option>
							    <option value="usa">Inquiry</option>
							    <option value="usa">Order</option>
							</select>
						</div>
						<div class="clearfix">
							 <textarea name="inquiry-message" id="inquiry-message" placeholder="Message"></textarea>
						</div>
						<div class="clearfix">
							<input type="submit" size="15" value="Send message">
						</div>

					</form>					
			</article>

			<?php include ('includes/aside.php') ?>
			</div>
		</div>

	<?php include ('includes/footer.php') ?>
	
</body>
</html>