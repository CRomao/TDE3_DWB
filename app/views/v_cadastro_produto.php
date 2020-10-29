<form method="POST" action="<?=BASE_URL."/cadastroRealizado"?>">
    <div class="form-group">
        <label>Descrição do Produto</label>
        <input type="text" name="descricao" class="form-control" placeholder="Digite o nome do produto">
    </div>
    <div class="form-group">
        <label>Preço do Produto</label>
        <input type="text" name="preco" class="form-control" placeholder="Informe o preço do produto">
    </div>
    <div class="form-group">
        <label>Foto do Produto</label>
        <input type="text" name="foto" class="form-control" placeholder="Preencha o link da foto">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>