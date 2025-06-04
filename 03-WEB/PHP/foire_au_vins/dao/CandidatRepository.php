<?php

//include " Dbconnect.php"; 
class CandidatRepository
{


  private ?PDO $myConnect;
  //private array $namecols;

  public function __construct()
  {
    $this->myConnect = Db_connect::getInstance();

  
  }

  public function CreateCandidat(string $_lastname, string $_firstname, string $_mail, string $_pass, int $_dept,  int $_age): bool

  {

    $hash = password_hash($_pass, PASSWORD_ARGON2ID);
    $rq = "INSERT  INTO candidats  VALUES (id_user,?,?,?,?,?,? )";

    $stmt = $this->myConnect->prepare($rq);


    $testOK =  $stmt->execute([$_lastname, $_firstname, $_mail, $hash, $_dept, $_age]);


    return $testOK;
  }

  public function searchAll(): array
  {
    $rq = " SELECT candidats.lastname_user,candidats.firstname_user, candidats.mail_user,departements.Name,candidats.age_user FROM candidats INNER JOIN departements ON candidats.departement_user=departements.id_dep";

    $PDOstmt = $this->myConnect->prepare($rq);

    $testOK = $PDOstmt->execute();
    if ($testOK == true) {

      return $PDOstmt->fetchAll();
    } else {


      return [];
    }
  }


  public function searchByAge(int $_age): array
  {
    $rq = "SELECT candidats.lastname_user,candidats.firstname_user, candidats.mail_user,departements.Name,candidats.age_user FROM candidats inner join departements ON candidats.departement_user=departements.id_dep WHERE candidats.age_user=:age";

    $stmt =  $this->myConnect->prepare($rq);
     $stmt->bindParam(":age", $_age, PDO::PARAM_INT);

    $stmt->execute();
 //$nbligne = $stmt->rowCount();
  return $stmt->fetchAll(); 

  }

 //Update


 //Delete 

 // function authentification 

 public function signIn(string $_mail_user, string $_pass_user): array 
{
  $rq=" SELECT candidats.lastname_user,candidats.firstname_user, candidats.mail_user,candidats.departement_user ,candidats.pass_user, candidats.age_user  FROM candidats WHERE mail_user = ? ";

  $stmt=$this->myConnect->prepare($rq);

  $stmt->execute([$_mail_user]);

  $result= $stmt->fetch();
  $nbligne=$stmt->rowCount();
  if ($nbligne>0 && password_verify($_pass_user, $result["pass_user"]) ) {

    return [  "nom"=> $result["lastname_user"],
     "prenom"=> $result["firstname_user"], 
     "age"=> $result["age_user"] 
    
    ]; 
  }

  return []; 
}

}