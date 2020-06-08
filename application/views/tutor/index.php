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
               <form method="POST">
                  <div class="form-row"> 
                     <div class="col-12 form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
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

      </body>
</html>