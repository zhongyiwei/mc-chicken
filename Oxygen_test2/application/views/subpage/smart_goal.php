<!--based on the color code to decide which css is going to use-->
<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>
<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--main content-->
<div id="page">
    <div id="content">
        <div class="post" style="margin-left: -100px;">
            <h2 class="title">What is S.M.A.R.T Goal Setting？</h2>
            <div class="entry">
                <iframe width="550" height="442" src="http://www.youtube.com/embed/J-n0jE4swmY" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- end #content -->
