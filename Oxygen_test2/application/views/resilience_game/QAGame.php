


<?php $this->load->view('includes/header_general'); ?>

<link href="<?php echo base_url(); ?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/resilience_test/gameproto.html" >Resilience Test</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/QAGamePortol" >Resilience Game</a></li>
        </ul>
    </div>
    <div id="content_sub" style="height:auto">
        <div class="post" >
            <h2 class="title">Resilience Game</h2>
            <div class="entry" style="margin-top:50px; margin-left:32x; padding:0px">
                <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="630" height="315" id="Starting Snow" align="middle">
                    <param name="movie" value="../../flash/StartingSnow.swf" />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <param name="play" value="true" />
                    <param name="loop" value="true" />
                    <param name="wmode" value="gpu" />
                    <param name="scale" value="showall" />
                    <param name="menu" value="true" />
                    <param name="devicefont" value="false" />
                    <param name="salign" value="" />
                    <param name="allowScriptAccess" value="sameDomain" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="../../flash/StartingSnow.swf" width="630" height="315">
                        <param name="movie" value="../../flash/StartingSnow.swf" />
                        <param name="quality" value="high" />
                        <param name="bgcolor" value="#ffffff" />
                        <param name="play" value="true" />
                        <param name="loop" value="true" />
                        <param name="wmode" value="gpu" />
                        <param name="scale" value="showall" />
                        <param name="menu" value="true" />
                        <param name="devicefont" value="false" />
                        <param name="salign" value="" />
                        <param name="allowScriptAccess" value="sameDomain" />
                        <!--<![endif]-->
                        <a href="http://www.adobe.com/go/getflash">
                            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
                        </a>
                        <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object>
            </div>



        </div><!-- End of div class entry -->
    </div><!-- End of div class post -->
    <!-- end #content -->
</div>
<div id="footer" align="center">
    <div id="image_footer"><img id="opener" onclick="loadFlow()" src="<?php echo base_url(); ?>CSS/images/background/what_is_now.png" alt="" /></img></div>
    <div id="image_footer"><a href="<?php echo base_url(); ?>index.php/home/why_ms/#WMS"><img src="<?php echo base_url(); ?>CSS/images/background/do_u_know.png" alt="" /></a></div>
    <?php $this->load->view('includes/footer_general'); ?>
