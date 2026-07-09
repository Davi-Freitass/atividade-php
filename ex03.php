<?php

    function mascararCpf($cpf)
    {

        return substr_replace($cpf, '***.***.', 0, 9);
    }

    echo "CPF mascarado: " . mascararCpf("123.456.789-00");