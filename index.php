<?php include 'header.php'; ?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="js/jquery.popupoverlay.js"></script>
  <link rel="stylesheet" href="css/events.css">

  <link rel="icon" href="favicon.ico" type="image/x-icon" sizes="16x16" />
  <link rel="stylesheet" href="_next/static/css/96d0ccac37ba4489.css" crossorigin="" data-precedence="next" />
  <link rel="stylesheet" href="_next/static/css/d079c8b10736bdbc.css" crossorigin="" data-precedence="next" />

  <title>CyberZero Club</title>
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet" />

</head>
<style>
  [x-cloak] {
    display: none;
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

<body>

  <main>
    <div class="heroContainer">
      <div class="absolute w-full h-full">
        <marquee behavior="" direction=""
          class="footer-bg-text text-[64px] sm:text-[130px] lg:text-[180px] font-semibold w-full z-10">Cyber Security
        </marquee>
        <marquee behavior="" direction="right"
          class="footer-bg-text text-[64px] sm:text-[130px] lg:text-[180px] font-semibold w-full z-10">Cyber Security
        </marquee>
      </div>
      <div class="flex justify-center w-[50%] h-full absolute">
        <h1 class=" text-[5rem] sm:text-[90px] font-bold">CyberZero <br />Club</h1>
      </div>
      <div class="flex justify-center w-full h-full ">
      <div class="w-full h-full flex flex-wrap flex-row align-center">
        <div class="day">
          <h1 id="days">23</h1>
          <h2 id="daystxt">Days</h2>
        </div>
        <div class="hour">
          <h1 id="hours">00</h1>
          <h2 id="hourstxt">Hours</h2>
        </div>
        <div class="minute">
          <h1 id="minutes">00</h1>
          <h2 id="minutestxt">Minutes</h2>
        </div>
        <div class="second">
          <h1 id="seconds">00</h1>
          <h2 id="secondstxt">Secondes</h2>
        </div>
      </div>
      </div>
      <div class="section-padding section-width-constraint mainText">
        <p class="md:min-h-[30vmin]"></p>
        <div>
          <!-- <p class="text-sm md:text-2xl mt-10 md:mt-20">
              CTF Date: 7th September 2024 <br />Conference Date: 8th September
              2024
            </p> -->
        </div>
        <!-- <p class="text-sm md:text-2xl">
            Venue: Graphic Era Hill University, Clement Town, Dehradun
          </p> -->
      </div>
      <div class="conference cyber"></div>
      <div class="cards"></div>
    </div>
    <section class="text-white overflow-hidden">
      <div class="relative">
        <div class="section-padding section-width-constraint">
          <h2 class="h2-text leading-[112%] text-left font-bold mb-[26px] md:mb-[40px] md:leading-[148%]">
            Mr. Anmol Kumar<br />
            <span class="text-[#6104D7]"> Funder</span>
          </h2>
          <p class="mb-[24px] text-left pl-0 para-text leading-[137%] max-w-[90%] md:max-w-[60%] lg:max-w-[70%]">
            Hello I’m Anmol Kumar ,the Founder of cyberZero.club our community focused on raising awareness about
            cybersecurity and promoting a safe digital environment. this journey to protect ourselves and our digital
            future! I’m incredibly passionate about cybersecurity, with hands-on experience in tools,and hold
            certifications as an Enterprise Security Cyber Criminologist, Digital Forensics Investigator, Cyber Crime
            Investigator, and Cyber Security Researcher.
          </p>
          <!-- <a class="primary-btn mt-[32px] mr-auto md:mt-[36px]" href="about-us.html">About Us</a> -->
          <img alt="" loading="lazy" width="378" height="518" decoding="async" data-nimg="1"
            class="rounded-full absolute top-[10%] right-7 max-h-full opacity-20 translate-x-[15%] -z-10 md:top-0 md:translate-x-0 md:opacity-70 md:max-h-none"
            style="color: transparent" src="assets/member/Anmol3.webp" />
        </div>
      </div>
    </section>
    <section class="section-width-constraint px-3 md:px-[clamp(48px,7.78vw,112px)] py-4 md:py-8 lg:py-12">
      <h1 class="text-white h1-text font-semibold mb-4 sm:mb-8 md:mb-[clamp(64px,5.56vw,80px)]">
        Our Honourable's
      </h1>
      <div class="flex flex-wrap items-center justify-evenly ">
        <div data-aos="fade-down-right"
          class=" relative container mx-auto flex flex-col px-5 py-8 md:flex-row items-center">
          <div class="w-full sm:w-1/2 flex justify-center mb-10 sm:mb-0">
            <img src="assets/images/Dr.DeveshSingh.webp" alt="" class="object-cover rounded-full w-90 h-96">
          </div>
          <div class="w-full sm:w-1/2 h-full flex items-center text-left">
            <span>
              <h2 class="h2-text leading-[112%] text-left font-bold mb-[26px] md:mb-[40px] md:leading-[148%]">Dr. Devesh
                Kumar
                Singh <br /><span class="text-[#6104D7]">Chairman</span></h2>
              <p class="mb-[24px] pl-0 para-text">Dr. Devesh Kumar Singh, Hon’ble Chairman of Noida
                International University.
                In 2013, he successfully completed his doctorate and decided to join his family’s business
                by taking reins of Noida International University.
                His persistent drive that children should get the right to equal education.</p>
            </span>
          </div>
        </div>

        <div data-aos=" fade-down-left"
          class=" relative container mx-auto flex flex-col-reverse px-5 py-8 md:flex-row items-center">
          <div class="w-full sm:w-1/2 h-full flex items-center text-right">
            <span>
              <h2 class="h2-text leading-[112%] text-right font-bold mb-[26px] md:mb-[40px] md:leading-[148%]">Prof.
                (Dr.) Vikram
                Singh <br /> <span class="text-[#6104D7]">Chancellor</span></h2>

              <p class="mb-[24px] pl-0 para-text"">Prof. (Dr.) Vikram Singh is the Chancellor of Noida
                    International University and a retired Director General of Police (DGP) in Uttar Pradesh.
                    Known for his tireless efforts in curbing crime and establishing law and order, Dr. Vikram
                    Singh is a prominent figure with high integrity and discipline.</p>
                </span>
              </div>
              <div class=" w-full sm:w-1/2 flex justify-center mb-10 sm:mb-0">
                <img src="assets/images/Dr.-Vikram-Singh.webp" alt="" class="object-cover rounded-full w-90 h-96">
          </div>
        </div>
        <div data-aos="fade-down-right"
          class="relative container mx-auto flex flex-col px-5 py-8 md:flex-row items-center">
          <div class="w-full sm:w-1/2 flex justify-center mb-10 sm:mb-0">
            <img src="assets/images/Dr.-Uma-Bhardwaj.webp" alt="" class="object-cover rounded-full w-90 h-96">
          </div>
          <div class="w-full sm:w-1/2 h-full flex items-center text-left">
            <span>
              <h2 class="h2-text leading-[112%] text-left font-bold mb-[26px] md:mb-[40px] md:leading-[148%]">
                Prof.(Dr.)Uma
                Bhardwaj<br /><span class="text-[#6104D7]">Vice
                  Chancellor</span></h2>
              <p class="mb-[24px] pl-0 para-text">Prof. (Dr.) Uma Bhardwaj serves as the
                Vice-Chancellor of Noida International University. In a message to students and parents, she
                emphasizes the institution's commitment to providing education aligned with industry
                standards and producing skilled leaders capable of contributing to society.</p>
            </span>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding section-width-constraint">
      <h1 class="text-white h1-text font-semibold mb-4 sm:mb-4 md:mb-[36px]">
        BSides confrences feature
      </h1>
      <div class="flex flex-col gap-9 md:gap-[104px] md:flex-row">
        <div>
          <p class="para-text md:mb-[66px] max-w-[35ch]">
            The conference will be held one-days and will feature a variety of
            talks, workshops, and panels on a wide range of security topics.
          </p>
          <a class="primary-btn py-6 text-[20px] text-center font-bold w-3/4 box-border hidden md:block"
            href="tickets.html">GET YOUR TICKETS</a>
        </div>
        <div class="hidden md:flex flex-col grow items-center relative overflow-hidden w-[unset] mx-auto">
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] md:text-[clamp(28px,2.6vw,36px)] xl:text-[clamp(36px,2.8vw,48px)] md:absolute rounded-lg text-center text-white">
            <div class="bg-[#0c0909] py-4 px-3 xl:px-6 rounded-lg">
              Keynotes and talks
            </div>
          </div>
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] md:text-[clamp(28px,2.6vw,36px)] xl:text-[clamp(36px,2.8vw,48px)] md:absolute rounded-lg text-center text-white">
            <div class="bg-[#0c0909] py-4 px-3 xl:px-6 rounded-lg">
              Panel discussions
            </div>
          </div>
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] md:text-[clamp(28px,2.6vw,36px)] xl:text-[clamp(36px,2.8vw,48px)] md:absolute rounded-lg text-center text-white">
            <div class="bg-[#0c0909] py-4 px-3 xl:px-6 rounded-lg">
              CTF competitions
            </div>
          </div>
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] md:text-[clamp(28px,2.6vw,36px)] xl:text-[clamp(36px,2.8vw,48px)] md:absolute rounded-lg text-center text-white">
            <div class="bg-[#0c0909] py-4 px-3 xl:px-6 rounded-lg">
              Village events
            </div>
          </div>
        </div>
        <div class="md:hidden grow flex flex-col w-full gap-3 mx-auto">
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] rounded-lg text-center text-white">
            <div class="bg-[#0c0909] rounded-lg py-4 px-3">
              Keynotes and talks
            </div>
          </div>
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] rounded-lg text-center text-white">
            <div class="bg-[#0c0909] rounded-lg py-4 px-3">
              Panel discussions
            </div>
          </div>
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] rounded-lg text-center text-white">
            <div class="bg-[#0c0909] rounded-lg py-4 px-3">
              CTF competitions
            </div>
          </div>
          <div
            class="p-[2px] bg-gradient-to-r from-[#EC0033] to-[#6104D7] overflow-hidden font-semibold text-[20px] rounded-lg text-center text-white">
            <div class="bg-[#0c0909] rounded-lg py-4 px-3">
              Village events
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding section-width-constraint text-white">
      <h1 class="h1-text font-semibold mb-5 md:mb-10">Let&#x27;s connect</h1>
      <div
        class="flex flex-col md:grid md:grid-rows-1 md:grid-cols-2 gap-[40px] rounded-[10px] bg-[#5e5e5e24] fill-[#5e5e5e24] backdrop-blur-[2.5px] stroke-[1.5px] stroke-[#ffffff5c] p-4 md:p-[40px]">
        <div class="formCon">
          <div class="text-[14px] md:text-[16px]">

            <form class="space-y-2" method="post">
              <div class="flex flex-col">
                <label for="name">Name</label><input
                  class="mt-2 block rounded-md border-2 border-white bg-black px-3 py-3 placeholder:text-gray-400 focus:ring-2 focus:ring-[#6104D7]"
                  type="text" name="name" style="border: inherit" id="name" placeholder="Full name" name="name"
                  value="" />
                <p class="text-[#a50000] text-sm mb-0 mt-[2px]"></p>
              </div>
              <div class="flex flex-col">
                <label for="email">Email</label><input
                  class="mt-2 block rounded-md border border-white bg-black px-3 py-3 placeholder:text-gray-400 focus:ring-2 focus:ring-[#6104D7]"
                  type="email" name="email" id="email" placeholder="you@company.com" style="border: inherit"
                  name="email" value="" />
                <p class="text-[#a50000] text-sm mb-0 mt-[2px]"></p>
              </div>

              <div class="flex flex-col">
                <label for="message">Message</label><textarea
                  class="mt-2 resize-none block rounded-md bg-black p-3 placeholder:text-gray-400 focus:ring-2 focus:ring-[#6104D7] outline-none border border-white"
                  rows="3" maxlength="200" style="border: inherit" name="message" id="message"
                  placeholder="Your messege"></textarea>
                <p class="text-[#a50000] text-sm mb-0 mt-[2px]"></p>
              </div>
              <div class="flex justify-center items-center pt-4">
                <div></div>
              </div>
            </form>
          </div>
        </div>
        <div
          class="flex justify-center items-center grow bg-[rgba(255,255,255,0.16)] rounded-[14px] h-[400px] md:h-[unset]">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.555543571263!2d77.53691617438488!3d28.372283995853333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc74a1da523db%3A0xf0736e7a99d63eb0!2sNoida%20International%20University!5e0!3m2!1sen!2sin!4v1699988235160!5m2!1sen!2sin"
            class="w-[95%] h-[95%] rounded-[10px]" style="border: 0" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>
  <script src="js/timer.js"></script>
  <?php include 'footer.php'; ?>

</body>

</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
  // Form variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Include PHPMailer configuration
  require 'auth/PHPMailer/Exception.php';
  require 'auth/PHPMailer/PHPMailer.php';
  require 'auth/PHPMailer/SMTP.php';

  // Create a new PHPMailer instance
  $mail = new PHPMailer(true);

  try {

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false;

    // Sender and recipient email addresses
    $mail->setFrom('info@cyberzero.club', 'Cyberzero account team');
    $mail->addAddress('anshukiran.s30@gmail.com', 'Recipient');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body = "Name: $name\n Email: $email\n\n$message";

    // Send the email
    $mail->send();

    echo '<script>alert("Message has been sent successfully!");</script>';
  } catch (Exception $e) {
    echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
  }
}
?>