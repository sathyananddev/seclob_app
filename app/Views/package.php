<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Package</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <!-- <li class="breadcrumb-item active">General Form</li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Package</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action = "<?php echo route_to('package/profile') ?>" method="post" accept-charset="utf-8" id="plan_form">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
            <?= csrf_meta() ?>
              <div class="card-body">
                <div class="form-group">
                  <label for="planName">Plan Name</label>
                  <input type="text" class="form-control" id="planName" name="planName" placeholder="Plan Name">
                </div>
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
                </div>
                <div class="form-group">
                  <label for="amount">GST Excluded Amount 18%</label>
                  <input type="number" class="form-control" id="amountGst" name="amountGst" placeholder="Amount 18% GST" readonly>
                </div>
                <div class="form-group">
                  <label for="users">Users Pin</label>
                  <input type="text" class="form-control" id="users" name="users" placeholder="Users">
                </div>
                <div class="form-group">
                  <label for="addOnUsers">Add-on Users Pin</label>
                  <input type="text" class="form-control" id="addOnUsers" name="addOnUsers" placeholder="Add-on Users">
                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../jquery-validator/dist/jquery.validate.js"></script>
<script>
  $(document).ready(function () {
    $('#amount').change(function () {
      //$('#amountGst').addClass
      var amount  = $('#amount').val();
      var gst =(amount*18)/100;
      var gst_deducted =amount - gst;
      $('input[name="amountGst"]').val(gst_deducted);

    });
  });
</script>