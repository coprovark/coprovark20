@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<form action="/page12" method="post" >
    <select name="select">
        <option value="ไทย">ไทย</option>
        <option value="ลาว">ลาว</option>
        <option value="มาเล">มาเล</option>
    </select>
    <br>
    <input type="submit" value="ส่งค่า">
</form>

@endsection