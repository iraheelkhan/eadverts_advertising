<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php include "includes/breadcrumb.php";?>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?= $pagename; ?></h1>
			</div>
		</div><!--/.row-->

		<!-- main section started here -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo lang('section_title_for_add_ad'); ?>
					</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<?php echo form_open('insertdb/addShoptoDb');?>
							<div class="col-md-6">

								<div class="form-group">
									<?php echo lang('input_add_ad_title_name', 'enteradname', 
													array('class' =>'badge badge-pill badge-primary',
														  'style'=>'font-size:18px;')); ?>

									<?php echo form_input('enteradname', '', 'class="form-control" placeholder="Enter Ad Title/Name"'); ?>
								</div>
								<div class="form-group">
									<?php echo lang('input_select_store_location_text', 'enterstorename', 
													array('class'=>'badge badge-pill badge-secondary',
														  'style'=>'font-size:18px;')); ?>
									<?php $options = array('storename' => 'store name', 
															'storename2' => 'store name 2'); ?>
									<?php echo form_dropdown('yourstorename', $options, 'select', 'class="form-control"'); ?>
								</div>
								<div class="form-group">
									<?php echo lang('input_add_ad_sale_price_text', 'entersaleprice', array('class'=>'badge badge-pill badge-secondary','style'=>'font-size:18px;')); ?>
									<?php echo form_input('enterShopCategory', '', 'class="form-control" placeholder="Enter Sale Price in Numbers"'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<?php echo form_label(lang('upload_image_new_ad'), 'uploadimage', array('class'=>'badge badge-pill badge-secondary','style'=>'font-size:18px;'));
									?>

									<?php echo form_upload('uploadimage', '', 'class="custom-file-input"'); ?>
								</div>



								<?php echo form_submit('submit', lang('submit_btn_add_shop_page'), 'class="btn btn-primary"'); ?>
							</div>

							<?php form_close();?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo lang('section_title_for_add_ad'); ?>
					</div>

				</div>
			</div>
		</div>