<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>

<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="content_sub">
        <div class="post">


         <div class="post">
            

            <h2 class="title" id="MS">Your Mission Statement</h2>
            <div class="entry">



                <p style="font-family:arial;color:green;font-size:15px">Double-click the mission statement below to translation it into the language you want:</p>
                <?php $this->load->view('portfolio/retrieve_ms');?>



            </div>

            <!--<h2 class="title" id="VALUE">Your Values</h2>-->

         </div>
        </div>

    </div>
    <!-- end #content -->
