<link href="<?php echo base_url(); ?>CSS/style_subpage_main.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url(); ?>CSS/coa_design.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIE.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if IE]><link href="<?php echo base_url(); ?>CSS/styleForIEfooter.css" rel="stylesheet" type="text/css" /><![endif]-->

<div id="page">
    <div id="sub-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/home/update_coa/" >Modify COA</a></li>
        </ul>
    </div>
    <div id="content_sub">
        <div class="post">
            <h2 class="title" id="COA">Your Coat of Arms</h2>              
                <!--<h4 align="right">Update and Change your Coat of Arms <a href="<?php echo base_url(); ?>index.php/home/update_coa/">HERE</a></h4>-->
            <?php //$this->load->view('portfolio/coa_set');?>
            <?php //$this->load->view('portfolio/portfolio_translate');?>
                <!--<p style="font-family:arial;color:green;font-size:16px">You can double-click your Motto engraved in your Coat of Arms to display it in another language </p> -->
            <img align:left alt="Generation of COA" src="<?php echo base_url(); ?>index.php/home/portfolio_export_COA"/>

            <div class="entry">
                <h4 align="center" style="color:purple;">The symbols in the center of the Coat of Arms represent your values: </h4>
                <?php
                $this->load->model('link_db_model');
                $data = $this->link_db_model->get_value_symbol();
                $row = $data->result();
                //echo $row[0]->value_symbol_kids;
                if ($this->session->userdata('category') == 'child') {
                    ?>
                    <table border="1" align="center">
                        <th width="150px" align="center">  <div >
                            <img alt="" width="75" height="75" src="<?php
                echo base_url();
                echo $row[0]->value_symbol_kids;
                ?>" />
                        </div></th>
                        <th width="150px" align="center">    <div class="">
                            <img alt="" width="75" height="75" src="<?php
                echo base_url();
                echo $row[1]->value_symbol_kids;
                ?>" />
                        </div></th>
                        <th width="150px" align="center">    <div class="">
                            <img width="75" height="75" alt="" src="<?php
                echo base_url();
                echo $row[2]->value_symbol_kids;
                ?>" />
                        </div></th>
                        <th width="150px" align="center">    <div class="">
                            <img width="75" height="75" alt="" src="<?php
                echo base_url();
                echo $row[3]->value_symbol_kids;
                ?>" />
                        </div></th>
                        <tbody><tr>                           
                                <td width="150px" align="center"><?php echo $value1; ?></td>
                                <td width="150px" align="center"><?php echo $value2; ?></td>
                                <td width="150px" align="center"><?php echo $value3; ?></td>
                                <td width="150px" align="center"><?php echo $value4; ?></td>
                            </tr>
                        </tbody>
                    </table>






    <?php } else {
    ?>

                    <table border="1" align="center">
                        <th width="150px" align="center">     <div class="">
                            <img alt=""width="75" height="75" src="<?php
    echo base_url();
    echo $row[0]->value_symbol;
    ?>" />
                        </div></th>
                        <th width="150px" align="center">    
                        <div class="">
                            <img width="75" height="75" alt="" src="<?php
                        echo base_url();
                        echo $row[1]->value_symbol;
                        ?>" />
                        </div></th>
                        <th width="150px" align="center">        <div class="">
                            <img width="75" height="75" alt="" src="<?php
                        echo base_url();
                        echo $row[2]->value_symbol;
                        ?>" />
                        </div></th>
                        <th width="150px" align="center">        <div class="">
                            <img width="75" height="75" alt="" src="<?php
                        echo base_url();
                        echo $row[3]->value_symbol;
                        ?>" />
                        </div></th>
                        <tbody><tr>                           
                                <td width="150px" align="center"><?php echo $value1; ?></td>
                                <td width="150px" align="center"><?php echo $value2; ?></td>
                                <td width="150px" align="center"><?php echo $value3; ?></td>
                                <td width="150px" align="center"><?php echo $value4; ?></td>
                            </tr>
                        </tbody>
                    </table>




    <?php
}
?>
            </div>
        </div>
    </div>
    <!-- end #content -->
