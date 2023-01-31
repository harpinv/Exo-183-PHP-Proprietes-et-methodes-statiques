<?php

class VOD {
    private $films = ['blabla', 'panpan', 'ponpon', 'mouton', 'lolo'];
    private $tarif = '25';
    private static $total = [];

    /**
     * @return string[]
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param string[] $films
     */
    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    /**
     * @return string
     */
    public function getTarif(): string
    {
        return $this->tarif;
    }

    /**
     * @param string $tarif
     */
    public function setTarif(string $tarif): void
    {
        $this->tarif = $tarif;
    }

    public function addTotal(int $user): void {
        self::$total[] += $user;
    }

    /**
     * @return int
     */
    public static function getTotal(): array {
        $users = [];
        foreach(self::$total as $user) {
            $users[] += $user;
        }
        return $users;
    }
}