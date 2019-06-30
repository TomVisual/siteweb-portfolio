<?php

require_once('database.php');

if(isset($_POST['formlogin']))
{


$lemail = $_POST['lemail'];
$lpassword = $_POST['lpassword'];


  if(isset($lemail) && isset($lpassword))
  {
    $q = $db->prepare("SELECT * FROM admin WHERE email = :email");
    $q->execute(['email' => $lemail]);
    $result = $q->fetch();

    if($result == true){
      $hashpassword = $result['password'];
      if(password_verify($lpassword, $hashpassword))
      {
        echo "le mot de passe est bon, connection en cours";

        $_SESSION['pseudo'] = $result['pseudo'];
        $_SESSION['email'] = $result['email'];

          if (isset($_SESSION['pseudo']) && (isset($_SESSION['email'])))
            {
                ?>

                <h2>Bienvenue <?php echo $_SESSION['pseudo']; ?><h2>
                <h2>Votre mail : <?php echo $_SESSION['email']; ?><h2>

                <?php

            }else{
              echo "Veuillez vous connecter.";
            }




      }else{
        echo "le mot de passe est incorrect";
      }

    }else{
      echo "l'email " . $lemail . " n'existe pas";
    }

  }
  else
    {
    echo "les champs ne sont pas tous remplis";
    }
}

?>
