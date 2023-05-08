@extends('admin.layouts.master')
@section('component')
<div class="container mt-4">
    <form action="{{route('store.category')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $item)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$item->name}}</td>
                <td><a href="{{route('edit.category',$item->id)}}" class="btn btn-primary">Edit</a><a href="{{route('delete.category',$item->id)}}" class="btn btn-danger ms-2">Delete</a></td>

            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
</div>

@endsection