<div>
<section href="{{ route('service') }}">
    <div id="services" class="container  mx-auto xl:flex  md:flex-row  sm:flex-row sm:gap-3 pt-4 pb-1.5  text-center ">
        <div class=" justify-items-center grid grid-cols-3 p-3 gap-3 w-full mx-auto">

            <div class=" mb-3.5 grid-cols-1 w-72 h-80 shadow-2xl  gap-4 border rounded-2xl bg-blue-50  animate__animated wow animate__fadeInLeftBig ">
                <div class=" mb-1.5 ">
                    <img class="w-40 h-40 mr-auto ml-auto" src="../../../../images/features-icon-1.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-sans font-bold mb-1.5">Platform Integration</h5>
                    <p class="mb-4  font-medium">Your sales force can use the app on any smartphone platform without compatibility issues</p>
                </div>
            </div>

            <div class=" mb-3.5 w-72 h-80 shadow-2xl  border grid-cols-2 rounded-2xl bg-blue-50  animate__animated wow animate__fadeInDownBig" >
                <div class="  mb-1.5">
                    <img class="w-40 h-40 mr-auto ml-auto" src="../../../../images/features-icon-2.svg" alt="alternative" />
                </div>
                <div class="card-body ">
                    <h5 class="card-title mb-1.5 font-sans font-bold">Easy On Resources</h5>
                    <p class="mb-4 font-medium">Works smoothly even on older generation hardware due to our optimization efforts</p>
                </div>
            </div>


            <div class=" mb-3.5  w-72 h-80 border shadow-2xl  grid-cols-3 rounded-2xl bg-blue-50  animate__animated wow animate__fadeInRightBig">
                <div class=" mb-1.5">
                    <img class="w-40 h-40 mr-auto ml-auto" src="../../../../images/features-icon-3.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1.5 font-sans font-bold">Great Performance</h5>
                    <p class="mb-4 font-medium">Optimized code and innovative technology insure no delays and ultra-fast responsiveness</p>
                </div>
            </div>

            <!-- Card -->
            <div class=" mb-3.5  border w-72 h-80 shadow-2xl rounded-2xl grid-cols-4 bg-blue-50  animate__animated wow animate__fadeInBottomLeft">
                <div class=" mb-1.5">
                    <img class="w-40 h-40 mr-auto ml-auto" src="../../../../images/features-icon-4.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1.5 font-sans font-bold">Multiple Languages</h5>
                    <p class="mb-4 font-medium">Choose from one of the 40 languages that come pre-installed and start selling smarter</p>
                </div>
            </div>


            <div class=" card mb-3.5  border w-72 h-80 shadow-2xl rounded-2xl grid-cols-5 bg-blue-50  animate__animated wow animate__fadeInUpBig">
                <div class=" mb-1.5">
                    <img class="w-40 h-40 mr-auto ml-auto" src="../../../../images/features-icon-5.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1.5 font-sans font-bold">Free Updates</h5>
                    <p class="mb-4 font-medium">Don't worry about future costs, pay once and receive all future updates at no extra cost</p>
                </div>
            </div>



            <div class=" card mb-3.5  border w-72 h-80 shadow-2xl grid-cols-6 rounded-2xl bg-blue-50  animate__animated wow animate__backInUp">
                <div class="mb-1.5">
                    <img class="w-40 h-40 mr-auto ml-auto" src="../../../../images/features-icon-6.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1.5 font-sans font-bold">Community Support</h5>
                    <p class="mb-4 font-medium">Register the app and get acces to knowledge and ideas from the Pavo online community</p>
                </div>
            </div>
        </div>
    </div>
    {{--<---pricing--->--}}
    <div id="pricing" class="cards-2 relative pt-8 text-center bg-gradient-to-r from-neutral-300 to-blue-100  ">
        <div class="absolute bottom-0.5 h-40 w-full  "></div>
        {{--        <div class="">--}}
        <h2 class="mb-2.5 text-white grid-rows-1 lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>
        <p class="mb-16 text-white lg:max-w-3xl grid-rows-2 lg:mx-auto"> Our pricing plans are set up in such a way that any user can start enjoying Pavo without worrying so much about costs. They are flexible and work for any type of industry </p>

        {{--           <---items--->--}}
        <div class="container grid grid-cols-3 px-4 pb-px p-5 mx-auto gap-3.5">
            <div class="card relative block rounded  w-80 h-auto grid-cols-4 gap-3 flex-col mr-auto mb-6 ml-auto mx-auto shadow-md ">
                <div class="card-body p-8 bg-gradient-to-r from-cyan-200 to-blue-100 animate__animated wow animate__flipInY">
                    <div class="card-title mb-1.5 text-blue-500 font-bold text-center">STANDARD</div>
                    <div class="price"><span class="currency mr-1.5 text-amber-800 font-light ">$</span><span class="value text-gray-700 font-medium h-5 text-center">29</span></div>
                    <div class="frequency mb-1.5 font-semibold text-center">monthly</div>
                    <p class="mb-1.5 text-left">This basic package covers the marketing needs of small startups</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="blue-900" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <div>List building and relations</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Seamless platform integration</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Great performance on devices</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Community support and videos</div>
                        </li>
                    </ul>
                    <div class="button-wrapper absolute pb-1.5 text-center ml-16">
                        <a class="border rounded-2xl p-2 flex gap-1.5 bg-rose-800  text-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M9.674 2.075a.75.75 0 0 1 .652 0l7.25 3.5A.75.75 0 0 1 17 6.957V16.5h.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H3V6.957a.75.75 0 0 1-.576-1.382l7.25-3.5ZM11 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM7.5 9.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Zm3.25 0a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Zm3.25 0a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Z" clip-rule="evenodd" />
                            </svg>
                            Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="card relative block w-80 h-auto grid-cols-5 gap-3 mr-auto mx-auto mb-6 ml-auto border rounded shadow-md">
                <div class="card-body p-8 bg-gradient-to-r from-cyan-200 to-blue-100 animate__animated wow animate__flipInY">
                    <div class="card-title mb-1.5 text-blue-500 font-bold text-center">ADVANCED</div>
                    <div class="price"><span class="currency mr-1.5 text-amber-800 font-light">$</span><span class="value text-gray-700 font-medium h-5 text-center">39</span></div>
                    <div class="frequency mb-1.5 font-semibold text-center">monthly</div>
                    <p class="mb-1.5 text-left">This is a more advanced package suited for medium companies</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>List building and relations</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Seamless platform integration</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Great performance on devices</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Community support and videos</div>
                        </li>
                    </ul>
                    <div class="button-wrapper absolute pb-1.5 justify-items-center mx-auto ml-16 ">
                        <a class="border rounded-2xl p-2 bg-rose-800 gap-1.5 flex  text-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M9.674 2.075a.75.75 0 0 1 .652 0l7.25 3.5A.75.75 0 0 1 17 6.957V16.5h.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H3V6.957a.75.75 0 0 1-.576-1.382l7.25-3.5ZM11 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM7.5 9.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Zm3.25 0a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Zm3.25 0a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Z" clip-rule="evenodd" />
                            </svg>Buy Now</a>
                    </div>
                </div>
            </div>

            <div class=" relative block  w-80 h-auto mr-auto grid-cols-6 gap-3 mb-6 ml-auto mx-auto border rounded shadow-md">
                <div id="progress" class="card-body p-7 bg-gradient-to-r from-cyan-200 to-blue-100 animate__animated wow animate__flipInY">
                    <div class="card-title mb-1.5 text-blue-500 font-bold text-center">PREMIUM</div>
                    <div class="price"><span class="currency mr-1.5 text-amber-800 font-light">$</span><span class="value text-gray-700 font-medium h-5 text-center">49</span></div>
                    <div class="frequency mb-1.5 font-semibold text-center">monthly</div>
                    <p class="mb-3 text-left">This is a comprehensive package designed for big organizations</p>
                    <ul class="list mb-7 text-left space-y-2">
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>List building and relations</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Seamless platform integration</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>

                            <div>Great performance on devices</div>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <div>Community support and videos</div>
                        </li>
                    </ul>
                    <div class="button-wrapper absolute pb-1.5 text-center ml-16">
                        <a class="border rounded-2xl p-2 gap-1.5 flex bg-rose-800" href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M9.674 2.075a.75.75 0 0 1 .652 0l7.25 3.5A.75.75 0 0 1 17 6.957V16.5h.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H3V6.957a.75.75 0 0 1-.576-1.382l7.25-3.5ZM11 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM7.5 9.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Zm3.25 0a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Zm3.25 0a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5Z" clip-rule="evenodd" />
                            </svg>
                            Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
</script>

<script>
    new WOW().init();
</script>
</div>
