<?php
global $active;
?>
<body>
        <nav class="navbar navbar-expand-md ps-3 pe-1">

                <div class="row w-100">
                    <div class="col-md-4">
                        <a class="navbar-brand w-25" href="#">
                            <span class="first-name">Matt</span><span class="last-name">Miss</span>
                        </a>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="collapse navbar-collapse justify-content-center" id="navbar-center">
                            <div class="nav-link-container">
                                <ul class="navbar-nav ps-md-3">
                                    <li class="nav-item text-end"><a class="nav-link <?php if ($active == 'index') echo 'active' ?>" href="index.php">HOME</a></li>
                                    <li class="nav-item text-center"><a class="nav-link <?php if ($active == 'projects') echo 'active' ?>" href="projects.php">PROJECTS</a></li>
                                    <li class="nav-item text-start"><a class="nav-link <?php if ($active == 'guestbook') echo 'active' ?>" href="guestbook.php">GUESTBOOK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-end d-flex nav-btn-container">
                        <!--<button type="button" class="btn btn-resume"><a class="text-decoration-none" href="resume.php">Resume</a></button>-->
                        <div class="col resume-github-div">
                            <div><a href="resume.php">View My Resume</a></div>
                            <div><a href="https://github.com/MattMiss" target="_blank">github.com/MattMiss</a></div>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-center" aria-controls="navbar-center" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>

        </nav>