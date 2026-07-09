<?php

function inverterTexto($texto)
{

    return strrev($texto);
}

echo "Texto invertido: " . inverterTexto("papo");