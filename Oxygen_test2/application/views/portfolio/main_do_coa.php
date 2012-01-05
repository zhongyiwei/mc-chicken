<link href="<?php echo base_url();?>CSS/style_subpage_coa.css" rel="stylesheet" type="text/css" media="screen" /
<div id="page">
    <div id="content_sub">
        <div class="post">


         <div class="post">

            <h2 class="title" id="COA">Your Coat of Arms</h2>
            <div class="entry">
               
                <h4 align="right">Update and Change your Coat of Arms <a href="<?php echo base_url();?>index.php/home/update_coa/">HERE</a></h4>
                 <?php $this->load->view('portfolio/coa_set');?>
                <?php //$this->load->view('portfolio/portfolio_translate');?>
                <!--<p style="font-family:arial;color:green;font-size:16px">You can double-click your Motto engraved in your Coat of Arms to display it in another language </p> -->
				<h4 align="center" style="color:purple;">The symbols in the centres of the Coat of Arms represent your values: </h4>
                <table border="1" align="center">
                        <th width="120px">Value 1: Top Left Symbol</th>
                        <th width="120px">Value 2: Top Right Symbol</th>
                        <th width="120px">Value 3: Bottom Left Symbol</th>
                        <th width="120px">Value 4: Bottom Right Symbol</th>
                        <tbody><tr>                           
                                <td width="120px" align="center"><?php echo $value1; ?></td>
                                <td width="120px" align="center"><?php echo $value2; ?></td>
                                <td width="120px" align="center"><?php echo $value3; ?></td>
                                <td width="120px" align="center"><?php echo $value4; ?></td>
                            </tr>
							</tbody>
                    </table>
            </div>

         </div>
        </div>

    </div>
    <!-- end #content -->
