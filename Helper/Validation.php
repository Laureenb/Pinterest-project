<?php

class Validation{


  public function ids($pseudo, $password)
    {
        if (!preg_match("/^[0-9a-zA-Z_]{5,250}$/", $pseudo)) {
            $errors="Votre pseudo doit contenir au minimum 5 caractères et pas de majuscule";

            $_SESSION["errors"] = $errors;
            return false;
        }
        elseif (!preg_match("/^[a-z0-9_-]{5,}$/", $password)) {
            $errors="votre mot de passe doit contenir au moins 8 caractères avec au minimum une majuscule,une minuscule et 1 nombre ";

            $_SESSION["errors"] = $errors;
            return false;
        }

        $_SESSION["errors"] ="";
        return true;
    }


  public function adminIds($pseudo,$password){
    if ($_SESSION["pseudo"]=="devAdmin" && $password=="admin12345")
    {
      $_SESSION["admin"]=true;
      return true;
    }
    return false;
  }

  public function photoType($type)
  {
    if($type==="image/jpeg" || $type==="image/jpg" || $type==="image/gif" || $type==="image/webP" || $type=="image/png" )
    {
      session_start();
      $_SESSION['error']="";
      return true;
    }
    session_start();
    $_SESSION['error']="invalid photo format";
    return false;
  }




}


?>
