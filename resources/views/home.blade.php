@extends('layouts.app')

@section('header')
<div class="header pt-10 pb-20">
    <div class="wrapper flex justify-center xl:justify-end mb-5 xl:mb-10">
        <div class="flex-initial">
            <ul>
                <li class="inline-block mx-2">
                    <a href="/about" class="text-white hover:underline font-text-medium">About Us</a>
                </li>
                <!--
                <li class="inline-block mx-2">
                    <a href="#" class="text-white hover:underline font-text-medium">Schedule</a>
                </li>
                -->
                <li class="inline-block mx-2">
                    <a href="/pastevents" class="text-white hover:underline font-text-medium">Past Events</a>
                </li>
                <li class="inline-block mx-2">
                    <a href="/contact" class="text-white hover:underline font-text-medium">Contact Us</a>
                </li>
                <!--
                <li class="inline-block mr-2 ml-4">
                    <a href="#" class="text-white hover:bg-green-400 bg-primary py-2 px-4 rounded shadow-md font-text-regular">Register Now</a>
                </li>
                -->
            </ul>
        </div>
    </div>
    <div class="wrapper mb-10">
        <h1 class="text-center text-white text-3xl xl:text-5xl font-display-medium shadow-t-md mb-5 xl:mb-0">Accelerating The Circular Economy
        </h1>
        <h2 class="text-center text-white font-light text-md xl:text-xl font-display-regular shadow-t-md mb-10">a radically
            different way of doing business</h2>
        <p class="text-center text-white font-light font-text-regular w-full xl:w-1/2 mx-auto mb-10">We live in a predominately
            linear world, meaning that we ‘take, make, and dispose’ items that will ultimately end up in a landfill or
            incinerator. But, disrupting the status quo is a new movement called the circular economy. In a circular
            world we look to bend linear systems in order to better leverage our resources, promoting sustainable
            business models while also turning a profit.</p>
    </div>
    <div class="wrapper flex justify-center">
        <a href="#"
            class="text-white hover:bg-green-400 bg-primary py-2 px-3 xl:px-6 mx-2 rounded shadow-lg font-text-regular cursor-not-allowed">Register
            Soon</a>
        <a href="/about"
            class="text-dark hover:bg-gray-200 bg-dark py-2 px-3 xl:px-6 mx-2 rounded shadow-lg font-text-regular">Discover
            More</a>
    </div>
</div>
@endsection

@section('content')

<!--

<div class="section bg-white py-20">
    <div class="wrapper">
        <h3 class="text-primary font-text-medium text-center mb-10">Our Speakers & Panelists</h3>
        <div class="main-carousel" data-flickity='{ "cellAlign": "left", "freescroll": true, "wrapAround": true }'>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Sean-Wilson.jpg" alt="Portrait of Sean Wilson">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Sean Wilson</p>
                            <p class="text-dark font-text-italic text-xs mb-2">CEO at Fullsteam Brewery</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Sean Lilly Wilson is owner and Chief
                                Executive Optimist of Durham, NC-based Fullsteam, a “plow to pint” brewery and tavern.
                                Fullsteam's mission is to pioneer a Southern Beer Economy through the act of commerce,
                                fostering...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Liza-Schillo.png" alt="Portrait of Liza Schillo">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Liza B. Schillo</p>
                            <p class="text-dark font-text-italic text-xs mb-2">Senior Manager, Global Product
                                Sustainability at Levi Strauss & Co.</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Liza Schillo is Senior Manager of Global
                                Product Sustainability for Levi Strauss & Co. She has been with the company for nearly
                                five years, directing LS&Co.’s climate change...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Keirstan-Kure.jpg" alt="Portrait of Keirstan Kure">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Keirstan Kure</p>
                            <p class="text-dark font-text-italic text-xs mb-2">Procurement Specialist at Seal the
                                Seasons</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Keirstan found her passion for food,
                                agriculture and small business during high school while working at Mackenzie Creamery
                                near her home in Northeast Ohio. After graduating from Penn State University with a
                                Bachelor's of Science...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Keirstan-Kure.jpg" alt="Portrait of Keirstan Kure">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Keirstan Kure</p>
                            <p class="text-dark font-text-italic text-xs mb-2">Procurement Specialist at Seal the
                                Seasons</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Keirstan found her passion for food,
                                agriculture and small business during high school while working at Mackenzie Creamery
                                near her home in Northeast Ohio. After graduating from Penn State University with a
                                Bachelor's of Science...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Keirstan-Kure.jpg" alt="Portrait of Keirstan Kure">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Keirstan Kure</p>
                            <p class="text-dark font-text-italic text-xs mb-2">Procurement Specialist at Seal the
                                Seasons</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Keirstan found her passion for food,
                                agriculture and small business during high school while working at Mackenzie Creamery
                                near her home in Northeast Ohio. After graduating from Penn State University with a
                                Bachelor's of Science...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Keirstan-Kure.jpg" alt="Portrait of Keirstan Kure">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Keirstan Kure</p>
                            <p class="text-dark font-text-italic text-xs mb-2">Procurement Specialist at Seal the
                                Seasons</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Keirstan found her passion for food,
                                agriculture and small business during high school while working at Mackenzie Creamery
                                near her home in Northeast Ohio. After graduating from Penn State University with a
                                Bachelor's of Science...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell w-1/5 mb-5">
                <div class="bg-dark rounded mx-5 shadow-lg">
                    <img class="rounded-t w-full" src="/images/Keirstan-Kure.jpg" alt="Portrait of Keirstan Kure">
                    <div class="p-5">
                        <div class="h-48 overflow-y-hidden">
                            <p class="text-primary font-text-medium">Keirstan Kure</p>
                            <p class="text-dark font-text-italic text-xs mb-2">Procurement Specialist at Seal the
                                Seasons</p>
                            <p class="text-dark font-text-regular text-sm mb-4">Keirstan found her passion for food,
                                agriculture and small business during high school while working at Mackenzie Creamery
                                near her home in Northeast Ohio. After graduating from Penn State University with a
                                Bachelor's of Science...</p>
                        </div>
                        <div class="text-center mt-6 mb-4">
                            <a href="#"
                                class="text-white hover:bg-green-400 bg-primary py-2 px-10 rounded shadow-lg font-text-regular">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

-->

<div class="section bg-dark py-20">

    <div class="wrapper">

        <h3 class="text-primary font-text-medium text-center mb-10">Our Venue</h3>

        <div class="block xl:flex items-stretch h-auto">

            <div class="main-carousel mb-5 xl:mb-0 xl:w-3/5 h-128 xl:mr-5 shadow-lg"
                data-flickity='{ "cellAlign": "left", "wrapAround": true, "autoPlay": true, "setGallerySize": true}'>

                <div class="carousel-cell w-full">
                    <img class="object-cover h-128 shadow-lg rounded" src="{{ asset('images/Venue-1.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full">
                    <img class="object-cover h-128 w-full shadow-lg rounded" src="{{ asset('images/Venue-2.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full">
                    <img class="object-cover h-128 w-full shadow-lg rounded" src="{{ asset('images/Venue-3.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full">
                    <img class="object-cover h-128 w-full shadow-lg rounded" src="{{ asset('images/Venue-4.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full">
                    <img class="object-cover h-128 w-full shadow-lg rounded" src="{{ asset('images/Venue-5.jpg') }}" alt="">
                </div>

            </div>

            <div class="flex flex-col xl:w-2/5 h-128 xl:h-128 xl:ml-5">

                <div class="mb-5 shadow-lg flex-auto">
                    <iframe class="w-full h-full"
                        src="https://maps.google.com/maps?q=UNC%20Friday%20Conference%20Center&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <!--
                <button class="text-center text-white font-text-regular bg-primary hover:bg-green-400 rounded shadow-lg py-2">Explore The Schedule</button>
                -->

                <button class="text-center text-white font-text-regular bg-primary hover:bg-green-400 rounded shadow-lg py-2 cursor-not-allowed">Schedule Coming Soon</button>

            </div>

        </div>

    </div>

</div>

<div class="section bg-white py-20">

    <div class="wrapper">

        <h3 class="text-primary font-text-medium text-center mb-10">Our Sponsors</h3>

        <div class="flex flex-wrap justify-center h-auto">

            <div class="xl:w-1/2 xl:h-48 xl:pr-5 mb-5">

                <div class="flex flex-col xl:flex-row">

                    <div class="self-center xl:flex-none w-48 mb-5 xl:mb-0">
                        <img class="w-full object-contain" src="{{ asset('images/UNC-IFTE.png') }}" alt="">
                    </div>

                    <div class="self-center xl:ml-5">
                        <p class="text-primary font-text-medium text-center xl:text-left">UNC Institute for the Environment</p>
                        <p class="text-dark font-text-regular text-sm mb-4 text-center xl:text-left">The UNC Institute for the Environment
                            fosters and conducts collaborations with faculty, students and staff across the
                            university to identify and solve the world’s environmental challenges and sustain and
                            improve the environment.</p>
                    </div>

                </div>

            </div>

            <div class="xl:w-1/2 xl:h-48 xl:pl-5 mb-5">

                <div class="flex flex-col xl:flex-row">

                    <div class="self-center xl:flex-none w-48 mb-5 xl:mb-0">
                        <img class="w-full object-contain" src="{{ asset('images/Epsilon-Eta.png') }}" alt="">
                    </div>

                    <div class="self-center xl:ml-5">
                        <p class="text-primary font-text-medium text-center xl:text-left">Epsilon Eta</p>
                        <p class="text-dark font-text-regular text-sm mb-4 text-center xl:text-left">The mission of Epsilon Eta is to recognize
                            and connect outstanding students, providing them with a network of support
                            and opportunities during and after their academic career.</p>
                    </div>

                </div>

            </div>

            <div class="xl:w-1/2 xl:h-48 xl:mt-5">

                <div class="flex flex-col xl:flex-row">

                    <div class="self-center xl:flex-none w-48 mb-5 xl:mb-0">
                        <img class="w-full object-contain" src="{{ asset('images/Carolina-Thrift.png') }}" alt="">
                    </div>

                    <div class="self-center xl:ml-5">
                        <p class="text-primary font-text-medium text-center xl:text-left">Carolina Thrift</p>
                        <p class="text-dark font-text-regular text-sm mb-4 text-center xl:text-left">Carolina Thrift’s mission is to encourage
                            socially responsible consumerism, provide the UNC-Chapel Hill area financial
                            relief, and build Carolina’s community.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@section('footer')
@parent
@endsection