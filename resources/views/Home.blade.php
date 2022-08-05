<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- My css -->
    <link rel="stylesheet" href="style.css" />

    <title>My portofolio</title>

    <style>
        .jumbotron {
  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
  padding-top: 6rem;
  background-color: #dee2e6;
}

#projects {
  background-color: #dee2e6;
}
    </style>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Adittia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hal2">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hal3">project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hal4">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!--jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/Aditt.jpg" alt="Zinggy" width="200" class="rounded-circle img-thumbnaill" />
      <h1 class="display-4">Adittia</h1>
      <p class="lead">Student | XII RPL 1</p>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L26.7,234.7C53.3,213,107,171,160,133.3C213.3,96,267,64,320,80C373.3,96,427,160,480,160C533.3,160,587,96,640,112C693.3,128,747,224,800,261.3C853.3,299,907,277,960,234.7C1013.3,192,1067,128,1120,133.3C1173.3,139,1227,213,1280,240C1333.3,267,1387,245,1413,234.7L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
      </svg>
    </section>
    <!--Akhir jumbptron -->
   
    <!-- About -->
    <section id="About">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text text-center">
        <div class="col-md-4 mb-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat earum et iure debitis placeat exercitationem impedit itaque suscipit perspiciatis!</p>
        </div>
        <div class="col-md-4 mb-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur optio, excepturi perferendis ut suscipit aliquam earum asperiores eligendi porro amet quas unde enim voluptas repellendus?</p>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#DEE2E6" fill-opacity="1" d="M0,192L26.7,186.7C53.3,181,107,171,160,181.3C213.3,192,267,224,320,224C373.3,224,427,192,480,197.3C533.3,203,587,245,640,250.7C693.3,256,747,224,800,197.3C853.3,171,907,149,960,122.7C1013.3,96,1067,64,1120,69.3C1173.3,75,1227,117,1280,122.7C1333.3,128,1387,96,1413,80L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
     </section>
    <!-- Akhir About -->

    <!-- project -->
    <section id="projects">
     <div class="container">
       <div class="row text-center mb-3">
         <div class="col">
           <h2>My Projects</h2>
         </div>
       </div>
       <div class="row justify-content-center">
         <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/koding1.jpg" class="card-img-top" alt="project1">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
         </div>
         <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/koding2.jpg" class="card-img-top" alt="project2">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
         </div>
         <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/koding3.jpg" class="card-img-top" alt="project3">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
         </div>
         <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/koding4.jpg" class="card-img-top" alt="project4">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
         </div>
         <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/koding5.jpg" class="card-img-top" alt="project5">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
         </div>
       </div>
     </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L26.7,245.3C53.3,235,107,213,160,176C213.3,139,267,85,320,69.3C373.3,53,427,75,480,96C533.3,117,587,139,640,149.3C693.3,160,747,160,800,138.7C853.3,117,907,75,960,74.7C1013.3,75,1067,117,1120,128C1173.3,139,1227,117,1280,101.3C1333.3,85,1387,75,1413,69.3L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir project -->

    <!-- Contact -->
     <section id="Contact">
       <div class="container">
         <div class="row text text-center mb-3">
           <div class="col">
             <h2>Contact Me</h2>
           </div>
         </div>
         <div class="row justify-content-center">
           <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"/>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email"/>
              </div>
              <div class="mb-3">
                <label for="Pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="Pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">kirim</button>
            </form>
           </div>
         </div>
       </div>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,96L26.7,122.7C53.3,149,107,203,160,192C213.3,181,267,107,320,106.7C373.3,107,427,181,480,197.3C533.3,213,587,171,640,165.3C693.3,160,747,192,800,176C853.3,160,907,96,960,96C1013.3,96,1067,160,1120,170.7C1173.3,181,1227,139,1280,112C1333.3,85,1387,75,1413,69.3L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
     </section>
    <!--  Akhir contact -->

    <!-- footer -->
    <footer class="bg-secondary text-white text-center p-5">
      <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by<a href="https://www.instagram.com/aditt29__/"> aditt29__</a></p>
    </footer>
    <!-- Akhir footer-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
