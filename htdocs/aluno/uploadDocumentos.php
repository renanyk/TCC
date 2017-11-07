<?php
session_start();

function verify($name){
    if ($_FILES[$name]["size"] > 500000) {
        echo '<script language="javascript">';
        echo 'alert("Arquivo muito grande");';
        echo 'history.back()';
        echo '</script>'; 
        return 0;
    }
    $imageFileType = pathinfo(basename($_FILES[$name]["name"]),PATHINFO_EXTENSION);
    if($imageFileType != "pdf") {
        echo '<script language="javascript">';
        echo 'alert("Somente são aceitos arquivos de formato PDF");';
        echo 'history.back()';
        echo '</script>';
        return 0;
    }
    return 1;
}

mkdir('../documento/'.$_SESSION['login'],777);

if(isset($_POST['buttonrg'])){
    if(verify("rg")){
        $target_dir = "../documento/".$_SESSION['login']."/rg.pdf";
        move_uploaded_file($_FILES["rg"]["tmp_name"], $target_dir); 
        echo '<script language="javascript">';
        echo 'history.back()';
        echo '</script>';
    }
}

if(isset($_POST['buttonsg'])){
    if(verify("copia_simples")){    
        $target_dir = "../documento/".$_SESSION['login']."/copia_simples.pdf";
        move_uploaded_file($_FILES["copia_simples"]["tmp_name"], $target_dir);
        echo '<script language="javascript">';
        echo 'history.back()';
        echo '</script>';
    }
}

if(isset($_POST['buttonfoto'])){
    if(verify("foto")){
        $target_dir = "../documento/".$_SESSION['login']."/foto.pdf";
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir);
        echo '<script language="javascript">';
        echo 'history.back()';
        echo '</script>';
    }
}
 
?>