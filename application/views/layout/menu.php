
            <div class="container p-0 mb-2 mb-sm-5">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand font-weight-bold" href="#"><?php echo PROJECT_NAME; ?></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                                <!-- No Session -->
                                <?php if(!$this->session->has_userdata('tutor')) { ?>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">How It Works</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                    <li class="nav-item align-self-center">
                                        <a class="btn btn-primary btn-sm" href="<?= tutor_url(); ?>">Student Login</a>
                                    </li>
                                    <li class="nav-item align-self-center ml-0 ml-xl-2">
                                        <a class="btn btn-secondary btn-sm" href="<?= tutor_url(); ?>">Tutor Login</a>
                                    </li>
                                </ul>
                                <?php } ?>
                                <!-- No Session -->

                                <!-- Tutor -->
                                <?php if($this->session->has_userdata('tutor')) { ?>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item <?php if($this->router->fetch_class()=='tutor_dashboard') { echo 'active'; } ?>">
                                        <a class="nav-link" href="<?= tutor_url().'dashboard'; ?>">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Notes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Student</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Exams</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-toggle nav-link" href="#" id="master-data" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master Data</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="master-data">
                                            <a class="dropdown-item" href="<?php echo tutor_url(); ?>master-data/academics">Academics</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo tutor_url(); ?>master-data/subjects">Subjects</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo tutor_url(); ?>master-data/schools">Schools/Colleges</a>
                                        </div>
                                    </li>
                                    <li class="nav-item align-self-center">
                                        <a class="btn btn-danger btn-sm" href="<?= tutor_url().'logout'; ?>">Logout</a>
                                    </li>
                                </ul>
                                <?php } ?>
                                <!-- Tutor -->

                            </div>
                        </nav>     
                    </div>
                </div>
            </div>


            <?php if($this->session->flashdata('notification')) {  $message = $this->session->flashdata('notification'); ?>
            <!-- Notification -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="alert alert-<?php echo $message['type']; ?> alert-dismissible fade show" role="alert">
                            <?php echo $message['message']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>         
                    </div>
                </div>
            </div>
            <!-- Notification -->
            <?php } ?>