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
          <p class="lead blog-description">
            <form class="form-inline mt-2 mt-md-9">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" size="33px">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
          </p>
          <span class="pull-right"><a href="<?php echo base_url(); ?>music/upload"><img src="<?php echo site_url(); ?>assets/img/icons/xmas.png" width="128px" height="128px"></a></span>
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
      
    </tr>
  </thead>
  <?php foreach ($music as $post) { ?>
  <tbody>
    <tr>
      <td><?php echo $post['artist'];?></td>
      <td><?php echo $post['songtitle'];?></td>
      <td><?php echo $post['album_title'];?></td>
      <td><a href="<?php echo site_url(); ?>assets/img/musicfiles/<?php echo $post['song'];?>" blank><img src="<?php echo site_url(); ?>assets/img/icons/play.png" width="22px" height="22px"></a></td>
      <td><?php echo $post['genre'];?></td>

      <td><a   href="<?php echo base_url(); ?>music/download/<?php echo $post['song']; ?>"><img src="<?php echo site_url(); ?>assets/img/icons/download.png" width="22px" height="22px"></a></td>

      <td><a  href="<?php echo site_url('music/'. $post['slug']); ?>"><img src="<?php echo site_url(); ?>assets/img/icons/eye.png" width="22px" height="22px"></a>  <i class="badge-default">0</i></td>

      
    </tr>
  </tbody>
  <?php } ?>
</table>
   </div>
 
</section>

</main>