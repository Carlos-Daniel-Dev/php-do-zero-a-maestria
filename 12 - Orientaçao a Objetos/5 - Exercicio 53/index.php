<?php

  class Cachorro {

    function latir() {
        echo "Au au <br>";
    }

    function andar($m) {
        echo "O cachorro andou $m metross <br>";
    }
  }

  $viraLata = new Cachorro;
  $pastorAlemao = new Cachorro;

  $viraLata->latir();
  $pastorAlemao->latir();

  $viraLata->andar(30);
  $pastorAlemao->andar(10);

