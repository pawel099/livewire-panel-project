 <x-layouts::app.sidebar :title="$title ?? null">
    <flux:main>
        <div>
         @foreach ($user as $result)
         {{ $result->email }}
         
         @endforeach
         </div>
    </flux:main>
</x-layouts::app.sidebar>

