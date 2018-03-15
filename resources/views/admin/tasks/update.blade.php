@extends('layouts.app')
@section('title', 'Редактирование дела')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="{{route('admin.tasks.update', $tasks)}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                    <label for="task"><h2>Edit task</h2></label>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input type="text" name="task" id="task" value="{{$tasks->task}}" class="form-control">
                            <input type="hidden" name="user_id" value="{{$tasks->user_id or ""}}">
                        </div>
                    </div>
                    <input type="submit" value="Save" class="btn btn-primary">
                    <a href="{{route('admin.tasks.index')}}" role="button" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
