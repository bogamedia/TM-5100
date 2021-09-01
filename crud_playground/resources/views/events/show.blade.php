@extends('events.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Event</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            {{ $categories->name }}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img id="preview" src="{{ asset('storage/imgs/'.$event->image) }}" alt="preview image" style="height:250px">
            </div>
        </div>
        <div class="form-group">
            <strong>Name:</strong>
            {{ $event->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $event->detail }}
        </div>
    </div>
</div>
@endsection