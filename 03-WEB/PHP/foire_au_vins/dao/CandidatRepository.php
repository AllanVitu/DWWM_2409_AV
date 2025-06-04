<?

class CandidatRepository
{
    private ?PDO $myConnect;
    private array $nameCols;

    public function __construct()
    {
        $this->myConnect = Db_connect::getInstance();

        var_export($this->myConnect);
    }


    public function CreateCandidat(string $_lastname, string $_firstname, string $_mail, string $_pass, int $_dept, int $_age): bool
    {
        $hash = password_hash($_pass, PASSWORD_ARGON2I);
        $rq = "INSERT  INTO candidats  VALUES (id_user,?,?,?,?,?,?)";

        $stmt = $this->myConnect->prepare($rq);

        $testOk = $stmt->execute([$_lastname, $_firstname, $_mail, $_dept, $_age]);

        return $testOk;
    }


    public function searchAll(): array
    {
        $rq = " SELECT candidats.lastname_user, candidats.firstname_user, candiadts.mail_user, departements.Name, candidats.age_user
        FROM candidats INNER JOIN departements WHERE candidats.departement_user=departements.user_id";

        $PDOstmt = $this->myConnect->prepare($rq);

        $testOk = $PDOstmt->execute();

        if ($testOk == true) {

            return $PDOstmt->fetchAll();
        } else {

            return [];
        }
    }

    public function searchByAge(int $_age): array
    {
        $rq = " SELECT candidats.lastname_user, candidats.firstname_user, candiadts.mail_user, departements.Name, candidats.age_user
        FROM candidats INNER JOIN departements ON candidats.departement_user=departements.user_id=departements.id_dep WHERE candidats.age_user=:age";

        $stmt = $this->myConnect->prepare($rq);

        $stmt->bindParam(":age", $_age, PDO::PARAM_INT);

        $stmt->execute();

        $nbligne = $stmt->rowCount();
        if ($nbligne == 1) {
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}
