<?php

class Maison extends Habitation
{
    private bool $jardin;
    private int $etages;
    private bool $garage;

    /**
     * @param string $pays
     * @param string $ville
     * @param string $codePostal
     * @param int $chambres
     * @param int $pieces
     * @param bool $jardin
     * @param int $etages
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, string $codePostal, int $chambres, int $pieces, bool $jardin, int $etages, bool $garage)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this ->setJardin($jardin);
        $this ->setEtages($etages);
        $this ->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = intval($etages);
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}