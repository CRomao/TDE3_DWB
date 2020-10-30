<section class="col-12">
    <?php
        use App\Controllers\Paginas; 
        $itensCarrinho = $dadosView["produtos_carrinho"]; 
        $totalItens = count($itensCarrinho);     

    if (empty($totalItens)):?>
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Seu carrinho está vazio</h4>
            <hr>
            <p class="mb-0">Vá para a página inicial ou procure no site os produtos que vão te deixar feliz. Quando encontrá-los, clique no botão adicionar ao carrinho ;)</p>
        </div>
    <?php
    else:?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="d-sm-block d-none">Produto</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i <count($itensCarrinho); $i++):?> 
                        <td class="text-center d-sm-block d-none">
                            <img src="<?=print_r($itensCarrinho[$i]->getFoto())?>" alt="prod" width="150px" class="img-thumbnail">
                        </td>
                        <td style="width:50%; font-size:30px">
                        <?=$itensCarrinho[$i]->getDescricao()?>
                        </td>
                        <td style="width:10%;">
                            <form action="<?=BASE_URL."/removerItem"?>" method="post">
                                <div class="form-group">
                                    <input type="text" style="text-align:center;" readonly="" name="qtd-produto" class="form-control" value="<?=$itensCarrinho[$i]->getQuantidade()?>"/>
                                    <input type="hidden" name="descricao-produto" value="<?=$itensCarrinho[$i]->getDescricao()?>">
                                    <input type="submit" style="color:red; background:none; border:none; width:100%" value="remover">
                                </div>
                            </form>
                        </td>
                        <td class="text-success text-center">
                        R$ <?=number_format((double)$itensCarrinho[$i]->getPreco() * (int)$itensCarrinho[$i]->getQuantidade(),2,',','.')?>
                        </td>
                    </tr>
                    <?php endfor;?>
                </tbody>
            </table>
        </div>
        <div class="card bg-light">
            <div class="card-body text-right">
                <h5 class="card-title mb-0"><strong>Total</strong> (<?= $totalItens ?> itens)</h5>
                <p class="card-text text-muted"><small>(Em até 12x de R$ 119,00 com muito juros)</small></p>
                <a href="#" class="btn btn-success">Continuar</a>
                <p class="card-text text-muted"><small>Tem cupom ou vale compra? Você poderá utilizá-lo na etapa de pagamento</small></p>
            </div>
        </div>
    <?php
    endif;?>
</section>