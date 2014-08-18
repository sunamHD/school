<h1 style="text-align:center;">Edit class</h1>
<?php echo validation_errors(); ?>
<?php 
    $row = $class->result();
    $attributes = array('id' => 'editClassForm', 'class_id' => $row[0]->class_id);
    echo form_open('classes/editDetails/'.$row[0]->class_id, $attributes) 
?>

	<label for="className">Class Name</label>
	<input type="input" name="className" value = '<?php echo $row[0]->className;?>' /><br />

	<label for="maj_id">Major ID</label>
	<input type="input" name="maj_id" value = '<?php echo $row[0]->maj_id;?>' /><br />

	<input type="submit" name="submit" value="Edit class" />

</form>
