<?php
/* 
    Document   : QAGame
    Created on : Apr 12, 2012, 1:29:24 PM
    Author     : ZHONG YIWEI
    Description:
        Show resilience Game
*/
?>


<?php $this->load->view('includes/header_general'); ?>

<?php if ($this->session->userdata('type') == 'negative') { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php } else { ?>
    <link href="<?php echo base_url(); ?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>

<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter2.css" rel="stylesheet" type="text/css" /><![endif]-->
<div id="page">
    <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/resilience_test/gameproto.html" >Resilience Test</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/home/QAGamePortol" >Resilience Game</a></li>
        </ul>
    </div>
    <div id="content_sub" style="height:auto;">
        <div class="post" style="margin-left:20px; overflow:hidden;" >
            <h2 class="title" style=" margin-left: -7px; overflow: hidden; width:640px;">Resilience Game</h2>
            <div class="entry" style="margin-top:20px; margin-left:-80px; padding:0px;">
                <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="800" height="400" id="Starting Snow" align="middle">
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
                    <object type="application/x-shockwave-flash" data="../../flash/StartingSnow.swf" width="800" height="400">
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

            <div id="instruction">
                <table width="700" border="1" >
                    <tr >
                        <td style="vertical-align: middle;"> <img src="<?php echo base_url(); ?>CSS/images/instruction1.png" alt="Press Up to Jump" /></td>
                        <td style="vertical-align: middle;">Jump</td>
                        <td style="vertical-align: middle;"> <img src="<?php echo base_url(); ?>CSS/images/instruction2.png" alt="Press Right to Walk"/> </td>
                        <td style="vertical-align: middle; 	
                            border-right-width: thin;
                            border-right-style: solid;
                            border-right-color: #FFF;">Walk</td>
                        <td style="vertical-align: middle;"><img src="<?php echo base_url(); ?>CSS/images/wing.png" alt="When Flying Walk" width="48px" height="48px;" style=" margin-left: 20px;"/> </td>
                        <td style="vertical-align: middle;">When Flying</td>
                        <td style="vertical-align: middle;"> <img src="<?php echo base_url(); ?>CSS/images/instruction1.png" alt="Press Up to Fly Higher" /></td>
                        <td style="vertical-align: middle;">Fly Higher</td>
                        <td style="vertical-align: middle;"> <img src="<?php echo base_url(); ?>CSS/images/instruction3.png" alt="Press Up to Fly Higher" /></td>
                        <td style="vertical-align: middle;">Fly Lower</td>
                    </tr>
                </table>
            </div>
        </div><!-- End of div class entry -->
    </div><!-- End of div class post -->
    <!-- end #content -->
</div>
<div class="gameHome" >
    <a href="<?php echo base_url(); ?>index.php/home/index/"><img src="<?php echo base_url(); ?>CSS/images/background/home_button.png"/></a>
    <div class="GameScore">
        <table width="200" border="1" style="background-color:rgba(0,0,0,0.6);">

            <?php
            for ($i = 0; $i < $num_count; $i++) {
                ?>
                <tr>
                    <td><?php echo "Score " . ($i + 1) ?></td>
                    <td><?php echo $row[$i]->score ?></td></tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

<div id="footer" align="center">
    <div id="image_footer"><img id="opener" onclick="loadFlow()" src="<?php echo base_url(); ?>CSS/images/background/what_is_now.png" alt="" /></img></div>
    <div id="image_footer"><a href="<?php echo base_url(); ?>index.php/home/why_ms/#WMS"><img src="<?php echo base_url(); ?>CSS/images/background/do_u_know.png" alt="" /></a></div>
    <?php $this->load->view('includes/footer_general'); ?>
