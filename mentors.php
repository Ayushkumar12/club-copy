<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="_next/static/css/96d0ccac37ba4489.css" crossorigin="" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="_next/static/css/51ed1c0b4e13e7dd.css" crossorigin="" />
  <link rel="icon" href="favicon.ico" sizes="any" />
  <title>CyberZero Club</title>
  <meta name="description" content="Official website of BSides Dehradun" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" sizes="16x16" />
  <meta name="next-size-adjust" />
  <link rel="stylesheet" href="css/member.css" />


  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="__className_e04c4e">
  <section class="section-padding section-width-constraint">
    <h1
      class="font-bold w-fit font-poppins text-2xl md:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-[#6104D7] to-[#FF0000] mb-3 md:mb-6">
      Our Mentors
    </h1>
    <div class="mt-10">
      <!-- <p class="para-text font-outfit">
          BSides Dehradun speakers are the heartbeat of our cybersecurity
          community. With a diverse mix of seasoned experts and emerging
          talents, they deliver captivating talks on the latest trends and
          challenges. Dive into their bios to see who&#x27;s leading the charge
          in shaping the future of cybersecurity.
        </p> -->
    </div>
  </section>
  <section class="text-gray-600 " style="position: relative; margin-top: 20px;">
    <div class="flex flex-col md:flex-row justify-center" >
      <div class=" m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/geeta.png" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Dr.A. Geetha Bhavani</h2>

          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">
            Dean of School
          </h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Dr.A. Geetha Bhavani is Dean, School of Sciences. She received Ph.D.
            Heterogeneous Catalysis in 2007 from Anna University. In 2007 joined R&D Centre, Chennai Petroleum
            Corporation Ltd (IOCL) and experienced on novel catalyst synthesis and testing in pilot plant on all
            catalytic reforming reactions and developed the catalyst for desulphurisation with collaborative project
            on IIT-Madras.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>

      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/deepaka.jpg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Coordinator</h2>

          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Dr. Deepka Sharma</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Dr. Deepika Sharma have spent years researching and studying the art of
              motivation, and thrilled to share her knowledge and expertise with us. She has good knowledge in
              Computer applications like Image processing, forensics, Image Forgery, software Project Management and
              database management system.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div> 
      
      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/gagan sir.jpg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Head of Department</h2>
          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Prof.(Dr.) Gagan Tiwari</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Prof.(Dr.) Gagan Tiwari, have 22+ years of teaching experience,
              specializes in Algorithm Design, Automata Theory, Machine Learning, and Neural Networks. A senior IEEE
              member, he actively contributes as a Reviewer and Editor. His prolific publication record includes
              Scopus indexed International and National Conferences and Journals. His core mission is creating a
              tech platform for students for the modern tech era, shaping future technologically savvy
              individuals.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center">
      
      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/mahi.jpeg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Club Coordinator</h2>
          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Dr. Mahi</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Dr. Mahi is highly proficient in Python, Django, MongoDB, and MySQL,
              along with expertise in frontend technologies such as HTML, CSS, and Bootstrap. Their strong
              problem-solving abilities, analytical thinking, and critical decision-making skills enable them to design
              and develop efficient, scalable, and user-friendly applications. Mahi’s ability to integrate backend and
              frontend technologies ensures seamless functionality, while their analytical mindset allows them to
              identify and resolve complex technical challenges effectively.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>

      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/nija.jpg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Dr. Nija Mani</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Dr. Nija Mani As an educator, I find profound fulfilment in helping
              students unlock the mysteries of numbers, equations, and the beauty that lies within ,mathematical
              concepts. I have the privilege of guiding students through the fascinating journey of mathematical
              discovery. I'm always eager to connect with fellow educators, students, or anyone passionate about the
              transformative power of mathematics education.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>
      
      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/Dr. Rashmi Dahiya.jpg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Dr. Rashmi Dahiya</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Dr. Rashmi Dahiya, Assistant Professor has spent more than 7 years of
              teaching in different fields of Computer Science. She has good knowledge of Data Structure and Web
              technologies. She aims to create a dynamic platform in skill development and motivating
              students to participate in different curricular activities.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center">
      
      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/hassan.jpg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Prof. (Dr.) Yazdani Hasan</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Prof. (Dr.) Yazdani Hasan is a highly experienced computer science
              educator with over 19 years of teaching at various academic levels. Known for superb teaching skills,
              excellent communication with students, and a diplomatic approach to issue resolution, Prof. Hasan has
              supervised numerous postgraduate and Ph.D. scholars.He interested in developing interdisciplinary
              programs and strong commitment to teaching & research excellence.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>

      <div class="m-4 relative flex flex-col my-6 shadow-sm border border-slate-200 rounded-lg w-96" style="backdrop-filter: blur(20px)">
        <div class="relative m-2.5 text-white rounded-lg">
          <img src="assets/images/Dr. Saurabh Kumar.jpg" class="lg:h-auto md:h-36 w-full object-cover object-center" alt="card-image" />
        </div>
        <div class="p-4">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
          <h6 class="mb-2 text-slate-800 text-xl font-semibold text-white">Dr. Saurabh Kumar</h6>
          <p class="show-toggle text-slate-600 leading-normal font-light" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content"> Dr. Saurabh Kumar is an Assistant Professor at Noida International
              University with nine years of teaching experience. He holds a Ph.D. in Image Processing, Machine Learning, Remote Sensing, and GIS.
              His research focuses on Digital Image Processing, Remote Sensing, GIS, Artificial Intelligence, and
              Machine Learning. Dr. Kumar has published patents, a book, and numerous research papers in esteemed
              journals and conferences.
            </span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-evenly">
      <br/>
      <br/>
    </div>

  </section>
</body>

</html>
<?php include 'footer.php'; ?>