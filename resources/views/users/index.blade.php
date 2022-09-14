@extends('layouts.dashboard.dashboard')
@section('content')
<div class="col-lg-12 margin-tb">
    <div class="float-end">
        <a class="btn btn-success" href="{{ route('users.create') }}"> Create user</a>
    </div>
    <br><br>
</div>
    <table id="example2" class="table table-bordered ">
        <thead>
            <tr>
                <th style="width: 1%">
                    ID
                </th>
                <th class="text-center">
                    Name
                </th>
                <th class="text-center">
                    avatar
                </th>
                <th class="text-center">
                    Email
                </th>
                <th class="text-center">
                    Type
                </th>
                <th class="text-center">
                    Phone
                </th>
                <th class="text-center">
                    Create At
                </th>
                <th style="width: 20%" class="text-center">
                    Operations
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $key => $user)
                <tr>
                    <td>
                        {{ ++$key }}.
                    </td>
                    <td class="text-center">
                        <a>
                            {{ $user->name }}
                        </a>

                    </td>
                    <td class="text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar"
                                src="/profile/avatar/{{ $user->avatar }}">
                        </li>
                    </ul>
                </td>
                    <td class="text-center">
                        <a>
                            {{ $user->email }}

                        </a>
                    </td>
                    <td class="text-center">
                        <a>
                            {{ $user->type }}
                        </a>
                    </td>
                    <td class="text-center">
                        <a>
                            {{ $user->phone }}
                        </a>
                    </td>
                    <td class="text-center">
                        <a>
                            {{ $user->created_at }}
                        </a>
                    </td>
                    <td class="d-flex justify-content-center">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
