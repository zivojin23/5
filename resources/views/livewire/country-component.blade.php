<div class="w-1/2">


<form wire:submit.prevent="storeCountry">
    @csrf

    <div class="flex flex-col w-4/5 mx-auto my-8">
        <label for="name" class="mb-2 mt-10 text-sm font-medium">Country Name</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
            wire:model="name" id="name" type="text" placeholder="Country Name" >  
        @error('name')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-4/5 mx-auto my-8">
        <label for="pop" class="mb-2 text-sm font-medium">Population</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
            wire:model="pop" id="pop" type="text" placeholder="Population">             
        @error('pop')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="p-5 flex justify-end">
        <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                wire:click.prevent="storeCountry()" type="submit">Save<i class="fa-solid fa-check ml-5"></i></button>
    </div>

</form>

<div>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">Country ID</th>
                <th scope="col" class="py-3 px-6">Name</th>
                <th scope="col" class="py-3 px-6">Population</th>
                <th scope="col" class="py-3 px-6">Cities with pop</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)    

            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    {{ $country->id }}</th>
                <td class="py-4 px-6">{{ $country->name }}</td>
                <td class="py-4 px-6">{{ $country->pop }}</td>

                <td class="py-4 px-6">
                    @foreach ($country->cities as $city)
                        {{ $city->city_name }}, {{ $city->city_pop }}
                        <br>
                    @endforeach
                </td>

            </tr>
    
            @endforeach
        </tbody>
    </table>
</div>



</div>
