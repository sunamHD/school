<h2>Choose a class to view enrollment</h2>

<?php echo validation_errors(); ?>

<?php 
    $attributes = array('id' => 'enrollmentSelectMenu');
    echo form_open('classes/enrollmentSelect', $attributes) 
?>
	<label for="class_id">Class ID</label>
	<input type="input" name="class_id" /><br />

	<input type="submit" name="submit" value="View Enrollment" />

</form>
