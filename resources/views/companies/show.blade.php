@extends('layouts.app')

@section('content')


        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>{{ $company->name }}</h1>
            <p class="lead">{{ $company->description }}</p>
            {{--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>--}}
        </div>

        <!-- Example row of columns -->

        @foreach($company->projects as $project)

                <div class="col-lg-4">
                    <h2>{{ $project->name }}</h2>
                    <p class="text-danger">{{ $project->description }}</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View project »</a></p>
                </div>

         
        @endforeach

    @endsection()
