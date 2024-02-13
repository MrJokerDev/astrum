<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('mentors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
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
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor First Name:</strong>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor Last Name:</strong>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor Image:</strong>
                                    <input type="file" name="mentor_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mentor Logo:</strong>
                                    <input type="file" name="mentor_logo" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select class="form-select" name="lang" aria-label="Default select example" required>
                                        <option selected>Open this select menu</option>
                                        <option value="uz">Uz</option>
                                        <option value="ru">Ru</option>
                                        <option value="eng">Eng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <strong>Descption:</strong>
                                <textarea class="form-control" style="height:150px" name="mentor_text" placeholder="Detail"></textarea>
                            </div>


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
