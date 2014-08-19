<h2>Unenroll from a class</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $attributes = array('id' => 'unenrollClassMenu');
        echo form_open('classes/unenroll', $attributes) 
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
	    <input type="submit" name="submit" value="Unenroll" />
    </form>
</div>
