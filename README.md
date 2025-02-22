# Livewire Contacts

Este é um projeto de gerenciamento de contatos desenvolvido com [Laravel](w) e [Livewire](w). Ele permite que os usuários adicionem, editem, visualizem e excluam contatos de maneira dinâmica, utilizando Livewire para atualizações em tempo real sem recarregar a página.

## Tecnologias Utilizadas

- [Laravel 11](w)
- [Livewire](w)
- [Bootstrap](w)
- [MySQL](w)

## Recursos

- Cadastro de contatos
- Listagem de contatos
- Edição de contatos
- Exclusão de contatos
- Validação de formulários com Laravel e Livewire
- Interface responsiva com Tailwind CSS
- Pesquisa de contatos em tempo real

## Instalação

1. Clone o repositório:
   ```sh
   git clone https://github.com/SamuelCDiias/livewire_contacts.git
   cd livewire_contacts
   ```

2. Instale as dependências do Laravel:
   ```sh
   composer install
   ```

3. Copie o arquivo de configuração e configure o banco de dados:
   ```sh
   cp .env.example .env
   ```
   Atualize as variáveis de ambiente do banco de dados no arquivo `.env`.

4. Gere a chave da aplicação:
   ```sh
   php artisan key:generate
   ```

5. Execute as migrações e popule o banco de dados:
   ```sh
   php artisan migrate --seed
   ```

6. Inicie o servidor:
   ```sh
   php artisan serve
   ```

7. Acesse a aplicação em: [http://localhost:8000](http://localhost:8000)

