<h2>Create a class</h2>

<?php echo validation_errors(); ?>

<?php 
    $attributes = array('id' => 'createClassForm');
    echo form_open('classes/create', $attributes) 
?>

	<label for="className">Class Name</label>
	<input type="input" name="className" /><br />

	<label for="maj_id">Major ID</label>
	<input type="input" name="maj_id" /><br />

	<input type="submit" name="submit" value="Create class" />

</form>
