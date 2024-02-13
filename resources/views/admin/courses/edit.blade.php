<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('courses.update',$course->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="courses_title" value="{{ $course->title }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="url" value="{{ old('url',$course->url) }}" class="form-control" placeholder="Url">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Current Image:</strong>
                                    <img src="{{ asset('storage/courses/' . $course->image) }}" alt="Current Image" style="max-width: 100%;">
                                </div>
                                <div class="form-group">
                                    <strong>New Image:</strong>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                            @foreach($langs as $lang)
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <br>
                                    <hr>
                                    <br>
                                    <div class="form-group">
                                        <strong>Lang:</strong>
                                        <select class="form-select" aria-label="Default select example">
                                            <option>{{ $lang->lang }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <strong>Descption:</strong>
                                        <textarea class="form-control" style="height:150px" name="lang_text[{{$lang->lang}}]" placeholder="Detail">{{ $lang->text_table }}</textarea>
                                    </div>

                                </div>
                            @endforeach

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
