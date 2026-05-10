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
<form action="/students/store" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br>
    <button type="submit">Create Student</button>
</form>
@endsection