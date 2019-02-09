<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {              
         
        $postfields = serialize( $_POST );
                   

        $name = null;
        $formFields = null;
        $projectid = null;
        
         
        // keep track post values
        $name = $_POST['form_title'];
        $projectid = $_POST['project_id'];
        $formFields = $postfields;
        echo "<pre>";
         print_r($_POST);
         $total = count($_FILES['fileUpload']['name']);
         print_r($total);
         
         for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
            $tmpFilePath = $_FILES['fileUpload']['tmp_name'][$i];

  //Make sure we have a file path
            if ($tmpFilePath != ""){
    //Setup our new file path
            $newFilePath = "./upload/" . $_FILES['fileUpload']['name'][$i];

    //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

            }
        }
    }
        // validate input
    
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please Form Name';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO ed_docs_requests_tpl (title,form_fields,project_id) values(?, ?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$formFields,$projectid));
            Database::disconnect();
            header("Location: index.php");
        }
    }
?>