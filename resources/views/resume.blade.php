<section class="site-section " id="section-resume">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center">
                    <h2>My <strong>Resume</strong></h2>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="mb-5">Education</h2>
                @foreach($resume_items->take(4) as $item)
                <div class="resume-item mb-4">
                    <span class="date"><span class="icon-calendar"></span> {{$item->start}} - {{$item->end}}</span>
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->description}}</p>
                <span href="{{$item->url}}" class="school">{{$item->url}}</span>
                </div>
                @endforeach
            </div>
            @if(count($resume_items) > 4)
            <div class="col-md-6">
                <h2 class="mb-5">Experience</h2>
                @foreach($resume_items->skip(4) as $item)
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> {{$item->start}} - {{$item->end}}</span>
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                    <span href="{{$item->url}}" class="school">{{$item->url}}</span>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>