<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="mb-5" action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Course:</strong>
                                <select class="form-control" name="course_id">
                                    <option>Select Course</option>
                                    @foreach ($courses as $item)
                                        <option value="{{ $item->id }}"> {{ $item->title }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">Skill logo for course</label>
                                <input type="file" name="course_logo">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Skills:</strong>
                                <textarea class="form-control" name="skills" rows="3"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr>
                    <div class="row mt-5">
                        @foreach($courses as $course)
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <a href="{{ route('dashboard.edit', $course->id) }}">
                                    <img src="{{asset('storage/courses/' . $course->image)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$course->title}}</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex">
                                        @foreach($course->courseLogo as $logo)
                                            <img style="width: 50px;height: 50px;border-radius: 50%;" src="{{asset('storage/courses/logo/' . $logo->course_logo)}}" alt="">
                                        @endforeach
                                        </li>
                                        @foreach($course->skills as $skill)
                                            <li class="list-group-item">
                                                @foreach(json_decode($skill->skills) as $text)
                                                    <p>{{ $text }}, </p>
                                                @endforeach
                                            </li>
                                        @endforeach
                                    </ul>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
