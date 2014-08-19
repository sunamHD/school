<h2>Create a class</h2>

<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $attributes = array('id' => 'createClassForm');
        echo form_open('classes/create', $attributes) 
    ?>
        <table class = "formTable">
            <tr>
                <td>
	                <label for="className">Class Name</label>
                </td>
                <td>
	                <input type="input" name="className" /><br />
                </td>
            </tr>
            <tr>
                <td>
	                <label for="maj_id">Major ID</label>
                </td>
                <td>
	                <input type="input" name="maj_id" /><br />
                </td>
            </tr>
        </table>
	    <input type="submit" name="submit" value="Create Class" />
    </form>
</div>
