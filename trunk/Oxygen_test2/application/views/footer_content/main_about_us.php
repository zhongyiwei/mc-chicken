<!--     
    Author     : Wang Qianhua
    Description: Used to display "About Us" page
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
            <h2 class="title" id="WMS">About Us</h2>
            <div class="entry">                
                <p>
           <iframe width="560" height="350" src="http://www.youtube.com/embed/QNTUt5HFzV4" frameborder="0" allowfullscreen></iframe>         
            </p>            
             <br/> 
            <table>
<tr><td style="font-weight:bold;">Team Oxygen: </td><td></td></tr>
            
            <tr><td>Project Manager:</td><td width="350px">Wang Qianhua (China)</td></tr>
            <tr><td>Database Administrator:</td><td width="350px">Teo Wen Jie (Singapore)</td></tr>
            <tr><td>System Architect:</td><td width="350px">Cai Bowen(China)</td></tr>
            <tr><td>Graphic Designer:</td><td width="350px">Elina Ang Hui Xuan (Singapore)</td></tr>
            <tr><td>Test Manager:</td><td width="350px">Ariansah (Indonesia)</td></tr>
            <tr><td>Configuration Manager:</td><td width="350px">Zhong Yiwei (China)</td></tr>
        </table><br/><br/>
        <table>
        <tr><td style="font-weight:bold;">Contact Us: </td><td></td></tr>
            
            <tr><td>Email:</td><td width="350px">oxygen.life.guidance@gmail.com</td></tr>            
        </table><br/>
        </div>
        </div>
        </div>
    <!-- end #content -->

    
<!-- end #page -->