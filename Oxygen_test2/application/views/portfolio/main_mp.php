<!--     
    Author     : Wang Qianhua
    Description: Used to generate the page and the function for users to select shield for coat of arms
-->
<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>

<link href="<?php echo base_url();?>CSS/coa_design.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="content_sub">
        <div class="post">
                     <h2 class="title" id="COA">Select your shield</h2>
            <div class="entry">
<ul class="thumb">
	
        <li><a onclick="ChgText('web_images/coa_image/shield/coa1.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa1.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa1_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa1.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa2.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa2.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa2_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa2.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa3.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa3.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa3_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa3.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa4.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa4.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa4_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa4.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa5.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa5.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa5_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa5.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa6.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa6.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa6_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa6.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa7.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa7.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa7_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa7.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa8.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa8.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa8_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa8.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa9.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa9.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa9_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa9.png"/></a>
	</li>
        <li><a onclick="ChgText('web_images/coa_image/shield/coa10.png');" href="<?php echo base_url();?>web_images/coa_image/shield/coa10.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa10_small.png" alt="Click Me!" id="img_input" value="web_images/coa_image/shield/coa10.png"/></a>
	</li>

</ul>

<br><br><br><br><br>
<?php $this->load->view('portfolio/coa_form');?>
            </div>



            <h2 class="title" id="COA">Your Coat of Arms</h2>
            <div class="entry">
                <?php $this->load->view('portfolio/coa_design');?>
            </div>
         
        </div>

    </div>
    <!-- end #content -->
