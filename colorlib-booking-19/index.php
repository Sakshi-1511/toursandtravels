<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Book Your Tour Today</h1>
							<p>Lets Travel and Explore!!!</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form method="POST" action="booking.php">
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying from</span>
											<input class="form-control" type="text" placeholder="City or airport" id="flying" name="flying">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying to</span>
											<input class="form-control" type="text" placeholder="City or airport" id="to" name="to">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Departing</span>
											<input class="form-control" type="date" required id="departing" name="departing">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Returning</span>
											<input class="form-control" type="date" required id="returning" name="returning">
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Adults (18+)</span>
										<input class="form-control" type="number" required id="adults" name="adults">
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Children (0-17)</span>
											<input class="form-control" type="number" required id="children" name="children">
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Payment method</span>
											<select class="form-control" id="payment" name="payment">
												<option>-</option>
												<option>Cash</option>
												<option>Online</option>
												<option>Credit card</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input class="form-control" type="email" required id="email" name="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Category</span>
											<select class="form-control" name="category" id="category"  required>
												
												<option>-</option>
												<option>Religious</option>
												<option>Adventurous</option>
												<option>Family Tours</option>
												<option>Other Tours</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn" type="submit">Confirm</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>