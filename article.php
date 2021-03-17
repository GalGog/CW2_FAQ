<?php
	include 'header.php';
?>

<div class="container-fluid">
<div class="article-container">
	<?php
		$title = mysqli_real_escape_string($conn, $_GET['title']);
		$date = mysqli_real_escape_string($conn, $_GET['date']);

		$sql = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='article-box'>
					<h3>".$row['a_title']."</h3>
					<p>".$row['a_text']."</p>
					<p>".$row['a_date']."</p>
					<p>".$row['a_author']."</p>
				</div>";
			}
		}
	?>
</div>
<hr>
<footer>
        <div class="row">
            <div class="col-md-6">
                <p>Halyna Podyman &copy; 2021</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="terms&cond.html" class="text-dark">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="policy.html" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>


</body>
</html>
