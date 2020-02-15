@extends('layouts.app')

@section('header')
@parent
@endsection

@section('content')

<div class="section bg-white py-20">
    <div class="wrapper">

        <h3 class="text-primary font-text-medium text-center mb-10">What is the Circular Economy?</h3>

        <p class="text-dark font-text-regular text-sm mb-4">Circular is a radically different way of doing business. It enables companies and organizations to innovate in ways that
        address resource scarcity and climate risk, respond to consumer and societal pressure to reduce waste, and unlock a $4.5
        trillion economic opportunity.</p>

        <p class="text-dark font-text-regular text-sm mb-4">The circular economy is transformational, disruptive, regenerative and will create opportunities at every link of the
        economic spectrum. It requires engaging with a company’s entire value chain, including competitors and companies outside
        of one’s sector.</p>

        <p class="text-dark font-text-regular text-sm mb-4">Building on the success of the Accelerating the Circular Economy 2019 event, Accelerating the Circular Economy 2020 will
        bring together thought leaders and practitioners across industries and functions that bring circularity to life. Through
        inspirational plenaries, interactive breakouts, deep-dive tutorials, networking opportunities and a solutions-focused
        showcase, Accelerating the Circular Economy 2020 will inspire, inform and empower participants to turn circular economy
        concepts into profitable opportunities for companies and cities.</p>

    </div>

</div>

<div class="section bg-dark py-20">

    <div class="wrapper">

        <h3 class="text-primary font-text-medium text-center mb-10">Meet the Organizers</h3>

        <div class="flex flex-row mb-10">

            <div class="flex-none w-48">
                <img class="w-full object-contain rounded-full shadow-md" src="{{ asset('images/organizers/Omens.jpeg') }}" alt="">
            </div>

            <div class="flex flex-col self-center ml-10">

                <div class="flex flex-row">

                    <div class="flex flex-1 flex-col">
                        <div>
                            <p class="text-dark font-text-medium">Allie Omens</p>
                        </div>
                        <div>
                            <p class="text-dark-secondary font-text-italic text-xs mb-2">President, Epsilon Eta Co-Ed Environmental Honors Society</p>
                        </div>
                    </div>

                    <div class="flex flex-none flex-row self-center">

                        <div>
                            <a href="https://www.epsilonetaunc.com/">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="https://www.linkedin.com/in/allie-o-550053103/">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                                    class="w-5 mx-1 fill-current text-dark-secondary hover:text-green-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>

                <div>
                    <p class="text-dark font-text-regular text-sm mb-4">Allie is a graduate of the University of North Carolina at Chapel Hill, with degrees in Public Policy and Environmental
                    Studies. In the winter of 2019, she brought together students in the Co-Ed Environmental Honors Society to plan what
                    would become the inagural Accelerating the Circular Economy event in fall 2019.</p>
                </div>

            </div>

        </div>

        <div class="flex flex-row mb-10">
        
            <div class="flex-none w-48">
                <img class="w-full object-contain rounded-full shadow-md" src="{{ asset('images/organizers/Piehler.jpg') }}"
                    alt="">
            </div>
        
            <div class="flex flex-col self-center ml-10">
        
                <div class="flex flex-row">
        
                    <div class="flex flex-1 flex-col">
                        <div>
                            <p class="text-dark font-text-medium">Michael Piehler</p>
                        </div>
                        <div>
                            <p class="text-dark-secondary font-text-italic text-xs mb-2">Director, UNC Institute for the Environment</p>
                        </div>
                    </div>
        
                    <div class="flex flex-none flex-row self-center">
        
                        <div>
                            <a href="https://ie.unc.edu/">
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
                            <a href="https://www.linkedin.com/in/michael-piehler-1a547039/">
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
        
                <div>
                    <p class="text-dark font-text-regular text-sm mb-4">Alongside serving as the Director for the UNC Institute for the Environment, Michael Piehler is a professor within the
                    Institute of Marine Sciences. He and the Institute are always seeking student-administration collaboration on projects,
                    such as this conference.</p>
                </div>
        
            </div>
        
        </div>

        <div class="flex flex-row mb-10">
        
            <div class="flex-none w-48">
                <img class="w-full object-contain rounded-full shadow-md" src="{{ asset('images/organizers/Wall.jpg') }}"
                    alt="">
            </div>
        
            <div class="flex flex-col self-center ml-10">
        
                <div class="flex flex-row">
        
                    <div class="flex flex-1 flex-col">
                        <div>
                            <p class="text-dark font-text-medium">Steve Wall</p>
                        </div>
                        <div>
                            <p class="text-dark-secondary font-text-italic text-xs mb-2">Outreach Director, NC Policy Collaboratory</p>
                        </div>
                    </div>
        
                    <div class="flex flex-none flex-row self-center">
        
                        <div>
                            <a href="https://collaboratory.unc.edu/">
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
                            <a href="https://www.linkedin.com/in/steve-wall-1b826a86/">
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
        
                <div>
                    <p class="text-dark font-text-regular text-sm mb-4">Steve Wall is a UNC law school alumnus, now serving as the Outreach Director for NC Policy Collaboratory, as well as
                    Policy Research Associate at UNC Institute for the Environment. He served as a key mentor on the project and continues
                    to support student efforts relating to the conference.</p>
                </div>
        
            </div>
        
        </div>

    </div>

</div>

<div class="section bg-white py-20">

    <div class="wrapper">

        <h3 class="text-primary font-text-medium text-center mb-10">Frequently Asked Questions</h3>

        <div class="flex flex-row flex-wrap justify-center">

            <div class="flex flex-col w-1/2 pr-5 pb-5">
            
                <div class="bg-dark rounded-t shadow-md">
                    <p class="text-dark font-text-medium p-5">How do I register?</p>
                </div>
            
                <div class="bg-darker rounded-b p-5 shadow-md">
                    <p class="text-light font-text-regular text-sm">Registration will open in May 2020.</p>
                </div>
            
            </div>

            <div class="flex flex-col w-1/2 pl-5 pb-5">
            
                <div class="bg-dark rounded-t shadow-md">
                    <p class="text-dark font-text-medium p-5">I can only stay for part of Circularity 20. Can I share my registration with a colleague?</p>
                </div>
                
                <div class="bg-darker rounded-b p-5 shadow-md">
                    <p class="text-light font-text-regular text-sm">No, one registration may not be shared by multiple people.</p>
                </div>
            
            </div>

            <div class="flex flex-col w-1/2 pr-5 pt-5">
            
                <div class="bg-dark rounded-t shadow-md">
                    <p class="text-dark font-text-medium p-5">Are there opportunities to volunteer at the event?</p>
                </div>
                
                <div class="bg-darker rounded-b p-5 shadow-md">
                    <p class="text-light font-text-regular text-sm">Yes. We offer a limited number of volunteer positions to graduate and undergraduate students. Volunteer application will
                    be posted in early 2020.</p>
                </div>
            
            </div>

            <div class="flex flex-col w-1/2 pl-5 pt-5">
            
                <div class="bg-dark rounded-t shadow-md">
                    <p class="text-dark font-text-medium p-5">What is the refund policy for the forum?</p>
                </div>
            
                <div class="bg-darker rounded-b p-5 shadow-md">
                    <p class="text-light font-text-regular text-sm">Registration for the forum is non-refundable. However, if you register but are unable to attend, we are happy to
                    transfer your registration to a colleague or apply the amount you paid to a future Accelerating the Circular Economy
                    event. Please contact epetaunc@gmail.com if you need to cancel or transfer your registration.</p>
                </div>
            
            </div>

        </div>

    </div>

</div>

@endsection

@section('footer')
@parent
@endsection