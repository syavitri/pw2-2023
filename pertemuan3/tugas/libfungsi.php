<?php

	function kelulusan($n_rata) {
        if ($n_rata >= 55) {
            echo "<td> Lulus </td>";
        } elseif ($n_rata <= 55) {
            echo "<td> Tidak Lulus </td>";
        }
	}
	
	function grade($n_rata) {

        if ($n_rata >= 85) {
            echo "<td> A </td>" ;
        } elseif  ($n_rata >= 70 && $n_rata <= 84) {
            echo "<td> B </td>" ;
        } elseif  ($n_rata >= 55 && $n_rata <= 69) {
            echo "<td> C </td>" ;
        } elseif  ($n_rata >= 36 && $n_rata <= 55) {
            echo "<td> D </td>" ;
        } elseif  ($n_rata >= 0 && $n_rata <= 35) {
            echo "<td> E </td>" ;
        } else {
            echo "<td> I </td>" ;
        }
    }
	
    function predikat($n_rata) {
        switch ($n_rata) {
            case ($n_rata >= 0 && $n_rata <= 35) :
                echo "<td> Sangat Mengecewakan </td>";
                break;
            case ($n_rata >= 36 && $n_rata <= 55):
                echo "<td> Mengecewakan </td>";
                break;
            case ($n_rata >= 55 && $n_rata <= 69):
                echo "<td> Cukup </td>";
                break;
            case ($n_rata >= 70 && $n_rata <= 84):
                echo "<td> Memuaskan </td>";
                break;
            case ($n_rata >= 85):
                echo "<td> Sangat Memuaskan </td>";
                break;
            default :
                echo "<td> Tidak Ada </td>";
                break;
        }
    }
    


	
?>