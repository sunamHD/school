<h2>Edit class</h2>
<?php echo validation_errors(); ?>

<div class = "container-fluid">
    <?php 
        $row = $class->result();
        $attributes = array('id' => 'editClassForm', 'class_id' => $row[0]->class_id);
        echo form_open('classes/editDetails/'.$row[0]->class_id, $attributes) 
    ?>
        <table class = "formTable">
            <tr>
                <td>
	                <label for="className">Class Name</label>
                </td>
                <td>
	                <input type="input" name="className" value = '<?php echo $row[0]->className;?>' /><br />
                </td>
            </tr>
            <tr>
                <td>
	                <label for="maj_id">Major ID</label>
                </td>
                <td>
	                <input type="input" name="maj_id" value = '<?php echo $row[0]->maj_id;?>' /><br />
                </td>
            </tr>
        </table>
	    <input type="submit" name="submit" value="Edit class" />
    </form>
</div>
