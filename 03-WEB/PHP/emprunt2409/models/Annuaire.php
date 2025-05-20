<?php

Class AnnuaireRepository
{
    private array $nomcol;
    private ?PDO $connect;

    public function __construct()
    {
        $this -> connect=Connexion::getInstance();
        $this -> nomcol=[];
    }

    public function info_table(): array
    {
        $rq = "SELECT * from carnet";
        $PDOstatement = $this -> connect -> prepare($rq);
        $PDOstatement -> execute();
        $nbcol = $PDOstatement -> columnCount();

        for($i = 0; $i < $nbcol; $i++){
            $tabinfo = $PDOstatement -> getColumnMeta($i);
            array_push($this -> nomcol, $tabinfo["name"]);
        }

        return $this -> nomcol;
    }
}