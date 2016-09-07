<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="random, randomweb, question, humanity" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
	<title>About</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
    
<div class="navbar">
<ul>
  <li><a href="../">Home</a></li>
  <li><a href="/promote">Promote us</a></li>
  <li><a class="active" href="/about">About</a></li>
</ul> 
</div>
    
    <h1>Our mission?</h1>
    <h2>Provide the world with useless websites</h2>
    <center>
    <div class="paragraph">
        <p id="paragraphtext">We are a small group of web developers from the Netherlands who enjoy making useless stuff. we do not plan to monetize our site because nobody likes ads. if you really like our work or just want to get us a beer you can contact us below and donate via paypal or bitcoin. We hope everyone enjoys visiting useless sites on the web.</p> 
        <p>-A few geeks ¯\_(ツ)_/¯</p>
        <img class="markieimg" src='../images/markie.png'>
    </div>
    </center>
    <!-- sidebar -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="../">Home</a>
    <a href="/promote">Promote</a>
    <a href="">About</a>
  </div>

   <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
   </div>
    
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        var obj = document.getElementById("main");
        obj.style.visibility = 'hidden';
}

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        var obj = document.getElementById("main");
        obj.style.visibility = 'visible';
}
</script>
    
    <!-- Footer -->
    <footer class="footer-distributed">
			<div class="footer-left">

				<h3>Intel<span>LF</span></h3>

				<p class="footer-links">
					<a href="../">Home</a>
					-
					<a href="../promote">Promote us!</a>
					-
					<a href="">About</a>
					
				</p>

				<p class="footer-company-name">Banter &copy; 2016</p>

				<div class="footer-icons">

					<a href="https://twitter.com/zwembadsniper"><i class="fa fa-twitter"></i></a>
					<a href="https://plus.google.com/u/0/103041884967220832655"><i class="fa fa-google"></i></a>
					<a href="skype:zwembadsniper?add"><i class="fa fa-skype"></i></a>
					<a href="https://github.com/zwembadsniper"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="/contact/submitform.php" method="post">

					<input type="text" name="email" placeholder="Email" required />
					<textarea name="message" placeholder="Message" required></textarea>
					<button>Send</button>

				</form>
        
		</footer>
    </div>
</body>
</html>