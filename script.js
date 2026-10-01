

    /*
    ============================================================
    ASFIa AIMAN PORTFOLIO
    INTERACTIVE CAREER MAP
    ============================================================

    Features:

    1. Scroll-driven route animation
    2. Animated navigation marker
    3. Clickable destinations
    4. Smooth navigation to destinations
    5. Active destination highlighting
    6. Keyboard navigation
    7. Mobile support
    ============================================================
    */


    /* =========================================================
       ELEMENTS
    ========================================================= */

    const route =
        document.getElementById("routeProgress");

    const navigationMarker =
        document.getElementById("navigationMarker");

    const journeyMap =
        document.querySelector(".journey-map");

    const destinationMarkers =
        document.querySelectorAll(".destination-marker");

    const destinationCards =
        document.querySelectorAll(
            "[data-destination-card]"
        );


    /* =========================================================
       DESTINATION CONFIGURATION
    ========================================================= */

    const destinations = {

        1: {
            name: "Software Engineering",
            year: "2013 → 2017",
            progress: 0.10
        },

        2: {
            name: "Backend Engineer",
            year: "2023 → 2024",
            progress: 0.36
        },

        3: {
            name: "Senior Laravel Developer",
            year: "2024 → Present",
            progress: 0.64
        },

        4: {
            name: "AI & Machine Learning",
            year: "2026 → Next Destination",
            progress: 0.90
        }

    };


    /* =========================================================
       SVG ROUTE
    ========================================================== */

    const routeLength =
        route.getTotalLength();


    route.style.strokeDasharray =
        routeLength;


    route.style.strokeDashoffset =
        routeLength;


    /* =========================================================
       ACTIVE DESTINATION
    ========================================================== */

    let activeDestination = 1;


    function setActiveDestination(id) {

        activeDestination =
            Number(id);


        /*
        ---------------------------------------------
        Marker state
        ---------------------------------------------
        */

        destinationMarkers.forEach(marker => {

            const markerId =
                Number(
                    marker.dataset.destination
                );


            marker.classList.toggle(
                "active",
                markerId === activeDestination
            );

        });


        /*
        ---------------------------------------------
        Card state
        ---------------------------------------------
        */

        destinationCards.forEach(card => {

            const cardId =
                Number(
                    card.dataset.destinationCard
                );


            card.classList.toggle(
                "active",
                cardId === activeDestination
            );

        });

    }


    /* =========================================================
       MOVE NAVIGATION MARKER
    ========================================================== */

    function moveNavigationMarker(progress) {

        /*
        Clamp progress between 0 and 1.
        */

        progress =
            Math.max(
                0,
                Math.min(
                    1,
                    progress
                )
            );


        /*
        Find point along SVG route.
        */

        const point =
            route.getPointAtLength(
                routeLength * progress
            );


        /*
        Convert SVG coordinates
        into CSS coordinates.
        */

        const x =
            (
                point.x / 1000
            )
            *
            journeyMap.clientWidth;


        const y =
            (
                point.y / 1500
            )
            *
            journeyMap.clientHeight;


        navigationMarker.style.left =
            `${x}px`;


        navigationMarker.style.top =
            `${y}px`;

    }


    /* =========================================================
       SCROLL POSITION
    ========================================================== */

    function calculateScrollProgress() {

        const rect =
            journeyMap.getBoundingClientRect();


        const viewportHeight =
            window.innerHeight;


        /*
        The route begins moving when
        the journey section enters the viewport.
        */

        const startPoint =
            viewportHeight * 0.78;


        const totalDistance =
            rect.height -
            viewportHeight * 0.30;


        let progress =
            (
                startPoint -
                rect.top
            )
            /
            totalDistance;


        progress =
            Math.max(
                0,
                Math.min(
                    1,
                    progress
                )
            );


        return progress;

    }


    /* =========================================================
       UPDATE ROUTE
    ========================================================== */

    function updateJourney() {

        const progress =
            calculateScrollProgress();


        /*
        Draw blue route.
        */

        route.style.strokeDashoffset =
            routeLength *
            (1 - progress);


        /*
        Move navigation marker.
        */

        moveNavigationMarker(
            progress
        );


        /*
        Find nearest destination.
        */

        let closestId =
            1;

        let smallestDistance =
            Infinity;


        Object.entries(
            destinations
        ).forEach(
            ([id, destination]) => {

                const distance =
                    Math.abs(
                        progress -
                        destination.progress
                    );


                if (
                    distance <
                    smallestDistance
                ) {

                    smallestDistance =
                        distance;

                    closestId =
                        Number(id);

                }

            }
        );


        setActiveDestination(
            closestId
        );

    }


    /* =========================================================
       DESTINATION NAVIGATION
    ========================================================== */

    function goToDestination(id) {

        const destination =
            destinations[id];


        if (!destination) {
            return;
        }


        /*
        ---------------------------------------------
        Calculate required scroll position.
        ---------------------------------------------
        */

        const journeyRect =
            journeyMap.getBoundingClientRect();


        const currentScroll =
            window.scrollY;


        const viewportHeight =
            window.innerHeight;


        const journeyTop =
            journeyRect.top +
            currentScroll;


        const usableHeight =
            journeyMap.offsetHeight -
            viewportHeight * 0.30;


        const targetScroll =
            journeyTop +
            (
                usableHeight *
                destination.progress
            ) -
            viewportHeight *
            0.35;


        /*
        ---------------------------------------------
        Move browser.
        ---------------------------------------------
        */

        window.scrollTo({

            top:
                Math.max(
                    0,
                    targetScroll
                ),

            behavior:
                "smooth"

        });


        /*
        ---------------------------------------------
        Immediately highlight
        selected destination.
        ---------------------------------------------
        */

        setActiveDestination(id);

    }


    /* =========================================================
       CLICK DESTINATION MARKERS
    ========================================================== */

    destinationMarkers.forEach(marker => {

        marker.style.cursor =
            "pointer";


        marker.addEventListener(
            "click",
            event => {

                event.stopPropagation();


                const id =
                    Number(
                        marker.dataset.destination
                    );


                goToDestination(id);

            }
        );

    });


    /* =========================================================
       CLICK DESTINATION CARDS
    ========================================================== */

    destinationCards.forEach(card => {

        card.style.cursor =
            "pointer";


        card.addEventListener(
            "click",
            () => {

                const id =
                    Number(
                        card.dataset.destinationCard
                    );


                goToDestination(id);

            }
        );

    });


    /* =========================================================
       NAVIGATION BAR
    ========================================================== */

    document
        .querySelectorAll(
            'a[href^="#"]'
        )
        .forEach(link => {

            link.addEventListener(
                "click",
                event => {

                    const targetId =
                        link
                            .getAttribute("href")
                            .replace("#", "");


                    const target =
                        document.getElementById(
                            targetId
                        );


                    if (!target) {
                        return;
                    }


                    event.preventDefault();


                    const navbar =
                        document.querySelector(
                            ".map-navbar"
                        );


                    const offset =
                        navbar
                            ? navbar.offsetHeight + 20
                            : 20;


                    window.scrollTo({

                        top:
                            target.offsetTop -
                            offset,

                        behavior:
                            "smooth"

                    });


                    /*
                    Close mobile navbar.
                    */

                    const navbarCollapse =
                        document.getElementById(
                            "mainNavigation"
                        );


                    if (
                        navbarCollapse &&
                        navbarCollapse.classList.contains(
                            "show"
                        )
                    ) {

                        const collapse =
                            bootstrap.Collapse
                                .getInstance(
                                    navbarCollapse
                                );


                        if (collapse) {
                            collapse.hide();
                        }

                    }

                }
            );

        });


    /* =========================================================
       MAP CONTROL: RESET
    ========================================================== */

    const resetButton =
        document.querySelector(
            '.map-control i.bi-crosshair'
        );


    if (resetButton) {

        resetButton
            .closest(".map-control")
            .addEventListener(
                "click",
                () => {

                    window.scrollTo({

                        top: 0,

                        behavior:
                            "smooth"

                    });

                }
            );

    }


    /* =========================================================
       KEYBOARD NAVIGATION
    ========================================================== */

    document.addEventListener(
        "keydown",
        event => {

            /*
            ArrowDown:
            next destination
            */

            if (
                event.key ===
                "ArrowDown"
            ) {

                event.preventDefault();


                const next =
                    Math.min(
                        4,
                        activeDestination + 1
                    );


                goToDestination(next);

            }


            /*
            ArrowUp:
            previous destination
            */

            if (
                event.key ===
                "ArrowUp"
            ) {

                event.preventDefault();


                const previous =
                    Math.max(
                        1,
                        activeDestination - 1
                    );


                goToDestination(previous);

            }

        }
    );


    /* =========================================================
       SCROLL REVEAL
    ========================================================== */

    const revealElements =
        document.querySelectorAll(
            ".reveal"
        );


    const revealObserver =
        new IntersectionObserver(

            entries => {

                entries.forEach(entry => {

                    if (
                        entry.isIntersecting
                    ) {

                        entry.target
                            .classList
                            .add(
                                "visible"
                            );

                    }

                });

            },

            {
                threshold: .12
            }

        );


    revealElements.forEach(
        element => {

            revealObserver.observe(
                element
            );

        }
    );


    /* =========================================================
       SCROLL EVENT
    ========================================================== */

    let scrollTicking =
        false;


    window.addEventListener(
        "scroll",
        () => {

            if (!scrollTicking) {

                window.requestAnimationFrame(
                    () => {

                        updateJourney();

                        scrollTicking =
                            false;

                    }
                );


                scrollTicking =
                    true;

            }

        },
        {
            passive: true
        }
    );


    /* =========================================================
       RESIZE
    ========================================================== */

    window.addEventListener(
        "resize",
        () => {

            updateJourney();

        }
    );


    /* =========================================================
       INITIALISE
    ========================================================== */

    setActiveDestination(1);

    updateJourney();

