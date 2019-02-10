<?php include 'layouts/header.php'; ?>
    <body>
            <form action='createForm.php' class="register"  method='POST' enctype='multipart/form-data'>

            <h1>Project managment System</h1>
            <fieldset class="row1">
                <legend>Add new Form</legend>
                <div class="form-group ">
                    <label class="control-label">Project Name *
                    </label>
                    <input name="form_title" class="form-control" value='' type="text" required="required"/>
                </div>
               <div class="form-group">
                    <label class="control-label">Project Id
                    </label>
                    <input name="project_id" class="form-control" value='' type="text" required="required"/>
                </div>
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
                        <td><i class="fa fa-arrows-alt"></i></td>
                        <td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
                        <td>
                            <div class="form-group ">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" required="required" name="BX_NAME[]">
                        </div>
                         </td>
                         <td>
                            <div class="form-group ">
                            <label class="control-label " for="BX_file">File</label>
                            <input  type="file" class="small"  name="fileUpload[]">
                        </div>
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
            

            <div class="clear"></div>
        </form>

    </body>
    <!-- Start of StatCounter Code for Default Guide -->
<?php include 'layouts/footer.php'; ?>