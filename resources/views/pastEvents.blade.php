@extends('layouts.app')

@section('header')
@parent
@endsection

@section('content')

<div class="section bg-white py-20">

    <div class="wrapper">

        <h3 class="text-primary font-text-medium text-center">Accelerating The Circular Economy</h3>
        <h3 class="text-dark-secondary font-text-italic text-center mb-10 text-xs">09/13/2019 - 09/13/2019</h3>

        <div class="flex flex-col">

            <div class="mb-10 xl:mb-6">
                <p class="text-dark font-text-regular text-sm">We live in a predominately linear world, meaning that we ‘take, make, and dispose’ items that will ultimately end up in
                a landfill or incinerator. But, disrupting the status quo is a new movement called the circular economy. In a circular
                world we look to bend linear systems in order to better leverage our resources, promoting sustainable business models
                while also turning a profit. Join us on September 13th to explore how circular economy practices are being put into
                action to address real business needs, here in the U.S. and around the globe. With panelists and speakers coming from a
                multitude of backgrounds in both the public and private sector, we will discuss how the circular economy is already
                proving successful and how these practices can be incorporated into all supply chains moving forward.</p>
            </div>

            <div class="main-carousel h-64 xl:h-128 mb-6"
                data-flickity='{ "cellAlign": "center", "wrapAround": true, "autoPlay": true, "setGallerySize": true}'>
            
                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_1.JPG') }}" alt="">
                </div>
            
                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_2.JPG') }}" alt="">
                </div>
            
                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_3.JPG') }}" alt="">
                </div>
            
                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_4.JPG') }}" alt="">
                </div>
            
                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_5.JPG') }}" alt="">
                </div>

                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_6.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_7.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_8.jpg') }}" alt="">
                </div>

                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_9.JPG') }}" alt="">
                </div>

                <div class="carousel-cell w-full xl:w-1/2 xl:px-5">
                    <img class="object-cover h-64 xl:h-128 w-full shadow-lg rounded" src="{{ asset('images/pastevents/event1_11.JPG') }}" alt="">
                </div>
            
            </div>

            <div class="flex flex-row flex-wrap justify-center">

                <div class="w-full xl:w-1/2 xl:pr-5 mt-10">

                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0 mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Schillo.jpg') }}"
                                    alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://www.levistrauss.com/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/lizaschillo/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left text-center xl:text-left">Liza B. Schillo</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Senior Manager, Global Product Sustainability
                                    at Levi Strauss & Co.</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm mb-3 xl:mb-4">Liza Schillo is Senior Manager of Global Product
                                    Sustainability for Levi Strauss & Co. She has been with the company
                                    for nearly five years, directing LS&Co.’s climate change and sustainable raw materials strategies. Liza
                                    is responsible
                                    for ensuring LS&Co. achieves 100% sustainably sourced cotton and viscose for its products by end of
                                    2020. These
                                    corporate commitments are part of a broader internal initiative to move LS&Co. toward a more sustainable
                                    and circular
                                    product strategy that Liza is formalizing in 2019. In 2018, Liza led the company to adopt new climate
                                    change targets for
                                    LS&Co. and its supply chain.</p>
                    
                                    <p class="text-dark font-text-regular text-sm">Liza holds an MBA and a Master’s Degree in Environmental Management from Duke University, and a Bachelor
                                    of Arts Degree
                                    in Environmental Studies from UNC-Chapel Hill. During her tenure at UNC, Liza identified the need for an
                                    environmental
                                    honors fraternity, a dream that she brought to life in 2006 with strong support from Greg Gangi and
                                    Epsilon Eta’s
                                    co-founder, Anna Fabiszewski.</p>
                            </div>
                    
                        </div>
                    
                    </div>

                </div>
                
                <div class="w-full xl:w-1/2 xl:pl-5 mt-10">

                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0 mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Kure.jpg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://www.parksite.com/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/keirstan-kure/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left text-center xl:text-left">Keirstan Kure</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Procurement Specialist, Seal the Seasons</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Keirstan is a supply chain professional focused on innovative supply chains and technology created to solve complex
                                sustainability problems and grow businesses. She is a collaborative and resourceful team-player who strives to go above
                                and beyond for the customer.</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
                
                <div class="w-full xl:w-1/2 xl:pr-5 mt-10">

                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Reposa.jpeg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://groundedupcycling.com/?fbclid=IwAR1GX8MHhgjtb2i4Xxpl0Ad92lrnT1XEjHe4cCDOdpD9JPKaaVYdgX6jaVA">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/preposa/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Parker Reposa</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Co-Founder, Grounded</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Parker and Drew aim to address a portion of this massive problem of coffee ground waste in NYC by offering comprehensive
                                coffee upcycling services to cafes, coffee shops, and other coffee producers. We then “upcycle” the collected material
                                into a series value-added products using regenerative processing methods.</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

                <div class="w-full xl:w-1/2 xl:pl-5 mt-10">
                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Enyedi.jpg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a
                                        href="https://groundedupcycling.com/?fbclid=IwAR1GX8MHhgjtb2i4Xxpl0Ad92lrnT1XEjHe4cCDOdpD9JPKaaVYdgX6jaVA">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/drew-enyedi-847863197/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Drew Enyedi</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Co-Founder, Grounded</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Parker and Drew aim to address a portion of this massive problem of coffee ground waste in NYC by offering comprehensive
                                coffee upcycling services to cafes, coffee shops, and other coffee producers. We then “upcycle” the collected material
                                into a series value-added products using regenerative processing methods.</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

                <div class="w-full xl:w-1/2 xl:pr-5 mt-10">
                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Wilson.jpg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://www.fullsteam.ag/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/fullsteam/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Sean Wilson</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">CEO, Fullsteam Brewery</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Sean is a beer enthusiast and localist advocate. His passion for fermentation lead him to Fullsteam Brewery where he
                                saves locally sourced produce from the landfill by using "ugly" fruits and veggies in his delicious creations. He leads
                                his company according to the core tenents: think like an optimist, seek truth and beauty; speak with quiet confidence
                                listen with empathy; be present, productive, and fun!</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

                <div class="w-full xl:w-1/2 xl:pl-5 mt-10">
                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Schwarze.jpeg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://recyclingpartnership.org/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/charlieschwarze/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Charlie Schwarze</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Director of Corporate Development, The Recycling Partnership</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Charles cares most deeply about providing tangible solutions to address the issues of climate change and plastic
                                pollution. He helps businesses understand the value and risk associated with investing in solutions to reduce the impact
                                of their plastic and carbon footprints.</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

                <div class="w-full xl:w-1/2 xl:pr-5 mt-10">
                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Williams.jpeg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://charlottenc.gov/SWS/About/Pages/Solid-Waste-Leadership-Team.aspx">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/brandiwilliamsapr/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Brandi Williams</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Community Affairs Manager, City of Charlotte Solid Waste Services</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Brandi N. Williams is an Accredited public relations professional and mental health advocate. The bicentennial baby, and
                                hip hop music lover uses her formal training in public relations and nearly two decades of experience in non-profit and
                                government to advocate for social, environmental and health causes; bridge the divide between the streets and the
                                suites; and develop innovative solutions to communities’ most complex problems.</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

                <div class="w-full xl:w-1/2 xl:pl-5 mt-10">
                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Leonas.png') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://textiles.ncsu.edu/directory/people/kleonas">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/karen-leonas-4a876b5/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Dr. Karen Leonas</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Professor, Wilson College of Textiles (NCSU)</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Dr. Karen Leonas is a member of the graduate faculty in Textile Technology Management, Fiber and Polymer Sciences, and
                                Textile Chemistry. Dr. Leonas teaches a variety of classes including an introductory class, The Textile Industry, and
                                graduate courses in Sustainability and Textile Technology Management.</p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

                <div class="w-full xl:w-1/2 mt-10">
                    <div class="flex flex-col xl:flex-row p-6 bg-dark rounded-lg shadow-md xl:h-64">
                    
                        <div class="flex flex-col self-center">
                    
                            <div class="flex-none w-40 h-40 rounded-full overflow-hidden mb-3 xl:mb-0">
                                <img class="h-full object-cover shadow-md" src="{{ asset('images/speakers/Neville.jpg') }}" alt="">
                            </div>
                    
                            <div class="flex flex-row self-center xl:mt-2 mb-3 xl:mb-0">
                    
                                <div>
                                    <a href="https://rebornclothing.co/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                                <div>
                                    <a href="https://www.linkedin.com/in/emily-neville-3a1a50126/">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                            class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                    
                            </div>
                    
                        </div>
                    
                        <div class="flex flex-col self-center xl:ml-6 xl:h-full justify-center xl:h-full justify-center">
                    
                            <div>
                                <p class="text-dark font-text-medium text-center xl:text-left">Emily Neville</p>
                            </div>
                    
                            <div>
                                <p class="text-dark-secondary font-text-italic text-xs mb-3 xl:mb-2 text-center xl:text-left">Founder and CEO, Reborn Clothing</p>
                            </div>
                    
                            <div class="xl:max-h-32 xl:overflow-auto">
                                <p class="text-dark font-text-regular text-sm">Emily is an innovator who started Reborn Clothing Co. in the fall of 2017 to divert textile waste from landfills and
                                give consumers an upcycling option for their memorable garments. Today, her company partner with organizations of all
                                sizes to transform surplus branded apparel and textile waste into higher-value products.</p>
                            </div>
                    
                        </div>
                    
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