@extends('layouts.app')

@section('content')
<div class="px-4 flex flex-col md:flex-row items-start">
    <div class="w-full md:w-1/3 px-2 md:mx-auto">
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
                <adduser></adduser>
            </div>
        </div>
    </div>
    <div class="w-full md:w-2/3 md:mx-auto flex flex-col md:flex-row flex-wrap">
        <div class="w-full md:w-1/2 px-2 md:mx-auto">
            <div class="shadow">
                <div class="font-medium text-lg text-white bg-teal p-3">
                    Dashboard Users
                </div>
                <div class="bg-teal-lightest text-black p-3">
                    <p>{{$data['userCount']}}</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-2 md:mx-auto">
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
</div>
@endsection