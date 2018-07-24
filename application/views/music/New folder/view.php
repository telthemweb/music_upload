<p><br></p>
<p><br></p>
<style>
  .card-block{
    padding:  12px;
  }
</style>
<div class="blog-header">
        <div class="container">
          <h1 class="blog-title"><i><?php echo $post['artist'];?></h1><hr>
          <p class="lead blog-description"><blockquote><small class="post-date"><?php echo $post['artist'];?></small></blockquote></p>
        </div>
      </div>
      <main role="main" class="container">
        <div class="row">
         <div class="col-md-1 col-sm-2"></div>
         <div class="col-md-8 col-sm-12">
    <div class="card">
      <div class="card-header text-sm-center">
      <h2><?php echo $post['artist'];?></h2>
      </div>
      <div class="card-block">
        <h4 class="card-title">Click play and press ctl S to download</h4>
        
        <table class="table table-responsive">
  <thead>
    <tr>
      <th>Song Title</th>
      <th>Play</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $post['songtitle'];?></td>
      <td><a class="btn btn-success btn-sm" href="<?php echo site_url(); ?>assets/img/musicfiles/<?php echo $post['song'];?>"><img src="<?php echo base_url(); ?>assets/img/icons/play.png" width="22px" height="22px"></a></td>
    </tr>
  </tbody>
</table>
        
      </div>
<div class="card-footer text-muted">
          <a href="#">if you find this interesting you may promote us for giving you this music for free</a>
          <a href="+263774914150" class="btn btn-danger pull-right">EcoCash</a>
        </div>
    </div>

</div>
</div>
</main>


 

	   	
	