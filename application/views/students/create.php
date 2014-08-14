<h2>Create a student</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('students/create') ?>

	<label for="firstName">First Name</label>
	<input type="input" name="firstName" /><br />

	<label for="midName">Middle Name</label>
	<input type="input" name="midName" /><br />

	<label for="lastName">Last Name</label>
	<input type="input" name="lastName" /><br />

	<label for="year">Year (e.g. Sophomore)</label>
	<input type="input" name="year" /><br />

	<label for="gpa">GPA</label>
	<input type="input" name="gpa" /><br />

	<label for="breakdance">Is a breakdancer? (1 for yes, 0 for no)</label>
	<input type="input" name="breakdance" /><br />

	<input type="submit" name="submit" value="Create student" />

</form>
