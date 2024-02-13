<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('courses.create') }}"> Create New Product</a>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Language</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <th scope="row">{{$course->id}}</th>
                                <td>{{$course->title}}</td>
                                <td>
                                    <img class="img-thumbnail w-25" src="{{asset('storage/courses/' . $course->image)}}" alt="courses image">
                                </td>
                                <td>

                                    @foreach($langs as $lang)
                                        @if($course->id == $lang->table_info_id)
                                            <a href="{{ route($lang->lang . '.' . $course->url) }}">
                                                {{'/' . $lang->lang . '/courses_in/' . $course->url}}
                                            </a>
                                            <br>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
                                        <a href="{{ route('courses.edit',$course->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
