<?php

$alnote = 
[
            [
                "nome" => "Ana",
                "notas" => [7,8,9]
            ],
            [
                "nome" => "Cecilia",
                "notas" => [8,9,9]
            ],
            [
                "nome" => "Matheus",
                "notas" => [6,5,3]
            ],
            [
                "nome" => "Luiz",
                "notas" => [5,8,7]
            ],
];


while (true)
{
    echo "1. Adicionar Aluno/nota\n2. Listar Alunos/Notas\n3.Calcular Média dos Alunos\n4. Sair\n";
    $menu = readline ("Escolha a Opção desejada: ");

    if($menu==1)
        {
            $aluno = readline ("Informe o Nome do Aluno a ser adicionado: ");
            $nota = readline ("Informe a nota a ser adicionada: ");
                if(array_key_exists($aluno, $alnote))
                {
                    $aluno[$alnote]+=$nota;
                    echo "Nota Adicionada com Sucesso!";
                }
                else
                {
                
                    $alnote[$aluno] = array($nota);
                    echo "Aluno e Nota adicionados com Sucesso!\n";
                    print_r($alnote);
                }
        }

    if ($menu==2)
        {
                foreach($alnote as $nota)
                    {
                        $nome = $nota["nome"];
                        $notas = implode(",", $nota["notas"]);                      
                        echo "{$nome} : {$notas}\n";                   
                    }
        }
    if ($menu==3)
    {
            foreach($alnote as $nota)
                    {
                        $nome = $nota["nome"];
                        $notas = $nota["notas"];
                        $somat = array_sum($notas);
    $quantnote = count($notas);
    $media = number_format($somat / $quantnote, 2); ;
        echo "A média das notas é: $media!\n";
                    }
    }

    if($menu==4)
        {
            echo "saindo!";
            exit;
        }

}
?>