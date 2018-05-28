<?php
    function custom_sum($a, $b) {
        return $a + $b;
    }
    
    function custom_dev($a, $b) {
        return $b != 0 ? $a / $b : 0;
    }
    
    print custom_sum(5, 10);
    print '<br/>';
    print custom_dev(5, 10);