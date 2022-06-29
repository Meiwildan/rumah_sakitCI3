<body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url()?>">Rumah Sakit Farrel</a>
                </div>

                

               

                <ul class="nav navbar-right navbar-top-links">
                    
                          
                    <li class="dropdown">
                    <?php if($this->session->userdata('username')<>"") { ?>
                        <a class="dropdown-toggle"  href="<?= base_url('user_farrel/logout')?>">
                            <i class="fa fa-sign-in fa-fw"></i> logout
                        </a>
                        <?php }else{ ?>
                            <a class="dropdown-toggle"  href="<?= base_url('user_farrel/login_farrel')?>">
                            <i class="fa fa-sign-in fa-fw"></i>  Login
                        </a>
                            <?php } ?>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
