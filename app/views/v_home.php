<div class="col-12 mb-4">
    <h4 class="text-muted">veja as últimas novidades selecionadas para você!</h4>
</div>
<table border="1">
        <?php
        
        $linhas = $dadosView["produtos"];
        for($i=0; $i < count($linhas); $i++):?>
            <div class="col-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-0 hvr-glow">
                    <img src="<?=print_r($linhas[$i]->getFoto())?>" alt="prod1" class="card-img-top" widht="50px">
                    <div class="card-body">
                    <p class="card-text">
                    <?php print_r($linhas[$i]->getDescricao()); echo'</p>';?>
                        <small>por</small>
                        <h5 class="card-title mb-0">R$ <?php number_format(print_r($linhas[$i]->getPreco()),2,",",".")?></h5>
                        <form method="post" action="<?=BASE_URL."/produto"?>">
                        <input type="hidden" name="produtoDescricao" value="<?php print_r($linhas[$i]->getDescricao())?>">
                        <input type="hidden" name="produtoPreco" value="<?php print_r($linhas[$i]->getPreco())?>">
                        <input type="hidden" name="produtoFoto" value="<?php print_r($linhas[$i]->getFoto())?>">
                        <input class="btn btn-sm btn-primary mt-3 float-right" type="submit" value="Já quero!">
                        </form>
                    </div>
                </div>
            </div>
            </div>
        <?php endfor;?>
</table>
