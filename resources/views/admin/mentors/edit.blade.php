<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('mentors.update',$mentor->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <select class="form-control" name="course_id">
                                        <option>Select Course</option>
                                        @foreach ($courses as $item)
                                            <option value="{{ $item->id }}" {{ ( $item->id == $mentor->course_id) ? 'selected' : '' }}> {{ $item->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor First Name:</strong>
                                    <input type="text" name="first_name" value="{{ $mentor->first_name }}" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor Last Name:</strong>
                                    <input type="text" name="last_name" value="{{ $mentor->last_name }}" class="form-control" placeholder="Last Name">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor Photo:</strong>
                                    <div class="form-group">
                                        <strong>Current Image Mentor:</strong>
                                        <img src="{{ asset('storage/mentors/' . $mentor->image) }}" alt="Current Image" style="max-width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <strong>New Image Mentor:</strong>
                                        <input type="file" name="mentor_image" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor Logo:</strong>
                                    <div class="form-group">
                                        <strong>Current Image Logo:</strong>
                                        <img src="{{ asset('storage/mentors/logo/' . $mentor->logo) }}" alt="Current Image" style="max-width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <strong>New Image:</strong>
                                        <input type="file" name="mentor_logo" class="form-control">
                                    </div>
                                </div>
                            </div>

                            @foreach($mentor_texts as $text)
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <br>
                                    <hr>
                                    <br>
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option>{{ $text->lang }}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>Text:</strong>
                                        <textarea class="form-control" name="lang_text[{{$text->lang}}]" id="exampleFormControlTextarea1" rows="3">{{ $text->text_table }}</textarea>
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
