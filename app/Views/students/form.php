<div class="container mt-5">
    <?php if (isset($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $validation->listErrors(); ?>
    </div>
    <?php endif; ?>
    <?php echo form_open_multipart('student/store', 'autocomplete="off"') ?>
    <div class="form-group col-md-6 pl-0">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" value="<?php echo $student['nome'] ?? old('nome') ?>" autofocus>
    </div>
    <div class="form-group col-md-6 pl-0">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu endereço" value="<?php echo $student['endereco'] ?? old('endereco') ?>">
    </div>
    <div class="form-row col-md-6 pl-0">
        <div class="col-12">
            <label for="foto">Foto: <small>(.jpg)</small></label>
        </div>
        <div class="col-10">
            <input type="file" class="form-control" name="foto" id="foto" placeholder="sua-imagem.jpg" value="<?php echo $student['foto'] ?? old('foto') ?>">
        </div>
        <div class="col-2 pl-3 mt-n4">
            <img alt="Foto"
                 src="<?php echo base_url() . '/upload/' . ($student['foto'] ?? 'student_default.jpg') ?>"
                 class="circle-image-edit">
        </div>
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo $student['id']?? old('id') ?>">
    <?php echo anchor(base_url(), 'Cancelar', ['class' => 'btn btn-secondary']) ?>
    <input type="submit" value="Salvar" class="btn btn-primary">
    <?php echo form_close(); ?>
</div>