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
                    <a type="button" class="btn btn-primary" href="<?php echo tutor_url(); ?>master-data/academics/">
                        Back
                    </a>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12 col-xl-4">
                    <h2>Edit Academics</h2>
                    <form method="POST" id="edit-academics-form">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label>Name</label>
                                <input type="text" name="academic" class="form-control" placeholder="Ex: 10th, 12th, B.COM, B.Sc" value="<?php echo $academic->name; ?>">
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-success" type="submit">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content -->

        <?php $this->load->view('layout/footer'); ?>

        <!-- Custom Footer -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script type="text/javascript">
         
            $('form[id="edit-academics-form"]').validate({
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
                    $('form[id="edit-academics-form"]button[type="submit"]').prop('disabled', true);
                    form.submit();
                }
            });

        </script>
        <!-- Custom Footer -->

    </body>
</html>