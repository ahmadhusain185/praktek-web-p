  <?php include_once "partials/cssdatatables.php" ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lokasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <<a href="?page=Home"> Home</a>
            </li>
            <li class="breadcrumb-item">Lokasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
      <div class="card-header">
          <h3 class="card-title">Data Lokasi</h3>
          <a href="?page=lokasicreate"
             class="btn btn-succes btn-sm float-right">
             <i class="fa fa-plus-circle"></i> Tambah Data</a>
</div>
<div class="card-body">

     </div>
  </div>
</div>

<table id="mytable" class="table table-bordered table-hover">
 <thread>
  <tr>
    <th>No</th>
    <th>Nama Lokasi</th>
    <th>Opsi</th>
  </tr>
</thread>
<tfoot>
 <tr>
    <th>No</th>
    <th>Nama Lokasi</th>
    <th>Opsi</th>
  </tr>
</tfoot>
<tbody>
</tbody>
</table>
    
                       
    <?php include_once 'partials/scripts.php'; ?>
    <?php include_once 'partials/scriptsdatatables.php'; ?>
    <script>
        $(function()  {
            $('#mytable') .Datatables()
        });
</script>