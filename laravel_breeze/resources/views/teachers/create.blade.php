<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Teachers
        </h2>
        <div class="text-end">
            <a href="{{route('teachers.index')}}" class="btn bg-gray-800 text-white">Back</a>
        </div>
    </x-slot>

    {!! Form::open(['route' => 'teachers.store']) !!}
        @include('teachers.fields')
    {!! Form::close() !!}
    
</x-app-layout>
