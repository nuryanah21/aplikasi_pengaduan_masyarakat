
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Play | Free Tailwind CSS Template for Startup and SaaS By TailGrids
    </title>
    <link
      rel="shortcut icon"
      href="{{asset('images/favicon.png')}}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}" />

    <!-- ==== WOW JS ==== -->
    <script src="asset/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>
  <body>
    <!-- ====== Navbar Section Start -->
    <div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
          <div class="w-60 max-w-full px-4">
            <a href="index.html" class="navbar-logo block w-full py-5">
              <img
                src="{{asset('images/logo/logo-white.svg')}}"
                alt="logo"
                class="header-logo w-full"
              />
            </a>
          </div>
          <div class="flex w-full items-center justify-between px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
              </button>
              <nav
                id="navbarCollapse"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6"
              >
                <ul class="blcok lg:flex">
                  <li class="group relative">
                    <a
                      href="#home"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                      Home
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#about"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      About
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#pricing"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Pricing
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#team"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Team
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#contact"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Contact
                    </a>
                  </li>
                  <li class="submenu-item group relative">
                    <a
                      href="javascript:void(0)"
                      class="relative mx-8 flex py-2 text-base text-dark after:absolute after:right-1 after:top-1/2 after:mt-[-2px] after:h-2 after:w-2 after:-translate-y-1/2 after:rotate-45 after:border-b-2 after:border-r-2 after:border-current group-hover:text-primary lg:mr-0 lg:ml-8 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:after:right-0 lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Pages
                    </a>
                    <div
                      class="submenu relative top-full left-0 hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full"
                    >
                      <a
                        href="about.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        About Page
                      </a>
                      <a
                        href="pricing.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Pricing Page
                      </a>
                      <a
                        href="contact.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Contact Page
                      </a>
                      <a
                        href="blog-grids.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Blog Grid Page
                      </a>
                      <a
                        href="blog-details.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Blog Details Page
                      </a>
                      <a
                        href="signup.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Sign Up Page
                      </a>
                      <a
                        href="signin.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Sign In Page
                      </a>
                      <a
                        href="login"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        404 Page
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
              <a
                href="login"
                class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70"
              >
                Sign In
              </a>
              <a
                href="register"
                class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark"
              >
                Sign Up
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div
      id="home"
      class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]"
    >
      <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4">
              <br>
            <div
              class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center"
              data-wow-delay=".2s"
            >
              <h1
                class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug"
              >
                APLIKASI PENGADUAN MASYARAKAT
              </h1>
              <p
                class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed"
              >
                
              </p>
              <br>
              <br>
              <br>
              <ul class="mb-10 flex flex-wrap items-center justify-center">
                <li>
                  <a
                    href="pengaduan/create"
                    class="inline-flex items-center justify-center rounded-lg bg-white py-4 px-6 text-center text-base font-medium transition duration-300 ease-in-out hover:text-primary hover:shadow-lg sm:px-10"
                       >
                    Laporkan Sekarang
                  </a>
                </li>
                <li>
                  <a>
                    
                    <span class="pl-2">
                      <svg
                        width="20"
                        height="8"
                        viewBox="0 0 20 8"
                        class="fill-current"
                      >
                        <path
                          d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2812 0.281319C16.0625 0.468819 16.0312 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0312 7.21882 16.0625 7.56257 16.2812 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7812 7.90632 16.9375 7.84382 17.0312 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z"
                        />
                      </svg>
                    </span>
                  </a>
                </li>
              </ul>
              <div class="wow fadeInUp text-center" data-wow-delay=".3s">
              </div>
            </div>
          </div>

          <div class="w-full px-4">
            <div
              class="wow fadeInUp relative z-10 mx-auto max-w-[845px]"
              data-wow-delay=".25s"
            >
            <br>
            <br>
            <br>
              <div class="mt-16">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
