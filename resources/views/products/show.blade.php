@extends('layouts.app')

@section('content')
    @include('products.show_fields')

    <div class="form-group">
           <a href="{!! route('products.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
