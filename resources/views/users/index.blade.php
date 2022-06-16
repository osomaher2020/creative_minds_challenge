@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h3 class="col-md-10">{{ __('Users') }}</h3>
                        <span class="col-md-2">
                            <a href="{{ route('users.create') }}" class="btn btn-md btn-success">
                                {{ __('Create') }}
                            </a>
                        </span>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Mobile') }}</th>
                            <th>{{ __('Verified') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($users as $index=>$user)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->mobileVerified }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route("users.destroy", $user->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method("delete")

                                            <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection