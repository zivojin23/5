<div class="w-1/2 mx-auto mb-8">
    <h2 class="text-3xl font-bold text-gray-700 text-center">LEAGUES</h2>
<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="py-3 px-6">League ID</th>
            <th scope="col" class="py-3 px-6">Name</th>
            <th scope="col" class="py-3 px-6">Founded</th>
            <th scope="col" class="py-3 px-6">Conferences</th>
            <th scope="col" class="py-3 px-6">Divisions</th>
            <th scope="col" class="py-3 px-6">Teams</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leagues as $league)    
        <tr class="bg-white border-b hover:bg-gray-50">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{ $league->id }}</th>
            <td class="py-4 px-6">{{ $league->name }}</td>
            <td class="py-4 px-6">{{ $league->founded }}</td>

            <td class="py-4 px-6">
                @foreach ($league->conferences as $conference)
                    {{ $conference->name }}
                    <br>
                @endforeach
            </td>

            <td class="py-4 px-6">
                @foreach ($league->divisions as $division)
                    {{ $division->name }}
                    <br>
                @endforeach
            </td>

            {{-- <td class="py-4 px-6">
                @foreach ($league->teams as $team)
                    {{ $team->name }}
                    <br>
                @endforeach
            </td> --}}

        </tr>
        @endforeach
    </tbody>
</table>
</div>

<div class="w-1/2 mx-auto mb-8">
    <h2 class="text-3xl font-bold text-gray-700 text-center">CONFERENCES</h2>
<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="py-3 px-6">Conference ID</th>
            <th scope="col" class="py-3 px-6">Name</th>
            <th scope="col" class="py-3 px-6">Divisions</th>
            <th scope="col" class="py-3 px-6">Teams</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($conferences as $conference)    
        <tr class="bg-white border-b hover:bg-gray-50">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{ $conference->id }}</th>
            <td class="py-4 px-6">{{ $conference->name }}</td>

            <td class="py-4 px-6">
                @foreach ($conference->divisions as $division)
                    {{ $division->name }}
                    <br>
                @endforeach
            </td>

            <td class="py-4 px-6">
                @foreach ($conference->teams as $team)
                    {{ $team->name }}
                    <br>
                @endforeach
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>

<div class="w-1/2 mx-auto mb-8">
    <h2 class="text-3xl font-bold text-gray-700 text-center">DIVISIONS</h2>
<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="py-3 px-6">Divison ID</th>
            <th scope="col" class="py-3 px-6">Name</th>
            <th scope="col" class="py-3 px-6">Teams</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($divisions as $division)    
        <tr class="bg-white border-b hover:bg-gray-50">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{ $division->id }}</th>
            <td class="py-4 px-6">{{ $division->name }}</td>

            <td class="py-4 px-6">
                @foreach ($division->teams as $team)
                    {{ $team->name }}
                    <br>
                @endforeach
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>

<div class="w-1/2 mx-auto mb-8">
    <h2 class="text-3xl font-bold text-gray-700 text-center">TEAMS</h2>
<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="py-3 px-6">Team ID</th>
            <th scope="col" class="py-3 px-6">Name</th>
            <th scope="col" class="py-3 px-6">nesto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)    
        <tr class="bg-white border-b hover:bg-gray-50">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{ $team->id }}</th>
            <td class="py-4 px-6">{{ $team->name }}</td>

            {{-- <td class="py-4 px-6 block">
                @foreach ($division->teams as $team)
                    {{ $team->name }}
                    <br>
                @endforeach
            </td> --}}

        </tr>
        @endforeach
    </tbody>
</table>
</div>
