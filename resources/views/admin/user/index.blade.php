@extends('layouts.back-end.master')
@section('sup_title')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">User</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('admin')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User</h4>
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)
                            <tr>
                                <td>{{ $user->firstItem()+$loop->index }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->username }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->role }}</td>
                                <td>{{ $users->created_at }}</td>
                                <td>{{ $users->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.user.edit',$users->id) }}"><i class='ti-pencil-alt'></i></a>
                                    <a href="{{ route('admin.user.delete',$users->id) }}"><i class='ti-trash'></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $user->links('pagination::bootstrap-5') }}
</div>
@endsection