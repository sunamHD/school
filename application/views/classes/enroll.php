<h2>Enroll in a class</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $attributes = array('id' => 'enrollClassMenu');
        echo form_open('classes/enroll', $attributes) 
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
            <tr>
                <td>
	                <label for="class_id">Class ID</label>
                </td>
                <td>
	                <input type="input" name="class_id" /><br />
                </td>
            </tr>
        </table>
	    <input type="submit" name="submit" value="Enroll" />
    </form>
</div>
