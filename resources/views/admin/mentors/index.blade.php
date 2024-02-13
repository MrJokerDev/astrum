<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mentors') }}
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
                        <a class="btn btn-success" href="{{ route('mentors.create') }}"> Create New Product</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mentor</th>
                                <th scope="col">Course</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($mentors as $mentor)
                            <tr>
                                <th scope="row">{{$mentor->id}}</th>
                                <th scope="row" class="d-flex align-items-center"><img style="width: 50px;height: 50px;border-radius: 50%;" class="me-2" src="{{asset('storage/mentors/' . $mentor->image)}}" alt="Mentor Full Name">{{$mentor->mentor_first_name}} {{$mentor->mentor_last_name}}</th>
                                <th scope="row">
                                    @foreach($courses as $course_title)
                                        @if($mentor->course_id == $course_title->id)
                                            {{ $course_title->title }}
                                        @endif
                                    @endforeach
                                </th>
                                <td>
                                    <form action="{{ route('mentors.destroy',$mentor->id) }}" method="POST">
                                        <a href="{{ route('mentors.edit',$mentor->id) }}"><i class="bi bi-pencil-square"></i></a>
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
