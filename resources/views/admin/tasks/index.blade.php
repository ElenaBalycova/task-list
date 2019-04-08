@extends('layouts.app')
@section('title', 'Список дел')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Список задач
                            <a href="{{route('admin.tasks.create')}}" class="btn btn-success btn-sm">
                                Добавить задачу
                            </a>
                        </h2>
                        <table class="table table-hover table-condensed table-bordered ">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Приоритет</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                <td>{{$task->created_at}}</td>
                                <td class="text-right">
                                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.tasks.destroy', $task->id)}}" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        <a href="{{route('admin.tasks.edit', $task->id)}}" class="btn btn-outline-primary btn-sm"> Edit </a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm"> Delete </button>
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
