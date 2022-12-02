<div class="container mt-5">
    <?php echo anchor(base_url('/'), 'Alunos', ['class' => 'ml-3 float-left aluno-ini text-decoration-none']) ?>
    <?php echo anchor(base_url('student/create'), 'Novo', ['class' => 'btn btn-success mb-3 mr-3 float-right']) ?>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['nome'] ?></td>
            <td><?php echo $student['endereco'] ?></td>
            <td>
                <img alt="Foto"
                     src="<?php echo base_url() . '/upload/' . ($student['foto'] ?: 'student_default.jpg') ?>"
                     class="circle-image">
            </td>
            <td>
                <?php echo anchor("student/edit/{$student['id']}", 'Editar') ?> -
                <?php echo anchor("student/delete/{$student['id']}", 'Excluir', ['onclick' => "return confirm('Deseja excluir o registro?');"]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $pager->links(); ?>
    <?php if ($flashMessage): ?>
       <?php echo sprintf("<div class='alert alert-%s'>%s</div>", $flashMessage['class'], $flashMessage['message']) ?>
    <?php endif; ?>
</div>