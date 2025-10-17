@extends('front_end_layout.front_end')

@section('content')
      <section class="hero_section">
            <div class="container text-center">
                <div class="hero_content_wrapper position-relative">
                    <div class="sticker_img d-none d-lg-block"><img src="{{ asset('user/assets/images/Sticker.png')}}" alt="" class="img-fluid"></div>
                    <h1 class="heading70px"> React with your face. <br> Connect like never before.</h1>
                    <p class="fw_400">Send video reactions instead of boring emojis.</p>
                </div>
                <div class="browse_all_features">
                    <a href=""><i class="fa fa-play" aria-hidden="true"></i> Browse All Features</a>
                </div>
                <div class="banner_img pt-5 ">
                    <img src="{{ asset('user/assets/images/banner-img.png')}}" alt="" class="img-fluid " width="" height="">
                </div>
            </div>
        </section>
        <!-- <section class="sphere_section" id="counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw_700 heading55px">A Sphere Like Never Before - Let's Dive into Our</h2>
                        <p>We rely on various messaging apps to stay connected, sharing everything from jokes and favorite songs to important updates with friends and family. Yet, despite the convenience, there is often a gap between what we are trying to express and how it is received.</p>
                    </div>
                    <div class="col-lg-6">
                        <p>As senders, we may feel that words, emojis, or gifs just don’t capture the true essence of our message, leaving us with the sense that it falls flat. On the flip side, receivers might feel similarly, wishing they could respond in a way that feels more personal and meaningful than a quick thumbs-up or a generic reply. This disconnect can leave us longing for a deeper, more authentic exchange that truly reflects our feelings and reactions.</p>
                        <div class="row">
                            <div class="col-4 ">
                                <div class="content_wrapper  d-flex">
                                    <h2 class="counter-value   fw_700 heading55px " data-count="10">0k</h2>
                                    <h2 class="fw_700 heading55px">+</h2>
                                </div>
                                <p>Active Listeners</p>
                            </div>
                            <div class="col-4">
                                <div class="content_wrapper  d-flex">
                                    <h2 class="fw_700 heading55px">5K</h2>
                                    <h2 class="fw_700 heading55px">+</h2>
                                </div>
                                <p>Total Downloads</p>
                            </div>
                            <div class="col-4">
                                <div class="content_wrapper d-flex ">
                                    <h2 class="fw_700 heading55px">150K</h2>
                                    <h2 class="fw_700 heading55px">+</h2>
                                </div>
                                <p>Various Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ===== COUNTER SECTION ===== -->
<section class="sphere_section" id="counter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="fw_700 heading55px">A Sphere Like Never Before - Let's Dive into Our</h2>
        <p>
          We rely on various messaging apps to stay connected, sharing everything from jokes and favorite songs
          to important updates with friends and family. Yet, despite the convenience, there is often a gap
          between what we are trying to express and how it is received.
        </p>
      </div>

      <div class="col-lg-6">
        <p>
          As senders, we may feel that words, emojis, or gifs just don’t capture the true essence of our message,
          leaving us with the sense that it falls flat. On the flip side, receivers might feel similarly,
          wishing they could respond in a way that feels more personal and meaningful than a quick thumbs-up
          or a generic reply. This disconnect can leave us longing for a deeper, more authentic exchange that
          truly reflects our feelings and reactions.
        </p>

        <div class="row">
          <div class="col-4">
            <div class="content_wrapper d-flex">
              <h2 class="counter-value fw_700 heading55px" data-count="10">0</h2>
              <h2 class="fw_700 heading55px">K+</h2>
            </div>
            <p>Active Listeners</p>
          </div>

          <div class="col-4">
            <div class="content_wrapper d-flex">
              <h2 class="counter-value fw_700 heading55px" data-count="5">0</h2>
              <h2 class="fw_700 heading55px">K+</h2>
            </div>
            <p>Total Downloads</p>
          </div>

          <div class="col-4">
            <div class="content_wrapper d-flex">
              <h2 class="counter-value fw_700 heading55px" data-count="150">0</h2>
              <h2 class="fw_700 heading55px">K+</h2>
            </div>
            <p>Various Topics</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <section class="amazingservices">
            <div class="container">
                <div class="row  align-items-center">
                    <div class="position-relative amazing_content_wrapper">
                        <div><img src="{{ asset('user/assets/images/Sticker2.png')}}" alt="" width="" height="" class="img-fluid amazing_img d-none d-lg-block"></div>
                        <h2 class="fw_700 heading40px mb-lg-5 mb-4 mt-5 mt-lg-0 text-center">Amazing Services & Features for you</h2>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-1">
                            <img src="{{ asset('user/assets/images/Vector1.png')}}" width="" height="" alt="" class="img-fluid">
                            <h3 class="heading25px mt-3">Cross-Platform Accessibility</h3>
                            <p>Use Reactosphere seamlessly on both iOS and Android devices, ensuring accessibility wherever you go.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-1">
                            <img src="{{ asset('user/assets/images/Vector1.png')}}" width="" height="" alt="" class="img-fluid">
                            <h3 class="heading25px mt-3">Seamless Document Sharing</h3>
                            <p>Upload and share documents effortlessly with your team, clients, or friends, with support for files up to 25MB.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-1">
                            <img src="{{ asset('user/assets/images/Vector1.png')}}" width="" height="" alt="" class="img-fluid">
                            <h3 class="heading25px mt-3">Consent-Driven Privacy </h3>
                            <p>Privacy is our priority! Recipients must provide consent before recording, ensuring a respectful experience..</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-1">
                            <img src="{{ asset('user/assets/images/Vector1.png')}}" width="" height="" alt="" class="img-fluid">
                            <h3 class="heading25px mt-3">Engaging Video Reactions</h3>
                            <p>Capture authentic reactions with a simple video recording feature that fosters connection.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-1">
                            <img src="{{ asset('user/assets/images/Vector1.png')}}" width="" height="" alt="" class="img-fluid">
                            <h3 class="heading25px mt-3">User-Friendly Interface</h3>
                            <p>Navigate through our intuitive design, making sharing and reacting easy for everyone.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-1">
                            <img src="{{ asset('user/assets/images/Vector1.png')}}" width="" height="" alt="" class="img-fluid">
                            <h3 class="heading25px mt-3">Robust Security Measures</h3>
                            <p>Reactosphere prioritizes user data security & privacy, adhering to US standard policies for chat applications.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thebirth ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="the-birthday-img py-2">
                                <img src="{{ asset('user/assets/images/the-birthday-img.png')}}" alt="" width="" height="" class="img-fluid birthday_img">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h2 class="heading40px fw_700 pt-4">The Birth of ReactoSphere</h2>
                            <p>Have you ever wished there was a way to really engage with someone, to see their genuine reaction to a joke, a nostalgic photo, or a video you shared?</p>
                            <p>I felt this way on Christmas Day 2023. I created a whimsical “Christmas Card” video and sent it to close family and friends, eagerly awaiting their feedback. I received several comments back, but I wondered: What if I could see the receivers/viewers’ facial expressions and emotions directly on my phone?</p>
                            <p>
                                This thought sparked the idea for an app which I originally named Reactochat.
                                When I sent the video, I expected everyone to find it funny, but some didn’t get the humor, especially the younger generation. This intrigued me—why were their reactions so different?
                            </p>
                            <p>Curious to see real-time facial reactions, I decided to create an app that allows users to share media—videos, photos, music, etc.—and capture live responses from the recipient. Instead of just reading a message or seeing a static emoji, you would experience their emotional reaction in a much more meaningful way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider-section py-4 text-center">
            <div class="slider slider-left  aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="slide-track">
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                </div>
            </div>
        </section>
        <section class="blogs_section">
            <div class="container">
                <div class="position-relative">
                    <img src="{{ asset('user/assets/images/Sticke3.png')}}" alt="" width="" height="" class="img-fluid our_blogs d-none d-lg-block mb-3">
                    <h2 class="fw_700 heading45px mb-5">Our Blogs</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('user/assets/images/our-blogs-img1.jpg')}}" alt="" width="" height="" class="img-fluid ourblog_img1">
                        <h3 class="heading18px fw_700 mt-2">Say Goodbye to Misunderstood Emojis</h3>
                        <p class="fw_700">We have all been there—sending a message and struggling to find the perfect emoji or GIF to express how we truly feel.</p>
                        <a href="#" class="read_more">Read More</a>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('user/assets/images/our-blogs-img2.jpg')}}" alt="" width="" height="" class="img-fluid ourblog_img1">
                        <h3 class="heading18px fw_700 mt-2 howm_essaging">How Messaging Apps Redefine Communication</h3>
                        <p class="fw_700">The rise of messaging apps has drastically reshaped communication, making it easier to stay in touch across distances.</p>
                        <a href="#" class="read_more">Read More</a>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('user/assets/images/our-blogs-img3.jpg')}}" alt="" width="" height="" class="img-fluid ourblog_img1">
                        <h3 class="heading18px fw_700 mt-2">How to Maintain Close Bonds</h3>
                        <p class="fw_700">Living far from loved ones; whether for studies, work, or other reasons, can be challenging.</p>
                        <a href="#" class="read_more">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_blogssection_tow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bringing_reactosphere  text-center">
                            <img src="{{ asset('user/assets/images/mobile-img1.png')}}" alt="" width="" height="" class="img-fluid Bringing_img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="heading40px fw_700 pt-3">Bringing Reactosphere Idea to Life</h2>
                        <p>I knew I was onto something, but as someone without a development background, I was not sure how to bring it to life. Thankfully, I found the right partners. On July 19, 2024, I teamed up with Damien from Meta App Coders, who understood my vision and assembled a team of app development experts. Together, we have started building the app, which we have since named Reactosphere—a name that perfectly captures its purpose: fostering real, interactive communication between users.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="bringing_reactosphere  text-center">
                            <img src="{{ asset('user/assets/images/mobile-img2.png')}}" alt="" width="" height="" class="img-fluid Bringing_img">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <h2 class="heading40px fw_700 pt-3" >Improving  Messaging Experiencethe Promis of Reactosphere</h2>
                        <p>Reactosphere is still in its early stages, but the potential it holds to reshape how we communicate is exciting. The concept behind the app is simple yet profound: enabling users to experience genuine reactions when sharing messages, images, videos, and songs with others. This could transform the way we interact online and make digital communication feel more human and personal.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="bringing_reactosphere  text-center">
                            <img src="{{ asset('user/assets/images/mobile-img3.png')}}" alt="" width="" height="" class="img-fluid Bringing_img">
                        </div>
                    </div>
                    <div class="col-lg-6  ">
                        <h2 class="heading40px fw_700 pt-3">Real Reactions, Real Connections</h2>
                        <p>One of the most compelling aspects of Reactosphere is its ability to let users witness how the recipient truly feels when they receive something—whether it is a funny video, a heartfelt message, or a favorite song. In contrast to current methods where reactions are often reduced to quick emojis or text responses, Reactosphere would provide a more authentic and expressive exchange. Imagine sending a message and seeing the smile or laugh of the person on the other end, or sharing a meaningful song and feeling their emotional response in real time. This kind of interaction could make online connections feel more genuine and meaningful.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="bringing_reactosphere  text-center">
                            <img src="{{ asset('user/assets/images/mobile-img4.png')}}" alt="" width="" height="" class="img-fluid Bringing_img">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <h2 class="heading40px fw_700 pt-3">Moving Beyond Emojis and Text</h2>
                        <p>Today, much of our digital communication is reduced to simple emojis, quick replies, and pre-recorded reactions. While convenient, this can make online interactions feel flat and impersonal. Reactosphere promises to take communication to the next level, allowing users to share not just content, but the emotional impact of that content. Whether it is a friend’s reaction to a funny meme or the joy someone feels when receiving a personal message, the ability to see a real-time response can bring our digital lives closer to in-person experiences.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="bringing_reactosphere  text-center">
                            <img src="{{ asset('user/assets/images/mobile-img5.png')}}" alt="" width="" height="" class="img-fluid Bringing_img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="heading40px fw_700 pt-3">A Vision for the Future</h2>
                        <p>Though Reactosphere is still a work in progress, the potential to revolutionize online communication is clear. By focusing on emotional connection and human expression, this app could redefine how we interact digitally. With time and innovation, it could make our online interactions more meaningful, expressive, and, ultimately, more human.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider-section py-4 text-center ">
            <div class="slider slider-left  aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="slide-track">
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                    <hr>
                    <img src="{{ asset('user/assets/images/salider-img.png')}}" class="tech_img" width="" height="" alt="Website Brand" loading="lazy">
                </div>
            </div>
        </section>
        <div class="get_the_full">
        <section class="get_the_full_experience ">
            <div class="container">
                <img src="" alt="">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="heading48px fw_700">Get the Full Experience on Mobile!</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <img src="{{ asset('user/assets/images/AppStore-img.png')}} " alt="" width="" height="" class="img-fluid appstore-img">
                        <img src="{{ asset('user/assets/images/PlayStore-img.png')}}" alt="" width="" height="" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{ asset('user/assets/images/Qr-img.png')}}" width="" height=""  class="fluid qr_image"  alt="">
                        </div>
                        <img src="{{ asset('user/assets/images/Experience-img.png')}}" alt="" width="" height="" class="img-fluid experince-img d-none d-lg-block">
                    </div>
                </div>
            </div>
        </section>

@endsection
