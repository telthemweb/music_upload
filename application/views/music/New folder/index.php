<p><br></p>
<p><br></p>
 <style type="text/css">
   span{
    margin-top: -67px;
   }
    h1{
    font-weight: 900;
    font-size: 72px;
    font-family: Facebook Letter Faces;
   }
   </style>
<div class="blog-header">
        <div class="container">
          <h1 class="blog-title"><?= $title ?></h1>
          <p class="lead blog-description">Home of quality sounds.</p>
          <span class="pull-right"><a class="btn btn-primary btn-lg float-sm-right" href="<?php echo base_url(); ?>music/upload">+</a></span>
        </div>
      </div>
      <main role="main">
      	
      	<section id="explore-section" class="bg-light text-muted py-5">
          
      		<div class="container">
            <div class="row">
            	<div class="col-md-12">
    <table class="table table-responsive">
  <thead>
    <tr>
      <th>Artist</th>
      <th>Song Title</th>
      <th>Album</th>
      <th>Song</th>
      <th>Genre</th>
      <th>Mp3</th>
      <th>View</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <?php foreach ($music as $post) { ?>
  <tbody>
    <tr>
      <td><?php echo $post['artist'];?></td>
      <td><?php echo $post['songtitle'];?></td>
      <td><?php echo $post['album_title'];?></td>
      <td><a href="<?php echo site_url(); ?>assets/img/musicfiles/<?php echo $post['song'];?>" blank><img src="<?php echo base_url(); ?>assets/img/icons/play.png" width="22px" height="22px"></a></td>
      <td><?php echo $post['genre'];?></td>

      <td><a class="btn btn-outline-secondary"  href="<?php echo base_url(); ?>music/download/<?php echo $post['song']; ?>"><img src="<?php echo base_url(); ?>assets/img/icons/download.png" width="22px" height="22px"></a></td>

      <td><a class="btn btn-outline-secondary" href="<?php echo site_url('music/'. $post['slug']); ?>"><img src="<?php echo base_url(); ?>assets/img/icons/eye.png" width="22px" height="22px"></a>  <i class="badge-default">0</i></td>

      <td><a class="btn btn-warning"  href="<?php echo base_url(); ?>music/edit/<?php echo $post['slug']; ?>"><img src="<?php echo base_url(); ?>assets/img/icons/edit.png" width="22px" height="22px"></a></td>
      
      <td><?php echo form_open('/music/delete/'.$post['m_id']);  ?>
            <input type="submit" class="btn btn-danger"  value="delete" >
            </form></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
   </div>
 
</section>

</main>