<!-- 
    Author     : Wang Qianhua
    Description: Used to construct and generate the page that displays the error message if users tried to access to "set activity" function 
                for a goal type before he sets any goal of this type
-->
<?php $this->load->view('includes/header_general');?>

<?php $this->load->view('includes/banner_general');?>

<h2>Sorry, you have to set goal first</h2>
<br>
<p style="font-size:120%">You are not allowed to set activities for this goal because you have never set your goal of this type.</p>
<p style="font-size:120%">Please set your goal first. Click<a href="<?php echo base_url();?>index.php/home/holistic/"> Here</a> to set your goal.</p>


<?php $this->load->view('includes/footer_general');?>