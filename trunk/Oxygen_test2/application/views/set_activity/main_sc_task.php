  <div class="tasks"><h5>Please enter the specific tasks you have to perform to fulfill your desired outcome of your activity. You can prioritize and give sequence to these tasks
        by dragging them:</h5></div>
<div class="accordionContent"><br /><br /><br /><br /><br />Medium Example</div>


        <ul id="sortable">
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <?php
                     $data = array('name'=> 'subtask_1','id' => 'subtask_1', 'value' => '', 'size' => '70',);
                     echo form_input($data);
                 ?>
            </li>

            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <?php
                     $data = array('name'=> 'subtask_2','id' => 'subtask_2', 'value' => '', 'size' => '70',);
                     echo form_input($data);
                 ?>
            </li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <?php
                     $data = array('name'=> 'subtask_3','id' => 'subtask_3', 'value' => '', 'size' => '70',);
                     echo form_input($data);
                 ?>
            </li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <?php
                     $data = array('name'=> 'subtask_4','id' => 'subtask_4', 'value' => '', 'size' => '70',);
                     echo form_input($data);
                 ?>
            </li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <?php
                     $data = array('name'=> 'subtask_5','id' => 'subtask_5', 'value' => '', 'size' => '70',);
                     echo form_input($data);
                 ?>
            </li>
        </ul>
        
        <?php
        
        $data = array('name' => 'button', 'id' => 'button', 'value' => 'add task', 'type' => 'button', 'content' => 'add task', 'onclick'=>"addField('subtask_','sortable',10);",);
        echo form_input($data);
        ?>




        <!--<input type="submit" align='right' value="Submit"/>-->
<br><br>
         <?php echo 
         form_submit('submit','Submit','id="form_submit"'); ?>
        <?php echo form_close(); ?>




            </div><!-- End of div class entry -->
        </div><!-- End of div class post -->

    </div>
<!-- end #content -->