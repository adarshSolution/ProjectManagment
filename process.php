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
												  $name =	$_POST['name'][$key];
												  move_uploaded_file($_FILES['fileUpload']['tmp_name'][$key], $path);

													$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
													$sql = "INSERT INTO project_files (file_name,description,file_size,created_at,project_id,uploaded_by) values(?,?,?,?,?,?)";
													$q = $pdo->prepare($sql);
												  $inserted =	$q->execute(array($newName,$name,$size,$date,$project_id,'50000'));
													Database::disconnect();
											  }
												if($inserted){
													$sMsg = "File Uploded Successfully";
												}else{
														$sMsg = "failed Please try again";
												}
              }
 ?>

<?php include 'layouts/header.php'; ?>
    <body>


        <form  method="POST" class="register" enctype="multipart/form-data">

			<?php
				$chkbox = $postFields['chk'];

				$BX_NAME=$postFields['BX_NAME'];
			?>
			<fieldset class="row1">
                <h1>Project managment System</h1>

<?php if(isset($sMsg)){echo "<div class='alert alert-success'><strong>Success! </strong> ".$sMsg.".</div";}?>
				<div class="form-group">
                    <label class="control-label">Project Name *</label>
                    <input name="form_title" class="form-control" value='<?php echo $projectName; ?>' type="text" required="required"/>
                </div>
                <div class="form-group ">
                    <label class="control-label">Project Id</label>
                    <input name="project_id" class="form-control"  value='<?php echo $project_id; ?>' type="text" required="required"/>
                </div>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Upload your documents here
                </legend>
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td><i class="fa fa-arrows-alt"></i></td>
								<td>
									&nbsp;
								</td>
								<td>
									<input type="text" readonly="readonly" name="name[]" value="<?php echo $BX_NAME[$a]; ?>">
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
                
                <p>
					<input class="submit" type="submit" name="submit" value="Submit"  />
				

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
<?php include 'layouts/footer.php'; ?>