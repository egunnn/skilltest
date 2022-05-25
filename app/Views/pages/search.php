<?= $this->extend('layout/template'); ?>
<?= $this->section('MainContent'); ?>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <img src="" alt="">
                            image
                        </div>
                        <div class="col-4">
                            info
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="main-content">

    <section class="section">
        <div class="section-header">
            <h1 id="sechead">Data</h1>
            <!--<div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Form Validation</div>
            </div>-->
        </div>
        <div class="row">
            <div class="col-lg col-md-12 col-12 col-sm-12">
                <div class="card">
                    <!--<div class="card-header">
                      <h4>Default Validation</h4>
                    </div>-->
                    <div class="card-body">
                        <div class="form-group mt-2">
                            <div class="input-group">
                                <input type="text" class="form-control" required name="search" id="cari" placeholder="Cari...." style="font-style: italic;">
                                <!--<div class="input-group-text"><i class="fas fa-search"></i></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--<button type="submit" class="form-control col-lg btn btn-primary">Login</button>-->
                <hr>

                <div class="card">
                    <!--<div class="card-header">
                      <h4>Default Validation</h4>
                    </div>-->
                    <div class="card-body">
                        <div class="section-title">Data</div>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Key</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($data as $dt) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $dt['key']; ?></td>
                                            <td><?= $dt['value']; ?></td>
                                            <td><?= $dt['file']; ?></td>
                                            <td>
                                                <button class="btn btn-warning" id="<?= $dt['id']; ?>"> <i class="fas fa-gear"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
</div>

<script>
    $.ajax({
        type: 'get',
        url: 'http://localhost:8080/rest',
        dataType: 'json',
        success: function(response) {
            let provlist = response;
            console.log(provlist);
            $.each(provlist['info'], function(index, value) {
                console.log(index);
            })
        }
    });
    $('.btn').on('click', function() {
        var b = $(this).attr('id');
        console.log(b);
        $('#exampleModal').modal('show');
    })
</script>
<?= $this->endSection(); ?>