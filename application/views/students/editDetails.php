<h2>Edit student</h2>
<?php echo validation_errors(); ?>
<?php 
    $row = $student->result();
    $attributes = array('id' => 'editStudentForm', 'stud_id' => $row[0]->stud_id);
    echo form_open('students/editDetails/'.$row[0]->stud_id, $attributes) 
?>

	<label for="firstName">First Name</label>
	<input type="input" name="firstName" value = '<?php echo $row[0]->firstName;?>' /><br />

	<label for="midName">Middle Name</label>
	<input type="input" name="midName" value = '<?php echo $row[0]->midName;?>' /><br />

	<label for="lastName">Last Name</label>
	<input type="input" name="lastName" value = '<?php echo $row[0]->lastName;?>' /><br />

	<label for="year">Year (e.g. Sophomore)</label>
	<input type="input" name="year" value = '<?php echo $row[0]->year;?>' /><br />

	<label for="gpa">GPA</label>
	<input type="input" name="gpa" value = '<?php echo $row[0]->gpa;?>' /><br />

	<label for="breakdance">Is a breakdancer? (y/n)</label>
	<input type="input" name="breakdance" value = '<?php echo $row[0]->breakdance;?>' /><br />

	<input type="submit" name="submit" value="Edit student" onclick="breakFix()" />

</form>

<script>
    // Allow the user to input 'y' or 'n' for this field, but change it to 1 or
    // 0 for storage in the database
    function breakFix(){
        var breaker = document.getElementsByName('breakdance')[0].value;
        if (breaker == 'y'){
            document.getElementsByName('breakdance')[0].value = 1;
        }
        else if (breaker == 'n'){
            document.getElementsByName('breakdance')[0].value = 0;
        }
    }
</script>
