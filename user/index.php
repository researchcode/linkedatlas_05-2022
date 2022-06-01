<?php
session_start();
unset($_SESSION['admin_admin']);
$_SESSION['user_user'] = 1;

include("../basics/header.php");
?>





    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <hr />
            <section id="patlasco">
                <div class="row">
                    <div class="col-md-7 gx-5 mb-4">
                        <div class="shadow-2-strong" data-mdb-ripple-color="light" id="map_container">
                            <div id="map" style="margin-top: 10%;">
                                <button id="refreshButton" onclick="refresh()" class="btn btn-success btn-lg m-2 fa fa-refresh">
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-5 gx-5 mb-4">

                        <!-- Park info Card -->
                        <div id="cards_landscape_wrap-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <img src="../images/map.png" class="img-fluid" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title" id="mapTitle">Select a point on the map</h5>
                                                <p class="card-text" id="mapContent">

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>More photographs</strong></h4>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="mb-5">
                <h4 class="mb-5 text-center">
                    <strong>Facilis consequatur eligendi</strong>
                </h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked />
                                <label class="form-check-label" for="form2Example3">
                                    Subscribe to our newsletter
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
        </div>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
                Learn Bootstrap 5
            </a>
            <a role="button" class="btn btn-primary btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank">
                Download MDB UI KIT
            </a>
        </div>

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow MDB on social media</p>
            <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->


    <script>
        Object.defineProperty(navigator, 'userAgent', {
            get: function() {
                return 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36';
            }
        });
        setMap();

        function setMap() {
            var greenIcon = L.icon({
                iconUrl: '../img/leaf-green.png',
                shadowUrl: '../img/leaf-shadow.png',

                iconSize: [85, 80], // size of the icon
                shadowSize: [50, 64], // size of the shadow
                iconAnchor: [45, 80], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62], // the same for the shadow
                popupAnchor: [-5, -63] // point from which the popup should open relative to the iconAnchor
            });

            var data = [{
                "loc": [12.1667, -71.3333],
                "title": 'Serranía de Macuira </br><button class="btn btn-success btn-xs" onclick="showInfo(\'Serranía de la Macuira\',\'La Serranía de la Macuira está en la Guajira \') " href="#patlasco" data-mdb-toggle="collapse" data-mdb-target = "#collapseWidthExample" aria-expanded = "false" aria-controls = "collapseWidthExample" > Mostrar información </button>',
                "icon": greenIcon,
                "alt": 'Serranía de Macuira'
            }];

            var map = L.map('map').
            setView([4.40, -72.9301367],
                6);


            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                maxZoom: 18
            }).addTo(map);

            L.control.scale().addTo(map);




            map.addLayer(new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')); //base layer

            var markersLayer = new L.featureGroup(); //layer contain searched elements



            var controlSearch = new L.Control.Search({
                position: 'topleft',
                layer: markersLayer,
                propertyName: 'alt',
                initial: false,
                zoom: 12,
                marker: false
            });

            map.addControl(controlSearch);


            ////////////populate map with markers from sample data
            for (i in data) {
                var alt = data[i].alt, //value searched                
                    loc = data[i].loc, //position found
                    marker = new L.Marker(new L.latLng(loc), {
                        title: data[i].title,
                        alt: alt,
                        icon: data[i].icon
                    }); //se property searched
                marker.bindPopup(data[i].title);
                marker.on('click', function(e) {
                    map.setView(e.latlng, 11);
                });
                markersLayer.addLayer(marker);
            }



            //map.fitBounds(markersLayer.getBounds());




            return map;
        }

        function showInfo(title, info) {
            document.getElementById("mapTitle").innerHTML = title;
            document.getElementById("mapContent").innerHTML = info;
        }

        function refresh() {
            map.remove();
            //console.log("MAPA: " + mapa.outerHTML);
            var div = document.createElement("div");
            div.setAttribute("id", "map");
            div.setAttribute("style", "margin-top: 10%;");
            var boton = document.createElement("button");
            boton.setAttribute("id", "refreshButton");
            boton.setAttribute("onclick", "refresh()");
            boton.setAttribute("data-mdb-toggle", "collapse");
            boton.setAttribute("data-mdb-target", "#collapseWidthExample");
            boton.setAttribute("aria-expanded", "false");
            boton.setAttribute("aria-controls", "collapseWidthExample");
            boton.setAttribute("class", "btn btn-success btn-lg m-2 fa fa-refresh");
            div.appendChild(boton);
            document.getElementById('map_container').appendChild(div);
            document.getElementById("mapTitle").innerHTML = "Select a point on the map";
            document.getElementById("mapContent").innerHTML = "";
            var mapa = setMap();
            mapa.setView([4.40, -72.9301367], 6);
        }
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

</body>

</html>