<h2>Choose a class to edit</h2>

<?php echo validation_errors(); ?>

<?php 
    $attributes = array('id' => 'editClassMenu');
    echo form_open('classes/editMenu', $attributes) 
?>
	<label for="class_id">Class ID</label>
	<input type="input" name="class_id" /><br />

	<input type="submit" name="submit" value="Edit class" />

</form>


