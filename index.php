

<!DOCTYPE html>
<html>
	<head>
	  <title>Fun Learn</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
	  <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
	  <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js"></script>
	  <style>
			.titles{
				letter-spacing:2px;
				text-shadow:2px 3px 3px #343434;
			}
			#nav1{
				padding-left:10%;
				width:100%;
				float:left;
				background-color:#f8f8f8;
				padding-top:5px;
				margin-bottom:25px;
			}
			.jumbotron{
				background-color:khaki;
				margin-bottom:0px;
				width:100%;
			}
			footer{		
				margin-top:30px;	
			}
			.nav-item{
				background-color:#f8f8f8;
			}			
			.tab-content{
				float-left;
				width:100%;
			}
			div.gallery {
			  margin: 5px;
			  border: 1px solid #ccc;
			  width: 250px;
			  float:left;
			}

			div.gallery:hover {
			  border: 1px solid #777;
			}

			div.gallery img {
			  width:250px;
			  height:250px;
			  object-fit:cover;
			}

			div.desc {
			  padding: 15px;
			  text-align: center;
			}
			
	  </style>
	</head>
	<body>
	<div class="jumbotron " >		
			<h1 class="titles" style="font-family:Annie Use Your Telescope">FUN LEARN</h1>
			<h2 class="titles" style="font-family: Allura">Try Something New</h2>		
	</div>
	<div class="sticky-top" id="nav1">
	  <ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
		  <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" data-toggle="tab" href="#about_us">About Us</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" data-toggle="tab" href="#suggestions">Suggest Us</a>
		</li>
	  </ul>
	</div>
	<div class="tab-content" width="100%" height="100%">
		<div id="home" class="container tab-pane active">
			<h1>Welcome To Fun Learn</h1>
			<div class="gallery">
			  <a href="article1.html" target="_blank">
				<img src="frisbee1.jpg" alt="Frisbee" >
				</a>
				<div class="desc">How To Throw a Frisbee</div>
			  
			</div>

			<div class="gallery">
			  <a  href="article2.html" target="_blank">
				<img src="shuffle_bg.jpg" alt="Shuffle Cards" >
			  </a>
			  <div class="desc">How To Shuffle Cards</div>
			</div>
			<div class="gallery">
			  <a  href="article3.html" target="_blank">
				<img src="ripstikbg.jpg" alt="Ripstik" >
			  </a>
			  <div class="desc">How To Ride a Ripstik</div>
			</div>
			<div class="gallery">
			  <a  href="article4.html" target="_blank">
				<img src="ballspinbg.jpg" alt="Ball Spin" >
			  </a>
			  <div class="desc">How To Spin a Volleyball</div>
			</div>
			<div class="gallery">
			  <a  href="article5.html" target="_blank">
				<img src="litt.jpg" alt="Literature" >
			  </a>
			  <div class="desc">How To Play Literature</div>
			</div>
		</div>
		<div id="about_us" class="container tab-pane fade"><br>
		  <div class="card" style="width:400px;float:left;">
			<img class="card-img-top" src="Gowtham.jpg" alt="Gowtham" style="width:398px;margin-bottom:20px">
			<div class="card-body">
			  <h4 class="card-title">Gowtham R</h4>
			  <p class="card-text" style="text-align:center; text-align:justify">I am a passionate coder and love playing cricket and volleyball. I also love the thrill of trying out new things. I did my schooling in Isha Home School, Coimabatore, where my curiosity and thirst for this thrill was born as a seed, and grew into a flowering plant. My coding life begun in my 9th grade and since then it has been a joy ride. Now I'm studying in PSG College of Technology, where coding has become more professional. Here, I have had the opportunity to learn how to create webpages. Through this website I hope to sow the seeds of this thirst into as many people as possible. I want everyone to learn activities that are fun and not taught in coventional educational institutions. These activites are, for many people, just a passtime, but I assure you if you dive into these with an iota of intensity and a drop of determination, it will bring you immense joy.</p><br>
			  <pre><img height="14px" src="gmail.png"/> rgowtham2910@gmail.com</pre>
			</div>
		  </div>
		  <div class="card" style="width:400px;float:left; margin-left:20px;margin-bottom:20px;">
		  <img class="card-img-top" src="Sanjay1.jpg" alt="Sanjay" style="width:398px">
			<div class="card-body">
			  
			  <h4 class="card-title">Sanjay</h4>
			  <p class="card-text" style="text-align:center; text-align:justify">I’m studying in PSG College of Technology. Here my carrier begins. I did my schooling in Vivek Vidyalaya, Coimbatore. I’m an upcoming coder and web developer. I’m a self motivated person. I love dancing, and playing volleyball. My coding life began in my college. I’m always active and energetic. I’m known among my peers for my exuberant nature. I’m more curious to learn new things. We have included some fun activities in our site.  It will definitely be interesting. I hope you people can learn new things from our website and enjoy a lot. Please give us feedback and suggestions.</p><br>
			</div>
			
		  </div>
		</div>
		<div id="suggestions" class="container tab-pane fade"><br>
		  <h3>Suggestions</h3>
		  <p>We love what we do, and would love to post articles on what you would like to learn. Also leave your comments and what you think below.</p>
		  <form name="suggest_form" method="post" action="suggest.php">
			  <div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Hmm..." name="suggest">
				<div class="input-group-append">
				  <input type="submit" class="btn btn-primary" value="OK">				  
				</div>
			  </div>
		  </form>
		</div>
		
	</div>
	<footer class="jumbotron" style="clear:both">
	
	</footer>
	</body>
</html>


