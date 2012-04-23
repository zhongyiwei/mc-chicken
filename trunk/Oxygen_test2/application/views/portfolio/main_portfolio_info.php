<!--     
    Author     : Wang Qianhua
    Description: Used to display the "do you know" page for "Portfolio" function
-->
<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>CSS/popUp.css" rel="stylesheet" type="text/css" media="screen" />
    <!--[if IE]><link href="<?php echo base_url(); ?>CSS/popUpForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
<?php }?>

<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="content_sub">

         <div class="post">
<h2 class="title" id="VALUE">Learn More About Using Portfolio On Oxygen</h2>
            <div class="entry">
                <p>
                    
                 </p>
            </div>
         </div>
        
        <div class="post">
            <h2 class="title">Learn More About Using Oxygen To View Your Portfolio</h2>
            <div class="entry">
                <p><iframe width="560" height="450" src="http://www.youtube.com/embed/3vde9rett4A" frameborder="0" allowfullscreen></iframe></p>
                <br/><br/>
            </div>
        </div>
    </div>
    <!-- end #content -->



