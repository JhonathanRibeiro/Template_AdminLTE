
<?php include_once 'inc/head.inc.php' ?>
<?php include_once 'inc/sidebar-menu.inc.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastros 
        <small>Página de cadastros</small>
      </h1>
    </section>

    <!-- Main content -->
    <p class="mt-section"></p>
    <section class="content container-fluid">

      <!-------------------------------
      | Conteúdo da Página Principal   |
      --------------------------------->
      
      <div class="row">
         <!-- <div class="col-md-2"></div> -->
        <div class="col-md-12">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <h3 class="widget-user-username">Cadastro de Clientes</h3>
                  <a href="#">
                      <h5 class="widget-user-desc">[Alterar Imagem]</h5>
                  </a>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                </div>
                <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                        autofocus required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Telefone</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div><!-- /.box-body -->
          
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                      <button type="reset" class="btn btn-danger right">Limpar</button>
                    </div>
                  </form>
              </div>
        </div>
      </div>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  <?php include_once 'inc/footer.inc.php' ?>