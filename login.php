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
<body class="logpage">
	<div class="wrapper">
		<header id="loginpage">
			<nav id="login"> <!-- navbar -->
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
		                <!-- <li><a class="active" href="login.html">Login</a></li> -->
		            </ul>
	        	</div>
			</nav>
		</header>

		<div class="log">
			<section class="data-diri" id="input-form">
		        <div class="container">
			        <div class="row">
			            <div class="col-sm-12">
			                <h2 class="text-center" style="margin-top:20px">Data Diri Anda</h2>
			                <hr id="hrlog">
							<p>Fitur ini dapat kalian gunakan sebagai tempat kalian melaporkan siswa yang membuat masalah atau yang bermasalah, baik itu di lingkungan sekolah maupun di luar sekolah.</p>
			            </div>
			        </div>
			        <div class="row">
			            <div class="col-sm-12">

        					<form action="cek.php" method="POST">
			                    <div class="form-group">
			                        <label for="nama">Username</label>
			                        <input type="text" id="nama" class="form-control" name ="username" placeholder="Masukkan Nama Anda">
			                    </div>
			                    <div class="form-group">
			                        <label for="nis">NIS</label>
			                        <input type="numeric" id="nis" class="form-control" name ="password" placeholder="Masukkan NIS Anda">
			                    </div>
<!-- 			                    <div class="form-group">
			                        <label for="email">Email Sekolah</label>
			                        <input type="email" id="email_sekolah" class="form-control" name ="email_sekolah" placeholder="Masukkan email sekolah Anda">
			                    </div> -->
     					        <input type="submit" class="btn btn-success btn-block" value="Masuk" />
			                </form>

			            </div>
			        </div>
		        </div>
		    </section>
		</div>
		<div id="loginfoot">
			<div class="footer">
  			<div class="container text-center">
    			<p>Copyright &copy; 2018 BKLine. Designed by <a href="http://www.templatewire.com" rel="nofollow">C-Ples Ples</a></p>
    		</div>
  		</div>
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