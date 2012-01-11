<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url();?>CSS/coa_design.css" rel="stylesheet" type="text/css" media="screen" />
<div id="page">
    <div id="content_sub">
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
<br><br><br><br><br>
<?php $this->load->view('portfolio/ucoa_form');?>
          </div>
            <h2 class="title" id="COA">Your Coat of Arms</h2>
            <div class="entry">
                <?php $this->load->view('portfolio/coa_set');?>
                <?php //$this->load->view('portfolio/portfolio_translate');?>
                <h4 align="center" style="color:purple;">The symbols in the center of the Coat of Arms represent your values: </h4>
                <table border="1" align="center">
                        <th width="150px">Value 1: Top Left</th>
                        <th width="150px">Value 2: Top Right</th>
                        <th width="150px">Value 3: Bottom Left</th>
                        <th width="150px">Value 4: Bottom Right</th>
                        <tbody><tr>                           
                                <td width="150px" align="center"><?php echo $value1; ?></td>
                                <td width="150px" align="center"><?php echo $value2; ?></td>
                                <td width="150px" align="center"><?php echo $value3; ?></td>
                                <td width="150px" align="center"><?php echo $value4; ?></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>

    </div>
    <!-- end #content -->
