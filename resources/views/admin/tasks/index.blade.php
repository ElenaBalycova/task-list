@extends('layouts.app')
@section('title', 'Список дел')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Task list</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover table-condensed ">
                            <thead>
                            <tr>
                                <th>Task</th>
                                <th>Creation date</th>
                                <th class="text-right">
                                    <a href="{{route('admin.tasks.create')}}" class="btn btn-success btn-sm">
                                        Create
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($tasks as $task)
                            <tr>
                                <td>{{$task->task}}</td>
                                <td>{{$task->created_at}}</td>
                                <td class="text-right">
                                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.tasks.destroy', $task->id)}}" method="post">

                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        <a href="{{route('admin.tasks.edit', $task->id)}}" class="btn btn-primary btn-sm"> Edit </a>
                                        <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center"><h2>Данные отсутствуют.</h2></td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                {{$tasks->links()}}
            </div>
        </div>
    </div>
@endsection
