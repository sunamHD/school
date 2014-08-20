<h2>Delete a student</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $attributes = array('id' => 'deleteStudentForm');
        echo form_open('students/delete', $attributes) 
    ?>
        <table class = "formTable">
            <tr>
                <td>
	                <label for="stud_id">Student ID</label>
                </td>
                <td>
	                <input type="input" name="stud_id" /><br />
                </td>
            </tr>
        </table>
	    <input type="submit" name="submit" value="Delete student" />
    </form>
</div>
