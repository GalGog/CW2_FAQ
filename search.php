<?php
	include 'header.php';
?>

<div class="container-fluid">
<div class="row">
<div class="col-md-8 article-container"
</div>
<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);

		echo "There are ".$queryResult." results";

		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
					<h3>".$row['a_title']."</h3>
					<p>".$row['a_text']."</p>
					<p>".$row['a_date']."</p>
					<p>".$row['a_author']."</p>
				</div></a>";
			}
		} else {
			echo "There are no results matching your search!";
		}
	}
   ?>
</div>

<div class="col-md-4 side-container">
            <h4>In this section </h4>
            <p><a href="https://www.lsbu.ac.uk/contact-us/maps-and-travel" class="text-dark">Maps and travel</a></p>
            <p><a href="https://www.lsbu.ac.uk/contact-us/social-directory" class="text-dark">Social Directory</a></p>

        </div>

</div>

<div class="jumbotron">
<div class="ask">
                <h1>Still do not have answer ? </h1>
                <p>If you have not find needed answer, ask  authorized staff  </p>
                <p><a href="mailto:foi@lsbu.ac.uk"  target="_blank" class="btn btn-success btn-lg">ASK QUESTION</a></p>
</div>
</div>

<hr>


<footer>
            <div class="row">
                <div class="col-md-6">
                    <p>CW2 Halyna Podyman &copy; 2021</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="terms&cond.html" class="text-dark">Terms of Use</a>
                    <span class="text-muted mx-2">|</span>
                    <a href="policy.html" class="text-dark">Privacy Policy</a>
                </div>
            </div>
 </footer>