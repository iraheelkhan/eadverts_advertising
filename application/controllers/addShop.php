<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php include "includes/breadcrumb.php";?>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?= $pagename; ?></h1>
			</div>
		</div><!--/.row-->

		<!-- main section started here -->
		<div class="row">
      <div id="map"></div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo lang('section_title_for_add_shop'); ?>
						</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<?php echo form_open('insertdb/addShoptoDb');?>
							<div class="col-md-6">


								<div class="form-group">
									<?php echo lang('input_add_shop_name_text', 'enterShopName', 
													array('class' =>'badge badge-pill badge-primary',
														  'style'=>'font-size:18px;')); ?>

									<?php echo form_input('enterShopName', '', 'class="form-control" placeholder="Enter Shop Name"'); ?>
								</div>
								<div class="form-group">
									<?php echo lang('input_add_shop_location_text', 'enterLocationName', 
													array('class'=>'badge badge-pill badge-secondary',
														  'style'=>'font-size:18px;')); ?>
									<?php echo form_input('enterLocationName', '', 'class="form-control" placeholder="Enter Shop Location"'); ?>
								</div>
								<div class="form-group">
									<?php echo lang('input_add_shop_category_text', 'enterShopCategory', array('class'=>'badge badge-pill badge-secondary','style'=>'font-size:18px;')); ?>
									<?php echo form_input('enterShopCategory', '', 'class="form-control" placeholder="Enter Shop Category"'); ?>
								</div>
							</div>
							<div class="col-md-6">
								 <div id="map"></div>
								<?php echo form_submit('submit', lang('submit_btn_add_shop_page'), 'class="btn btn-primary"'); ?>
							</div>

							<?php form_close();?>
						</div>


            
					</div>
				</div>
         
			</div>


		</div><!--/.row-->
	
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiv3Cw7Nu9qPxyeeE10DVmswE6g0vOj54&callback=initMap">
    </script>
  </body>
</html>