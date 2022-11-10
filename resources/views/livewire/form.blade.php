<div>






<div class="w-2/5 mx-auto">
    @if (session()->has('submitted'))
        <div class="bg-green-100 p-4 flex justify-center rounded-lg w-full mx-auto">
            <div class="font-bold text-xl text-green-700">
                {{ session()->get('submitted') }}
                <i class="fa-solid fa-thumbs-up ml-5"></i>
            </div>    
        </div>
    @endif
</div>

{{-- LOADER --}}
<div wire:loading.delay>
    <div class="flex justify-center items-center bg-blue-300 
                fixed top-0 left-0 w-full h-full opacity-50">
        <x-loader />
    </div>
</div>

<div class="sm:grid sm:grid-cols-2 flex flex-col">

{{-- LEVO --}}
<div>
    @include('livewire.new-project')
</div>

{{-- DESNO --}}
<div class="mt-10">
    @include('livewire.all-projects')
    {{-- svi projekti --}}
</div>

</div>



















</div>
