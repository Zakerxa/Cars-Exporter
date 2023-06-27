<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="image/logoT.png" type="image/x-icon">
    <title>Specifications</title>
</head>

<body>

    <?php include('./components/loading.php') ?>


    <div id="specifications" style="background-color: #fff;">

        <div class="d-none d-md-block" style="min-height: 10px;;background-color: #fff;"></div>
        <!-- Nav Bar Desktop -->
        <nav class="navbar d-block navbar-expand-md navbar-dark primaryColor">
            <div class="container-fluid">

                <div @click="navigatorClick()" :style="navTran" :class="navIcon" style="font-size: 25px;" class="navbar-toggler border-0 p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-small-device" aria-controls="offcanvasWithBackdrop">
                </div>

                <span class="text-light d-md-none fw-bold">THIDA AUTO CENTER </span>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="m-auto"></ul>
                    <ul class="navbar-nav me-auto mb-lg-0  m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="text-light m-2">|</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us <span class="text-light m-2">|</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <span class="text-light fw-bold">THIDA AUTO CENTER </span>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- NavBar Mobile -->
        <div class="offcanvas offcanvas-top h-100 bg-light" style="z-index: 19999;top: 49px;" tabindex="-1" id="nav-small-device" aria-labelledby="offcanvasWithBackdropLabel">
            <div class="offcanvas-body">
                <div class="row pt-5 justify-content-center">
                    <div class="col-12 text-center pt-2">
                        <li class="list-unstyled border-bottom pb-4">
                            <a class="fw-bold text-dark text-decoration-none" aria-current="page" href="index.html">
                                <h4>Home</h4>
                            </a>
                        </li>
                        <li class="list-unstyled border-bottom pt-4 pb-4">
                            <a class="fw-bold text-dark text-decoration-none" href="about.html">
                                <h4>About Us</h4>
                            </a>
                        </li>
                        <li class="list-unstyled border-bottom pt-4 pb-4">
                            <a class="fw-bold text-dark text-decoration-none" href="contact.html">
                                <h4>Contact Us</h4>
                            </a>
                        </li>
                    </div>
                    <div class="col-12 text-center position-fixed" style="bottom: 0;">
                        <img class="pt-4" src="image/logoT.png" width="100 " alt=" ">
                        <p class="fw-bold">THIDA AUTO CENTER </p>
                        <p>Prestige Car Sourcing Specialist and Export Worldwide</p>
                        <div class="col-12 small">
                            <hr>
                            <p>Read Our <a class="text-decoration-none" href="privacy.html">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Hero -->
        <div class="container-fluid">


            <div class="row justify-content-center startHero">

                <!-- Mobile View -->
                <div class="col-12 col-md-9 d-md-none order-md-1 text-end p-0">
                    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                        <!-- <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div> -->
                        <div class="carousel-inner position-relative">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="carousel/Addictive-Desert-Designs-F-150-Raptor.jpg" class="d-block w-100 carouselImg" alt="...">

                                <div class="carousel-caption d-md-block upper">
                                    <div class="overlaytext position-relative">
                                        <h5 class="d-none d-md-block pt-2 text-start">Exceptional Cars, Outstanding Service.</h5>
                                        <h6 class="d-none fw-normal d-md-block" style="padding-left: 50px;">Your One Stop Complete Import Car Service.</h6>
                                        <p class="d-block d-md-none fw-bold mb-0 text-start" style="font-size: 11px;">Exceptional Cars, Outstanding Service.</p>
                                        <p class="d-block d-md-none fw-bold mb-0" style="font-size: 10px;">Your One Stop Complete Import Car Service</p>
                                    </div>
                                </div>

                                <div class="carousel-caption d-block">
                                    <div class="position-relative">
                                        <h6>Addictive-Desert-Designs-F-150-Raptor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2200">
                                <img src="carousel/2023-Toyota-Tundra-TRD-Pro-release-date.jpg" class="d-block w-100 carouselImg" alt="...">

                                <div class="carousel-caption d-md-block upper">
                                    <div class="overlaytext position-relative">
                                        <h5 class="d-none d-md-block pt-2 text-start">Exceptional Cars, Outstanding Service.</h5>
                                        <h6 class="d-none fw-normal d-md-block" style="padding-left: 50px;">Your One Stop Complete Import Car Service.</h6>
                                        <p class="d-block d-md-none fw-bold mb-0 text-start" style="font-size: 11px;">Exceptional Cars, Outstanding Service.</p>
                                        <p class="d-block d-md-none fw-bold mb-0" style="font-size: 10px;">Your One Stop Complete Import Car Service</p>
                                    </div>
                                </div>

                                <div class="carousel-caption d-md-block ">
                                    <h6>Toyota-Tundra-TRD-Pro-Release</h6>
                                </div>

                            </div>
                            <div class="carousel-item" data-bs-interval="2300">
                                <img src="carousel/z8a9rangelrcpzprts.jpg" class="d-block w-100 carouselImg" alt="...">
                                <div class="carousel-caption d-md-block upper">
                                    <div class="overlaytext position-relative">
                                        <h5 class="d-none d-md-block pt-2 text-start">Exceptional Cars, Outstanding Service.</h5>
                                        <h6 class="d-none fw-normal d-md-block" style="padding-left: 50px;">Your One Stop Complete Import Car Service.</h6>
                                        <p class="d-block d-md-none fw-bold mb-0 text-start" style="font-size: 11px;">Exceptional Cars, Outstanding Service.</p>
                                        <p class="d-block d-md-none fw-bold mb-0" style="font-size: 10px;">Your One Stop Complete Import Car Service</p>
                                    </div>
                                </div>
                                <div class="carousel-caption d-md-block">
                                    <h6>2022 Range Rover Gold</h6>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2400">
                                <img src="carousel/2021-Cadillac-Escalade-for-Russia-Exterior-003-front-three-quarter-Escalade-Premium-Luxury.jpg" class="d-block w-100 carouselImg" alt="...">

                                <div class="carousel-caption d-md-block upper">
                                    <div class="overlaytext position-relative">
                                        <h5 class="d-none d-md-block pt-2 text-start">Exceptional Cars, Outstanding Service.</h5>
                                        <h6 class="d-none fw-normal d-md-block" style="padding-left: 50px;">Your One Stop Complete Import Car Service.</h6>
                                        <p class="d-block d-md-none fw-bold mb-0 text-start" style="font-size: 11px;">Exceptional Cars, Outstanding Service.</p>
                                        <p class="d-block d-md-none fw-bold mb-0" style="font-size: 10px;">Your One Stop Complete Import Car Service</p>
                                    </div>
                                </div>
                                <div class="carousel-caption d-md-block">
                                    <h6>2022 Cadillac Escalade</h6>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="carousel/JDPA_2021 Ford Bronco 4-Door.jpg" class="d-block w-100 carouselImg" alt="...">

                                <div class="carousel-caption d-md-block upper">
                                    <div class="overlaytext position-relative">
                                        <h5 class="d-none d-md-block pt-2 text-start">Exceptional Cars, Outstanding Service.</h5>
                                        <h6 class="d-none fw-normal d-md-block" style="padding-left: 50px;">Your One Stop Complete Import Car Service.</h6>
                                        <p class="d-block d-md-none fw-bold mb-0 text-start" style="font-size: 11px;">Exceptional Cars, Outstanding Service.</p>
                                        <p class="d-block d-md-none fw-bold mb-0" style="font-size: 10px;">Your One Stop Complete Import Car Service</p>
                                    </div>
                                </div>
                                <div class="carousel-caption d-md-block">
                                    <h5 class="d-none d-md-block"></h5>
                                </div>
                            </div>
                        </div>
                        <!-- Left Arrow -->
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button> -->
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Mobile & Desktop View -->
                <div class="col-12 col-md-9 order-md-1">
                    <p class="pt-3"><a class="text-decoration-none text-dark" href="index.html">Home</a> / Specifications</p>
                    <hr>
                    <h3 class="text-start fw-bold pt-3"> {{specifications.name}} </h3>

                    <div v-if="fetchLoading == 'show'" class="row d-flex align-items-center" style="height:80vh;">
                        <div class="col-12 text-center">
                            <img src="image/loading.webp" width="100" alt=" ">
                        </div>
                    </div>

                    <div v-else-if="fetchLoading == '404'" class="row" style="height:50vh;">
                        <div class="text-center pt-5 mt-5">
                            <h1 class="text-muted fa fa-exclamation-triangle"> 4 0 4 Error</h1>
                            <p class="text-muted pt-3">The content that you find is not exist.</p>
                        </div>
                    </div>

                    <div v-else class="row justify-content-start pt-4 pb-3 p-0 small">

                        <div class="col-12 col-md-6 text-start">
                            <img :src="images[index]" style="max-height: 400px;" class="w-100" alt="" srcset="">
                            <div class="row p-2">
                                <img class="col-3 p-1" @click="hero(index)" v-for="(img,index) in specifications.images" :src="img" style="height: 120px;" alt="img">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row pt-2 pt-md-0 p-0">
                                <div class="col-5 pt-2 pt-md-0 pb-2 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"> <span class="text-muted"> Condition :</span> {{specifications.type}}</h5>
                                    <p class="d-md-none"> <span class="text-muted"> Condition :</span> {{specifications.type}}</p>
                                </div>
                                <div class="col-7 pt-2 pt-md-0 pb-2 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Year :</span> {{specifications.year}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Year :</span> {{specifications.year}}</p>
                                </div>
                                <div class="col-5 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Make :</span> {{specifications.make}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Make :</span> {{specifications.make}}</p>
                                </div>
                                <div class="col-7 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Model :</span> {{specifications.model}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Model :</span> {{specifications.model}}</p>
                                </div>


                                <div class="col-5 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Fuel :</span> {{specifications.fuel}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Fuel :</span> {{specifications.fuel}}</p>
                                </div>


                                <div class="col-7 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Colour :</span> {{specifications.colour}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Colour :</span> {{specifications.colour}}</p>
                                </div>
                                <div class="col-5 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"> <span class="text-muted">Trim :</span> {{specifications.trim}}</h5>
                                    <p class="d-md-none"> <span class="text-muted">Trim :</span> {{specifications.trim}}</p>
                                </div>
                                <div class="col-7 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"> <span class="text-muted">Body : </span> <span v-if="specifications.body == null">Other</span> <span v-else> {{specifications.body}} </span></h5>
                                    <p class="d-md-none"> <span class="text-muted">Body : </span><span v-if="specifications.body == null">Other</span> <span v-else> {{specifications.body}} </span></p>
                                </div>
                                <div class="col-5 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Engine :</span> {{specifications.engine}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Engine :</span> {{specifications.engine}}</p>
                                </div>

                                <div class="col-7 pt-2 pb-2 pt-md-4 pb-md-4 fw-bold">
                                    <h5 class="d-none d-md-block"><span class="text-muted">Transmission :</span> {{specifications.transmission}}</h5>
                                    <p class="d-md-none"><span class="text-muted">Transmission :</span> {{specifications.transmission}}</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-12 pb-3">
                            <hr>
                            <h4>Description</h4>

                            <p class="p-1" style="font-size: 15px;">
                                {{desc}}
                            </p>

                            <hr>
                            <h4>Contact us for more information</h4>

                            <p class="p-1">
                                <i class="fab fa-whatsapp fw-bold"> Whatsapp :</i>
                                <a class="text-decoration-none text-dark" href="https://api.whatsapp.com/send?phone=+1 (703) 869-2117">+1 (703) 869-2117</a>
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Left Side -->
                <div class="col-12 col-md-3 text-center p-0 position-relative" style="z-index: 10001;font-family: Arial, Helvetica, sans-serif; ">
                    <div class="leftside row m-0">
                        <div class="position-relative order-1 order-md-0">
                            <div class="d-none d-md-block">
                                <img class="pt-0 pt-md-4" src="image/logoT.png" width="100 " alt=" ">
                                <p class="fw-bold">THIDA AUTO CENTER </p>
                                <!-- Small device to Desktop View -->
                                <div class="d-none d-sm-block pb-sm-4 pb-md-0">
                                    <p>Prestige Car Sourcing Specialist and Export Worldwide</p>
                                </div>
                                <!-- Only Mobile View -->
                                <p class="d-block d-sm-none mb-0">
                                    Prestige Car Sourcing Specialist and Export Worldwide
                                </p>

                                <hr class="mb-4">
                                <p class="p-0 text-start">
                                    <span class="">THIDA AUTO CENTER</span> is a US based company and under the THIDA CONSULTING GROUP LLC.
                                    <hr>
                                <p class="text-center fw-bold"> Why Choose Us? </p>
                                <p class="text-start">- Our market analysts research the market price and personally handpick every car for you and supply them at the most competitive prices.</p>
                                <p class="text-start"> - To find your perfect car at the best price we source from U.S.A, Canada, Mexico, and Europe.</p>
                                </p>
                                <div class="mb-4 pb-3 pt-3">
                                    <a class="text-decoration-none text-dark" href="about.html">
                                        <button class="border-0 fw-bold text-light primaryColor" style="padding: 8px 15px;border-radius: 5px;box-shadow: 3px 3px 10px #222;">More Information</button>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-12 p-0">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=7480%20Birdwood%20Ave,%20321%20%20McLean,%20VA%2022102&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <?php include('./components/footer.php') ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11 "></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js " crossorigin="anonymous "></script>
    <script>
        window.addEventListener('DOMContentLoaded', loading('block'), false);

        $(document).ready(function() {

            setTimeout(() => loading('none'), 100);

            new Vue({
                el: '#specifications',
                data() {
                    return {
                        navIcon: 'navbar-toggler-icon',
                        navTran: 'transform: rotateZ(0deg);',
                        navCheck: false,
                        fetchLoading: null,
                        make: '',
                        model: '',
                        year: '',
                        specifications: '',
                        images: [],
                        index: 0,
                        desc: ''
                    }
                },
                methods: {
                    navigatorClick() {
                        this.navTran = "transition:transform 0.5s;transform: rotateZ(90deg); "
                        this.navCheck = !this.navCheck;
                        if (this.navCheck) this.navIcon = "btn-close btn-close-white ";
                        else {
                            this.navIcon = "navbar-toggler-icon ";
                            this.navTran = "transition:transform 0.5s; "
                        }
                    },
                    fetchData() {
                        const data = fetch('specifications.json', {
                                method: 'get'
                            })
                            .then(res => res.json());
                        return data;
                    },
                    hero(e) {
                        this.index = e;
                    }
                },
                async mounted() {
                    this.fetchLoading = 'show';
                    var url_string = window.location.href;
                    var url = new URL(url_string);
                    var make = url.searchParams.get("make");
                    var model = url.searchParams.get("model");
                    var year = url.searchParams.get("year");

                    this.make = make;
                    this.model = model;
                    this.year = year;

                    if (make == '' || model == '' || year == '') {
                        location.href = "index.html";
                    } else {
                        const lists = await this.fetchData();

                        const list = lists.find((e) => {
                            if (e.make.toUpperCase() == make.toUpperCase() && e.model.toUpperCase().includes(model.toUpperCase()) && e.year == year) return e;
                        });
                        console.log(list);
                        if (list != undefined) {
                            this.specifications = list;
                            this.images = this.specifications.images;
                            this.desc = this.specifications.desc;
                            let t = this.specifications.desc;
                            console.log(JSON.parse(JSON.stringify(t)))
                            this.fetchLoading = 'stop';
                        } else {
                            this.fetchLoading = '404';
                        }
                    }
                }
            })

        });

        // Get Loading By Id
        function loading(e) {
            document.getElementById('loading').style.display = e;
        }
    </script>
</body>

</html>