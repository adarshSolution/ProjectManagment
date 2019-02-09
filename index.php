<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
        <script type="text/javascript" src="js/script.js"></script> 
    </head>
    <body>    
        
            <form action='createForm.php' class="register"  method='POST' enctype='multipart/form-data'>

            <h1>Project managment System</h1>
            <fieldset class="row1">
                <legend>Information</legend>
                <p>
                    <label>Project Name * 
                    </label>
                    <input name="form_title" value='title' type="text" required="required"/>
                </p>
                <p>
                    <label>Project Id 
                    </label>
                    <input name="project_id" value='title' type="text" required="required"/>
                </p>
                <div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Details</legend>
                <p> 
                    <input type="button" value="Add Fields" onClick="addRow('dataTable')" /> 
                    <input type="button" value="Remove Fields" onClick="deleteRow('dataTable')"  /> 
                    <p>(All acions apply only to entries with check marked check boxes only.)</p>
                </p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
                        <td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
                        <td>
                            <label>Name</label>
                            <input type="text" required="required" name="BX_NAME[]">
                         </td>
                         <td>
                            <label for="BX_file">File</label>
                            <input type="file" class="small"  name="fileUpload[]">
                         </td>
                         
                            </p>
                    </tr>
                    </tbody>
                </table>
                <div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>
                <p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
                <div class="clear"></div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing</legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your Service</label>
                </p>
                
                <div class="clear"></div>
            </fieldset>
            <input class="submit" type="submit" value="Confirm &raquo;" />
            <a class="submit" href="http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP"/>Back to Techstream Article</a>
            
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






a:4:{s:10:"form_title";s:6:"asdasd";s:10:"project_id";s:2:"12";s:3:"chk";a:3:{i:0;s:2:"on";i:1;s:2:"on";i:2;s:2:"on";}s:7:"BX_NAME";a:3:{i:0;s:8:"Passport";i:1;s:13:"Election card";i:2;s:9:"Pass Book";}}



Array ( 
[form_title] => asdasd
[project_id] => 12 
[chk] => Array ( 
                [0] => on 
                [1] => on 
                [2] => on 
                )
[BX_NAME] => Array ( 
            [0] => Passport 
            [1] => Election card 
            [2] => Pass Book 
                   ) 
)