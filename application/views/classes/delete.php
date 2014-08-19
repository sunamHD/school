<h2>Delete a class</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php echo form_open('classes/delete') ?>
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
	    <input type="submit" name="submit" value="Delete class" />
    </form>
</div>
