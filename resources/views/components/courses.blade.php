            @foreach($courses as $course)
                @foreach($course->langs as $lang)
                    @if($lang->lang === explode('.', \Illuminate\Support\Facades\Route::currentRouteName())[0])
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="card hvr-float m-auto h-100 m-5 d-flex flex-column">
                            <img loading="lazy" class="card-img-top" src="{{ asset('storage/courses/' . $course->image ) }}" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title fw-bold">{{ $course->title }}</h4>
                                    <p class="card-text">{{ $lang->text_table }}</p>
                                    <hr class="w-25 border border-success border-2">
                                </div>
                                <div class="mt-auto">
                                    <a href="{{ route($langRoute . '.' .$course->url) }}" class="btn btn-outline-success p-3 rounded">
                                        @if($langRoute == 'uz')
                                            Batafsil
                                        @elseif($langRoute == 'ru')
                                            Подробнее
                                        @else
                                            More
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
