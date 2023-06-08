<?php

// Inclui a biblioteca
require_once('vendor/autoload.php');

use NFePHP\NFe\Tools;
use NFePHP\Common\Certificate;

// Caminho do certificado digital
$caminho_certificado = 'caminho/do/certificado.pfx';

// Senha do certificado digital
$senha_certificado = 'senha';

// Configurações da SEFAZ
$estado = 'SP'; // estado em que está emitida a NFe
$ambiente = '1'; // 1 para ambiente de produção, 2 para ambiente de homologação

// Dados da consulta
$chave_acesso = '12345678901234567890123456789012345678901234'; // chave de acesso da NFe a ser consultada

// Instancia a classe Tools com as configurações
$certificate = Certificate::readPfx($caminho_certificado, $senha_certificado);
$tools = new Tools('path/to/config.json', $certificate);

// Faz a consulta
$resultado = $tools->sefazConsultaChave($chave_acesso, $estado, $ambiente);

// Exibe o resultado
echo $resultado;
