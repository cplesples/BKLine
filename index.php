

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BKLine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<header class="homepage">
			<nav> <!-- navbar -->
				<div class="menu-icon">
	            	<i class="fa fa-bars fa-2x"></i>
	        	</div>
				<div class="logo"><a href="index.php">BKLine</a></div>
				<div class="menu">
		            <ul>
		            	<li><a class="navbar" href="index.php">Home</a></li>
		                <li><a class="navbar" href="about/about.html">About</a></li>
		                <li><a class="navbar" href="mainpage/inspirasi.html">Inspiration</a></li>
		                <!-- <li><a class="navbar" href="#">Contact</a></li> -->
		                <li><a class="active" href="login.php">Login</a></li>
		            </ul>
	        	</div>
			</nav>
			<div class="content-header">
				<h1>Website yang tepat untuk berkonsultasi atau melaporkan siswa</h1>
				<hr class="hr-header">
				<p>Web kami menyediakan dua fitur utama, yaitu konsultasi diri Anda sendiri dan melaporkan siswa bermasalah<br>Masalah ringan bisa Anda sharing disini untuk mendapat bermacam solusi pemecahan atau meringankan masalah Anda <br> Anda mendapati siswa bermasalah? Di sekolah dan/atau di luar sekolah? Laporkan saja kepada Kami melalui website ini</p>
			</div>
		</header>

		<div class="jumbotron text-center">
			<h1>Adakah masalah di sekitarmu?</h1>
		</div>

		<!-- Konsultasi -->
	<div class="index-content">
	  <div class="container">
	    <div class="section-title text-center center">
	      <h2 class="h2index-content">Konsultasi</h2>
	      <hr class="indexhr">
	    </div>
	    <div class="row">
	      <!-- <div class="col-xs-12 col-md-6"> <img src="img/about.png" class="img-responsive" alt=""> </div> -->
	      <div class="col-xs-12 col-md-6">
	        <div class="about-text">
	          <h3>Tahukah kalian tentang fitur Konsultasi kami?</h3>
	          <p>Fitur ini dapat kalian gunakan sebagai tempat kalian mencari solusi pemecahan dan/atau meringankan masalah pribadi kalian</p>
	          <p>Website BKLine ini menyediakan berbagai contoh permasalahan yang biasa ditemui oleh para pelajar. Kalian juga dapat menuliskan sendiri permasalah kalian apabila tidak sesuai dengan kategori yang kami sediakan, lalu guru BK akan memberikan solusinya setelah menerima data dari kalian.</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Melaporkan -->
	<div class="index-content">
	  <div class="container">
	    <div class="section-title text-center center">
	      <h2 class="h2index-content">Melaporkan Siswa</h2>
	      <hr class="indexhr">
	    </div>
	    <div class="row">
	      <!-- <div class="col-xs-12 col-md-6"> <img src="img/about.png" class="img-responsive" alt=""> </div> -->
	      <div class="col-xs-12 col-md-6">
	        <div class="about-text">
	          <h3>Tahukah kalian tentang fitur Melaporkan Siswa dari kami?</h3>
	          <p>Fitur ini dapat kalian gunakan sebagai tempat kalian melaporkan siswa yang membuat masalah atau yang bermasalah, baik itu di lingkungan sekolah maupun di luar sekolah.</p>
	          <p>Kalian bisa melaporkan siswa yang bermasalah dimanapun dan kapanpun kalian berada melalui perantara website BKLine ini</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

      	<div class="footer">
  			<div class="container text-center">
    			<p>Copyright &copy; 2018 BKLine. Designed by <a href="http://www.templatewire.com" rel="nofollow">C-Ples Ples</a></p>
    		</div>
  		</div>
	</div>
	
    <script type="text/javascript">
    	//show data responsif
    	$(document).ready(function(){
    		$(".menu-icon").on("click", function(){
    			$("nav ul").toggleClass("showing");
    		});
    	});
    	//efek scroll
    	$(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- JQuery fungsi go to -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
		  $("a").on('click', function(event) {
		    if (this.hash !== "") {
		      event.preventDefault();
		      var hash = this.hash;
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		        window.location.hash = hash;
		      });
		    } 
		  });
		});
    </script>
</body>
</html>