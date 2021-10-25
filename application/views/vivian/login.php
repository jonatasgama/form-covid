<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
	
<?php
	if($this->session->flashdata('msg-danger')){ ?>
		<div class="mt-2 alert alert-danger text-center">
			<?=$this->session->flashdata('msg-danger');?>
		</div>
<?php } ;?>

<?php
	if($this->session->flashdata('msg-success')){ ?>
		<div class="mt-2 alert alert-success text-center">
			<?=$this->session->flashdata('msg-success');?>
		</div>
<?php } ; ?>

<?php
	if($this->session->flashdata('msg-warning')){ ?>
		<div class="mt-2 alert alert-warning text-center">
			<?=$this->session->flashdata('msg-warning');?>
		</div>
<?php } ; ?>

        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="<?=base_url('entrar');?>" method="post" class="row g-3">
                        <h4>Login</h4>
                        <div class="col-12">
                            <label>Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="col-12">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="col-12">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>