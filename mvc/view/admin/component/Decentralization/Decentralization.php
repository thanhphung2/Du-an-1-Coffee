<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Phân Quyền Tài Khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th>user name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>vai tro</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $key => $value): ?>
                        <tr>
                    <td><?= $value['user_name'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><img src="public/img/<?= $value['image'] ?>" class="user_image" style="width:50px"></td>
                    <td>
                    <?php   
                                    if ($value['role']==1) {
                                        echo $vai_tro = 'quản trị viên';
                                    }else {
                                        echo $vai_tro = 'khách hàng';
                                    } 
                                ?>
                    </td>
                    <td>
                      <span ><a href="Edit_Decentralization?id=<?=$value['id']?>"><i class="fas fa-edit btn btn-primary" ></i></a></span>
                    </td>
                  </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
    </div>
  </div>
  <script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>