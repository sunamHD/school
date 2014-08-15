<h2>Edit student</h2>

<?php echo validation_errors(); ?>

<?php 
    $attributes = array('id' => 'editStudentForm');
    echo form_open('students/editDetails', $attributes) 
?>

	<label for="firstName">First Name</label>
	<input type="input" name="firstName" /><br />

	<label for="midName">Middle Name</label>
	<input type="input" name="midName"/><br />

	<label for="lastName">Last Name</label>
	<input type="input" name="lastName"/><br />

	<label for="year">Year (e.g. Sophomore)</label>
	<input type="input" name="year" /><br />

	<label for="gpa">GPA</label>
	<input type="input" name="gpa" /><br />

	<label for="breakdance">Is a breakdancer? (y/n)</label>
	<input type="input" name="breakdance" /><br />

	<input type="submit" name="submit" value="Edit student" onclick="breakFix()" />

</form>
<script>

    // Display the full name and update as it is typed in
    function updateNameDisplay(){
        var first = document.getElementsByName('firstName')[0].value;
        var mid = document.getElementsByName('midName')[0].value;
        var last = document.getElementsByName('lastName')[0].value;
        document.getElementById('nameDisp').innerHTML = ' ' + first + ' ' +  mid + ' ' + last;
    }

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
