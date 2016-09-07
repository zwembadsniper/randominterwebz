<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="random, randomweb, question, humanity" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<title>Cringe, we hurt your eyes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
    
<body>
<!-- sidebar-->   
<div class="navbar">
<ul>
  <li><a class="active" href="">Home</a></li>
  <li><a href="/promote">Promote us</a></li>
  <li><a href="/about">About</a></li>
</ul> 
</div>
    <h1>Click the button below</h1>
    <h2>To make yourself cringe</h2>
    <center>
    <button class="button button1" onclick="openlinkFunction()">Click me</button>
    <div class="sharewrapper">
        <a href="https://twitter.com/share" class="twitter-share-button" data-text="Hurt your eyes with all those cringeworthy websites" data-size="large" data-hashtags="cringe">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <script src="https://apis.google.com/js/platform.js" async defer></script><g:plusone></g:plusone>
    </div>
    </center>
    <img class="social" src="/images/social.png">
    
<script>
    function openlinkFunction() {
        window.open(
        '/redirect.php',
        '_blank'
        );
    }
</script>
    
<!-- sidebar mobile-->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="">Home</a>
    <a href="/promote">Promote</a>
    <a href="/about">About</a>
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
					<a href="">Home</a>
					-
					<a href="/promote">Promote us!</a>
					-
					<a href="/about">About</a>
					
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
    
    <style>
       @media (min-height: 930px) {
           footer{
	       position: fixed;
	       bottom: 0;
           }
        }

    </style>
      
</body>
    
</html>