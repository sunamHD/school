<h2>Unenroll from a class</h2>

<?php echo validation_errors(); ?>

<?php 
    $attributes = array('id' => 'unenrollClassMenu');
    echo form_open('classes/unenroll', $attributes) 
?>
	<label for="stud_id">Student ID</label>
	<input type="input" name="stud_id" /><br />

	<label for="class_id">Class ID</label>
	<input type="input" name="class_id" /><br />

	<input type="submit" name="submit" value="Unenroll" />

</form>
