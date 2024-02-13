@foreach($courses as $course)
    @php
        $currentRoute = \Illuminate\Support\Facades\Route::currentRouteName();
        $isCurrentRoute = $langRoute . '.' . $course->url == $currentRoute;
    @endphp

    @if(!$isCurrentRoute)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 col-md-6">
            <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                <img loading="lazy" class="card-img-top" src="{{asset('storage/courses/' . $course->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title fw-bold">{{$course->title}}</h6>
                    <hr class="w-25 border border-success border-2">
                    <a href="{{ route($langRoute . '.' . $course->url) }}" class="btn btn-outline-success p-3 rounded">
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
    @endif
@endforeach
