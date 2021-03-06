<!DOCTYPE html>
<html>
<head>
	<title>CM Online Judge | Welcome</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Online judge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="competitive programmming, coding challenge, programmming problems">
	<meta name="author" content="Vishal Anand">

</head>
<body>
	<section id="head">
		<?php
			include "header.php";
		?>
	</section>
	<div class="maincontainer" style="height: 500px;">
		
		
		<section id="main">
			<div class="main">
				<article class="left">
					<div class="prob_title">
					10002. Theatre Square
					</div>
					<p>
						Theatre Square in the capital city of Berland has a rectangular shape with the size n × m meters. On the occasion of the city's anniversary, a decision was taken to pave the Square with square granite flagstones. Each flagstone is of the size a × a.
					</p>
					<p>
						What is the least number of flagstones needed to pave the Square? It's allowed to cover the surface larger than the Theatre Square, but the Square has to be covered. It's not allowed to break the flagstones. The sides of flagstones should be parallel to the sides of the Square.
					</p>
					<div class="prob_inside">
						Input
					</div>
					<p>
						The input contains three positive integer numbers in the first line: n,  m and a (1 ≤  n, m, a ≤ 109).
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						Print the needed number of flagstones.
					</p>
					<div class="prob_inside">
						Examples:
					</div>
					<div class="prob_inside">
						Input
					</div>
					<p>
						6 6 4
					</p>
					<div class="prob_inside">
						Output
					</div>
					<p>
						4
					</p>
									
				<?php
					if(isset($_SESSION["user"])){						
						include 'submit_button.php';
					}
				?>
				</article>
				<aside class="right">
					<div class="prob_title">Constraints</div>
					<ol>
						<li>time limit per test - 1s</li>
						<li>64 megabytes</li>
						<li>input - standard input</li>
						<li>output - standard output</li>
					</ol>
				</aside>
				<aside class="right">
					<div class="prob_title">Tags</div>
					<ol>
					<?php
						$conn=mysqli_connect("localhost","root","","Project");
						$sql = "SELECT * FROM Tags WHERE PROB_ID=10002";
						$sql = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($sql)){
							echo'<li>'.$row['TAG'].'</li>';
						}
					?>
					</ol>
				</aside>
			</div>
		</section>
	</div>
	</section id="foot">
		<div id="divfoot">
			<?php
				include "footer.php"
			?>
		</div>
	</section>
	</body>
</body>
</html>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slideshow");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>