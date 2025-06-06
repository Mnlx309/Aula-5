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
    echo "1. Adicionar Aluno/nota\n2. Listar Alunos/Notas\n3.Calcular Média dos Alunos\n4. Sair\n5. Média Geral\n";
    $menu = readline ("Escolha a Opção desejada: ");
    if($menu==1)
        {
            $aluno = readline ("Informe o Nome do Aluno a ser adicionado: ");
            $notas = [];
              for ($i=1; $i<=3; $i++)
              {
                 $nota = readline ("Informe a nota a ser adicionada: ");
                 array_push($notas,$nota);
              }
              $alnote[] = [
                  "nome" => $aluno,
                  "notas" => $notas
                ];
                print_r($alnote);
              
        }

    if ($menu==2)
        {
                foreach($alnote as $nota)
                    {
                        $nome = $nota["nome"];
                        $notas = implode(",",$nota["notas"]);                      
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
    if($menu==5)
        {
             $somat = 0;
             $ame = 0;
    foreach($alnote as $nota)
                    {
                       // $nome = $nota["nome"];
                        $notas = $nota["notas"];
                        $somat += array_sum($notas);
                        $ame += count($notas);

                     }
        $mediag = $somat / $ame;
        echo "A média Geral da Turma é: $mediag \n";
                    }
}
?>