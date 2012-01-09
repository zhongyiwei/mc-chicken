<?php $logged=true;
if($logged==true){
?>
<a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Mission - Red (PNG).png"></img></a>
<a href="<?php echo base_url();?>index.php/home/determineValue/"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Value-Red(PNG).png"></a>
<a href="<?php echo base_url();?>index.php/home/goal/"><img wwidth="100px" height="100px"  src="<?php echo base_url();?>web_images/flowchart/Goals-Red(PNG).png"></a>
<a href="<?php echo base_url();?>index.php/home/activity_page/"><img width="100px" height="100px"  src="<?php echo base_url();?>web_images/flowchart/Activity-Red(PNG).png"></a>
<a href="<?php echo base_url();?>index.php/home/resilience/"><img width="100px" height="100px"  src="<?php echo base_url();?>web_images/flowchart/Resilience-Red(PNG).png"></a>
                        <a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="100px" height="100px" src="<?php echo base_url();?>web_images/flowchart/Coat of Arms-Red(PNG).png"></a>
                        <a href="<?php echo base_url();?>index.php/home/portfolio_coa_motto/#MS"><img width="100px" height="100px"  src="<?php echo base_url();?>web_images/flowchart/Portfolio-Red(PNG).png"></a>
<?php }
else{
echo "<p>You are not logged in!</p>";
}
?>