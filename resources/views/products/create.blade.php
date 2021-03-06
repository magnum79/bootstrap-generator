@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Product</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'products.store']) !!}

            @include('products.fields')

        {!! Form::close() !!}
        {!! JsValidator::formRequest('App\Http\Requests\CreateproductRequest') !!}
    </div>
@endsection
