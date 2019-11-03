<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div class="container">
        <div class="row p-4">
            <div class="col-7">
                <h1 class="pb-3">Todos os produtos</h1>
            </div>
            <div class="col-5 bg-light p-5">
                <h5 class="pb-3">Cadastrar produto</h5>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeProduto">Nome</label>
                        <input type="text" class="form-control" id="nomeProduto" name="nomeProduto">
                    </div>
                    <div class="form-group">
                        <label for="categoriaProduto">Categoria</label>
                        <select class="form-control" id="categoriaProduto" name="categoriaProduto">
                            <option value selected disabled>Selecione</option>
                            <option value="Camisa de Banda">Camisa de Banda</option>
                            <option value="Camisa de Heróis">Camisa de Heróis</option>
                            <option value="Camisa de Séries">Camisa de Séries</option>
                            <option value="Camisa sem Estampa">Camisa sem Estampa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descricaoProduto">Descrição</label>
                        <input type="text" class="form-control" name="descricaoProduto"/>                    
                    </div>
                    <div class="form-group">
                        <label for="quantidadeProduto">Quantidade</label>
                        <input type="number" class="form-control" id="quantidadeProduto" name="quantidadeProduto">                    
                    </div>
                    <div class="form-group">
                        <label for="precoProduto">Preço</label>
                        <input type="number" class="form-control" id="precoProduto" name="precoProduto">                    
                    </div>
                    <div class="form-group">
                        <label for="imgProduto">Foto do produto</label>
                        <input type="file" class="form-control-file" id="imgProduto" name="imgProduto">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
