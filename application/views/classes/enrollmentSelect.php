<h2>Choose a class to view enrollment</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $attributes = array('id' => 'enrollmentSelectMenu');
        echo form_open('classes/enrollmentSelect', $attributes) 
    ?>
        <table class = "formTable">
            <tr>
                <td>
	               <label for="class_id">Class ID</label>
                </td>
                <td>
	                <input type="input" name="class_id" /><br />
                </td>
            </tr>
        </table>
	    <input type="submit" name="submit" value="View Enrollment" />
    </form>
</div>
