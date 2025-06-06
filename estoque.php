<?php
$itens = ["Madeira" => 50, "Ferro" => 30200, "Parafuso" => 30450];

while(true)
{
echo "1. Adicionar item\n2. Remover item\n3. Listar itens\n4. Consultar quantidade total\n5. Sair\n";
$op = readline ("Digite a opção desejada: ");
    if($op==1)
        {
            $item = readline("Informe o item a ser adicionado: ");
            $quantidade = readline ("informe a quantidade a ser adicionada: ");
               if (array_key_exists($item, $itens))
                {
                    $itens[$item]+= $quantidade;
                echo "o item $item foi incrementado\n";                   
                }
               else
                {
                    $itens[$item] = $quantidade;
                echo "Item adicionado a lista.\n";
                }
        }
        elseif($op==2)
            {
            $rem = readline ("Informe o item a ser removido do Estoque: ");
            unset($itens[$rem]);
                echo "Item Removido do Estoque!\n";
             }
        elseif($op==3)
            {
                foreach ($itens as $item => $quantidade)
                    {
                    echo "{$item} : {$quantidade}\n";
                    }
            }       
        elseif ($op==4)
            {
                $total = array_sum($itens);
                    echo "A Quantidade total de itens em estoque é: $total\n";
            }

        elseif($op==5)
            {
            echo "Saindo do programa";
                exit;
            }
}





?>