<?php
    $grade = "PX";

    switch ($grade){
        case 'F';
            echo "Fail";
        break;
        case 'P';
            echo "Pass";
        break;
        case 'PD';
            echo "Pass with Distincation";
        break;

        default:
            echo "*** Grade Error ***";
    }
?>