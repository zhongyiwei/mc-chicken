<!--     
    Author     : Wang Qianhua
    Description: Used to display the "What`s all about" page on the home page
-->

<?php if($this->session->userdata('type')=='negative'){ ?>
<link href="<?php echo base_url();?>CSS/style_subpage_main_neutral.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{?>
<link href="<?php echo base_url();?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<?php }?>


<!--[if IE]><link href="<?php echo base_url();?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
<div id="page">
    <div id="content_sub">
        
                    <div class="post">
            <h2 class="title">Learn More About Using Oxygen</h2>
            <div class="entry">
<p><iframe width="560" height="450" src="http://www.youtube.com/embed/wUsTYBfVgaw" frameborder="0" allowfullscreen></iframe></p>
<br/><br/>
</div>
</div>
        <div class="post">
            <h2 class="title">Learn More About Mission</h2>
            <div class="entry">                
                <p>
                    <iframe width="560" height="340" src="http://www.youtube.com/embed/MTrs8Q4S4Z0" frameborder="0" allowfullscreen></iframe>
            </p>            
              </div>
        </div>

        
        <div class="post">
            <h2 class="title">Learn More About Life-guiding Value</h2>
            <div class="entry">
	<p><iframe width="560" height="340" src="http://www.youtube.com/embed/axMpeZjmoAg" frameborder="0" allowfullscreen></iframe></iframe></p>		
	</div>
            </div><!-- End of div class entry -->
       
        
            <div class="post">
            <h2 class="title">Learn More About Goal</h2>
            <div class="entry">
                 <p><iframe width="560" height="340" src="http://www.youtube.com/embed/dfjyd8zNL9g" frameborder="0" allowfullscreen></iframe></p>
                </div>
            </div>    
            </div>
<!-- end #content -->
<!-- end #page -->
