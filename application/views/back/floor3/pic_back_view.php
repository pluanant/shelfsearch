<div class= "zone pic">
	<div>
			<input type='submit' value=' EDIT ' id="edit" style="width:10em; height:5em; margin:3%; float:left;">
		</div>

		<div>
			<input type='submit' value=' ADD ' id ="add" style="width:10em; height:5em; margin:3%; float:left;">
		</div>

		<div>
			<input type='submit' value=' DELETE ' id ="delete" style="width:10em; height:5em; margin:3%; float:left;">

		</div>
        <div>
            <input type='submit' value=' REFRESH ' id ="refresh" style="width:10em; height:5em; margin:3%; float:left;">

        </div>
        
        <div class="shelf-form" style="float:left ; ">
	    <label for='number'>Shelf Number:</label>
	    <input type='text' name='number' value='$number'class="shelf-number"><br>
	    <label for='min'>Min:</label>
	    <input type='text' name='min' value='$min'class="shelf-min">
	    <label for='max'>Max:</label>
	    <input type='text' name='max' value='$max'class="shelf-max"><br>
	   
	    <label for='zone'>Zone:</label>
	    <select name='zone' class = "shelf-zone">
	        <option value='left' selected>left</option>
	        <option value='right' >right</option>
	        <option value='top' >top</option>
	        <option value='down' >down</option>
	    </select> 
	    <label for='system'>System:</label>
        <select name='system' class = "shelf-system">
            <option value='old' selected>old</option>
            <option value='new' >new</option>
        </select>
        <input type='hidden' name='oldsnumber' value='$snumber' class="shelf-oldnumber">
        <input type='submit' value=' Submit' id="submit">
        <input type='reset' value=' Reset ' id ="reset">
        <input type='submit' value=' Cancel' id="cancel">
	</div>
	<div class="shelf-form" style="clear: left;">
    <br>Swap Shelf (Change book from Shelf A to B and B to A)<br>
<?php echo form_open('admin/swap_submit');
    $floor_of_form = 3; //edit when use in floor 3
?>
    <div>
        <label><strong>Shelf A Number</strong></label>
        <?php
        $data = array(
            'name'  => 'numberA',
            'id'    => 'numberA',
            'size'  => '5',
            'value' => '$number',
            'class' => 'shelf-number'
        );
        echo form_input($data);
        ?>

        <label><strong>Shelf A Floor</strong></label>
        <?php
        $data = array(
            'name'  => 'floorA',
            'id'    => 'floorA',
            'size'  => '5',
            'value' => $floor_of_form //repopulate <<Form validation
        );
        echo form_input($data);
        ?>
    </div>
    <div >
        <label><strong>Shelf B Number</strong></label>
        <?php
        $data = array(
            'name'  => 'numberB',
            'id'    => 'numberB',
            'size'  => '5',
            'value' => set_value('numberB') //repopulate <<Form validation
        );
        echo form_input($data);
        ?>

        <label><strong>Shelf B Floor</strong></label>
        <?php
        $data = array(
            'name'  => 'floorB',
            'id'    => 'floorB',
            'size'  => '5',
            'value' => set_value('floorB') //repopulate <<Form validation
        );
        echo form_input($data);

        $data = array(
            'value' => 'Submit Post!',
        );
        echo form_submit($data);
        ?>
    </div>
    <?=form_close();?>
</div>
<br><br>


</div>