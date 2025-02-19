<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/events.css">
  <title>Cyberzero|Events</title>

  <style>
      [x-cloak] {
        display: none;
      }

      :root {
        --c-bg: snow;
        --c-scrollbar: lightsteelblue;
        --c-scrollbar-hover: #000;
      }

      html {
        background-color: var(--c-bg);
        height: 100vh;
        width: 100vw;
        overflow: hidden;
      }

      html.dark {
        --c-bg: #050505;
        --c-scrollbar: #111;
        --c-scrollbar-hover: #222;
      }

      body {
        height: 100%;
        overflow-y: scroll;
      }

      ::selection {
        background: #8884;
      }

      * {
        scrollbar-color: var(--c-scrollbar) var(--c-bg);
      }

      ::-webkit-scrollbar {
        width: 6px;
      }

      ::-webkit-scrollbar:horizontal {
        height: 6px;
      }

      ::-webkit-scrollbar-track,
      ::-webkit-scrollbar-corner {
        background: var(--c-bg);
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb {
        background: var(--c-scrollbar);
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: var(--c-scrollbar-hover);
      }
    </style>
</head>

<body class="__className_e04c4e">
  <!-- Start Hero Area -->
  <section class="hero-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
          <div class="hero-content">
            <h5><i class="mdi mdi-map-marker"></i> Noida International University, U.P.
            </h5>
            <h2 class="wow fadeInUp"> comming soon </h2>
            <p class="wow fadeInUp">.</p>
            <!--<div class="button wow fadeInUp">-->
            <!--  <a href="events-form" target="_blank" class="btn ">Register Now</a>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Area -->


  <!-- Start Count Down Area -->
  <div class="count-down">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="box-head">
            <div class="box-content">
              <div class="box">
                <h1 id="days">23</h1>
                <h2 id="daystxt">Days</h2>
              </div>
              <div class="box">
                <h1 id="hours">00</h1>
                <h2 id="hourstxt">Hours</h2>
              </div>
              <div class="box">
                <h1 id="minutes">00</h1>
                <h2 id="minutestxt">Minutes</h2>
              </div>
              <div class="box">
                <h1 id="seconds">00</h1>
                <h2 id="secondstxt">Secondes</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="text-white px-2 py-10">
    <div id="features" class="mx-auto max-w-6xl">
      <p class="text-center text-base font-semibold leading-7 ">Why You Should Join Event</p>
      <h2 class="text-center font-display text-lg font-bold tracking-tight md:text-4xl">
        Enriching the academic experience and preparing them for future endeavors.
      </h2>
      <ul class="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
        <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

          <img src="https://www.svgrepo.com/show/149593/mic.svg" alt="" class="mx-auto h-10 w-10">
          <h3 class="my-3 font-display font-medium">Great Speakers</h3>
          <p class="mt-1.5 text-sm leading-6 text-secondary-500">
            help you learn new skills and knowledge in fields of cybersecurity. They can also help you stay up-to-date
            on the latest trends and developments in your industry.
          </p>

        </li>
        <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

          <img src="https://www.svgrepo.com/show/491734/users.svg" alt="" class="mx-auto h-10 w-10">
          <h3 class="my-3 font-display font-medium">Meet new people</h3>
          <p class="mt-1.5 text-sm leading-6 text-secondary-500">
            provide a platform for networking with professionals, experts, and fellow students. This can open doors to
            potential collaborations, job opportunities, and mentorship.
          </p>

        </li>
        <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
          <img src="https://www.svgrepo.com/show/350625/smile.svg" alt="" class="mx-auto h-10 w-10">
          <h3 class="my-3 font-display font-medium">Confidence Building</h3>
          <p class="mt-1.5 text-sm leading-6 text-secondary-500">
            Presenting in front of an audience, whether it's a small group in a workshop or a larger audience in a
            seminar, helps build students' confidence in public speaking and presenting their ideas.
          </p>

        </li>
        <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
          <a href="#" class="group">
            <img src="https://www.svgrepo.com/show/447665/idea-bulb-glow.svg" alt="" class="mx-auto h-10 w-10">
            <h3 class="my-3 font-display font-medium group-hover:text-primary-500">Inspiration</h3>
            <p class="mt-1.5 text-sm leading-6 text-secondary-500"> Exposure to successful professionals and engaging
              presentations can inspire and motivate students to excel in their studies and pursue their passions.
              Learning from real-world examples can be a powerful motivator.</p>
          </a>
        </li>
        <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
          <a href="#" class="group">
            <img src="https://www.svgrepo.com/show/307358/human-brain-know-learn-knowledge.svg" alt=""
              class="mx-auto h-10 w-10">
            <h3 class="my-3 font-display font-medium group-hover:text-primary-500">
              critical thinking
            </h3>
            <p class="mt-1.5 text-sm leading-6 text-secondary-500">encourage active participation and discussion. This
              can help students develop their critical thinking skills as they learn to analyze information, form their
              own opinions, and engage in respectful debate. </p>
          </a>
        </li>
        <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
          <a href="#" class="group">
            <img src="https://www.svgrepo.com/show/483991/career-2.svg" alt="" class="mx-auto h-10 w-10">
            <h3 class="my-3 font-display font-medium group-hover:text-primary-500">Career Guidance</h3>
            <p class="mt-1.5 text-sm leading-6 text-secondary-500">Attending speaker sessions in cybersecurity can
              provide valuable insights into different career paths within the industry. Speakers often share their own
              career journeys, highlighting the diverse opportunities available.</p>
          </a>
        </li>
      </ul>
    </div>
  </div>


  <section class="flex flex-col mt-8">

    <div class="container max-w-7xl px-4">

      <!-- <div class="text-center mt-16">
        <h1 class="text-white text-4xl font-bold mb-8">
          Todays Speakers
        </h1>

        Description
        <p class="text-gray-700 text-lg font-light">
            
          </p>
      </div> -->


      <div class="flex flex-wrap justify-center">

        <!-- speaker #2 -->
        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
          <div class="flex flex-col">
            <!-- Avatar -->
            <a href="#" class="mx-auto">
              <img class="h-64 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                src="assets/Event/1684176195866.jpg">
            </a>

            <!-- Details -->
            <div class="text-center mt-6">
              <!-- Name -->
              <h1 class="text-white text-xl font-bold mb-1">
                XYZ

              </h1>

              <!-- Title -->
              <div class="text-gray-700 font-light mb-2">
                abc
              </div>

              <!-- Social Icons -->

            </div>
          </div>
        </div>


        <!-- speaker #4 -->

      </div>
    </div>
  </section>

  <section>
    <div class="text-center mb-16 p-24">
      <h2 class="text-3xl text-white lg:text-4xl font-extrabold">Previous Events</h2>
      <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and
        connect with the needs of your audience early and often.</p>
    </div>
    <div class="flex flex-wrap justify-evenly -mx-4">

      <!-- second event -->
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 px-4 mb-5">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm">
          <a href="#">
            <img class="w-full h-fit object-cover rounded-t-lg" src="assets/Event/previous/events2.jpg" alt="">
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="text-gray-900 font-bold text-xl tracking-tight mb-2">Startup Horizons: Innovate to Elevate</h5>
            </a>

            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">On 19 December 2023, The Cyber zero Club successfully
                organized a workshop
                on “Startup Horizons: Innovate to Elevate “collaborating with Ms. Mohinee
                Singh CEO of CXO. The aim of the workshop was to ignite a fire among the
                students to innovate and explore the realms of entrepreneurship, cyber security &
                cutting-edge technologies
                our chief guest Ms. Mohinee Singh in her speech She shared her
                inspiring story of becoming CEO of CXO junction. She
                also spoke on how students can become entrepreneurs,
                build their own businesses, form multiples sources of
                income etc. She also delved into the different career
                options for the students to pursue in different areas. She
                also focused on the current technologies related to cyber
                security which helps the students to pursue their career
                in the recent domain of cyber.
              </span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
          </div>
        </div>
      </div>


      <!-- first event -->
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 px-4 mb-5">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm">
          <a href="#">
            <img class="w-full h-fit object-cover rounded-t-lg" src="assets/Event/previous/Event.jpg" alt="">
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="text-gray-900 font-bold text-xl tracking-tight mb-2">Cyber Forensics, Live Hacking, and Cyber
                Awareness</h5>
            </a>

            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Dr.A. Geetha Bhavani is Dean, School of Sciences. She received Ph.D.
                We believe that the "Cyber Forensics, Live Hacking, and Cyber Awareness" event will be a remarkable
                opportunity for our students to gain valuable insights into the world of cybersecurity.
                These events contribute to creating a more cyber-aware community,
                fostering a culture of cybersecurity, and equipping individuals with the knowledge and skills to protect
                themselves and their organizations from cyber threats
              </span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <section class="px-4 py-24 mx-auto max-w-7xl">
      <div class="w-full mx-auto md:w-11/12 xl:w-9/12 text-center">
        <h2 class="mb-6 text-3xl font-bold leading-none tracking-normal text-white md:text-6xl md:tracking-tight">
          Gallery</h2>
      </div>

    </section>

    <section>

      <div class="w-full h-full">
        <div class="h-fit py-6 sm:py-8 lg:py-12 mx-4">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
  <div class="grid gap-4">
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/1.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center "
        src="assets/Event/3.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/5.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/17.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/7.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/12.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/31.webp"
        alt="gallery-photo"
      />
    </div>
    
  </div>
  <div class="grid gap-4">
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/15.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/26.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/25.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/19.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/24.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/23.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center "
        src="assets/Event/8.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/33.webp"
        alt="gallery-photo"
      />
    </div>
  </div>
  <div class="grid gap-4">
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/30.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/9.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center "
        src="assets/Event/10.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/29.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/27.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/28.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/18.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/12.webp"
        alt="gallery-photo"
      />
    </div>
  </div>
  <div class="grid gap-4">
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/13.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/16.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/14.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/22.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/21.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/20.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/32.webp"
        alt="gallery-photo"
      />
    </div>
    <div>
      <img
        class="h-auto max-w-full rounded-lg object-cover object-center"
        src="assets/Event/33.webp"
        alt="gallery-photo"
      />
    </div>

  </div>
  
</div>
        </div>

      </div>


    </section>
    
  <script src="js/timer.js"></script>

</body>

</html>
<?php include 'footer.php'; ?>