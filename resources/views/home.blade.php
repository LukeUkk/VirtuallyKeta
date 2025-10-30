@extends('layouts.app')

@section('content')

    <!-- Skip to content -->
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 bg-blue-600 text-white px-4 py-2 z-50">Skip to main content</a>

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
      <div class="max-w-screen-xl mx-auto flex justify-between items-center px-4 py-4">
        <nav>
          <ul class="flex gap-6 items-center text-sm">
            <li><a href="/about" class="hover:text-pink-600">About</a></li>
            <li><a href="/contact" class="hover:text-pink-600">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[600px] flex items-center justify-center text-center bg-[#264c54]">
    <div class="relative z-10 text-white px-4 max-w-2xl" style="color: #ffffff;">
        <div style=" font-family: math">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">Virtual Assistant<br />at Your Service</h1>
            <p class="text-lg md:text-xl mt-4">DESIGN • COPYWRITING • MARKETING</p>
        </div>
        <a href="/pricing" class="mt-6 inline-block px-6 py-3 bg-pink-600 hover:bg-pink-700 rounded text-white transition">Book A Free Consultation</a>
    </div>
    </section>

    <!-- Overlapping About Card just touching Hero -->
    <section class="relative z-20 -mt-24 px-4" style="background-image: url('{{ Vite::asset('resources/images/herobg.webp') }}');">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 md:p-12 grid md:grid-cols-2 gap-8 items-center">
            <img src="https://static.wixstatic.com/media/2e2a49_6c8028f6bbb6482a914ccfc1295c7aa5~mv2.jpg" alt="Maggie" class="rounded shadow w-full h-auto object-cover" />
            <div>
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 mb-4">Hi, I'm Maggie,<br />a Skilled Administrative Support Professional</h2>
            <p class="text-gray-700 leading-relaxed mb-6">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.</p>
            <a href="/about" class="inline-block px-5 py-2 bg-red-500 hover:bg-red-600 text-white rounded">Read More</a>
            </div>
        </div>
    </section>

      <!-- Services -->
    <section class="bg-white py-20 px-4" style="background-image: url('{{ Vite::asset('resources/images/herobg.webp') }}');">
        <div class="max-w-screen-xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">What Can I Do For You?</h2>
            <p class="text-gray-600">I'm a paragraph. Click here to add your own text and edit me. Let your users get to know you.</p>
        </div>

        <!-- Service Grid -->
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-16 text-center md:text-left">
            
            <!-- Service Item -->
            <div class="relative px-4">
                <div class="flex flex-col items-center md:items-start space-y-4">
                    <div class="text-3xl text-gray-800">
                    <i class="fa-regular fa-folder-open"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Administrative Support</h3>
                    <p class="text-sm text-gray-600">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                </div>
                <!-- Vertical Divider -->
                <div class="hidden md:block absolute top-0 right-0 h-full border-r border-gray-200"></div>
            </div>

            <div class="relative px-4">
                <div class="flex flex-col items-center md:items-start space-y-4">
                    <div class="text-3xl text-gray-800">
                    <i class="fa-regular fa-comments"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Customer Support</h3>
                    <p class="text-sm text-gray-600">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                </div>
                <div class="hidden md:block absolute top-0 right-0 h-full border-r border-gray-200"></div>
            </div>

            <div class="px-4">
                <div class="flex flex-col items-center md:items-start space-y-4">
                    <div class="text-3xl text-gray-800">
                    <i class="fa-regular fa-calendar-days"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Project Management</h3>
                    <p class="text-sm text-gray-600">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                </div>
            </div>

            <!-- Second Row -->
            <div class="relative px-4">
                <div class="flex flex-col items-center md:items-start space-y-4">
                    <div class="text-3xl text-gray-800">
                    <i class="fa-solid fa-laptop"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Social Media Management</h3>
                    <p class="text-sm text-gray-600">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                </div>
                <div class="hidden md:block absolute top-0 right-0 h-full border-r border-gray-200"></div>
            </div>

            <div class="relative px-4">
                <div class="flex flex-col items-center md:items-start space-y-4">
                    <div class="text-3xl text-gray-800">
                    <i class="fa-regular fa-file-lines"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Data & Research</h3>
                    <p class="text-sm text-gray-600">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                </div>
                <div class="hidden md:block absolute top-0 right-0 h-full border-r border-gray-200"></div>
            </div>

            <div class="px-4">
                <div class="flex flex-col items-center md:items-start space-y-4">
                    <div class="text-3xl text-gray-800">
                    <i class="fa-regular fa-user"></i>
                    
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Personal Assistant</h3>
                    <p class="text-sm text-gray-600">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                </div>
            </div>
        </div>
    </section>


      <!-- Testimonials #264c54-->
    <section class="bg-[#264c54] py-20">
        <div class="max-w-screen-xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold text-white mb-10">What My Clients Say</h2>

            <!-- Swiper container -->
            <div class="testimonial-swiper swiper relative">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white shadow-md p-8 text-center rounded-lg h-full">
                            <div class="text-[#d99882] text-4xl mb-4">❝</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Organized and Efficient</h3>
                            <p class="text-gray-600 mb-4">“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</p>
                            <p class="font-bold text-gray-900">Jen B.</p>
                            <p class="text-sm text-gray-500">Milestone</p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="bg-white shadow-md p-8 text-center rounded-lg h-full">
                            <div class="text-[#d99882] text-4xl mb-4">❝</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Flexible and Committed</h3>
                            <p class="text-gray-600 mb-4">“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</p>
                            <p class="font-bold text-gray-900">Louis M.</p>
                            <p class="text-sm text-gray-500">Beltok</p>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="bg-white shadow-md p-8 text-center rounded-lg h-full">
                            <div class="text-[#d99882] text-4xl mb-4">❝</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Creative & Resourceful</h3>
                            <p class="text-gray-600 mb-4">“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</p>
                            <p class="font-bold text-gray-900">Karen L.</p>
                            <p class="text-sm text-gray-500">Ted & Brooks</p>
                        </div>
                    </div>
                    <!-- Add more slides as needed -->

                    <div class="swiper-slide">
                        <div class="bg-white shadow-md p-8 text-center rounded-lg h-full">
                            <div class="text-[#d99882] text-4xl mb-4">❝</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Organized and Efficient</h3>
                            <p class="text-gray-600 mb-4">“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</p>
                            <p class="font-bold text-gray-900">Jen B.</p>
                            <p class="text-sm text-gray-500">Milestone</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white shadow-md p-8 text-center rounded-lg h-full">
                            <div class="text-[#d99882] text-4xl mb-4">❝</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Organized and Efficient</h3>
                            <p class="text-gray-600 mb-4">“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</p>
                            <p class="font-bold text-gray-900">Jen B.</p>
                            <p class="text-sm text-gray-500">Milestone</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white shadow-md p-8 text-center rounded-lg h-full">
                            <div class="text-[#d99882] text-4xl mb-4">❝</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Organized and Efficient</h3>
                            <p class="text-gray-600 mb-4">“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</p>
                            <p class="font-bold text-gray-900">Jen B.</p>
                            <p class="text-sm text-gray-500">Milestone</p>
                        </div>
                    </div>
                </div>

            <!-- Navigation Buttons -->
                <button class="custom-swiper-prev absolute top-1/2 -translate-y-1/2 left-0 z-10 bg-white text-[#264c54] text-4xl leading-none w-10 h-10 flex items-center justify-center rounded-full shadow hover:bg-gray-100">
                    <span class="block mt-[-10px] leading-none">&lsaquo;</span>
                </button>
                <button class="custom-swiper-next absolute top-1/2 -translate-y-1/2 right-0 z-10 bg-white text-[#264c54] text-4xl w-10 h-10 flex items-center justify-center rounded-full shadow hover:bg-gray-100">
                    <span class="block mt-[-10px] leading-none">&rsaquo;</span>
                </button>
            </div>
        </div>
    </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8" style="background-color: #1d2534;">
      <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center px-4">
        <div class="flex space-x-6">
          <a href="https://linkedin.com" target="_blank" class="hover:text-pink-500">LinkedIn</a>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>


@endsection
