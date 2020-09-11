<section class="site-section" id="section-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center">
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>

        <div class="row">

            @forelse($blogs as $blog)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="blog-entry">
                    <a href="#"><img src="{{$blog->file->address}}" alt="Image placeholder" class="img-fluid"></a>
                    <div class="blog-entry-text">
                        <h3><a href="{{route('blog.single',['id'=>$blog->id])}}">{{$blog->title}}</a></h3>
                        <p class="mb-4">{{mb_strimwidth($blog->content,0,30,'...')}}</p>

                        <div class="meta">
                            <a href="#"><span class="icon-calendar"></span> {{$blog->created_at->format('Y M H:i:A')}}</a>
                            {{-- <a href="#"><span class="icon-bubble"></span> 5 Comments</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            @empty
            @endforelse
      
        </div>
    </div>
</section>