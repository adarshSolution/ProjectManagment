<?php 

include 'database.php';

$pdo = Database::connect();
$sql = 'SELECT * FROM `ed_docs_requests_tpl` WHERE `project_id` = '.$_GET['project_id'].'';
foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. print_r(unserialize( $row['form_fields'] )) . '</td>';
                            echo '</tr>';

    //             $chkbox = $_POST['chk'];
				// $bus = $_POST['bus'];
				// $day = $_POST['day'];
				// $month = $_POST['month'];
				// $mob = $_POST['mob'];
				// $type = $_POST['type'];
				// $BX_NAME=$_POST['BX_NAME'];


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


        <form action="" class="register">
           <h1>project id =<?php echo $_GET['project_id']; ?>
           Customer Information</h1>
			<?php if(isset($_POST)==true && empty($_POST)==false): 
				$chkbox = $_POST['chk'];
				
				$BX_NAME=$_POST['BX_NAME'];
			?>
			<fieldset class="row1">
                <legend>Customer  Information</legend>
				<p>
                    <label>Customer Name 
                    </label>
                    <input name="bus" type="text" readonly="readonly" value="<?php echo $bus ?>"/>
                    <label>Date
                    </label>
					<input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
					<input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
					<input type="text" readonly="readonly" class="small" value="2013"/>
				</p>
               <p>
                    <label>Mobile
                    </label>
                    <input name="mob" type="text" readonly="readonly" value="<?php echo $mob ?>"/>
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
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
                            <label for="BX_gender">File</label>
                            <input type="file" name="fileUpload[]">
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
					<input class="submit" type="button" value="Submit form &raquo;" />
					<a class="submit" href="index.html" type="button"> Clear data <a/>
					
                </p>
				<div class="clear"></div>
            </fieldset>
		<?php else: ?>
		<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>
		<?php endif; ?>
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