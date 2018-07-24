<p><br></p>
<p><br></p>
<style>
  .card-block{
    padding:  12px;
  }
</style>
<div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Artist Name <b><?php echo $post['artist'];?></b></h1><hr>

          <span class="pull-right"><a href="<?php echo base_url(); ?>music/upload"><img src="<?php echo site_url(); ?>assets/img/icons/chris.png" width="48px" height="48px"></a></span>
        </div>
      </div>
      <main role="main" class="container">
        <div class="row">
         
         <div class="col-md-12 col-sm-12">
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
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $post['songtitle'];?></td>
      <td><a  href="<?php echo site_url(); ?>assets/img/musicfiles/<?php echo $post['song'];?>"><img src="<?php echo site_url(); ?>assets/img/icons/play.png" width="22px" height="22px">  


        <img src="<?php echo site_url(); ?>assets/img/icons/rate.png" width="15px" height="15px"></a>
      </td>
      <td>        <div class="list-group">
            <a class="list-group-item">12 likes<i class="fa fa-thumbs-up"></i>
              
            </a>
          </div></td>
    </tr>
  </tbody>
</table>
        
      </div>
<div class="card-footer text-muted">
          <a href="#">if you find this interesting you may promote us for giving you this music for free</a>
          <a href="https://www.paynow.co.zw/Payment/BillPaymentLink/?q=aWQ9Mzk0MSZhbW91bnQ9MS4wMCZhbW91bnRfcXVhbnRpdHk9MC4wMCZmMT0lMmIyNjM3NzQ5MTQxNTAmbD0w" class="btn btn-danger pull-right">EcoCash</a>
        </div>
    </div>

</div>
</div>
</main>


<script type="text/javascript">
  
  function savelike(m_id){

  }
</script>


 

	   	
	