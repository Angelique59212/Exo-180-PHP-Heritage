<?php

class Habitation {
    private string $pays;
    private string $ville;
    private string $codePostal;
    private int $chambres;
    private int $pieces;

    /**
     * @param string $pays
     * @param string $ville
     * @param string $codePostal
     * @param int $chambres
     * @param int $pieces
     */
    public function __construct(string $pays, string $ville, string $codePostal, int $chambres, int $pieces) {
        $this ->setPays($pays);
        $this ->setVille($ville);
        $this ->setCodePostal($codePostal);
        $this ->setChambres($chambres);
        $this -> setPieces($pieces);
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = trim(strip_tags($pays));
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = trim(strip_tags($ville));
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = trim(strip_tags($codePostal));
    }

    /**
     * @return int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = intval($chambres);
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = intval($pieces);
    }


}
