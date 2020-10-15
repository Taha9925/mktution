<!doctype html>
<html lang="en">
    <head>

        <?php $this->load->view('layout/head'); ?>

        <!-- Custom Head -->
        <!-- Custom Head -->

    </head>
    <body>

        <?php $this->load->view('layout/menu'); ?>

        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Master Data</h1>
                </div>
                <div class="col-xl-6 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-academics">
                        Add Academics
                    </button>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12 responsive">
                    <h2>Academics</h2>
                    <?php if($academics) { ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Name</td>
                                <td>Created</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($academics as $key => $academic) { ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $academic->name; ?></td>
                                <td><?php echo dateTimeFormat($academic->created); ?></td>
                                <td><a class="btn btn-secondary btn-sm"  href="<?php echo tutor_url(); ?>master-data/academics/edit/<?php echo $academic->id; ?>">Edit</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } else { ?>
                    <p class="text-danger">No academics added yet!</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Content -->

        <!-- Modal -->
        <div class="modal fade" id="add-academics" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Academics</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo tutor_url(); ?>master-data/academics/create" method="POST" id="add-academics-form">
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-12 form-group">
                                    <label>Academics Name</label>
                                    <input type="text" name="academic" placeholder="Ex: 10th, 12th, B.COM, B.Sc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <?php $this->load->view('layout/footer'); ?>

        <!-- Custom Footer -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script type="text/javascript">
         
            $('form[id="add-academics-form"]').validate({
                rules: {
                    academic: {
                       required: true,
                    },
                },
                messages: {
                    academic: {
                       required: 'Academic name is required',
                    },
                },
                submitHandler: function(form) {
                    $('form[id="add-academics-form"]button[type="submit"]').prop('disabled', true);
                    form.submit();
                }
            });

        </script>
        <!-- Custom Footer -->

    </body>
</html>