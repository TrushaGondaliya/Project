@extends('layouts.master')


@section('content')
<div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
    </div>
    @endif
    <div>
        <form action="{{url('admin/add-theme')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="cms-table">
                <thead>
                    <tr>
                        <th>Add</th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <label class="cms-label">Theme Name</label>
                        <input class="cms-input" type="text" name="title">
                        <label class="cms-label">Status</label>
                        <select class="cms-input" name="status">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </td>
                </tbody>
            </table>
            <div class="cms_btn">
                <a href="theme" style="text-decoration: none;">
                    <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                </a>
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
            </div>
        </form>
    </div>
</div>
@endsection