<?php

function defineCategoriaCompetidor(string $nome, string $idade): ?string 
{
    // criando as categorias 
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'jovem';
    $categorias[] = 'adulto';

    if (validarNome($nome) && validarIdade($idade))
    {
        removerMensagemErro();

        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'infantil'){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria infantil");
                return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolescente'){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria adolescente");
                return null;
                }
            }
        } else if ($idade >= 19 && $idade <= 35) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'jovem'){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria jovem");
                return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto'){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria adulto");
                return null;
                }
            }
        }
    }
    else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
