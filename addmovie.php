<?php

require_once('includes/database.php');
$page_title = "Add Movie";
require_once ('includes/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Add Movie</li>
  </ul>

  <h1 class="text-center">ADD MOVIE</h1>
  <p class="lead text-center">Please add your desired movie</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="processmovie.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newMovieName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newMovieName" name="movie_name" placeholder="Movie Title" required>
        </div>
      </div>
      <div class="form-group">
        <label for="movieYear" class="col-sm-3 control-label">Year</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="movieYear" name="movie_year" placeholder="Year" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Movie Cover URL</label>
        <div class="col-sm-9">
          <input type="text" id="newImage" class="form-control" name="image" placeholder="Enter URL" required>
        </div>
      </div>
	  
	  <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Movie Details</label>
        <div class="col-sm-9">
          <input type="text" id="details" class="form-control" name="details" placeholder="Enter details" required>
        </div>
      </div>
     
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Movie</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('includes/footer.php');
?>