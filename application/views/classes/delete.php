<h2>Delete a class</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('classes/delete') ?>

	<label for="class_id">Class ID</label>
	<input type="input" name="class_id" /><br />

	<input type="submit" name="submit" value="Delete class" />

</form>
