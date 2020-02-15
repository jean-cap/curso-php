<?php

function teste($calback)
{
    // Processo lento

    $calback();
}

teste(function () {
    echo 'Terminou';
});
