@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Product</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'patch']) !!}

            @include('products.fields')

            {!! Form::close() !!}
        </div>
@endsection
