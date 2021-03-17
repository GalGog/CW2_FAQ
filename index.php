<?php
	include 'header.php';
?>

<div class="container-fluid">
    <div class="jumbotron">
        <h1>Frequently Asked Questions</h1>
        <p class="lead">before contact us it is more likely that many people had the same question. please check out your answer in FAQ section</p>


    </div>
    <div class="row">
        <div class="col-md-8 article-container">
             <h2>Frequently Asked Questions</h2>
                        <div>
                        <form id="article-form" class="article-form"action="search.php" method="POST">
                        	<input type="text" name="search" placeholder="Enter keywords ">
                        	<button type="submit" name="submit-search">Search</button>
                        </form>
                  	<?php
            		$sql = "SELECT * FROM article LIMIT 8";
            		$result = mysqli_query($conn, $sql);
            		$queryResults = mysqli_num_rows($result);

            		if ($queryResults > 0) {
            			while ($row = mysqli_fetch_assoc($result)) {
            				echo "<div class='article-box' >
            					<h3>".$row['a_title']."</h3>
            					<p>".$row['a_text']."</p>
            					<p>".$row['a_date']."</p>
            					<p>".$row['a_author']."</p>
            				</div>";
            			}
            		}
            	?>
            </div>
        </div>

        <div class="col-md-4 side-container">
            <h4>In this section </h4>
            <p><a href="https://www.lsbu.ac.uk/contact-us/maps-and-travel" class="text-dark">Maps and travel</a></p>
            <p><a href="https://www.lsbu.ac.uk/contact-us/social-directory" class="text-dark">Social Directory</a></p>
            <p><a href="https://www.lsbu.ac.uk/contact-us" class="text-dark">Contact Us</a></p>

        </div>
    </div>
    <hr>
<div class="jumbotron">
<div class="ask">
                <h1>Still do not have answer ? </h1>
                <p>If you have not find needed answer, ask  authorized staff  </p>
                <p><a href="mailto:foi@lsbu.ac.uk"  target="_blank" class="btn btn-success btn-lg">ASK QUESTION</a></p>
</div>
            </div>

       <footer>
               <div class="row">
                   <div class="col-md-6">
                       <p>Halyna Podyman 2021</p>
                   </div>
                   <div class="col-md-6 text-md-right">
                       <a href="terms&cond.html" class="text-dark">Terms of Use</a>
                       <span class="text-muted mx-2">|</span>
                       <a href="policy.html" class="text-dark">Privacy Policy</a>
                   </div>
               </div>
           </footer>