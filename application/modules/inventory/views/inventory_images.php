
<div class="main-content">

<div id="breadcrumbs" class="breadcrumbs">
 <script type="text/javascript">
  try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
 </script>
 <ul class="breadcrumb">
  <li>
   <i class="icon-home home-icon"></i>
   <a href="#">Home</a>
   <span class="divider">
    <i class="icon-angle-right arrow-icon"></i>
   </span>
  </li>
  <li class="active"><?php echo lang('inventory');?></li>
 </ul>
</div>


    
        <div class="page-header position-relative">
                        <h1>
                            <a href="<?php echo base_url('index.php/inventory/inventory');?>"><?php echo lang("inventory");?></a>
                            <small>
                                <i class="icon-double-angle-right"></i>
                                <?php echo "Images";?>
                            </small>
                        </h1>
        </div><!-- /.page-header -->



<div style='height:30px;'></div>
	<div style="margin:10px;">
   	  <?php echo $output;?>
	</div>	
</div>