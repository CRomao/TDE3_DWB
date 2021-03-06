<section class="col-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Nome Produto</li>
        </ol>
    </nav>
</section>
<section class="col-12">
    <h3> <?= $_POST['produtoDescricao']; ?></h3>
    <div class="row">
        <div class="col-sm-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $_POST['produtoFoto']; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $_POST['produtoFoto']; ?>" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card col-12 p-0">
                <div class="card-body">
                    <p class="card-text">Vendido e entregue por <small><strong class="text-primary">MEU E-COMMERCE</strong></p></small>
                    <small>de R$ 15.999,99</small>
                    <h5 class="card-title"><small>por</small> R$  <?= number_format($_POST['produtoPreco'],2,',','.'); ?> <small>à vista <span class="text-success">(500% de desconto)</span></small></h5>
                    <small>ou 12x de R$ 119,00 com muito juros</small>
                    
                    <p class="mt-3 mb-0"><a href="#">Mais formas de pagamento</a></p>
                    <form method="post" action="<?=BASE_URL."/itemAdicionado"?>">
                    <?php
                    $descricao = $_POST['produtoDescricao'];
                    $preco = $_POST['produtoPreco'];
                    $foto = $_POST['produtoFoto'];
                    ?>
                        <input type="hidden" name="produtoDesc" value="<?= $descricao?>">
                        <input type="hidden" name="produtoPrec" value="<?= $preco?>">
                        <input type="hidden" name="produtoFot"  value="<?= $foto?>">
                        <input type="hidden" name="produtoQuantidade" value="1">
                        <input type="hidden" name="adicionado" value="true">
                        <input class="mt-3 mb-0 text-center btn-block btn btn-success" type="submit" value="Adicionar ao carrinho">
                    </form>
                    <p class="mt-3 mb-0"><a href="#">Consultar prazo e valor do frete</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="col-12">
    <h5 class="border-bottom text-primary mb-3 mt-5">Informações do produto</h5>
    <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis. Manduma pindureta quium dia nois paga. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Delegadis gente finis, bibendum egestas augue arcu ut est. Mé faiz elementum girarzis, nisi eros vermeio. Detraxit consequat et quo num tendi nada. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. A ordem dos tratores não altera o pão duris. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Quem manda na minha terra sou euzis! Casamentiss faiz malandris se pirulitá. Interagi no mé, cursus quis, vehicula ac nisi. Per aumento de cachacis, eu reclamis. Suco de cevadiss deixa as pessoas mais interessantis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Atirei o pau no gatis, per gatis num morreus.</p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</section>