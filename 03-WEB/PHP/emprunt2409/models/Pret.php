<?php

class Pret
{
    // Attributs

    public float $capital;
    private float $tauxMensuel;
    private int $nbMois;

    // Propriétés / Accesseurs

    public function getCapital(): float
    {
        return $this->capital;
    }

    public function getTauxMensuel(): float
    {
        return $this->tauxMensuel;
    }

    public function getNbMois(): int
    {
        return $this->nbMois;
    }

    // Modifieur

    public function setMois(int $nbnewmois): void
    {
        $this->nbMois = $nbnewmois;
    }

    // Constructeur

    public function __construct(float $_montant, float $_tauxAnnuel, int $_nbAnnees)
    {
        $this->capital = $_montant;
        $this->tauxMensuel = $_tauxAnnuel / 1200;
        $this->nbMois = $_nbAnnees * 12;
    }

    //Methodes

    /*
    Q= (1-(1+ Tm )puissance -n)
    a : la mensualité constante recherché :
    a= (k * tm)/Q
    */

    public function calculMensualite(): float
    {
        $Q = (1 - pow((1 + $this->tauxMensuel), -$this->nbMois));
        $mensualite = ($this->capital * $this->tauxMensuel) / $Q;
        return round($mensualite, 2);
    }
    
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

            Array_push($data,  [
                "numeroMois" => $i + 1,
                "partInteret" => round($partInteret, 2),
                "partAmortissement" => round($partAmortissement, 2),
                "capital_restant" => round($capitalRestant, 2),
                "mensualite" => round($mensualite, 2)
            ]);
        }

        return $data;
    }
}
