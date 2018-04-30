<?php

Class Usuario {

	private $name;
	private $nascimento;

	public function __construct()
    {
        $this->nome = "Tester da Silva";
        $this->nascimento = "02-29-1985";
    }

    public function getNascimento() {
    	return $this->nascimento;
    }
}