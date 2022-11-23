<div class="w-1/2"> 

<form wire:submit.prevent="storeCity">
    @csrf

    <div class="flex flex-col w-4/5 mx-auto my-8">
        <label for="city_name" class="mb-2 mt-10 text-sm font-medium">City Name</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
            wire:model="city_name" id="city_name" type="text" placeholder="City Name" >  
        @error('city_name')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-4/5 mx-auto my-8">
        <label for="city_pop" class="mb-2 text-sm font-medium">City Population</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
            wire:model="city_pop" id="city_pop" type="text" placeholder="City Population">             
        @error('city_pop')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-4/5 mx-auto my-8">      
        <label for="country_id" class="mb-2 text-sm font-medium">Country</label>        
        <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="country_id" id="country_id">
            <option value="" disabled selected>Please select one</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
        </select>     
        @error('country_id')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="p-5 flex justify-end">
        <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                wire:click.prevent="storeCity()" type="submit">Save<i class="fa-solid fa-check ml-5"></i></button>
    </div>

</form>

<div>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">City ID</th>
                <th scope="col" class="py-3 px-6">City Name</th>
                <th scope="col" class="py-3 px-6">City Population</th>
                <th scope="col" class="py-3 px-6">Country</th>
                <th scope="col" class="py-3 px-6">Country Population</th>
                {{-- <th scope="col" class="py-3 px-6"><span class="sr-only"></span></th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)    

            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    {{ $city->id }}</th>
                <td class="py-4 px-6">{{ $city->city_name }}</td>
                <td class="py-4 px-6">{{ $city->city_pop }}</td>
                <td class="py-4 px-6">{{ $city->country->name }}</td>
                <td class="py-4 px-6">{{ $city->country->pop }}</td>
                {{-- <td class="py-4 px-6 text-right">
                    <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                            wire:click="editEmployee({{ $employee->id }})">Edit</button>   
                </td>    
                <td class="py-4 px-6 text-right">        
                    <button class="bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                            wire:click="deleteEmployee({{ $employee->id }})">Delete</button>
                </td> --}}
            </tr>
         
            @endforeach
        </tbody>
    </table>
</div>

</div>
