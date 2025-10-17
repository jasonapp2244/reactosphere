 <footer>
     <section class="footer-section py-5">
         <div class="container">
             <div class="row g-5 align-items-start">
                 <!-- ✅ Left Side -->
                 <div class="col-lg-5 col-sm-6">
                     <img src="{{ asset('user/assets/images/footer-logo-img.png') }}" alt="Logo" class="footer-logo" />
                     <p class="footer-desc mt-2">
                         At Reactosphere, we believe in transforming communication through innovative technology. We are
                         determined to bridge the gap between traditional messaging and modern interaction, providing
                         users with the tools to connect meaningfully.
                     </p>
                     <a href="mailto:support@reactosphere.com" class="contact-email">
                         <i class="fa fa-paper-plane" aria-hidden="true"></i> support@reactosphere.com
                     </a>
                     <div class="social-icons mt-3 d-flex">
                         <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                     </div>
                 </div>
                 <!-- ✅ Right Side Form -->
                 {{-- Support Email Form --}}
                 <div class="col-lg-7 col-sm-6">
                 <form action="{{ route('support.email.send') }}" method="POST">
                     @csrf
                     <div class="row g-4">
                         <div class="col-sm-6">
                             <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                 required>
                         </div>
                         <div class="col-sm-6">
                             <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                 required>
                         </div>
                         <div class="col-sm-6">
                             <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                         </div>
                         <div class="col-sm-6">
                             <input type="email" name="email" class="form-control" placeholder="Business Email"
                                 required>
                         </div>
                         <div class="col-12">
                             <textarea name="comments" class="form-control" rows="6" placeholder="Additional comments" required></textarea>
                         </div>
                         <div class="col-12">
                             <button type="submit" class="submit-btn">Submit</button>
                         </div>
                     </div>
                 </form>
                 </div>

             </div>
         </div>
     </section>
     </div>
 </footer>
