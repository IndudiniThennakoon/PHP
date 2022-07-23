<?php
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileName"]["name"]);

    if(isset($_FILES["fileName"]))
    {
        if(move_uploaded_file($_FILES["fileName"]["tmp_name"],$target_file))
        {
            echo "The file". basename($_FILES["fileName"]["name"])."is uploaded";

        }else{
            echo "Error while uploading your file";
        }

    }else{
        echo "File not available";
    }

?>