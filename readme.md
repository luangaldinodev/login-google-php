# Login with Google com PHP 🐘
Este repositório contém um exemplo de como implementar o login com Google usando PHP. Ele utiliza a biblioteca oficial do Google API Client para facilitar a integração.

## Pré-requisitos:

- PHP 7.2 ou superior

- Composer instalado

- Conta de desenvolvedor do Google com um projeto criado

- Credenciais de OAuth 2.0 configuradas no Google Cloud Console

- URL de redirecionamento configurada corretamente nas credenciais do Google

- Extensão cURL habilitada no PHP7

- Extensão OpenSSL habilitada no PHP

## Como instalar:

1. Clone este repositório ou baixe o código fonte.

```
git clone 
```

2. Tenha o composer instalado.

3. Execute o comando abaixo para instalar a biblioteca do Google API Client:

```bash
composer require google/apiclient
```
## Configuração:
Configure suas credenciais do Google no arquivo index.php:

```php
$client->setClientId("");
$client->setClientSecret("");
```

Defina a URL de redirecionamento no Google Cloud Console para apontar para o seu arquivo index.php ou outro arquivo de callback que você escolher.

Certifique-se de que o arquivo index.php esteja acessível via URL pública.

## Uso:
Acesse o arquivo index.php no seu navegador. Você verá um botão para fazer login com o Google. Ao clicar, você será redirecionado para a página de autorização do Google. Após autorizar, você será redirecionado de volta para o seu site, onde poderá acessar as informações do usuário autenticado.

## Contribuição:
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests para melhorias ou correções.