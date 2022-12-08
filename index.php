<!DOCTYPE html>
<html>
<head>
	<title>PROJECT</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"   integrity="sha512-4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
<header>
	<nav>
		<div class="logo">
			Tours &<span> Travels</span>
		</div>
		<div class="menu">
			<a href="#">Home</a>
			<a href="#2">About</a>
			<a href="category.php">Category</a>
			<a href="contact-form-10/index.php">Enquiry</a>
			<a href="FAQ.php">FAQ</a>
				<a href="Login_v16/index.php">Admin</a>
			


			
		</div>
		<div class="icon">
			
			<a href="login-form-06/index.php">Login</a>
		</div>
	</nav>
	<section class="h-text">
		
		<h1 data-aos="fade-up">Capture the moments that captivate your heart .</h1>
	
	</section>
</header>
<section id="3" class="filter-gallery">
	<div class="portfolio-menu">
		<ul>
			<li class="active" data-filter="*">All</li>
			<li data-filter=".nature">Religious</li>
			<li data-filter=".fashion">Family</li>
			<li data-filter=".Wedding">Adventurous</li>

		</ul>
		
	</div>
	<div class="portfolio-item">
		<div class="item nature"  data-aos="flip-left" data-aos-offset="200" data-aos-delay="100">
			<img src="images/st1.jpg" width="100" height="100">
		</div>
		<div class="item fashion" data-aos="flip-left" data-aos-offset="200" data-aos-delay="200">
			<img src="images/st2.jpg" width="100" height="100">
		</div>
		<div class="item Wedding" data-aos="flip-left" data-aos-offset="200" data-aos-delay="300">
			<img src="images/st3.jpg" width="100" height="100">
		</div>
		<div class="item nature" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="100">
			<img src="images/st4.jpg" width="100" height="100">
		</div>
		<div class="item fashion" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="200">
			<img src="images/st5.jpg" width="100" height="100">
		</div>
		<div class="item Wedding" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="300">
			<img src="images/wall6.jpg" width="100" height="100">
		</div>
		<div class="item nature" data-aos="zoom-in-up" data-aos-offset="200" data-aos-delay="100">
			<img src="images/manali.jpg" width="100" height="100">
		</div>
		<div class="item fashion" data-aos="zoom-in-up" data-aos-offset="200" data-aos-delay="200">
			<img src="images/unity.jpg" width="100" height="100">
		</div>
		<div class="item Wedding" data-aos="zoom-in-up" data-aos-offset="200" data-aos-delay="300">
			<img src="images/rajasthan.jpg" width="100" height="100">
		</div>
	</div>
	
</section>
<section id="2"class="member" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="100">
	
	<div class="member-card" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="200">
		<h1 class="member-info" font-size="42px" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="300"><b>About Us</b></h1><br>
		<center><img src="images/person.jpg" width="200" height="200" ><!--icon photo--></center>
				<p>
			If you passionate about exploring the world, where the sand meets the sea , people come together to experience a joyful adventures and unique offerings in culture, business, family and friends entertainment.
No matter where you want to go or what you want to do, we make it easy and backs it all up in 24/7 customer support.Giving you opportunity to explore and discover new places and connecting millions of travellers with memorable experiences , a range of transport option and incredible places.
		</p>
		<h2> NASHIK</h2>

		<a href="https://www.instagram.com/accounts/login/"><img src="images/insta.jpg" width="90"></a><!--link for all social media icons 4 images-->
		<a href=""><img src="images/tele.jpg" width="50"></a>
		<a href=""><img src="images/mail.jpg" width="60" height="60"></a>

	
		
	</div></section><section>		<br><br><h1 class="member-info" font-size="42px" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="300"><b>OUR HAPPY CUSTOMERS</b></h1><br><br>
	<div class="m-images" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="100">

		<img src="images/p2.jpg">
		<img src="images/girl.jpg">
		<img src="images/3.jpg">
		<img src="images/p2.jpg">
		<img src="images/girl.jpg">
		<img src="images/3.jpg">
	</div>
</section>
<!--<footer>
	
</footer>-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script type="text/javascript">
	$('.portfolio-item').isotope({
  // options
  itemSelector: '.item',
  layoutMode: 'fitRows'
});

	$('.portfolio-menu ul li').click(function(){
     $('.portfolio-menu ul li').removeClass('active');
     $(this).addClass('active');
	

	var selector = $(this).attr('data-filter');
	$('.portfolio-item').isotope({filter:selector
	});
	return false;
	});
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"c0f2eb38-050a-4bf5-9e09-6e6b5494c22f"});a=!0}}}(window,document);</script>
</body>
</html>