<?php 
$caminhoArquivo = __DIR__."/produtos.json";
$produtos = json_decode(file_get_contents($caminhoArquivo), true);
function cadastrarProduto($nomeProduto, $categoriaProduto, $descricaoProduto, $quantidadeProduto, $precoProduto, $imgProduto) {
    $nomeArquivo = "produtos.json";
    if(file_exists($nomeArquivo)) {
        //abrindo e pegando informações do arquivo
        $arquivo = file_get_contents($nomeArquivo);
        //transformando o json em array
        $produtos = json_decode($arquivo, true);
        //adicionando um novo produto na array qye estava dentro do arquivo
        $produtos[] = ["nome"=>$nomeProduto, "categoria"=>$categoriaProduto, "descricao"=>$descricaoProduto, "quantidade"=>$quantidadeProduto, "preco"=>$precoProduto, "img"=>$imgProduto];
        $json = json_encode($produtos);
        //salvando o json dentro de um arquivo
        file_put_contents($nomeArquivo, $json);        
    } else {
        $produtos = [];
        // array_push()
        $produtos[] = ["nome"=>$nomeProduto, "categoria"=>$categoriaProduto, "descricao"=>$descricaoProduto, "quantidade"=>$quantidadeProduto, "preco"=>$precoProduto, "img"=>$imgProduto];
        //transformando array em json
        $json = json_encode($produtos);
        //salvando o json dentro de um arquivo
        file_put_contents($nomeArquivo, $json);
    }
}
if($_POST) {
    //salvando arquivo
    $nomeImg = $_FILES['imgProduto']['name'];
    $localTmp = $_FILES['imgProduto']['tmp_name'];
    $dataAtual = date("d-m-y");
    $caminhoSalvo = 'img/'.$nomeImg;
    move_uploaded_file($localTmp, $caminhoSalvo);
    cadastrarProduto($_POST['nomeProduto'], $_POST['categoriaProduto'], $_POST['descricaoProduto'], $_POST['quantidadeProduto'], $_POST['precoProduto'], $caminhoSalvo);
}
?>

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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($produtos) && $produtos != [])  {?>
                        <?php foreach($produtos as $produto) { ?>
                            <tr>
                                <td><a href="detalhesProduto.php?nome=<?php echo $produto["nome"]; ?>"</a><?php echo $produto["nome"]; ?></td>
                                <td><?php echo $produto["categoria"]; ?></td>
                                <td><?php echo "R$".$produto["preco"]; ?></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-5 bg-light p-5">
                <h5 class="mb-3">Cadastrar produto</h5>
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
