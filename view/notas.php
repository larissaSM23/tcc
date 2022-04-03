<?php
$title = "Notas";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
        <table class="table text-center">      
            <tr class="border-pink">
                    
                    <th class="col"></th>
                    <th class="col">Item</th>
                    <th class="col">Nota</th>
                    
            </tr>
            
            <tbody class="text-center">
                <tr>
                    <td class="border-0">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                    </td>
                    <td class="border-0">
                        <p class="d-inline-block">Exercicíos sobre os substantivos</p>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block" id="notas-1" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">10/10</p>
                    </td>
                </tr>

                <tr>
                    <td class="border-0">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block">Complete o texto preenchendo as lacunas</p>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block" id="notas-2" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">0/10</p>
                    </td>
                </tr>

                <tr>
                    <td class="border-0">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block">Troque as palavras sublinhadas por um adjetivo</p>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block" id="notas-3" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">10/10</p>
                    </td>
                </tr>

                <tr>
                    <td class="border-0">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block">Exercícios sobre adjetivos</p>
                    </td>
                    <td class="border-0">
                        <p class="mx-5 d-inline-block" id="notas-4" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">0/10</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
include('./components/scripts.php');
?>

</body>