
<?php include_once 'inc/head.inc.php' ?>
<?php include_once 'inc/sidebar-menu.inc.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <p>&nbsp;</p>
    <section class="content container-fluid">

      <!-------------------------------
      | Conteúdo da Página Principal   |
      --------------------------------->
      
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Messages</span>
              <span class="info-box-number">1,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bookmarks</span>
              <span class="info-box-number">410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Uploads</span>
              <span class="info-box-number">13,648</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">93,139</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="space"></div>
      <div class="row">
        <div class="col-md-12">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <h3 class="widget-user-username">Cadastro de Clientes</h3>
                  <a href="#">
                      <h5 class="widget-user-desc">[Alterar Imagem]</h5>
                  </a>
                </div>
                <div class="widget-user-image img-user-index">
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
        </div><!--//cadastros-->
      </div><!--row-->

      <div class="row">
      <div class="col-md-12">
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
        </div><!--//consultas-->
      </div>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  <?php include_once 'inc/footer.inc.php' ?>