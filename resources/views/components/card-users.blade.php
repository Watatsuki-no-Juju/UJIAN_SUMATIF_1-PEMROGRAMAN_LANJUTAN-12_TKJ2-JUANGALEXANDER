<div {{ $attributes->merge(['class' => 'flex items-center bg-white border rounded-lg shadow-sm p-4 w-full']) }}>
    <img src="{{ $foto }}" alt="{{ $nama }}" class="w-14 h-14 rounded-full mr-4 object-cover bg-gray-200">
    <div>
        <div class="font-semibold text-base">{{ $nama }}</div>
        <div class="text-gray-500 text-sm mb-1">@{{ $username }}</div>
        <div class="text-gray-700 text-sm">{{ $deskripsi }}</div>
    </div>
</div>