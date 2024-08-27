<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Edit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte-dev/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte-dev/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('backend/includes/navbar') ?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('backend/includes/sidebar') ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Project Edit</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project Edit</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Project Name</label>
                  <input type="text" id="inputName" class="form-control" value="AdminLTE">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Project Description</label>
                  <textarea id="inputDescription" class="form-control" rows="4">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select">
                    <option disabled>Select one</option>
                    <option>On Hold</option>
                    <option>Canceled</option>
                    <option selected>Success</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Client Company</label>
                  <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Project Leader</label>
                  <input type="text" id="inputProjectLeader" class="form-control" value="Tony Chicken">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Budget</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputEstimatedBudget">Estimated budget</label>
                  <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
                </div>
                <div class="form-group">
                  <label for="inputSpentBudget">Total amount spent</label>
                  <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
                </div>
                <div class="form-group">
                  <label for="inputEstimatedDuration">Estimated project duration</label>
                  <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Files</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>File Name</th>
                      <th>File Size</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Functional-requirements.docx</td>
                      <td>49.8005 kb</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    <tr>
                      <td>UAT.pdf</td>
                      <td>28.4883 kb</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    <tr>
                      <td>Email-from-flatbal.mln</td>
                      <td>57.9003 kb</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    <tr>
                      <td>Logo.png</td>
                      <td>50.5190 kb</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    <tr>
                      <td>Contract-10_12_2014.docx</td>
                      <td>44.9715 kb</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Save Changes" class="btn btn-success float-right">
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/adminlte-dev/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/adminlte-dev/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/adminlte-dev/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url('assets/adminlte-dev/') ?>dist/js/demo.js"></script>
</body>

</html>