<?php
for ($i = 1; $i < 12; $i++) {
    var_dump(date('F', strtotime("+$i month")));
}
