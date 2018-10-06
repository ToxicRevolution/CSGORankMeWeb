@extends('layouts.app')

@section('content')
<div class="px-4 flex items-start">
    <div class="md:w-2/3 md:mx-auto flex flex-row flex-wrap">
        <div class="md:w-1/2 px-2 md:mx-auto">
            <div class="shadow">
                <div class="font-medium text-lg text-white bg-teal p-3">
                    Dashboard Users
                </div>
                <div class="bg-teal-lightest text-black p-3">
                    <p>{{$data['userCount']}}</p>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 px-2 md:mx-auto">
            <div class="shadow">
                <div class="font-medium text-lg text-white bg-teal p-3">
                    Player Counts Per Database
                </div>
                <div class="bg-teal-lightest text-black p-3">
                    @foreach ($data['playerCounts'] as $key=>$dbs)
                        <p>{{$key}}: {{$dbs}} Players</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-full px-2 md:mx-auto">
            <UserList/>
        </div>
    </div>
    <div class="md:w-1/3 px-2 md:mx-auto">
        <div class="shadow">
            <div class="font-medium text-lg text-white bg-teal p-3">
                Database Names
            </div>
            <div class="bg-teal-lightest text-black p-3">
                @foreach ($data['databases'] as $item)
                    <p>{{$item}}</p>
                @endforeach
            </div>
        </div>
        <div class="shadow mt-4">
            <div class="font-medium text-lg text-white bg-teal p-3">
                Quick Add User
            </div>
            <div class="bg-teal-lightest text-black">
                <form class="p-4 flex flex-col">
                        <input class="flex-grow h-8 px-2 border rounded border-grey-light mb-2" type="email" name="" id="" placeholder="Email">
                        <input class="flex-grow h-8 px-2 border rounded border-grey-light mb-2" type="password" name="" id="" placeholder="Password">
                        <button class="bg-black text-white text-sm font-semibold py-2 px-4 rounded hover:bg-grey hover:border hover:border-black" type="submit">Create User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection