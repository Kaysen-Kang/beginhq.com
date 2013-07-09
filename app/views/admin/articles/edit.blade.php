@extends('admin.layouts.articles')

@section('content')
    <h2>Edit aritcle</h2>
    {{ Form::model($article, array('method' => 'put', 'route' => array('admin.articles.update', $article->id))) }}
        <div class="control-group">
            {{ Form::label('title', 'Title') }}
            <div class="controls">
                {{ Form::text('title') }}
                {{ $errors->first('title') }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('author', 'Author') }}
            <div class="controls">
                {{ Form::text('author')}}
                {{ $errors->first('author') }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('content', 'Content') }}
            <div class="controls">
                {{ Form::textarea('content')}}
                {{ $errors->first('content') }}
            </div>
        </div>

        <div class="form-actions">
            {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
            <a href="{{ URL::route('admin.articles.index') }}" class="btn btn-large">Cancle</a>
        </div>
    {{ Form::close() }}       
@stop