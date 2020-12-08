<?php

require_once('includes/database.php');


$id = $_GET['id'];

$query_str = "SELECT * FROM $tblMovies WHERE movie_id = '" . $id . "'";


$result = $conn->query($query_str);


{$result_row = $result->fetch_assoc();


	$page_title = "star: " . $result_row['movie_name'];

	require_once ('includes/header.php');

	?>
	<div class="container wrapper">

	<ul class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li><a href="movies.php">Movies</a></li>
		<li class="active"><?php echo $result_row['movie_name'] ?></li>
	</ul>

	<h1 class="text-center"><?php echo $result_row['movie_name'] ?></h1>
	<div class="row">
		<div class="col-xs-3 col-xs-offset-1">
			<img class="img-responsive" src="<?php echo $result_row['movie_img']; ?>" alt=""/>
		</div>
		<div class="col-xs-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Year: <?php echo $result_row['movie_year'] ?></h3>
					<h3>Details: <?php echo $result_row['movie_details'] ?></h3>
					
			</div>
			<?php if (empty($login)) { ?>
					<p class="lead"><a href="loginform.php">Sign in</a> or <a href="registration.php">register</a> to leave a review or make this a favorite movie!</p>
			<?php	} else { ?>
				<p>
					<a class="btn btn-info" href="addreview.php?id=<?php echo $result_row['movie_id'] ?>" role="button">ADD REVIEW <i class="fa fa-plus"></i></a></p>
					<p>
					<a class="btn btn-success" href="addtoaccount.php?id=<?php echo $result_row['movie_id'] ?>" role="button">FAVORITE <i class="fa fa-angle-double-right fa-lg"></i></a>
				</p>
					<?php if ($role == 1) : ?>
						<a class="btn btn-danger" href="deletemovie.php?id=<?php echo $result_row['movie_id']; ?>">DELETE MOVIE <i class="fa fa-close"></i></a>
				<?php
				endif;?>
			<?php } ?>
		</div>
	</div>
<?php } ?>
</div>

<?php


$conn->close();
include_once('includes/footer.php');