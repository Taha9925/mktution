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
            <div class="offset-sm-4 col-xl-4">
               <h1>Tutor Login</h1>
               <form method="POST" id="tutor-login-form">
                  <div class="form-row"> 
                     <div class="col-12 form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus="true">
                     </div>
                     <div class="col-12 form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                     </div>
                     <div class="col-12 form-group">
                        <button class="btn btn-success">Submit</button>
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
         
         $('form[id="tutor-login-form"]').validate({
            rules: {
                username: {
                   required: true,
                },
                password: {
                   required: true,
                },
            },
            messages: {
               username: {
                   required: 'Username is required',
               },
               password: {
                   required: 'Password is required',
               },
            },
            submitHandler: function(form) {
               $('form[id="tutor-login-form"]button[type="submit"]').prop('disabled', true);
               form.submit();
            }
        });

      </script>
      <!-- Custom Footer -->

      </body>
</html>