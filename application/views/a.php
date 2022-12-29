<!DOCTYPE html>
<html>
<body>
	<div class="box-header">
		<h3><center>File upload</center></h3>
	</div>
	<div class="box-body">
		<center>
<form action="<?php echo SITE_URL;?>Rotary/uploadData" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
    <table>
        <tr>
            <td> Choose your file: </td>
            <td>
                <input type="file" name="userfile" id="userfile"  align="center"/>
            </td>
            <td>
                <div class="col-lg-offset-3 col-lg-9">
                    <button type="submit" name="submit" class="btn btn-success">Save</button>
                </div>
            </td>
        </tr>
    </table> 
</form>
</center>
</div>
</body>
</html>