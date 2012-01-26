<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->
<div id="page">
        <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/mission_statement/" >Set Mission</a></li>
        </ul>
    </div>
    <div id="content_sub">
        <div class="post">    
            <h2 class="title">Your Mission Statement</h2>
            <div class="entry">
            <h3>Mission Statement: </h3>

		<p style="font-size:150%">

                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $mission_statement; ?>
                </p>            
            <h5 align="right">Update and Change your Mission Statement <a href="<?php echo base_url();?>index.php/home/update_ms/">HERE</a></h5>
            
            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->
    </div>
<!-- end #content -->


