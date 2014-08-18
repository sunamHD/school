<h2>Choose a student to edit</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $attributes = array('id' => 'editStudentMenu');
        echo form_open('students/editMenu', $attributes) 
    ?>
        <table class = "formTable">
            <tr>
                <td>
	                <label for="stud_id">Student ID</label>
                </td>
                <td>
	                <input type="input" name="stud_id" size="25"/><br />
                </td>
        </table>
        <input type="submit" name="submit" value="Edit student" />
    </form>
</div>
