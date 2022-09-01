@extends('layouts.app')
@section('content')
    <div class="movie-descript">
        <img src="{{ asset('/img/kungfupanda.jpg') }}" alt="">
        <div class="movie-letter">

            <p><b>Kongfu Panda 3</b></p>
            <i class="bx bxs-calendar"></i>
            <span>05-Aug-2022</span><br>
            <i class="bx bxs-time"></i>
            <span>120 minutes</span><br>
            <i class="bx bx-movie-play"></i>
            <span>Comedy</span><br>
            <i class="bx bxs-megaphone"></i>
            <span>EN/KH</span>
        </div>

    </div>
    <div class="movie-seat">
        <section id="section">
            <div class="container">
                <!-- leftCont -->
                <div class="leftCont">
                    <div class="leftMainCont">
                        <div class="legendContainer">
                            <ul>
                                <li>
                                    <div class="seat legend"></div>
                                    <small>Available</small>
                                </li>
                                <li>
                                    <div class="seatvip legend"></div>
                                    <small>Available</small>
                                </li>
                                <li>
                                    <div class="seat legend selected"></div>
                                    <small>Selected</small>
                                </li>
                                <li>
                                    <div class="seat legend occupied"></div>
                                    <small>Occupied</small>
                                </li>
                            </ul>
                        </div>
                        <!-- seat Container -->
                        <div class="mainSeatCont">
                            <div class="screen">
                                <small>SCREEN</small>
                            </div>
                            <div class="seatCont" id="seatCont">
                                <div class="seatRowCont1 seatRowCont">
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                </div>
                                <div class="seatRowCont2 seatRowCont">
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                </div>
                                <div class="seatRowCont3 seatRowCont">
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                </div>
                                <div class="seatRowCont4 seatRowCont">
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Cont -->
                <div class="rightCont">
                    <div class="confirmCont">
                        <div class="rightTopCont">
                            <!-- moviename -->

                            <div class="movieInfo">
                                <div class="selectMovie">
                                    <label>
                                        <p>Select Your Movie</p>
                                        <select id="selectMovie"></select>
                                    </label>
                                </div>
                                <div class="movieName">
                                    <p>MOVIE NAME</p>
                                    <h1 id="movieName">Tom and Jerry</h1>
                                </div>
                                <div class="moviePrice">
                                    <p>MOVIE PRICE</p>
                                    <h1 id="moviePrice">$ 7</h1>
                                </div>
                                <div class="dateCont">
                                    <p>Date</p>
                                    <p class="dateOn">Wed , 31th march</p>

                                </div>
                            </div>
                        </div>
                        <div class="rightBottomCont">
                            <div class="selectedSeatCont">
                                <p>SELECTED SEATS</p>
                                <div class="selectedSeatsHolder" id="selectedSeatsHolder">
                                    <span class="noSelected">No Seat Selected</span>
                                </div>
                            </div>
                            <!-- Seat number and price -->

                            <div class="numberOfSeatsCont">
                                <div class="numberOfSeatEl">
                                    <p><span id="numberOfSeat">0</span> Seats(s)</p>
                                </div>
                                <div class="priceCont">
                                    <p id="totalPrice">$ 0</p>
                                </div>
                            </div>
                            <!-- button Cont -->

                            <div class="buttonCont">
                                <div class="cancelBtn">
                                    <button id="cancelBtn">Cancel</button>
                                </div>
                                <div class="proceedBtnEl">
                                    <button id="proceedBtn">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            const moviesList = [{
                    movieName: "Tom and Jerry 2021",
                    price: 7
                },
                {
                    movieName: "Master",
                    price: 5
                },
                {
                    movieName: "Justice League",
                    price: 4
                },
                {
                    movieName: "Monster",
                    price: 2
                },
            ];

            const selectMovieEl = document.getElementById("selectMovie");

            const allSeatCont = document.querySelectorAll("#seatCont .seat");

            const selectedSeatsHolderEl = document.getElementById("selectedSeatsHolder");

            const moviePriceEl = document.getElementById("moviePrice");

            const cancelBtnEL = document.getElementById("cancelBtn");

            const proceedBtnEl = document.getElementById("proceedBtn");

            moviesList.forEach((movie) => {
                const optionEl = document.createElement("option");
                optionEl.innerHTML = `${movie.movieName} $${movie.price}`;
                selectMovieEl.appendChild(optionEl);
            });

            let moviePrice = 7;
            let currentMovieName = `Tom and Jerry 2021`;

            selectMovieEl.addEventListener("input", (e) => {
                let movieName = e.target.value.split("");
                let dollarIndex = movieName.indexOf("$");
                let movie = movieName.splice(0, dollarIndex - 1).join("");
                currentMovieName = movie;
                moviePrice = JSON.parse(movieName.splice(2, dollarIndex).join(""));

                updatMovieName(movie, moviePrice);
                updatePrice(moviePrice, takenSeats.length);
            });

            let initialSeatValue = 0;
            allSeatCont.forEach((seat) => {
                const attr = document.createAttribute("data-seatid");
                attr.value = ++initialSeatValue;
                seat.setAttributeNode(attr);
            });

            const seatContEl = document.querySelectorAll("#seatCont .seat:not(.occupied)");

            let takenSeats = [];

            seatContEl.forEach((seat) => {
                seat.addEventListener("click", (e) => {
                    let isSelected = seat.classList.contains("selected");

                    let seatId = JSON.parse(seat.dataset.seatid);

                    if (!isSelected) {
                        seat.classList.add("selected");
                        takenSeats.push(seatId);
                        takenSeats = [...new Set(takenSeats)];
                    } else if (isSelected) {
                        seat.classList.remove("selected");

                        takenSeats = takenSeats.filter((seat) => {
                            if (seat !== seatId) {
                                return seat;
                            }
                        });
                    }
                    updateSeats();
                    updatePrice(moviePrice, takenSeats.length);
                });
            });

            function updateSeats() {
                selectedSeatsHolderEl.innerHTML = ``;

                takenSeats.forEach((seat) => {
                    const seatHolder = document.createElement("div");
                    seatHolder.classList.add("selectedSeat");
                    selectedSeatsHolderEl.appendChild(seatHolder);

                    seatHolder.innerHTML = seat;
                });

                if (!takenSeats.length) {
                    const spanEl = document.createElement("span");
                    spanEl.classList.add("noSelected");
                    spanEl.innerHTML = `NO SEAT SELECTED`;
                    selectedSeatsHolderEl.appendChild(spanEl);
                }

                seatCount();
            }

            function seatCount() {
                const numberOfSeatEl = document.getElementById("numberOfSeat");
                numberOfSeatEl.innerHTML = takenSeats.length;
            }

            function updatMovieName(movieName, price) {
                const movieNameEl = document.getElementById("movieName");
                const moviePriceEl = document.getElementById("moviePrice");
                movieNameEl.innerHTML = movieName;
                moviePriceEl.innerHTML = `$ ${price}`;
            }

            function updatePrice(price, seats) {
                const totalPriceEl = document.getElementById("totalPrice");
                let total = seats * price;
                totalPriceEl.innerHTML = `$ ${total}`;
            }

            cancelBtn.addEventListener("click", (e) => {
                cancelSeats();
            });

            function cancelSeats() {
                takenSeats = [];
                seatContEl.forEach((seat) => {
                    seat.classList.remove("selected");
                });
                updatePrice(0, 0);
                updateSeats();
            }

            function successModal(movieNameIn, totalPrice, successTrue) {
                const bodyEl = document.querySelector("body");

                const sectionEl = document.getElementById("section");

                const overlay = document.createElement("div");

                overlay.classList.add("overlay");

                sectionEl.appendChild(overlay);

                const successModal = document.createElement("div");
                successModal.classList.add("successModal");
                const modalTop = document.createElement("div");
                modalTop.classList.add("modalTop");
                const popImg = document.createElement("img");
                popImg.src =
                    "https://github.com/Dinesh1042/Vanilla-JavaScript-Projects/blob/main/Movie%20Booking/asset/pop.png?raw=true";
                modalTop.appendChild(popImg);

                successModal.appendChild(modalTop);

                // Modal Center

                const modalCenter = document.createElement("div");
                const modalHeading = document.createElement("h1");
                modalCenter.classList.add("modalCenter");
                modalHeading.innerHTML = `Ticked Booked Successfully`;
                modalCenter.appendChild(modalHeading);
                const modalPara = document.createElement("p");
                modalCenter.appendChild(modalPara);
                modalPara.innerHTML = `${movieNameIn} movie ticket have been booked successfully.`;
                successModal.appendChild(modalCenter);

                // modal Bottom

                const modalBottom = document.createElement("div");
                modalBottom.classList.add("modalBottom");
                const successBtn = document.createElement("button");

                successBtn.innerHTML = `Ok Got It!`;
                modalBottom.appendChild(successBtn);
                successModal.appendChild(modalBottom);

                successBtn.addEventListener("click", (e) => {
                    removeModal();
                });

                window.addEventListener("click", (e) => {
                    if (e.target.classList.contains("overlay")) {
                        removeModal();
                    }
                });

                function removeModal() {
                    overlay.remove();
                    successModal.remove();
                    bodyEl.classList.remove("modal-active");
                    cancelSeats();
                }

                sectionEl.appendChild(successModal);
            }

            proceedBtnEl.addEventListener("click", (e) => {
                if (takenSeats.length) {
                    const bodyEl = document.querySelector("body");
                    bodyEl.classList.add("modal-active");
                    successModal(currentMovieName, moviePrice * takenSeats.length);
                } else {
                    alert("Oops no seat Selected");
                }
            });
        </script>
    @endsection
