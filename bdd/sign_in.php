<?php
    if(
        isset($_POST['email'])  && 
        !empty($_POST['email']) && 
        isset($_POST['mdp'])    && 
        !empty($_POST['mdp'])
    ){
        require_once 'bdd_connect.php';
        array_map('htmlspecialchars', $_POST);
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $request = 'SELECT * 
                    FROM membre 
                    WHERE email=:email';

        $select = $pdo->prepare($request);
        $select->bindParam(':email',$email);

        if($select->execute()){
            $result = $select->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($mdp,$result['mdp']))
            {
                if(session_id() == '' || !isset($_SESSION)) {
                    session_start();
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['nom'] = $result['nom'];
                    $_SESSION['prenom'] = $result['prenom'];
                    $_SESSION['email'] = $result['email'];
                    echo 'connexion';
                }
            }
            else
            {
               echo 'La combinaison email/mot de passe n\'est pas correcte';
            }
        }
    }
    else
    {
        echo 'données incomplètes';
    }