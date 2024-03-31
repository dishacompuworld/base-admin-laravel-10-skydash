
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishaCompuworld</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

</head>
<body class="">

<!-- Nav Bar -->
<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../resources/images/dishcompuworldlogo.png" class="h-12" alt="DishaCompuworld Logo" />

      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#plans" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Plans</a>
          </li>
          <li>
            <a href="#testimonials" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Testimonials</a>
          </li>

          <li>
            <a href="#contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
          <li>
            <a href="https://superclick.dishacompuworld.com/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">User Login</a>
          </li>
          <li>
            <a href="dashboard" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">The Ultimate Solution For All Your Entertainment</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Get Internet with our OTT subscriptions</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#plans" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Check Plans
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="../resources/images/mobile-app.jpg" alt="mockup">
        </div>
    </div>
</section>




    <!-- Internet Plans with OTT Subscriptions-->
    <section id ="plans" class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <!-- 50 mbps -->
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">

                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Internet Plans with OTT Subscriptions</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">12+ Languages | 450+ Live Channels | 50,000+ Movies and Web Series</p>

            </div>

            <img class="h-auto max-w-full" src="../resources/images/ENTERTAINMENT-PACK-website-23-FEB.png" alt="image description">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">50 Mbps Plans</h2>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Basic</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹600</span>
                        <span class="text-gray-500 dark:text-gray-400">/30 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Standard</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹1700</span>
                        <span class="text-gray-500 dark:text-gray-400">/90 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Premium</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹3300</span>
                        <span class="text-gray-500 dark:text-gray-400">/180 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Ultimate</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹6200</span>
                        <span class="text-gray-500 dark:text-gray-400">/365 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
            </div>
            <!-- 100 mbps -->
            <div class="mx-auto max-w-screen-md text-center mb-8 mt-8 lg:mb-12">

                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">100 Mbps Plans</h2>
            </div>

            <div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Basic</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹700</span>
                        <span class="text-gray-500 dark:text-gray-400">/30 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Standard</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹2000</span>
                        <span class="text-gray-500 dark:text-gray-400">/90 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Premium</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹3800</span>
                        <span class="text-gray-500 dark:text-gray-400">/180 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Ultimate</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹7200</span>
                        <span class="text-gray-500 dark:text-gray-400">/365 days</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
            </div>
        </div>
      </section>

    <!-- Internet Plans without OTT Subscriptions -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <!-- 50 mbps -->
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">

                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Internet Plans without OTT Subscriptions</h2>

            </div>


            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">50 Mbps Plans</h2>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Basic</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹500</span>
                        <span class="text-gray-500 dark:text-gray-400">/month</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Standard</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹1400</span>
                        <span class="text-gray-500 dark:text-gray-400">/3 months</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Premium</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹2700</span>
                        <span class="text-gray-500 dark:text-gray-400">/6 months</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Ultimate</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹5000</span>
                        <span class="text-gray-500 dark:text-gray-400">/year</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
            </div>
            <!-- 100 mbps -->
            <div class="mx-auto max-w-screen-md text-center mb-8 mt-8 lg:mb-12">

                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">100 Mbps Plans</h2>
            </div>

            <div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Basic</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹600</span>
                        <span class="text-gray-500 dark:text-gray-400">/1 month</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Standard</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹1700</span>
                        <span class="text-gray-500 dark:text-gray-400">/3 months</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Premium</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹3200</span>
                        <span class="text-gray-500 dark:text-gray-400">/6 months</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Ultimate</h3>

                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">₹6000</span>
                        <span class="text-gray-500 dark:text-gray-400">/year</span>
                    </div>
                    <!-- List -->

                    <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                </div>
            </div>
        </div>
      </section>

<!-- Testimonials -->
<section id="testimonials" class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimonials</h2>
            <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Discover What Our Valued Customers Have to Say About Their Exceptional Internet Experience!</p>
        </div>
        <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
            <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Switching to this ISP was a game-changer for my small business</h3>
                    <p class="my-4">"The internet speeds are lightning-fast, and the reliability is unmatched.The customer support team has been exceptional in addressing any concerns promptly. Our online operations have never been smoother, thanks to this reliable ISP!"</p>

                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-10 h-10 rounded-full" src="../resources/images/bharat finance.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Bharat Finance Inclusion Ltd.</div>
                        <!-- <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div> -->
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">As a remote worker, a fast and stable internet connection is crucial for my daily tasks.</h3>
                    <p class="my-4">Since choosing this ISP, I've experienced consistent high speeds and minimal downtime. The affordability of the plans surprised me, and the customer service team has been incredibly helpful whenever I had questions. Highly recommended!"</p>
                    <!-- <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p> -->
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="../resources/images/Agarkar.jpg" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Prasad Agarkar</div>
                        <!-- <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div> -->
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Streaming our favorite shows and movies has never been better!</h3>
                    <p class="my-4">"Thanks to this ISP, our family enjoys uninterrupted streaming with impressive download speeds. The installation process was hassle-free, and the bundled packages provide excellent value for money. Finally, an ISP that understands our entertainment needs!".</p>
                    <!-- <p class="my-4">Everything is so well structured and simple to use (I've learnt so much about Figma by just using the toolkit).</p> -->
                    <!-- <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p> -->
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Sharad Joshi</div>
                        <!-- <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div> -->
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Superb Gaming Experience</h3>
                    <p class="my-4">"Gaming demands a fast and reliable internet connection, and this ISP delivers on all fronts. The low latency and high-speed packages make online gaming a seamless experience. The customer support team is not only knowledgeable but also genuinely passionate about ensuring gamers get the best possible experience. I'm a happy customer!</p>
                    <!-- <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p> -->
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Prathamesh Shelar</div>
                        <!-- <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div> -->
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
<!-- contact details -->
<section id="contact" class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <!-- 50 mbps -->
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Contact Details</h2>


        </div>



        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Address</h3>

                <div class="flex justify-center items-baseline my-8">
                    <!-- <span class="mr-2 text-5xl font-extrabold">₹600</span> -->
                    <span class="text-gray-500 dark:text-gray-400">DishaCompuworld, Nardas Chawl, Antora Road, Behind ST Stand, Pen- Raigad, 402107</span>
                </div>
                <!-- List -->


            </div>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Email</h3>

                <div class="flex justify-center items-baseline my-8">
                    <span class="text-gray-500 dark:text-gray-400">support@dishacompuworld.com</span>
                    <!-- <span class="text-gray-500 dark:text-gray-400">/90 days</span> -->
                </div>
                <!-- List -->


            </div>
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Contact Number</h3>

                <div class="flex justify-center items-baseline my-8">
                    <span class="text-gray-500 dark:text-gray-400">
                        Whataspp :8805997772 <br>
                      Phone No : 8805997773
                      <!-- <img src="3670051.png" alt="Whatapplogo" class="h-8">   -->
                    <!-- <span class="text-gray-500 dark:text-gray-400">/180 days</span> -->
                </span>
                </div>
                <!-- List -->


            </div>

        </div>
        </div>
    </div>
  </section>
</body>
</html>
