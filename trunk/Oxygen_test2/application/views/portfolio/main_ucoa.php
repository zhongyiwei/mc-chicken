
<link href="<?php echo base_url();?>CSS/coa_design.css" rel="stylesheet" type="text/css" media="screen" />
<div id="page">
    <div id="content_sub">
        <div class="post">


         <div class="post">
                     <h2 class="title" id="COA">Your Coat of Arms</h2>
            <div class="entry">
<?php //echo $shield?>

<h2>Select the shield here:</h2>
<ul class="thumb">
	<li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa1.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa1.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa1.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa2.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa2.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa2.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa3.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa3.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa3.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa4.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa4.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa4.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa5.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa5.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa5.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa6.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa6.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa6.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa7.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa7.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa7.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa8.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa8.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa8.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa9.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa9.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa9.png"/></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/shield/coa10.png"><img src="<?php echo base_url();?>web_images/coa_image/shield/coa10.png" alt="Click Me!" onclick="ChgText(this.value)" id="img_input" value="web_images/coa_image/shield/coa10.png"/></a>
	</li>

</ul>

<!--
<h2>Select the banner here:</h2>

<ul class="thumb2">
	<li><a href="<?php echo base_url();?>web_images/coa_image/banner/banner1.png"><img src="<?php echo base_url();?>web_images/coa_image/banner/banner1.png" alt="Click Me!" onclick="ChgText_banner(this.value)" id="img_input" value="web_images/coa_image/banner/banner1.png"/></a>
	</li>
	<li><a href="<?php echo base_url();?>web_images/coa_image/banner/banner4.png"><img src="<?php echo base_url();?>web_images/coa_image/banner/banner4.png" alt="Click Me!" onclick="ChgText_banner(this.value)" id="img_input" value="web_images/coa_image/banner/banner4.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/banner/banner2.png"><img src="<?php echo base_url();?>web_images/coa_image/banner/banner2.png" alt="Click Me!" onclick="ChgText_banner(this.value)" id="img_input" value="web_images/coa_image/banner/banner2.png" /></a>
	</li>
</ul>


<h2>Select the crown here:</h2>

<ul class="thumb3">
	<li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest5.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest5.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest5.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest6.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest6.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest6.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest1.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest1.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest1.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest3.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest3.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest3.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest7.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest7.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest7.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest8.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest8.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest8.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest9.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest9.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest9.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest4.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest4.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest4.png" /></a>
	</li>
        <li><a href="<?php echo base_url();?>web_images/coa_image/crest/crest2.png"><img src="<?php echo base_url();?>web_images/coa_image/crest/crest2.png" alt="Click Me!" onclick="ChgText_crest(this.value)" id="img_input" value="web_images/coa_image/crest/crest2.png" /></a>
	</li>

</ul>-->
<br><br><br><br><br>
<?php $this->load->view('portfolio/ucoa_form');?>
          </div>



            <h2 class="title" id="COA">Your Coat of Arms</h2>
            <div class="entry">
                <?php $this->load->view('portfolio/coa_set');?>
                <?php //$this->load->view('portfolio/portfolio_translate');?>
            </div>


         </div>
        </div>

    </div>
    <!-- end #content -->
