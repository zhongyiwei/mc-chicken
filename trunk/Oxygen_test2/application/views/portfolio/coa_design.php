<!--     
    Author     : Wang Qianhua
    Description: Used to create and display "Coat of Arms" function where users can customize their own Coat of Arms by selecting shield.
-->

<script type="text/javascript" src="<?php echo base_url();?>js/jquery-latest.js"></script>
<script type="text/javascript">
$(function(){

//Larger thumbnail preview

$("ul.thumb li").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-110px',
			marginLeft: '-110px',
			top: '50%',
			left: '50%',
			width: '174px',
			height: '174px',
			padding: '20px'
		}, 200);

	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0',
			marginLeft: '0',
			top: '0',
			left: '0',
			width: '100px',
			height: '100px',
			padding: '5px'
		}, 400);
});

//Swap Image on Click
	$("ul.thumb li a").click(function() {

		var mainImage = $(this).attr("href"); //Find Image Name
		$("#image img").attr({ src: mainImage });
		return false;
	});







        //for thumb2
        $("ul.thumb2 li").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-110px',
			marginLeft: '-110px',
			top: '50%',
			left: '50%',
			width: '174px',
			height: '174px',
			padding: '20px'
		}, 200);

	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0',
			marginLeft: '0',
			top: '0',
			left: '0',
			width: '100px',
			height: '100px',
			padding: '5px'
		}, 400);
});

//Swap Image on Click
	$("ul.thumb2 li a").click(function() {

		var mainImage = $(this).attr("href"); //Find Image Name
		$("#banner img").attr({ src: mainImage });
		return false;
	});

//for div thumb3 -- crest
        $("ul.thumb3 li").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-110px',
			marginLeft: '-110px',
			top: '50%',
			left: '50%',
			width: '174px',
			height: '174px',
			padding: '20px'
		}, 200);

	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0',
			marginLeft: '0',
			top: '0',
			left: '0',
			width: '100px',
			height: '100px',
			padding: '5px'
		}, 400);
});

//Swap Image on Click
	$("ul.thumb3 li a").click(function() {

		var mainImage = $(this).attr("href"); //Find Image Name
		$("#crest img").attr({ src: mainImage });
		return false;
	});
});






   //var element = document.createElement("input");  
    //element.id = 'MyTextBox_coa'; $('#mobileno').focus()
  /* window.setTimeout(function ()
    {
        document.getElementById("MyTextBox_coa").getAttribute(value)=imgvalue;
        //document.getElementById('mobileno').focus();
    }, 0);*/
    //var MyElement = $('#MyTextBox_coa').focus();//document.getElementById("MyTextBox_coa");
    //var MyElement = getElementsByAttribute( attribute, id )
    
    //var MyElement = document.getElementById("MyTextBox_coa").style;
    //window.open(filename, "windowname", "settings"); 
    //imgvalue = document.getElementById("img_input").value;
  /*  if (imgvalue.style.display == "none") 
{ 
imgvalue.style.display="";
}else{ 
imgvalue.style.display="none";
} */
        //document.getElementById("MyTextBox_coa").value = imgvalue;
    //document.getElementsByAttribute(id, "MyTextBox_coa").value = imgvalue;
    //$('#MyTextBox_coa').value = imgvalue;
    //alert(MyElement.value);
    
    //document.getElementById("MyTextBox_coa").style.value=imgvalue;
            //var MyElement=function(s){return document.getElementById("MyTextBox_coa")};
    //alert(imgvalue);
function ChgText(imgvalue)
{
    var MyElement = document.getElementById("MyTextBox_coa");
    MyElement.value = imgvalue;

    return true;
}



function ChgText_banner(imgvalue)
{
    var MyElement = document.getElementById("MyTextBox_banner");
    MyElement.value = imgvalue;

    return true;
}

function ChgText_crest(imgvalue)
{
    var MyElement = document.getElementById("MyTextBox_crest");
    MyElement.value = imgvalue;

    return true;
}
</script>
<div align=center class="coa" id="coa">
	<div align=center class="image" id="image">
  <img alt="Your Coat of Arms" src="<?php echo base_url();?>web_images/coa_image/shield/coa2.png" /></div>

 <?php
  $this->load->model('link_db_model');
  $data = $this->link_db_model->get_value_symbol();
  if($data != null){

$this->load->view('portfolio/value_symbol');
  }
?>
  </div>



