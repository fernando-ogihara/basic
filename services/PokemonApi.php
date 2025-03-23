<?php

namespace app\services;

class PokemonApi extends ExternalService
{
    private $limit;
    private $offset;

    public function __construct($limit = 20, $offset = 0)
    {
        $this->limit = $limit;
        $this->offset = $offset;
        parent::__construct('https://pokeapi.co/api/v2/pokemon/', '?limit=' . $this->limit . '&offset=' . $this->offset);
    }

    public function getPokemonList()
    {
        $data = $this->apiCall();

        if (isset($data['results'])) {
            return $data;
        }

        return [];
    }
    
}