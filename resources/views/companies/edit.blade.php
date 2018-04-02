@extends('layouts.app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <!-- Example row of columns -->


        {{--Inserting the form--}}
        <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px;">

            <form action="{{ route('companies.update', [$company->id]) }}" method="post">
                {{ csrf_token() }}

                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input type="text"
                            placeholder="Enter Name"
                            id="company-name"
                            required
                            name="description"
                            spellcheck="false"
                            class="form-control"
                            value="{{ $company->name }}"
                    />

                </div>

                <div class="form-group">
                    <label for="company-content">Description</label>
                    <textArea placeholder="Enter description"
                                style="resize: vertical"
                                id="company-content"
                                name="description"
                                rows="5"
                                spellcheck="false"
                                class="form-control autosize-target text-left">{{ $company->description }}
                    </textArea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>

        </div>
    </div>

    <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
        {{--<div class="sidebar-module sidebar-module-inset">--}}
        {{--<h4>About</h4>--}}
        {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
        {{--</div>--}}

        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{$company->id}}">View copanies</a></li>
                <li><a href="/companies">All copanies</a></li>
                


            </ol>
        </div>

        <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>



            </ol>
        </div>
    </div>
@endsection()
