<?php
function generateYearSelectBox($startYear, $endYear) {
    echo '<select name="year">';
    for ($year = $startYear; $year <= $endYear; $year++) {
        echo "<option value=\"$year\">$year</option>";
    }
    echo '</select>';
}
generateYearSelectBox(2546, 2570);
?>
