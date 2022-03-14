@extends('layouts.base')

@section('nav')
    @include('inc.nav')
@endsection

@section('title', 'Osteoparoz')

@section('content')  
    <div class="main-photo-div"><img class="image" src="images/oseto.jpeg"></div>
    <div class="frax-div bottom">
        <div class="frax-label"><span class="frax-span">FRAX</span></div>
        <div class="frax-text">
            <span class="frax-text-span">– метод прогнозирования вероятности остеопоротических переломов.</span>
            <button class="frax-btn">Մանրամասն</button>
        </div>
    </div>
    <div class="text-center">
        <span class="about-us text-uppercase mt-60">մեր մասին</span>
        <p class="some-text">
            {{$settings->where('block_id', 1)->first()->text}}
        </p>
        <br><a class="no-dec" href="#"><button class="btn-more">Ավելին</button></a><br>
        <span class="about-us text-uppercase mt-100">մեր թիմը</span><br>
        <p class="some-text">
            {{$settings->where('block_id', 2)->first()->text}}
        </p>
    </div>
    <section class="our-team">
        <div class="team-div mr-1p">
            <div class="team-div-header blue-border text-end">
                <div class="team-logo-1">
                    <img class="h-100" src="images/doc-icon-1.png">
                </div>
                <span class="team-div-span blue">ԲԺԻՇԿՆԵՐ</span>
            </div>
            <div class="team-cards-div">
                @foreach($teamDoc as $doc)
                    <div class="team-card mr-2p">
                        <div class="team-card-img">
                            <img class="imag" src="{{$doc->img}}">
                        </div>
                        <div class="team-card-text">
                            <span class="card-text-name">{{$doc->name}}</span>
                            <span class="card-text-prof">{{$doc->skill}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="team-div">
            <div class="team-div-header red-border text-end">.
                <div class="team-logo-2">
                    <img class="w-100 no-vertical-align" src="images/doc-icon-2.png">
                </div>
                <span class="team-div-span position-absolute block top-2px red">ՎԱՐՉԱԿԱՆ ԿԱԶՄ</span>
            </div>
            <div class="team-cards-div">
                @foreach($teamVarch as $doc)
                    <div class="team-card mr-2p">
                        <div class="team-card-img">
                            <img class="imag" src="{{$doc->img}}">
                        </div>
                        <div class="team-card-text">
                            <span class="card-text-name">{{$doc->name}}</span>
                            <span class="card-text-prof">{{$doc->skill}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="services text-center">
        <span class="services-title">ծԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</span><br>
        <div class="service-hr"></div>
        <div class="service-card-div">
            @foreach($servicesKhorurd as $service)
                <a class="no-dec w-21a" href="#">
                    <div class="service-card">
                        <div class="service-card-img-div">
                            <div class="service-card-img">
                                <img class="w-100 h-100 fitt" src="{{$service->img}}">
                            </div>
                        </div>
                        <div class="service-card-text">{{$service->title}}</div>
                    </div>
                </a>
            @endforeach
            @foreach($servicesDiagnostic as $service)
                <a class="no-dec w-21a" href="#">
                    <div class="service-card">
                        <div class="service-card-img-div">
                            <div class="service-card-img">
                                <img class="w-100 h-100 fitt" src="{{$service->img}}">
                            </div>
                        </div>
                        <div class="service-card-text">{{$service->title}}</div>
                    </div>
                </a>
            @endforeach 
        </div>
    </section>
    <section class="for-spec">
        <span class="services-title">մԱՍՆԱԳԵՏՆԵՐԻՆ</span><br>
        <div class="for-spec-text">
            {{$settings->where('block_id', 3)->first()->text}}
        </div>
        <div class="news">
            <div class="for-docs mr-1p">
                <div class="title"><span class="upp blue">ԲԺԻՇԿՆԵՐԻ</span> ՀԱՄԱՐ</div>
                @foreach($newsForDoc as $news)
                    <div class="news-card">
                        <div class="news-card-img">
                            <img class="w-100 h-100 fitt" src="{{$news->img}}">
                        </div>
                        <div class="news-card-title">{{$news->title}}</div>
                        <div class="news-card-text">
                            {{$news->text}}
                            <a class="no-dec" href="#"><span class="news-more-about">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</span></a>
                        </div>
                    </div>
                @endforeach
                <div class="text-left-imp">
                    <a class="no-dec" href="#" class="no-dec"><button class="news-more-btn click-btn">Ավելին</button></a>
                </div>
            </div>
            <div class="for-nurs">
                <div class="title"><span class="upp red">ԲՈՒԺՔՈՒՅՐԵՐԻ</span> ՀԱՄԱՐ</div>
                @foreach($newsForNur as $news)
                    <div class="news-card">
                        <div class="news-card-img">
                            <img class="w-100 h-100 fitt" src="{{$news->img}}">
                        </div>
                        <div class="news-card-title">{{$news->title}}</div>
                        <div class="news-card-text">
                            {{$news->text}}
                            <a class="no-dec" href="#"><span class="news-more-about">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</span></a>
                        </div>
                    </div>
                @endforeach
                <div class="text-left-imp">
                    <a href="#" class="no-dec"><button class="news-more-btn click-btn">Ավելին</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="patients">
        <div class="patients-title">ՊԱՑԻԵՆՏՆԵՐԻՆ</div>
        <div class="patients-text"> 
            {{$settings->where('block_id', 4)->first()->text}}
        </div>
        <div class="patients-card-div">
            @foreach($newsForPatient as $news)
                <div class="patient-card-block">
                    <div class="pat-card">
                        <div class="pat-card-header">
                            <div class="pat-card-title">{{$news->title}}</div>
                            <div class="pat-card-img">
                                <img class="w-100 h-100" src="{{$news->img}}">
                            </div>
                        </div>
                        <div class="pat-card-content">{{$news->text}}</div>
                    </div>
                    <div class="text-left text-left-imp"><button class="pat-btn">Ավելին</button></div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="edu">
        <div class="edu-title">կՐԹՈՒԹՅՈՒՆ</div>
        <div class="edu-text">
            {{$settings->where('block_id', 5)->first()->text}}
        </div>
        <div class="patients-card-div">
            @foreach($newsForEdu as $news)
                <div class="edu-card mr-1p color-{{$loop->index}}">
                    <div class="edu-card-img">
                        <img class="w-100 h-100 fitt" src="{{$news->img}}">
                    </div>
                    <div class="edu-card-title">{{$news->title}}</div>
                    <div class="edu-card-content">{{$news->text}}</div>
                    <a class="no-dec" href="#"><div class="edu-more">ավելին</div></a>
                </div>
            @endforeach
        </div>
        <a class="no-dec" href="#"><button class="edu-more-btn click-btn">Ավելին</button></a>
    </section>
    <section class="stud-videos">
        <div class="stud-title"><span class="bold-stud">ՈՒՍՈՒՑՈՂԱԿԱՆ</span> ՏԵՍԱՆՅՈՒԹԵՐ</div>
        <div class="videos">
            @foreach($videos as $video)
                <a class="displey-block no-dec" href="">
                    <div class="video-card">
                        {!!html_entity_decode($video->iframe)!!}
                        <div class="video-title">
                            {{$video->title}} 
                        </div>
                        <div class="video-text">
                            {{$video->text}}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="text-center"><a href="#" class="no-dec"><button class="edu-more-btn click-btn mt-4">Ավելին</button></a></div>
    </section>
    <section class="photos">
        <div class="edu-title">Տեսասրահ</div>
        <div class="photos-div">
            @foreach($gallery as $gal)
                <div class="img-div"><div class="hover-div"></div><img class="pho-img" src="{{$gal->img}}"></div>
            @endforeach
        </div>
        <div class="text-center"><a href="#" class="no-dec"><button class="edu-more-btn click-btn mt-4">Ավելին</button></a></div>
    </section>
    <section class="slide">
        <div class="splide splide-div">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img class="slide-image" src="images/spons-1.png"></li>
                    <li class="splide__slide"><img class="slide-image" src="images/spons-2.png"></li>
                    <li class="splide__slide"><img class="slide-image" src="images/spons-3.png"></li>
                    <li class="splide__slide"><img class="slide-image" src="images/spons-4.png"></li>
                    <li class="splide__slide"><img class="slide-image" src="images/spons-5.png"></li>
                    <li class="splide__slide"><img class="slide-image" src="images/spons-6.png"></li>
                    <li class="splide__slide"><img class="slide-image" src="images/spons-7.png"></li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('inc.footer')
@endsection