@extends('layout')
@section('content')
<style>
form {
    max-width: 400px;
    margin: 0 auto;
}
label {
    display: block;
    margin-bottom: 5px;
}
input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}
button {
    padding: 10px 20px;
}
</style>
<form action="/students/{{ $student->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $student->name }}" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $student->email }}" required><br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" value="{{ $student->phone }}" required><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" value="{{ $student->age }}" required><br>
   <button type="submit" class="btn btn-success" onclick="return confirm('هل أنت متأكد من التعديل؟')">Update Student</button>
        <div class="mt-2 text-center">
            <a href="/students/index">Back to List</a>
        </div>
</form>
@endsection