<!--     
    Author     : Wang Qianhua
    Description: Used to display the page for user guide
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
            <h2 class="title" id="WMS">User Guide</h2>
            <div class="entry">                
                <p>
                    <iframe width="560" height="350" src="http://www.youtube.com/embed/wUsTYBfVgaw" frameborder="0" allowfullscreen></iframe>
                    <br/><br/>
            </p>            
              </div>
        </div>
        </div>
    <!-- end #content -->

    
<!-- end #page -->
