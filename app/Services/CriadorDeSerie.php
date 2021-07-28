<?php

namespace App\Services;

use App\Serie;
use App\Temporada;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie
{
    public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada)
    {
        DB::beginTransaction();
        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criarTemporadas($qtdTemporadas, $epPorTemporada, $serie);
        DB::commit();

        return $serie;
    }

    private function criarTemporadas(int $qtdTemporadas, int $epPorTemporada, Serie $serie)
    {
        for($i = 1; $i <= $qtdTemporadas; $i++){
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            $this->criarEpisodios($epPorTemporada, $temporada);
        }
    }

    private function criarEpisodios(int $epPorTemporada, Temporada $temporada)
    {
        for($j = 1; $j <= $epPorTemporada; $j++){
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
