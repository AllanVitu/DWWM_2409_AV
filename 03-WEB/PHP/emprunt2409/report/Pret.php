<?php class Pret
{

    // attributs
    private float $capital;
    private float $tauxMensuel;
    private int $nbMois;

    // propriétés
    //accesseurs
    public function getCapital(): float
    {
        return $this->capital;
    }
    public function getTauxMensuel(): float
    {

        return $this->tauxMensuel;
    }

    public function getMois(): int
    {
        return $this->nbMois;
    }
    //modifieur
    public function setMois(int $nbnouvmois): void
    {
        $this->nbMois = $nbnouvmois;
    }
    // Constructeur

    public function __construct(float $_montant, float $_tauxAnnuel, int $_nbAnnees)
    {
        $this->capital = $_montant;
        $this->tauxMensuel = $_tauxAnnuel / 1200;
        $this->nbMois = $_nbAnnees * 12;
    }

    // methodes

    /*Q= (1-(1+ Tm )puissance -n)
a : la mensualité constante recherché :
a= (K x Tm)/Q*/


    public function calculMensualite(): float
    {
        $Q = (1 - pow((1 + $this->tauxMensuel), -$this->nbMois));
        $mensualite = ($this->capital * $this->tauxMensuel) / $Q;
        return round($mensualite, 2);
    }

    //methode pour affichage
    public function calculMensualite2(): string
    {
        $Q = (1 - pow((1 + $this->tauxMensuel), -$this->nbMois));
        $mensualite = ($this->capital * $this->tauxMensuel) / $Q;
        return number_format($mensualite, 2, ",", " ") . " €";
    }

    public function getTableauAmortissement(): array
    {
        $numeroMois = 0;
        $data = array();
        $partInteret = 0;
        $partAmortissement = 0;
        $mensualite = $this->calculMensualite();
        $capitalRestant = $this->capital;
        for ($i = 0; $i < $this->nbMois; $i++) {


            $partInteret = $capitalRestant * $this->tauxMensuel;
            $partAmortissement = $mensualite - $partInteret;
            if ($i > 0) {
                $capitalRestant -= $partAmortissement;
            }
            $numeroMois = $i++;

            Array_push($data,  ["num_mois" => $numeroMois, "partInteret" => round($partInteret, 2), "partAmortissement" => round($partAmortissement, 2), "capital_restant" => round($capitalRestant, 2), "mensualite" => round($mensualite, 2)]);
        }
        return $data;
    }

    public function getTableauAmortissementJSON(): string
    {
        $chaineJSON = "[";

        $data = array();
        $partInteret = 0;
        $partAmortissement = 0;
        $mensualite = $this->calculMensualite();
        $capitalRestant = $this->capital;
        for ($i = 0; $i < $this->nbMois; $i++) {


            $partInteret = $capitalRestant * $this->tauxMensuel;
            $partAmortissement = $mensualite - $partInteret;
            if ($i > 0) {
                $capitalRestant -= $partAmortissement;
            }


            Array_push($data,  ["num_mois" => $i + 1, "partInteret" => round($partInteret, 2), "partAmortissement" => round($partAmortissement, 2), "capital_restant" => round($capitalRestant, 2), "mensualite" => round($mensualite, 2)]);
        }

        for ($i = 0; $i < count($data); $i++) {


            if ($i < count($data) - 1) {
                $chaineJSON .= json_encode($data[$i]) . ",";
            } else {
                $chaineJSON .= json_encode($data[$i]);
            }
        }
        $chaineJSON .= "]";



        return $chaineJSON;
    }
    public function getreportJSON(): void
    {
        $chaineJSON = " [";

        $data = array();
        $partInteret = 0;
        $partAmortissement = 0;
        $mensualite = $this->calculMensualite();
        $capitalRestant = $this->capital;
        for ($i = 0; $i < $this->nbMois; $i++) {


            $partInteret = $capitalRestant * $this->tauxMensuel;
            $partAmortissement = $mensualite - $partInteret;
            if ($i > 0) {
                $capitalRestant -= $partAmortissement;
            }


            Array_push($data,  ["num_mois" => $i + 1, "partInteret" => round($partInteret, 2), "partAmortissement" => round($partAmortissement, 2), "capital_restant" => round($capitalRestant, 2), "mensualite" => round($mensualite, 2)]);
        }

        for ($i = 0; $i < count($data); $i++) {


            if ($i < count($data) - 1) {
                $chaineJSON .= json_encode($data[$i], JSON_PRETTY_PRINT) . ",";
            } else {
                $chaineJSON .= json_encode($data[$i], JSON_PRETTY_PRINT);
            }
        }
        $chaineJSON .= "]";


        file_put_contents("./report/simulationPret.json", $chaineJSON);
    }
}
