@extends('layout', ['title' => 'Create'])
@section('content')
    <h3><a href="{{ route()->back}}">Back</a></h3>
    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <label for="name" class="">Name</label>
    <input type="text" name="name" id="name">
    <label for="email" class="">Email</label>
    <input type="text" name="email" id="email">
    <label for="profile" class="">Profile</label>
    <input type="file" name="profile" id="frofile">
    <button type="submit" >Submit</button>
    </form>
@endsection