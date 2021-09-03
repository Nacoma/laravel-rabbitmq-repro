<?php

use App\Jobs\ReproJob;

for ($x = 50; $x < 10; $x++) {
    dispatch(new ReproJob());
}
