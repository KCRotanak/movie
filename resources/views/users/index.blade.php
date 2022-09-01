@extends('users.userlayout')

@section('content')
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <a class="btn btn-info" href="/admin/home">back</a>

    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('users.create') }}"> Create user</a>
    </div>
</div>
    <table id="example2" class="table table-bordered table-hover table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    ID
                </th>
                <th class="text-center">
                    Name
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
                    {{-- <td class="text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar"
                                src="{{ asset('backend/dist/img/avatar.png') }}">
                        </li>
                    </ul>
                </td> --}}
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
                    <td class="project-actions text-right">

                        <div class="project-actions text-right">
                            <div class="project-actions text-right">
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm"
                                        data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" style="border: none" class="action_btn"
                                    data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                        class="fas fa-trash"></i></button> --}}

                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm"
                                        data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
