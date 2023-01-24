<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio Website</title>

    <!-- Fontawesome links -->
    <script src="https://kit.fontawesome.com/12a463c13f.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('profile/Portfolio - Copy (2)/style.css') }}">
</head>

<body>
    <div id="preloader">
        <h1 class="loadertext">emnt.dev</h1>
        <img class="loader"
            src="https://img.pikbest.com/png-images/20190918/cartoon-snail-loading-loading-gif-animation_2734139.png!w10240"
            alt="">
    </div>
    <!-- navbar start -->

    <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
        <div class="container">
            <div class="content px-5">
                <a class="navbar-brand ttext logo " href="#home">EMNT/></a>
                <a class="navbar-brand ttext logo" href="#home">EMNT/></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto px-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link ttext " aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ttext" href="#serviceSkill">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ttext" href="#project">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ttext" href="#polofilo">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ttext" href="#contact">Contact</a>
                    </li>
                </ul>
                <input class="btn btn-outline-dark text-white" id="toggleBtn" type="button" value="light/night">
            </div>

        </div>
    </nav>

    <!-- navbar end -->

    <!-- Dashboard Section start-->

    <section class="home" id="home">
        <div class="container-lg">
            <div class="row min-wh-75  align-items-center aligim-content-center">
                <div class="col-md-6 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('profile/Portfolio - Copy (2)/image/laptop/IMG_20230123_105200.jpg') }}"
                            class="rounded-circle mw-50 py-5" width="50%" height="40%" alt="">
                    </div>
                </div>
                <div class="col-md-6 order-md-first mt-5 p-5">
                    <div class="my-profile">
                        <div class="main">
                            <h1>Hello, I am
                                <div class="roller">
                                    <span id="rolltext">Web developer<br />
                                        Freelancer<br />
                                        <!-- <br /> -->
                                        <span id="spare-time">Thanks you for visiting</span><br />
                                </div>
                            </h1>

                        </div>
                        <p> my name is Ei Myat Noe Thu /></p>
                        <p class="mt-4">
                            I create things for the web. I'm a web developer with a focus on creating (and occasionally
                            designing)
                            remarkable digital experiences.
                        </p>
                        <a href="#polofilo" class="btn btn-outline-dark text-white mt-3 p-3">Mywork</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- home section end -->

    <!--Start service and skills -->

    <div class="skill py-5" id="serviceSkill">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title mb-5 text-center fw-bold">
                        <h2>About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h5 class=" mb-3">who I Am?</h5>
                    </div>
                    <p class="text">
                        I'm Ei Myat Noe Thu, a talented junior web developer who is 21 years old. I also have experience
                        history going
                        back more
                        than a year.
                    </p>
                    <p class="text">
                        I am a citizen of Hpan, Kayin State, Myanmar. My highest-level university experience occurred in
                        my
                        second
                        year at the
                        University of Computer Studies.
                        I'm currently pursuing an Associate's degree at the University of the People.
                    </p>
                    <p class="text">
                        I'm passionate about using the variety of my experiences to solve complex issues and design
                        engaging
                        experiences. I
                        improved my web development abilities.
                    </p>
                    <div class="row text-uppercase text-center my-3">
                        <div class="col-sm-4">
                            <div class="item">
                                <h4 class="fs-1 fw-bold">100</h4>
                                <p class="text">Project completed</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="item">
                                <h4 class="fs-1 fw-bold">90+</h4>
                                <p class="text">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="item">
                                <h4 class="fs-1 fw-bold">95+</h4>
                                <p class="text">Posite Reviews</p>
                            </div>
                        </div>
                    </div>
                    <!-- contact btn link staart-->
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="{{ asset('./image/Ei_Myat Noe Thu_CoverLetter_24-01-2023-15-19-52.pdf') }}"
                                class="btn btn-outline-dark text-white me-4 px-3" download>My Cv
                                Form</a>
                            <div class="social-link ">
                                <a href="#"><i class="fa-brands me-2 h3  fa-facebook-f text-dark"></i></a>
                                <a href="#"><i class="fa-brands me-2 h3 fa-twitter text-dark"></i></a>
                                <a href="#"><i class="fa-brands me-2 h3 fa-instagram text-dark"></i></a>
                                <a href="#"><i class="fa-brands  me-2 h3 fa-viber text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- contact end -->
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h5 class=" mb-3">what I have?</h5>
                    </div>
                    <div class="skill m-4 p-3">
                        <div class="row">
                            <div class="col-9">
                                <h6 class="fs- mt-4 progresstext">HTML5 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <div class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                                <h6 class="fs- mt-4 progresstext">CSS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    <div class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                                <h6 class="fs- mt-4 progresstext">Javascript &nbsp; &nbsp; &nbsp;
                                    <div class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                                <h6 class="fs- mt-4 progresstext">Jquery &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<div
                                        class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                                <h6 class="fs- mt-4 progresstext">Bootstrap &nbsp; &nbsp; &nbsp; <div
                                        class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                                <h6 class="fs- mt-4 progresstext">Vue &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    <div class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                                <h6 class="fs- mt-4 progresstext">Laravel&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <div class="text-danger" style="display: inline;">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- close service and skills-->

    <!--  -->

    <!-- project -->
    <div class="project" id="project">
        <div class="container-lg p-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title mb-5 text-center fw-bold">
                        <h2>What I Do ? /></h2>
                    </div>
                </div>
            </div>

            <!-- service start-->
            <div class="row text-center" id="proj">
                <div class="col-lg-6 mb-4">
                    <div class="project-item bg-white p-4 shadow-sm rounded">
                        <div class="icon">
                            <i class="fa-solid fa-code fs-2 "></i>
                        </div>
                        <h3 class="fs-5 py-2">Web development</h3>
                        <p class="text-muted">I started study programming(web development) since July,2022. I'm Vue
                            developer(frontend).I have hand-on experience in working with semantic Html.Css,Bootstrap,
                            Jabascript,
                            Vue CLI, Vue2 Vue3 VueX, Restful Api, laravel etc, which are important for developers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="project-item bg-white p-4 shadow-sm rounded">
                        <div class="icon">
                            <i class="fa-regular fa-lightbulb fs-2 text-danger"></i>
                        </div>
                        <h3 class="fs-5 py-2">Creative idea</h3>
                        <p class="text-muted">
                            Obviously, there are a lot more things to think about while developing a website, but these
                            6
                            ideas are a
                            wonderful
                            place to start.
                        <p>1.The objective
                            2.Find examples
                            3.Content
                            4.Branding
                            5.Colour scheme
                            6.Images and video
                        </p>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- service end -->

    <!-- last work start -->
    <div class="polofilo" id="polofilo">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-5">
                        <h2 class="fw-bold">Latest Project</h2>
                    </div>
                </div>
            </div>
            <div class="row p-5 xl">
                <div class="col-lg-4  col-md-6">
                    <div class="items">
                        <img class="w-100 img-thumbnail shadow-sm"
                            src="https://www.datapine.com/blog/wp-content/uploads/2021/08/project-controlling-dashboard.png">
                        <h3 class="fs-5 my-2 pj">Admin Dashboard</h3>
                        <p class="">
                            <a href="" class="pj text-decoration-none">Live Demo</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6">
                    <div class="items">
                        <img class="w-100 img-thumbnail shadow-sm"
                            src="https://www.datapine.com/blog/wp-content/uploads/2021/08/project-controlling-dashboard.png">
                        <h3 class="fs-5 my-2 pj">Admin Dashboard</h3>
                        <p class="">
                            <a href="" class=" pj text-decoration-none">Live Demo</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="items">
                        <img class="w-100 img-thumbnail shadow-sm"
                            src="https://www.datapine.com/blog/wp-content/uploads/2021/08/project-controlling-dashboard.png">
                        <h3 class="fs-5 my-2 pj">Admin Dashboard</h3>
                        <p class="">
                            <a href="" class=" pj text-decoration-none">Live Demo</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- last work end -->

    <!-- freelancer section start -->
    <section class="freelancer p-3" id="freelancer">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="text-center col-lg-8 tex p-3">
                    <p class="fs-1 text-white">Do you have any project</p>
                    <h2 class="pj fs-4">Im available for you</h2>
                    <a href="#" class="btn btn-outline-light">contact me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- freelancer section close -->



    <!-- contact open -->

    <section class="contact" id="contact">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-5">
                        <h2 class="fw-bold mt-4">If you want contact me,follow this way</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- left start -->
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="content-container">
                        <div class="contact-item d-flex mb-3">
                            <div class="icon text fs-4">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="text ms-3">
                                <div class="fs-5">Phone</div>
                                <div class="pj">09788962931</div>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon text fs-4">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="text ms-3">
                                <div class="fs-5">Email</div>
                                <div class="pj">eimyatnoethu1003@gmail.com</div>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon text fs-4">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="pj ms-3">
                                <div class="fs-5">Address</div>
                                <div class="text-muted">Hpa-an</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left end -->

                <!-- right start -->
                <div class="col-md-5 shadow-lg m-3">
                    <div class="contact-form d-flex justify-content-center ">
                        <form action="{{ route('home#page') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="your Name"
                                        class="form-control form-control-lg border-0 fs-6" name="clientname">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <input type="email" placeholder="your Mail"
                                        class="form-control form-control-lg border-0 fs-6" name="mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-4">
                                    <input type="text" placeholder="Subject"
                                        class="form-control form-control-lg border-0 fs-6" name="subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-4">
                                    <textarea id="" cols="30" rows="10" name="clientmessage" placeholder="Your message"
                                        class="form-control form-control-lg border-0 fs-6"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-4">
                                    <input class="btn btn-outline-dark text-white p-2" type="submit"
                                        value="Send Message">
                                    <i class="fa-solid fa-paper-plane ms-2"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- right end -->
            </div>
        </div>
    </section>

    <!-- contact close -->

    <!-- footer start -->
    <div class="footer border-top bg-warning">
        <div class="container-lg p-1">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text text-center m-0">It's not a bug; it's an undocumented feature />Make it work,make it
                        fast.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
</body>
<script src="{{ asset('profile/Portfolio - Copy (2)/app.js') }}"></script>

</html>
