<!--based on the color code to decide which css is going to use-->
<?php if ($this->session->userdata('type') == 'negative') { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php } else { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>

<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--main content-->
<div id="page">
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Learn More About Setting Goals</h2>
            <div class="entry">
                <p><iframe width="560" height="450" src="http://www.youtube.com/embed/dfjyd8zNL9g" frameborder="0" allowfullscreen></iframe></p>
                <br/><br/>
            </div>
        </div>
        <div class="post">
            <h2 class="title">Learn More About Using Oxygen To Set and Track Goals</h2>
            <div class="entry">
                <p><iframe width="560" height="450" src="http://www.youtube.com/embed/MdMmujYh_Hs" frameborder="0" allowfullscreen></iframe></p>
                <br/><br/>
            </div>
        </div> 


    </div>
    <!-- end #content -->
