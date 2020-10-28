<div class="col-12 mb-4">
    <h4 class="text-muted">veja as últimas novidades selecionadas para você!</h4>
</div>

<table border="1">
        <?php
        //echo "<pre>".print_r($dados, true)."</pre>";
        $linhas = $dadosView["produtos"];
        for($i=0; $i < count($linhas); $i++):?>
            <div class="col-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-0 hvr-glow">
                <!--<?php// var_dump($linhas[$i]->getFoto())?>-->
                    <img src="<?=BASE_URL."/assets/img/guitar.jpg"?>" alt="prod1" class="card-img-top" widht="50px">
                    <div class="card-body">
                        <p class="card-text"><?php print_r($linhas[$i]->getDescricao())?></p>
                        <small>por</small>
                        <h5 class="card-title mb-0">R$ <?php print_r($linhas[$i]->getPreco())?></h5>
                        <p class="mt-3 float-right"><a href="<?=BASE_URL."/produto"?>" class="btn btn-sm btn-primary"><?php $_SESSION['item'] = $linhas[$i]->getDescricao() ?>Já quero!</a></p>
                    </div>
                </div>
            </div>
            </div>
        <?php endfor;?>
    </table>

<div class="col-12 col-sm-6 col-lg-3 mb-3">
    <div class="card p-0 hvr-glow">
        <img src="<?=BASE_URL."/assets/img/smartphone.jpg"?>" alt="prod1" class="card-img-top" widht="50px">

        <div class="card-body">
            <p class="card-text">Smartphone top dos top!</p>
            <small>por</small>
            <h5 class="card-title mb-0">R$ 8999,99</h5>
            <small>ou 12x de R$ 999,99 com muito juros</small>
            
            <p class="mt-3 float-right"><a href="#" class="btn btn-sm btn-primary">Já quero!</a></p>
        </div>
    </div>
</div>