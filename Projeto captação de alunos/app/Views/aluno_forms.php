<?php echo $this->include('aluno_header', array('titulo'=>$titulo)); ?>
<main>

<h2><?php echo $titulo?></h2>
<p><?php echo $msg?></p>

<?php if(!empty($erros)) : ?>
    <ul style='color: rgb(255,0,0);'>
        <?php foreach ($erros as $erro) : ?>
        <li><?php echo $erro;?></li>
        <?php endforeach;?>
    </ul>
<?php endif; ?>

<form method='post'>
    <input type='hidden' name='id' value="<?php echo (isset($aluno) ? $aluno->id : '');?>">

    <label for="nome">Insira o nome do(a) aluno(a): </label>
    <input type="text" name="nome" value="<?php echo (isset($aluno) ? $aluno->nome : '');?>">

    <label for="telefone">Insira o telefone: </label>
    <input type="number" name="telefone" value="<?php echo (isset($aluno) ? $aluno->telefone : '');?>">

    <label for="email">Insira o e-mail: </label>
    <input type="email" name="email" value="<?php echo (isset($aluno) ? $aluno->email : '');?>">

    <label for="cpf">Insira o CPF: </label>
    <input type="number" name="cpf" value="<?php echo (isset($aluno) ? $aluno->cpf : '');?>">

    <input type="submit" value="<?php echo $acao; ?>">
</form>

<a href="<?php echo base_url('/public/Aluno/index');?>">Voltar</a>

</main>
<?php echo $this->include('aluno_footer'); ?>