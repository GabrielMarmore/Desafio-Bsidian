<?php echo $this->include('aluno_header', array('titulo'=>$titulo)); ?>
<main>
<a href="<?php echo base_url('/public/Aluno/index');?>">Mostrar todos os alunos</a>
<form method='post'>
    <label for="search">Buscar por ID:</label>
    <input name="search" type="text">

    <input type="submit" value="Pesquisar">
</form>
<p><?php echo $msg; ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>E-MAIL</th>
        <th>CPF</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    <tr>
        <td> <?php echo $aluno->id; ?> </td>
        <td> <?php echo $aluno->nome; ?></td>
        <td> <?php echo $aluno->telefone; ?></td>
        <td> <?php echo $aluno->email; ?></td>
        <td> <?php echo $aluno->cpf; ?></td>
        <td><a href="<?php echo base_url('public/aluno/atualizar/'.$aluno->id);?>">Editar</a></td>
        <td><a href="<?php echo base_url('public/aluno/deletar/'.$aluno->id);?>">Deletar</a></td>
    </tr>
</table>
<a href="<?php echo base_url('/public/Aluno/cadastrar') ?>">Cadastrar</a>
</main>
<?php echo $this->include('aluno_footer'); ?>