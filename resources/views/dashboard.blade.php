@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card card-dark shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Server Players</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Server</th>
                                    <th scope="col">Players</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['databases'] as $database)
                                    <tr>
                                        <th scope="row">
                                            {{$database}}
                                        </th>
                                        <td>
                                            {{$data['playerCounts'][$database]}}
                                        </td>
                                    </tr>                                        
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection