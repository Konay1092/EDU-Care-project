<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width='device-width', initial-scale=1.0" />
    <title>Courses</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
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

    <link rel="stylesheet" href="./assets/css/animate.css" />
    <link rel="stylesheet" href="./assets/css/courses.css" />
    
    <style>
      .hv:hover {
        border: 1px solid;
        border-radius: 10px;
        background-color: aqua;
      }
    </style>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light opacity-75 fixed-top"
    >
      <div class="container-fluid">
        <img
          class="navbar-brand"
          src="assets/images/logo.png"
          style="width: 60px"
        />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item hv">
              <a class="nav-link active" aria-current="page" href="/index.php"
                >Home</a
              >
            </li>
            <li class="nav-item hv">
              <a class="nav-link" aria-current="page" href="about.php"
                >About Us</a
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
                  <!-- <a class="dropdown-item hv" href="#3courses.html"
                    >Summer Programs</a
                  > -->
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
            <li class="nav-item hv">
              <a class="nav-link" aria-current="page" href="/Activities.php"
                >Activites</a
              >
            </li>
            <li class="nav-item hv">
              <a class="nav-link" aria-current="page" href="/Contact Us.php"
                >Contact Us</a
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
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img
              src="./image/illustrations/undraw_back_to_school_inwc.svg"
              alt=""
              class="w-100"
            />
          </div>
          <div class="col-lg-4">
            <div class="front-text">
              <h1>It's time to back to school.</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-5 p-5" id="section1">
      <div class="container">
        <div class="three text-center mb-5">
          <h1>We Are Learning here...</h1>
        </div>
        <div class="three-services motionslide">
          <div class="row">
            <div class="card hell col-md-4 text-center">
              <img
                src="./image/slide/1ori.png"
                class="card-img-top p-4 mb-3"
                alt=""
                style="width: 50%"
              />
              <div class="card-body three-text mb-5">
                <h1>Primary</h1>
                <p>Primary plan is between grade-1 to grade-6 students.</p>
                <a href="#" onclick="show('Section1');"
                  ><button class="sub-div">Details</button></a
                >
              </div>
            </div>
            <div class="card hell col-md-4 text-center">
              <img
                src="./image/slide/2ori.jpg"
                class="card-img-top p-4 mb-5"
                alt=""
                style="width: 50%"
              />
              <div class="card-body three-text mb-5">
                <h1>Secondary</h1>
                <p>Secondary plan is between grade-7 and grade-12.</p>
                <a href="#" onclick="show('Section2');"
                  ><button class="sub-div">Details</button></a
                >
              </div>
            </div>
            <div class="card hell col-md-4 text-center">
              <img
                src="./image/slide/4.png"
                class="card-img-top p-4 mb-3"
                alt=""
                style="width: 50%"
              />
              <div class="card-body three-text mb-5">
                <h1>Summer Programs</h1>
                <p>Summer program is knowledge for students.</p>
                <a href="#" onclick="show('Section3');"
                  ><button class="sub-div">Details</button></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <div>
        <a href="#" onclick="show('Section1');">Section1</a>
        <a href="#" onclick="show('Section2');">Section2</a>
        <a href="#" onclick="show('Section3');">Section3</a>
     </div> -->

    <section class="pb-5 four" id="Section1" style="display: none">
      <div class="container">
        <div class="row m-5 four-text">
          <div class="col-sm-6 pt-5 mb-5 mb-lg-0 text-center">
            <h1 class="cr">Primary</h1>
            <h1 class=" ">Choose your Classes!</h1>
          </div>
          <div class="col-sm-6 mb-5 mb-lg-0 pt-5 text-center">
            <h3 class="">
              You and Your children are warmly welcomed by our Education
              Consultant
            </h3>
          </div>
        </div>

        <div class="row align-items-center my-5 mt-5">
          <div class="col-md-4 pri p-5 fadein">
            <h2 id="1">Grade 1</h2>
            <p>For Grade 1 students .</p>
            <span style="font-size: 20px; padding-right: 50px">1 year </span>
          </div>
          <div class="col-md-4 p-5 pri fadein" style="align-items: center">
            <h2>Grade 2</h2>
            <p>for Grade 2 students.</p>
            <span style="font-size: 20px; padding-right: 50px">1 year </span>
          </div>
          <div class="fadein col-md-4 p-5 pri" style="align-items: center">
            <h2>Grade 3</h2>
            <p>for Grade 3 students.</p>
            <span style="font-size: 20px; padding-right: 50px">1 year </span>
          </div>
          <div class="fadein col-md-4 pri p-5" style="align-items: center">
            <h2>Grade 4</h2>
            <p>for Grade 4 students.</p>
            <span style="font-size: 20px; padding-right: 50px">1 year </span>
          </div>
          <div class="fadein col-md-4 p-5 pri" style="align-items: center">
            <h2>Grade 5</h2>
            <p>for Grade 5 students.</p>
            <span style="font-size: 20px; padding-right: 50px">1 year </span>
          </div>
          <div class="fadein col-md-4 p-5 pri" style="align-items: center">
            <h2>Grade 6</h2>
            <p>for Grade 6 students.</p>
            <span style="font-size: 20px; padding-right: 50px">1 year </span>
          </div>
        </div>
      </div>
    </section>

    <section
      id="Section2"
      style="display: none; background-color: #f59723; color: white"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 sec-img fadein">
            <img
              src="https://images.unsplash.com/photo-1570616969692-54d6ba3d0397?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=822&q=80"
              alt=""
            />
            <div class="mt-5">
              <h2
                class="mb-4"
                style="
                  font-size: 80px;
                  font-style: Italic;
                  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
                    sans-serif;
                "
              >
                Secondary
              </h2>
              <p>
                2 Levels of Secondary Schools: Loweer Secondary school & Upper
                Secondary School
              </p>
            </div>
          </div>
          <div class="col-lg-6 sec-text fadein">
            <div class="text-center">
              <h2 class="cr">Lower Secondary Courses</h2>
            </div>
            <div class="row">
              <div class="col-md-6 pri">
                <div class="text-center">
                  <div class="mt-3">
                    <h3 class=" " id="2">Grade 7</h3>

                    <p>for Grade 7 students.</p>
                    <span style="font-size: 20px; padding-right: 50px"
                      >1 year
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 pri">
                <div class="text-center">
                  <div class="mt-3">
                    <h3 class=" ">Grade 8</h3>
                    <p>for Grade 8 students.</p>
                    <span style="font-size: 20px; padding-right: 50px"
                      >1 year
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 pri">
                <div class="text-center">
                  <div class="mt-3">
                    <h3 class=" ">Grade 9</h3>
                    <p>for Grade 9 students.</p>
                    <span style="font-size: 20px; padding-right: 50px"
                      >1 year
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 pri">
                <div class="text-center">
                  <div class="mt-3">
                    <h3 class=" ">Grade 10</h3>
                    <p>for Grade 10 students.</p>
                    <span style="font-size: 20px; padding-right: 50px"
                      >1 year
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center fadein">
          <h2 class="cr">Upper Secondary Courses</h2>
          <p>
            These Courses are specialized by the students who are preparing for
            Universities Entrance
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 pri">
            <div class="text-center">
              <div class="mt-3">
                <h3 class=" ">Grade 11</h3>
                <p>for Grade 11 students.</p>
                <span style="font-size: 20px; padding-right: 50px"
                  >1 year
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 pri">
            <div class="text-center">
              <div class="mt-3">
                <h3 class=" ">Grade 12</h3>
                <p>for Grade 12 students.</p>
                <span style="font-size: 20px; padding-right: 50px"
                  >1 year
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="Section3" class="summer-section" style="display: none">
      <div class="container">
        <div class="summer text-center mb-5">
          <h1 id="3">Let's rock in Summer!</h1>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5 fadein">
            <a href=""
              ><img
                src="./image/girlbiz-tips-0zPHSdHAwG4-unsplash.jpg"
                alt="Image"
                class="img-fluid rounded mb-4"
            /></a>
            <h3>
              <a href="" class="text-black"
                >7 Factors for choosing summer programs</a
              >
            </h3>
            <div>
              April 15, 2019 <span class="mx-2">|</span>
              <a href="#">2 Comments</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 fadein">
            <a href=""
              ><img
                src="./image/slide2.jpg"
                alt="Image"
                class="img-fluid rounded mb-4"
            /></a>
            <h3>
              <a href="" class="text-black"
                >7 Factors for choosing summer programs</a
              >
            </h3>
            <div>
              April 15, 2019 <span class="mx-2">|</span>
              <a href="#">2 Comments</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 fadein">
            <a href=""
              ><img
                src="./image/slide3.jpg"
                alt="Image"
                class="img-fluid rounded mb-4"
            /></a>
            <h3>
              <a href="" class="text-black"
                >7 Factors for choosing summer programs</a
              >
            </h3>
            <div>
              April 15, 2019 <span class="mx-2">|</span>
              <a href="#">2 Comments</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 fadein">
            <a href=""
              ><img
                src="./image/slide4.jpg"
                alt="Image"
                class="img-fluid rounded mb-4"
            /></a>
            <h3>
              <a href="" class="text-black"
                >7 Factors for choosing summer programs</a
              >
            </h3>
            <div>
              April 15, 2019 <span class="mx-2">|</span>
              <a href="#">2 Comments</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 fadein">
            <a href=""
              ><img
                src="./image/slide5.jpg"
                alt="Image"
                class="img-fluid rounded mb-4"
            /></a>
            <h3>
              <a href="" class="text-black"
                >7 Factors for choosing summer programs</a
              >
            </h3>
            <div>
              April 15, 2019 <span class="mx-2">|</span>
              <a href="#">2 Comments</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 fadein">
            <a href=""
              ><img
                src="./image/girlbiz-tips-0zPHSdHAwG4-unsplash.jpg"
                alt="Image"
                class="img-fluid rounded mb-4"
            /></a>
            <h3>
              <a href="" class="text-black"
                >7 Factors for choosing summer programs</a
              >
            </h3>
            <div>
              April 15, 2019 <span class="mx-2">|</span>
              <a href="#">2 Comments</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="footer-32892 pb-0">
      <div class="site-section">
        <div class="container fadein">
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
                    ><span class="icon icon-home"> </span> : No ( 3 ), Chan Mya
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

            <div class="col-md-4 mb-4 mb-md-0 foo">
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

    <script type="text/javascript">
      var divs = ["Section1", "Section2", "Section3", "services"];
      var visibleId = null;
      function show(id) {
        if (visibleId !== id) {
          visibleId = id;
        }
        hide();
      }
      function hide() {
        var div, i, id;
        for (i = 0; i < divs.length; i++) {
          id = divs[i];
          div = document.getElementById(id);
          if (visibleId === id) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }
    </script>

    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/courses.js"></script>
  </body>
</html>
