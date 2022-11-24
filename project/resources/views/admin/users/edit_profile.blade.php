@extends('layouts.master')


@section('content')
<script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
        selector: 'textarea#editor',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: ' bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        menubar: false
    });
</script>
<div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
    </div>

    @endif
    <div>

        <form action="{{url('admin/update-profile/')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <table class="cms-table">
                <thead>
                    <tr>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <td>

                        <label class="cms-label">First Name</label>
                        <input class="cms-input" type="text" value="{{Auth::user()->first_name}}" name="first_name">
                        <label class="cms-label">Last Name</label>
                        <input class="cms-input" type="text" value="{{Auth::user()->last_name}}" name="last_name">
                        <label class="cms-label">Email</label>
                        <input class="cms-input" type="text" value="{{Auth::user()->email}}" name="email">
                        <label class="cms-label">Password</label>
                        <input class="cms-input" type="text" value="{{Auth::user()->password}}" disabled name="password">
                        <label class="cms-label">Avtar</label>
                        <input class="cms-input" type="file" name="avtar" value="{{Auth::user()->avtar}}">
                        <label class="cms-label">Employee Id</label>
                        <input class="cms-input" type="text" value="{{Auth::user()->employee_id}}" name="employee_id">
                        <label class="cms-label">Department</label>
                        <input class="cms-input" type="text" value="{{Auth::user()->department}}" name="department">
                        <label class="cms-label">City_id</label>
                        @php
                        $city=App\Models\City::all();
                        @endphp
                        <select name="city" class="cms-input" id="">
                            <option value="{{Auth::user()->city->name}}"> {{Auth::user()->city->name}}</option>

                            @foreach($city as $item1)
                            <option value="{{$item1->name}}"> {{$item1->name}}</option>
                            @endforeach
                        </select>
                        <label class="cms-label">Country</label>
                        @php
                        $country=App\Models\Country::all();
                        @endphp
                        <select name="country" class="cms-input" id="">
                            @foreach($country as $item1)
                            <option value="{{$item1->name}}"> {{$item1->name}}</option>
                            @endforeach
                        </select>


                        <label class="cms-label">Profile Text</label>
                        <div class="cms-textarea">
                            <textarea name="profile_text" class="text-area" id="editor" cols="" rows="">{{Auth::user()->profile_text}}</textarea>
                        </div>
                        <label class="cms-label">Status</label>
                        <select class="cms-input" name="status">
                            <option value="{{Auth::user()->status}}">{{Auth::user()->status}}</option>
                            @if(Auth::user()->status==0){
                            <option value="1">1</option>
                            }
                            @elseif(Auth::user()->status==1)
                            <option value="0">0</option>

                            @endif

                        </select>
                    </td>
                </tbody>
            </table>
            <div class="cms_btn">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
            </div>
        </form>




    </div>
</div>

@endsection