<?php
$caminhoArquivo = __DIR__."/produtos.json";
$produtos = json_decode(file_get_contents($caminhoArquivo), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Detalhes do Produto</title>
</head>
<body>
    <div class="container">
        <div class="p-4 bg-light mt-3">
        <button class="ml-4"><a href="cadastrarProduto.php" class="text-decoration-none text-dark"><i class="icon-long-arrow-left"></i> Voltar para a lista de produtos</a></button> 
            
            <?php foreach($produtos as $produto) { ?>
                <?php if($_GET["nome"] == $produto["nome"]) { ?>
                    <div class="row">
                        <div class="col-5 bg-light p-4">
                            <img src="<?php echo $produto['img']; ?>" class="img-fluid" alt="<?php echo $produto['descricao']; ?>">
                        </div>

                        <div class="col-7 bg-light p-7 mt-3">
                            <h1><?php echo $produto['nome']; ?></h1>
                            <label>Categoria</label>
                            <p><?php echo $produto['categoria']; ?></p>
                            <label>Descrição</label>
                            <p><?php echo $produto['descricao']; ?></p>
                            <div class="row">
                                <div class="col-6">
                                    <label>Quantidade</label>
                                    <p><?php echo $produto['quantidade']; ?></p>
                                </div>
                                <div class="col-6">
                                    <label>Preço</label>
                                    <p><?php echo $produto['preco']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>    
</body>
</html>