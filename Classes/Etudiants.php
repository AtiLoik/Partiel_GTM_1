<?php
    class Etudiant{
        private $id;
        private $nom;
        private $prenom;
        private $mail;
        private $adresse;
        private $telephone;
        private $date_naiss;
        
        public static function Créer_Etudiant($data, $pdo){
            $req = $pdo-> prepare("Insert into Etudiant values ('".$data['nom']."', '".$data['prenom']."', '".$data['mail']."', '".$data['adresse']."', ".$data['tel'].", '".$data['date_naiss']."')");
            $req->execute();
            
            return "Etudiant créé !";
        }
        
        public static function Info_Etudiant($id, $pdo){
            $req = $pdo->prepare("Select * from etudiant where id = ".$id);
            $req->execute();
            $result = $req->fetchall();
            return $result;
        }
        
        public static function Modifier_Etudiant($data, $pdo){
            $req = $pdo-> prepare("Alter table Etudiant set nom = :nom, prenom = :prenom, mail = :mail, adresse = :adresse, telephone = :telephone, date_naiss = :date_naiss where id =".$data['id']);
            $req->bindParam(':nom', $data['nom'], PDO::PARAM_STR);
            $req->bindParam(':prenom', $data['prenom'], PDO::PARAM_STR);
            $req->bindParam(':mail', $data['mail'], PDO::PARAM_STR);
            $req->bindParam(':adresse', $data['adresse'], PDO::PARAM_STR);
            $req->bindParam(':telephone', $data['tel'], PDO::PARAM_INT);
            $req->bindParam(':date_naiss', $data['date_naiss'], PDO::PARAM_STR);
            $req->execute();
            
            return "Etudiant Modifié !";
        }
        
        public static function Supprimer_Etudiant($id, $pdo){
            $req = $pdo->prepare("Delete from etudiant where id = ".$id);
            $req->execute();
            return "Etudiant Supprimé !";
        }
        
        public static function Liste_Etudiant($pdo){
            $req = $pdo->prepare("Select * from etudiant");
            $req->execute();
            $result = $req->fetchall();
            return $result;
        }
    }
?>