<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@600&family=Raleway:wght@300&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">    <title>Matt Miss</title>
    <title>Matt Miss - Contact</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-4">
                <a class="navbar-brand w-25" href="#">
                    <span class="first-name">Matt</span><span class="last-name">Miss</span>
                </a>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <div class="collapse navbar-collapse justify-content-center" id="navbar-center">
                    <div class="nav-link-container">
                        <ul class="navbar-nav pe-5">
                            <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">PROJECTS</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-end d-flex nav-btn-container">
                <button type="button" class="btn btn-resume"><a class="text-decoration-none" href="resume.html">Resume</a></button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-center" aria-controls="navbar-center" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="container p-3 contact-container">
    <h1 class="form-header text-center">CONTACT</h1>
    <div class="form-container">
        <div class="form-body">
            <form method="POST" action="process-contact.php" name="contact" class="my-3">
                <div class="mb-4">
                    <label for="input-contact-name" class="form-label">NAME</label>
                    <input type="text" class="form-control" id="input-contact-name" name="name" placeholder="First and Last Name" required>
                </div>

                <div class="mb-4">
                    <label for="input-email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="input-email" name="email" placeholder="e.g. example@email.com" required>
                </div>

                <div class="mb-4">
                    <label for="input-message" class="form-label">MESSAGE</label>
                    <textarea class="form-control" id="input-message" name="message" placeholder="Type your message here..." rows="4" required></textarea>
                </div>


                <button id="submit-btn" type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>