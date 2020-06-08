
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
                                        <a class="btn btn-primary btn-sm" href="<?= tutor_url(); ?>">Login</a>
                                    </li>
                                </ul>
                                <?php } ?>
                                <!-- No Session -->

                                <!-- Tutor -->
                                <?php if($this->session->has_userdata('tutor')) { ?>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Dashboard</a>
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Master Data</a>
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