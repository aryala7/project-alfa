<section class="site-section" id="section-about">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                <img src="@isset($me->file){{$me->file->address}}@endisset" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-lg-5 pl-lg-5">
                <div class="section-heading">
                    <h2>About <strong>Me</strong></h2>
                </div>
                <p class="lead">@isset($me->description){{$me->description}}@endisset</p>
                {{-- <p class="mb-5  ">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> --}}

                <p>
                    <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
                    <a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
                </p>
            </div>
        </div>


    </div>
</section>