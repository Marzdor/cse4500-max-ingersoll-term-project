@extends('layouts.default')
@section('content')
    <div>
        <p>Welcome to U-Notes, a simple site to save notes. Getting started is as easy as typing your note into the text box
            below or uploading a text file.</p>
        <div>
            @include('common.markdownEditor')
        </div>
    </div>
@stop
