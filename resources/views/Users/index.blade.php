@extends('components.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($students as $student)
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
            <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-32 h-32 rounded-full mb-4">
            <h2 class="text-xl font-bold mb-2">{{ $student['nama'] }}</h2>
            <p class="text-gray-600 mb-1">Kelas: {{ $student['kelas'] }}</p>
            <p class="text-gray-600 mb-1">Hobi: {{ $student['hobi'] }}</p>
            <p class="text-gray-600 mb-2">{{ $student['deskripsi'] }}</p>
            <a href="{{ url('/students/'.$student['id']) }}" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Detail</a>
        </div>
        @endforeach
    </div>
</div>
@endsection