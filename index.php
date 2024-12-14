<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
    <title>OpenEDU</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DaisyUI CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- FontAwesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .fade-in {
        animation: fadeIn 2s ease-in forwards;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      .slide-in {
        animation: slideIn 1.5s ease-out forwards;
      }

      @keyframes slideIn {
        from {
          transform: translateX(-100%);
        }
        to {
          transform: translateX(0);
        }
      }

      .zoom-in {
        animation: zoomIn 1.5s ease-in forwards;
      }

      @keyframes zoomIn {
        from {
          transform: scale(0.8);
          opacity: 0;
        }
        to {
          transform: scale(1);
          opacity: 1;
        }
      }

      .rotate-in {
        animation: rotateIn 1.5s ease-in-out forwards;
      }

      @keyframes rotateIn {
        from {
          transform: rotate(-360deg);
          opacity: 0;
        }
        to {
          transform: rotate(0deg);
          opacity: 1;
        }
      }
    </style>
  </head>
  <body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="sticky top-0 z-30 bg-white shadow-md fade-in">
      <nav class="max-w-7xl mx-auto p-5 flex justify-between items-center">
        <!-- Logo -->
        <div>
          <img
            class="h-14"
            src="./assetes/Screenshot 2024-10-28 at 19.35.43.png"
            alt="OpenEDU Logo"
          />
        </div>
        <!-- Navigation Buttons -->
        <div class="hidden md:flex gap-4">
          <a href="#" class="btn btn-link text-gray-800 hover:text-green-600"
            >Home</a
          >
          <a
            href="#about"
            class="btn btn-link text-gray-800 hover:text-green-600"
            >About</a
          >
          <a
            href="#contact"
            class="btn btn-link text-gray-800 hover:text-green-600"
            >Contact</a
          >
        </div>
        <!-- Login Button -->
        <div>
          <a href="./login.html">
            <button
              class="btn bg-green-600 text-white font-bold text-xl px-6 py-2 hover:bg-green-700 transition"
            >
              Login
            </button>
          </a>
        </div>
      </nav>
    </header>

    <!-- Main Content -->
    <main>
      <!-- Hero Section -->
      <section
        class="relative h-screen bg-cover bg-center fade-in"
        style="
          background-image: url('https://www.unicefusa.org/sites/default/files/styles/50_percent/public/field-images/story-banner/2017/Banner.UN068433_0.jpg?itok=uWQsqNoP');
        "
      >
        <div
          class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center"
        >
          <div class="text-center text-white px-5">
            <h1 class="text-5xl font-bold mb-6 slide-in">
              Empowering Education
            </h1>
            <p class="text-xl mb-8 slide-in">
              Making quality education accessible to every child around the
              world.
            </p>
            <a href="./login.html">
              <button
                class="btn bg-green-600 text-white font-bold px-6 py-3 hover:bg-green-700 transition slide-in"
              >
                Donate Now
              </button>
            </a>
          </div>
        </div>
      </section>

      <!-- How We Help Section -->
      <section id="about" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-5">
          <h2
            class="text-4xl font-bold text-center text-gray-800 mb-12 fade-in"
          >
            How We Help
          </h2>
          <div class="flex flex-col lg:flex-row items-center gap-10 fade-in">
            <!-- Left Content -->
            <div class="lg:w-1/2 bg-white p-8 rounded-lg shadow-lg zoom-in">
              <h3 class="text-3xl font-semibold text-green-600 mb-4">
                Empowering Education
              </h3>
              <p class="text-lg text-gray-700 leading-7 mb-6">
                At OpenEDU, we believe in the power of education to transform
                lives. Our mission is to provide children access to quality
                education, ensuring they have the tools they need to create a
                brighter future. We focus on supporting underserved communities
                through school supplies and educational programs.
              </p>
              <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Distributing essential school supplies.</li>
                <li>Providing access to digital learning tools.</li>
                <li>Organizing community-led educational workshops.</li>
              </ul>
            </div>
            <!-- Right Image -->
            <div class="lg:w-1/2">
              <img
                class="rounded-lg shadow-lg hover:shadow-xl transition-shadow zoom-in"
                src="https://cini.org.uk/wp-content/uploads/2021/12/gallery3.jpg"
                alt="Children learning"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Volunteer Section -->
      <section id="volunteer" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-5">
          <h2
            class="text-4xl font-bold text-center text-gray-800 mb-12 fade-in"
          >
            Our Volunteers
          </h2>
          <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 fade-in"
          >
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
              <img
                src="./assetes/oliver-ragfelt-khV4fTy6-D8-unsplash.jpg"
                alt="Volunteer 1"
                class="rounded-full w-32 h-32 mx-auto mb-4"
              />
              <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
              <p class="text-gray-600">Coordinator</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
              <img
                src="./assetes/oliver-ragfelt-khV4fTy6-D8-unsplash.jpg"
                alt="Volunteer 2"
                class="rounded-full w-32 h-32 mx-auto mb-4"
              />
              <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
              <p class="text-gray-600">Program Manager</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
              <img
                src="./assetes/oliver-ragfelt-khV4fTy6-D8-unsplash.jpg"
                alt="Volunteer 3"
                class="rounded-full w-32 h-32 mx-auto mb-4"
              />
              <h3 class="text-xl font-semibold text-gray-800">Emily Brown</h3>
              <p class="text-gray-600">Event Planner</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-5">
          <h2
            class="text-4xl font-bold text-center text-gray-800 mb-12 fade-in"
          >
            Contact Us
          </h2>
          <form
            action="#"
            method="POST"
            class="bg-white p-8 rounded-lg shadow-lg slide-in"
          >
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label
                  for="name"
                  class="block text-sm font-semibold text-gray-700"
                  >Your Name</label
                >
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                  placeholder="Enter your name"
                  required
                />
              </div>
              <div>
                <label
                  for="email"
                  class="block text-sm font-semibold text-gray-700"
                  >Your Email</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                  placeholder="Enter your email"
                  required
                />
              </div>
            </div>
            <div class="mt-6">
              <label
                for="message"
                class="block text-sm font-semibold text-gray-700"
                >Your Message</label
              >
              <textarea
                id="message"
                name="message"
                rows="4"
                class="mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                placeholder="Enter your message"
                required
              ></textarea>
            </div>
            <div class="mt-6 text-center">
              <button
                type="submit"
                class="btn bg-green-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-700 transition"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10 fade-in">
      <div class="max-w-7xl mx-auto text-center">
        <h4 class="text-lg font-bold mb-4">Empowering Future Generations</h4>
        <p class="text-sm mb-6">
          Join us in making quality education accessible to every child.
          Together, we can change lives!
        </p>
        <div class="flex justify-center gap-5 mb-6">
          <a href="#" class="text-green-500 text-2xl hover:text-green-600"
            ><i class="fab fa-facebook"></i
          ></a>
          <a href="#" class="text-green-500 text-2xl hover:text-green-600"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="#" class="text-green-500 text-2xl hover:text-green-600"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="#" class="text-green-500 text-2xl hover:text-green-600"
            ><i class="fab fa-youtube"></i
          ></a>
        </div>
        <hr class="border-gray-600 mb-4" />
        <p class="text-xs">© 2024 OpenEDU. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
