<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>

    <!-- footer -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/fonts/icomoon/style.css" />
    <!-- *******Font Awesome 4 icon link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- *******Font Awesome icon link -->
    <script
      src="https://kit.fontawesome.com/34ce5b6af8.js"
      crossorigin="anonymous"
    ></script>
    <!-- should icons -->
    <script
      src="https://kit.fontawesome.com/4634a0eb41.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./assets/css/animate.css" />
    <link rel="stylesheet" href="./assets/css/about.css" />
  </head>
  <body>
    <!-- front -->
    <section>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark design p-md-3">
        <div class="container-fluid">
          <div class="logo navbar-brand">
            <img
              src="./assets/images/logo.png"
              alt="educare logo"
              class="w-100"
            />
          </div>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-target="#navbarNav"
            data-bs-toggle="collapse"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle Navbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/index.php" class="nav-link text-white">Home</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link active text-white"
                  >About</a
                >
              </li>
              <li class="nav-item dropdown hv">
                <a
                  class="nav-link dropdown-toggle"
                  href="courses.php"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Courses
                </a>
                <ul
                  class="dropdown-menu bg-light"
                  aria-labelledby="navbarDropdown"
                >
                  <li>
                    <a
                      href="courses.php"
                      onclick="show('Section1');"
                      class="dropdown-item hv"
                      class="sub-div"
                      >Primary</a
                    >
                  </li>
                  <li>
                    <a
                      href="courses.php"
                      onclick="show('Section2');"
                      class="dropdown-item hv"
                      class="sub-div"
                      >Secondary</a
                    >
                  </li>
                  <li>
                    <a
                      href="courses.php"
                      onclick="show('Section3');"
                      class="dropdown-item hv"
                      class="sub-div"
                      >Summer-programs</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/Activities.php" class="nav-link text-white"
                  >Activities</a
                >
              </li>
              <li class="nav-item">
                <a href="/Contact Us.php" class="nav-link text-white"
                  >Contact</a
                >
              </li>
              <li class="nav-item hv">
                <a class="nav-link" aria-current="page" href="/login.php"
                  >Login</a
                >
              </li>
            </ul>
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search..."
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <video autoplay muted loop id="myVideo" class="w-100">
          <source src="./image/front-cover-1.mp4" type="video/mp4" />
        </video>
        <div class="overlay content">
          <h1>Learn More About Us</h1>
          <h3>Start your children's future here!</h3>
          <h6>
            We are servring the best quality education, general knowledge,
            morality and ethics to the essentials culture.
          </h6>
        </div>
      </div>
    </section>

    <!-- Section one -->
    <section id="onescroll">
      <div class="container">
        <div class="one text-center">
          <img src="./assets/images/logo.png" alt="one-logo" />
          <h1>Educare International School</h1>
        </div>
      </div>
      <div
        class="container-fluid who"
        style="background-color: #f59723; margin-bottom: 100px"
      >
        <h1>Who We Are!</h1>
        <div class="row p-5 m-5">
          <div class="col-lg-6">
            <img
              src="./image/slide/onephoto.jpg"
              alt="one photo"
              class="w-100"
            />
          </div>
          <div class="col-lg-6">
            <div class="one-rt-text p-5 m-5">
              <p>
                <span>E</span>ducare International School <br />is an
                academically focused school that wants to instill and develop
                strong core values in our students. We firmly believe in the
                importance and the power of quality educationa nd how it cna
                change lives, societies and countries. As a team, we committed
                to educate our next generation and to prepare them to be ready
                for tomorrow's world. We aim to deliever quality education to
                provide more opportuniies and access.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Two -->
    <section class=" ">
      <div class="pb-5 text-center">
        <h1 style="font-size: 100px">2022 Intake</h1>
        <h4>We are learning...</h4>
      </div>
      <div class="container">
        <div class="d-flex align-items-center justify-content-center">
          <div class="hover2 w-50">
            <figure>
              <img src="./image/slide/primary.jpg" class="img-fluid" alt="" />
            </figure>
          </div>
          <div class="text-center w-50 p-3">
            <h3>Primary Classes</h3>
            <p>
              Primary class have for Grade 1 to Grade 6 students.These classes
              means to give knowledge for students.The whole year we teach with
              the best teacher to students.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <div class="text-center w-50 p-3">
            <h3>Secondary Classes</h3>
            <p>
              Primary class have for Grade 7 to Grade 12 students.These classes
              means to give knowledge for students.The whole year we teach with
              the best teacher to students.
            </p>
          </div>
          <div class="hover2 w-50">
            <figure>
              <img src="./image/slide/secondary.jpg" class="img-fluid" alt="" />
            </figure>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <div class="hover2 w-50">
            <figure>
              <img
                src="./image/slide/summer programs.jpg"
                class="img-fluid"
                alt=""
              />
            </figure>
          </div>
          <div class="text-center w-50 p-3">
            <h3>Summer Programs</h3>
            <p>
              Summer class have for Grade 1 to Grade 12 students.These classes
              means to give knowledge for students.When teaching time 3 months,
              we teach with the best teacher to students.
            </p>
          </div>
        </div>
      </div>
      <div class="mt-5 text-center">
        <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
        <a href="#onescroll"
          ><button id="" class="tour">Take a Tour!</button></a
        >
      </div>
    </section>

    <!-- Three -->
    <section>
      <div class="container mb-5 mt-5">
        <div class="one text-center p-3 p-5">
          <h1 style="font-size: 80px; font-style: italic">
            Why You Should Choose Us
          </h1>
        </div>
        <div class="row text-center first-row">
          <div class="col-md-4 shadow three p-5">
            <i class="fas fa-book-reader"></i>
            <h4>Quality Education</h4>
          </div>
          <div class="col-md-4 shadow three p-5">
            <i class="fas fa-people-arrows"></i>
            <h4>Social skills</h4>
          </div>
          <div class="col-md-4 shadow three p-5">
            <i class="fas fa-heart"></i>
            <h4>Talent Improvement</h4>
          </div>
        </div>
        <div class="row mb-5 text-center">
          <div class="col-md-6 shadow three p-5">
            <i class="fas fa-chalkboard-teacher"></i>
            <h4>Personalized Learning</h4>
          </div>
          <div class="col-md-6 shadow three p-5">
            <i class="fas fa-globe"></i>
            <h4>General Knowledge</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- four -->
    <section mt-5 style="margin-top: 100px">
      <div class="container align-items-center mt-5">
        <div class="text-center mb-3">
          <h1 class="sub-title">We're collborting with...</h1>
        </div>
        <div class="row four-key py-5">
          <div class="col text-center partner">
            <img
              src="./image/png/partner-1.png"
              alt=""
              alt="Image"
              class="img-fluid collab"
            />
          </div>
          <div class="col text-center mb-5 partner">
            <img
              src="./image/png/partner-2.png"
              alt=""
              alt="Image"
              class="img-fluid collab"
            />
          </div>
          <div class="col text-center mb-5 partner">
            <img
              src="./image/png/partner-3.png"
              alt=""
              alt="Image"
              class="img-fluid collab"
            />
          </div>
          <div class="col text-center mb-5 partner">
            <img
              src="./image/png/partner-4.png"
              alt=""
              alt="Image"
              class="img-fluid collab"
            />
          </div>
          <div class="col text-center mb-5 partner">
            <img
              src="./image/png/partner-5.png"
              alt=""
              alt="Image"
              class="img-fluid collab"
            />
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-32892 pb-0">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md pr-md-5 mb-4 mb-md-0 foo">
              <h3>Educare International School Academy</h3>
              <p class="mb-4">Contact Information</p>
              <ul class="list-unstyled quick-info mb-4">
                <li>
                  <a href="#" class=""
                    ><span class="icon icon-phone"></span> +95 9742110221, 01
                    211 4321</a
                  >
                </li>
                <li>
                  <a href="#" class=""
                    ><span class="icon icon-envelope"></span>
                    info@educaremm.com</a
                  >
                </li>
                <li>
                  <a href="#" class=""
                    ><span class="icon icon-home"> </span> No ( 3 ), Chan Mya
                    Yate Mon Street, Bahan Township, Yangon, Myanmar</a
                  >
                </li>
                <li>
                  <div class="justify-content-end">
                    <a
                      href="www.faccebook.com"
                      class="fa fa-facebook"
                      title="facebook"
                    ></a>
                    <a
                      href="www.twitter.com"
                      class="fa fa-twitter"
                      title="twitter"
                    ></a>
                    <a
                      href="www.youtube.com"
                      class="fa fa-youtube"
                      title="Youtube"
                    ></a>
                    <a
                      href="www.Instagram.com"
                      class="fa fa-instagram"
                      title="Instagram"
                    ></a>
                  </div>
                </li>
              </ul>

              <form action="#" class="subscribe">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter your e-mail"
                />
                <input type="submit" class="btn btn-submit" value="Send" />
              </form>
            </div>

            <div class="col-md mb-4 mb-md-0 foo">
              <h3>Related Topics</h3>
              <ul class="list-unstyled tweets">
                <li class="topics">
                  <a href="#"><h5>The Pros and Cons of E-Learning</h5></a>
                </li>
                <li class="topics">
                  <a href="#"> <h5>Tips for your Children' Learning</h5></a>
                </li>
                <li class="topics">
                  <a href="#">
                    <h5>How to encourage the interest of a child</h5></a
                  >
                </li>
              </ul>
            </div>

            <div class="col-md-3 mb-4 mb-md-0 foo">
              <h3>Let's Find Talent.</h3>
              <div class="row gallery">
                <div class="col-6">
                  <a href="#"
                    ><img
                      src="https://images.unsplash.com/photo-1453749024858-4bca89bd9edc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=820&q=80"
                      alt="Image"
                      class="img-fluid"
                  /></a>
                  <a href="#"
                    ><img
                      src="https://images.unsplash.com/photo-1541692641319-981cc79ee10a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                      alt="Image"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="col-6">
                  <a href="#"
                    ><img
                      src="https://images.unsplash.com/photo-1606092195730-5d7b9af1efc5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                      alt="Image"
                      class="img-fluid"
                  /></a>
                  <a href="#"
                    ><img
                      src="https://images.unsplash.com/photo-1526270524890-379ff8cec5d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                      alt="Image"
                      class="img-fluid"
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/about.js"></script>
  </body>
</html>
