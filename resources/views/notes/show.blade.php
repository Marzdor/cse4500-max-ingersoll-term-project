@extends('layouts.default')
@section('content')
    <div>
        <div>
            <p>Viewing: {{ $note->id }}</p>
            <p>Created: {{ $note->created_at }} </p>
            <p>Updated: {{ $note->updated_at }}</p>
        </div>

        <div>
            {{ $note->html }}
        </div>
    </div>
@stop
