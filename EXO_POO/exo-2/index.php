<?php

class Compte {
    $somme;
    $taux;

    function_construct($somme, $taux) {
        $this->somme = $somme;
        $this->taux = $taux;
    }

    affiche() {
        echo "($this->somme, $this->    taux)";
    }

    depot($x) {
        $this->somme += $x;
    }

    retrait($x) {
        if ($this->somme - $x < 0) return "Error, insufficient amount on account"; 
        if (!$this->somme - $x < 0) $this->somme -= $x;
    }

    interets() {
        $this->somme += $taux * $somme / 100;
    }
}


?>