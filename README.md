<h1 Align='center'>Projeto captação de alunos</h1>
  <p> Projeto feito com o Framework <strong>CodeIgniter4</strong>, usando um banco de dados <strong>MySql</strong>.</p>

<h2>Pré-requisito</h2>

<ul>
  <li>PHP 7.3 ou maior;</li>
  <li>Servidor PHP;</li>
  <li>MySql;</li>
</ul>

<h2>Rodando a aplicação</h2>

<ol>
  <li>Após baixar o codigo é necessario ligar seu servidor php, pode ser o Apache do XAMP, Server embutido do PHP ou CodeIgnietr;</li>
    <ul><li>Utilizei o server embutido do PHP:
      <ol>
        <li>Abrir cmd;</li>
        <li>Entrar no diretorio do projeto com o comando 'cd'</li>
        <li>Digitar: php -S localhost:8080</li>
      </ol>
    </ul>
  <br>
  <li>Criar o Database com o script.sql que está na raiz do diretorio;</li>
    <ul><li>Usando seu database client rode o script abaixo, o mesmo do 'script-db-alunos.sql' na raiz do diretorio</li></ul>
   
  
    CREATE DATABASE alunos
    DEFAULT CHARACTER SET utf8mb4
    DEFAULT COLLATE utf8mb4_general_ci;

    USE alunos;
    CREATE TABLE aluno(
      id INT NOT NULL AUTO_INCREMENT,
      nome VARCHAR(30) NOT NULL,
      telefone VARCHAR(14)/*BIGINT*/,
      email VARCHAR(100),
      cpf VARCHAR(11) NOT NULL,
      PRIMARY KEY(id)
    )DEFAULT CHARSET=utf8mb4;
 
  <li>Conectar seu Database com o <strong>CodeIgniter</strong>;</li>
    <ul><li>Dentro da pasta 'Projeto captação de alunos' acesse: 'app\Config\Database.php'</li></ul>
    <ul><li>Altere 'username' e 'password' para os respectivos valores do seu Database, e se necessario a 'port'</li></ul>
 
    public $default = [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'alunos',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => (ENVIRONMENT !== 'production'),
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];
  
<ul><li>Pronto! Agora é só acessar a url: 'localhost:8080/public/Aluno/index'</li></ul>
</ol>

<h2>Repositorio</h2>

  <p>Em 'Projeto capatção de dados' se encontra o Framework</p>
  <p>Em 'script-db-alunos.sql' se encontra o script para a criação do <strong>Banco de Dados MySql</strong> usado no projeto.</p>
<h2>Funcionalidades</h2>

  <p><strong>CRUD</strong> (Create, Read, Update, Delete)</p>
  <p>Validação de dados</p>
  <p>Campo de pesquisa por ID</p>
  
<h2>Urls</h2>
<p>/public/alunos/index -> Navegação, busca e Deletar</p>
<p>/public/alunos/cadastrar -> Cadatrar e Atualizar</p>

<h2>Tecnologias</h2>
<p>As seguintes técnologias foram usadas na construção do projeto:</p>
<ul>
  <li><strong>CodeIgniter4</strong>;</li>
  <li><strong>PHP7</strong>;</li>
  <li><strong>HTML5</strong>;</li>
  <li><strong>CSS3</strong>;</li>
</ul>
