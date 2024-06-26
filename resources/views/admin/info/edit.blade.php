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
                    @foreach($course_log as $course)
                        @foreach($course->course_logo as $logo)
                            <form action="{{ route('dashboard.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Current Image:</strong>
                                            <img width="50" height="50" src="{{ asset('storage/courses/logo/' . $logo->course_logo) }}" alt="Current Image" style="max-width: 100%;">
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <strong>New Image:</strong>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <form action="{{ route('courses.destroy',$logo->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <hr>
                            <br>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
