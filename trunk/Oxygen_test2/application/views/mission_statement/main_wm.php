<!--     
    Author     : Wang Qianhua
    Description: Used to display the "do you know" page for mission statement function
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
        <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/mission_statement/" >Set Mission</a></li>
        </ul>
    </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title" id="WMS">Mission Statement?</h2>
            <div class="entry">                
                <p>
            </p>            
              </div>
        </div>

        <div class="post">
            <h2 class="title" id="WMS">Set Mission Statement on Oxygen</h2>
            <div class="entry">
                <p>
            </p>            
              </div>
        </div>

    <!-- end #content -->

    
<!-- end #page -->
