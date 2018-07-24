<p><br></p>
<p><br></p>
<style type="text/css">
	form{
		padding: 9px;
	}
	textarea{
		outline: none;
		height: 400px;
	}
</style>
<div class="blog-header">
        <div class="container">
          <h1 class="blog-title"><?= $title ?></h1>
 
        </div>
      </div>
      <main role="main" class="container">
      <?php echo validation_errors(); ?>
      	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header text-sm-center">
					Upload your Music please
				</div>
				<div class="card-block">
				<?php echo form_open_multipart('music/upload');?>
				<fieldset class="form-group">
					<label for="title">Artist</label>
  					<input type="text" class="form-control" name="artist" placeholder="Artist name">
				</fieldset>	
				<fieldset class="form-group">
					<label for="title">Song Title</label>
  					<input type="text" class="form-control" name="title" placeholder="Song Title">
				</fieldset>	
				<fieldset class="form-group">
					<label for="album">Album Name</label>
  					<input type="text" class="form-control" name="album" placeholder="Album Name">
				</fieldset>	

				<fieldset class="form-group">
					<label for="audio">Upload MP3</label>
  					<input type="file" name="userfile" class="form-control" size="20" >
				</fieldset>
				<fieldset class="form-group">
					<label for="genre">Genre</label>
  					<select name="g_cat" class="form-control">
						<option value="0">Select</option>
						<option value="AFRO MUSIC">AFRO MUSIC</option>
						<option value="ZIMDANCEHALL">ZIMDANCEHALL</option>
						<option value="ZIM RNB">ZIM RNB</option>
						<option value="GOSPEL">GOSPEL</option>
						<option value="KWAITO">KWAITO</option>
						<option value="SUNGURA">SUNGURA</option>
						<option value="ZIM JAZZ">ZIM JAZZ</option>	
						<option value="COUNTRY MUSIC">COUNTRY MUSIC</option>
						<option value="ZIM HIP HOP">ZIM HIP HOP</option>
						<option value="CLUB MUSIC">CLUB MUSIC</option>
						<option value="ZIM RAGGA">ZIM RAGGA</option>
						
					</select>
				</fieldset>
				<button  type="submit" name="submit" class="btn btn-primary btn-lg float-sm-right">Upload Music</button>
				<p><br></p>
				<p><br></p>
				</div>
				<div class="card-footer text-muted">
					<a href="#">Physmach Technologies</a>
				</div>
		</div>
	    </div>
     </main>
