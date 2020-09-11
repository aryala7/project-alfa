<section class="site-section" id="section-contact">
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center">
                    <h2>Get <strong>In Touch</strong></h2>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                
                 <p dir="ltr" class="contactUs-response d-none"></p>
               
            </div>

            <div class="col-md-7 mb-5 mb-md-0">
                <form action="{{route('contact')}}" method="post" id="contactUs_form" class="site-form">
                    @csrf
                    <h3 class="mb-5">Get In Touch</h3>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control px-3 py-4" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control px-3 py-4" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cellphone" class="form-control px-3 py-4" placeholder="Your Phone">
                    </div>
                    <div class="form-group mb-5">
                        <textarea name="message" class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
                    </div>
                    <div class="form-group">

                        <input type="button" class="btn btn-primary submitBtn  px-4 py-3" value="Send Message">

                    </div>
                </form>
            </div>
            <div class="col-md-5 pl-md-5">
                <h3 class="mb-5">My Contact Details</h3>
                <ul class="site-contact-details">
                    <li>
                        <span class="text-uppercase">Email</span>
                        arya.lavasani@gmail.com
                    </li>
                    <li>
                        <span class="text-uppercase">Phone</span>
                        +98 920 318 0344
                    </li>
                    <li>
                        <span class="text-uppercase">Address</span>
                       Based in Tehran
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>