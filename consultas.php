
<?php include_once 'inc/head.inc.php' ?>
<?php include_once 'inc/sidebar-menu.inc.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consultas
        <small>Página de consultas</small>
      </h1>
    </section>

    <!-- Main content -->
    <p class="mt-section"></p>
    <section class="content container-fluid">

      <!-------------------------------
      | Conteúdo da Página Principal   |
      --------------------------------->
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Telefone</th>
                  <th>Ação</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>fulano@gmail.com.br</td>
                  <td>(45)99920-5958</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>fulano@gmail.com.br</td>
                  <td>(45)99920-5958</td>
                  <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>fulano@gmail.com.br</td>
                  <td>(45)99920-5958</td>
                  <td><span class="label label-primary">Approved</span></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>fulano@gmail.com.br</td>
                  <td>(45)99920-5958</td>
                  <td><span class="label label-danger">Denied</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  <?php include_once 'inc/footer.inc.php' ?>