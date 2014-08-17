<h2>Choose a student to edit</h2>

<?php echo validation_errors(); ?>

<?php 
    $attributes = array('id' => 'editStudentMenu');
    echo form_open('students/editMenu', $attributes) 
?>
	<label for="stud_id">Student ID</label>
	<input type="input" name="stud_id" /><br />

	<input type="submit" name="submit" value="Edit student" />

</form>
