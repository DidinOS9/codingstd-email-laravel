@extends('template.container')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Product Name</th>
                <th>Cust. Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hazel</td>
                    <td>hei@gmail.com</td>
                    <td><button class="btn btn-warning">Send Mail</button></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection