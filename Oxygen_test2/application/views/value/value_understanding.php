<?php if ($this->session->userdata('type') == 'negative') { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php } else { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>
<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
       <!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/determine_values/" >Set Values</a></li>

        </ul>
    </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title">Learn More About Values</h2>
            <div class="entry">
                <p><iframe width="560" height="450" src="http://www.youtube.com/embed/axMpeZjmoAg" frameborder="0" allowfullscreen></iframe></iframe></p>
                <br/><br/>
            </div>
        </div>
        <div class="post">
            <h2 class="title">Learn More About Using Oxygen To Set Values</h2>
            <div class="entry">
                <p><iframe width="560" height="450" src="http://www.youtube.com/embed/dO6vAxT2As0" frameborder="0" allowfullscreen></iframe></p>
                <br/><br/>
            </div>
        </div>  

        <!-- end #content -->
    </div>
