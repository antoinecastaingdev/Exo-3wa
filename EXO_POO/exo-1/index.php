<?php 

class Point {
    $x;
    $y;
    
    function__construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    affiche() {
        echo "Point ($this->x, $this->y)";
    }

    translater() {
        $this->x += $tx;
        $this->y += $ty;
    }
}

?>