# ValidityControl - Tópicos
<p align="center"><a href="#" target="_blank"><img src="http://marcusmarques.com.br/wp-content/uploads/2017/01/inventario.jpg" width="400"></a></p>



O sistema será utilizado para gerenciar a validade dos produtos de uma empresa, para evitar que os produtos fabricados acabem perdendo a validade e sejam descartados.

## Classes
- [Usuario](#usuario).
- [Cliente](#cliente).
- [Produto](#produto).
- [Lote](#lote).
- [Pedido](#pedido).
- [ItensPedido](#itensPedido).

### Usuario
- id.
- nome.
- email.
- usuario.
- senha.
- palavraRecuperacao.

### Cliente
- id.
- razaoSocial.
- cpf_cnpj.
- situacao.
- telefone.
- dataCadastro.

### Produto
- id.
- descricao.
- validade.
- preco.
- tipoBebida.

### Lote
- id.
- quantidadeProduto.
- dataFabricacao.

### Pedido
- id.
- dataPedido.

### ItensPedido
- quantidadeItem.
- valorTotal.
