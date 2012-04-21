<!--     
    Author     : Zhong Yiwei
    Description: Used to generate the window prompting a user to send portfolio report to his mentor and to display 
    the navigation buttons on footer in "portfolio" function.

-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id = "bodycolor"></div>
<div id="popupContent">
    <div onclick="disablePopup()" style="cursor:pointer; margin-left:670px;font-size:24px;border-width: 3px;border-color:#999;border-style: solid;text-align: center;padding-bottom: 2px;width:25px;">x</div>
    <p class="askforsendemail">According to the research by the Dominican University of California, those who commit their goals by sharing them with friends are more likely to achieve their goals. Do you want to notify your friend whom you nominated as your mentor?</p>
    <p>No mentor? <a href="<?php echo base_url(); ?>index.php/home/personal_info/">Click here</a></p>
    <p>Matthews,D.G.<i style="font-style: italic; text-align:left; ">Summary of Recent Goals Research.</i>San Rafael,Carlifornia,Retrieved from: <a href="http://www.dominican.edu/academics/ahss/psych/faculty/fulltime/gail-matthews">http://www.dominican.edu/academics/ahss/psych/faculty/fulltime/gail-matthews.</a>
    </p>
    <a href="<?php echo base_url(); ?>index.php/home/email_pdf" class="yesButton">Yes</a>
    <a class="noButton" href="<?php echo base_url(); ?>index.php/home/portfolio_export_pdf?id=<?php echo $this->session->userdata('seeker_id') ?>">No</a>
</div>

<!-- end #page -->
<div id="home">
    <a href="<?php echo base_url();?>index.php/home/index/"><img src="<?php echo base_url();?>CSS/images/background/home_button.png" alt="Home"/></a>
</div>
<div id="dialog" title="Your Flow Chart"></div>
<div id="footer" align="center">
    <div id="image_footer"><img id="opener" onclick="loadFlow()" src="<?php echo base_url();?>CSS/images/background/what_is_now.png" alt="" /></img></div>
    <div id="image_footer"><a href="<?php echo base_url();?>index.php/home/portfolio_do_you_know/"><img src="<?php echo base_url();?>CSS/images/background/do_u_know.png" alt="" /></a></div>
    
  