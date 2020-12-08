<?php

require_once('includes/database.php');
require_once('includes/header.php');
$id = $_GET['id'];

$query_str = "SELECT * FROM $tblMovies WHERE movie_id = '" . $id . "'";


$result = $conn->query($query_str);




while ($result_row=mysqli_fetch_array($result)){
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
					<form class="form-horizontal" action="addreview.php" method="POST" >
      <div class="form-group">
        <label for="newMovieName" class="col-sm-3 control-label">movie id</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newMovieName" name="movie_id" placeholder="Movie Title" value="<?php  $id;?>" disabled="disable">
        </div>
      </div>
      <div class="form-group">
        <label for="movieYear" class="col-sm-3 control-label">user id</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="movieYear" name="user_id" placeholder="Year" value="<?php echo $session_id;?>" disabled="disabled">
        </div>
      </div>
      
     
	  
	  <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Comment</label>
        <div class="col-sm-9">
          <input type="textarea" id="details" class="form-control" name="comment" placeholder="Enter your comment" required>
        </div>
      </div>
     
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
         <input type="submit" name="sub">
        </div>
      </div>
    </form>
		</div>
	</div>

</div>

<?php




}





$conn->close();
include_once('includes/footer.php');








?>


<?php

if(isset($_POST['sub'])){
  echo $_POST['movie_id'];
}
?>