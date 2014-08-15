<h2>Delete a student</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('students/delete') ?>

	<label for="stud_id">Student ID</label>
	<input type="input" name="stud_id" /><br />

	<input type="submit" name="submit" value="Delete student" />

</form>
