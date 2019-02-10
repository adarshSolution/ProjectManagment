<?php

include 'database.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM `ed_docs_requests_tpl` WHERE `project_id` = '.$_GET['project_id'].'';
foreach ($pdo->query($sql) as $row) {

		$projectName = $row['title'];
		$project_id = $row['project_id'];
		$postFields = unserialize( $row['form_fields'] );

                   }

							if (!empty($_POST)) {
                 		$form_title = $_POST['form_title'];
								 			$project_id = $_POST['project_id'];
                      $fileUpload =  $_FILES['fileUpload'];
											$target_path = "upload/";

											foreach ($_FILES['fileUpload']['name'] as $key=>$value) {
                        	$newName = time().'-'.$_FILES['fileUpload']['name'][$key];
											    $path = $target_path . $newName;
													$date = date('Y-m-d H:i:s');
													$size = $_FILES['fileUpload']['size'][$key];
												  move_uploaded_file($_FILES['fileUpload']['tmp_name'][$key], $path);

													$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
													$sql = "INSERT INTO project_files (file_name,description,file_size,created_at,project_id,uploaded_by) values(?,?,?,?,?,?)";
													$q = $pdo->prepare($sql);
													$q->execute(array($newName,'',$size,$date,$project_id,'50000'));
													Database::disconnect();

									  }
              }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>


        <form  method="POST" class="register" enctype="multipart/form-data">

			<?php
				$chkbox = $postFields['chk'];

				$BX_NAME=$postFields['BX_NAME'];
			?>
			<fieldset class="row1">
                <h1>Project managment System</h1>
				<p>
                    <label>Project Name *
                    </label>
                    <input name="form_title" value='<?php echo $projectName; ?>' type="text" required="required"/>
                </p>
                <p>
                    <label>Project Id
                    </label>
                    <input name="project_id" value='<?php echo $project_id; ?>' type="text" required="required"/>
                </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Document Details
                </legend>
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
                            <label for="BX_gender">File</label>
                            <input type="file" name="fileUpload[]" >
                         </td>
							</p>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>

            <fieldset class="row5">
                <legend>Terms and Mailing</legend>
                <p>
					<input class="submit" type="submit" name="submit"  />
					<a class="submit" href="index.html" type="button"> Clear data <a/>

                </p>
				<div class="clear"></div>
            </fieldset>

		<!-- <fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset> -->

			<div class="clear"></div>
        </form>
    </body>
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9046834;
var sc_invisible=1;
var sc_security="ec55ba17";
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>
