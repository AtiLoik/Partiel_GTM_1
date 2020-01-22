<?php
    class Directeur{
        private $id;
        private $nom;
        private $prenom;
        private $mail;
        private $adresse;
        private $telephone;
        private $date_naiss;
        
        public static function Verif_Connnexion($data, $pdo){
            $req = $pdo-> prepare("Select count(*) as test from Directeur where Nom like '".$data['nom']."' and MDP = ".$data['MDP']." ");
            $req->execute();
            $result = $req->fetchall();
            foreach($result as $res)
            {
                if($res['test'] > 0)
            {
                $retour = 1;
            }
            else
            {
                $retour = 0;
            }
            }
            
            
            return $retour;
        }
    }
?>