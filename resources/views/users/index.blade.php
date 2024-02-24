<x-app-layout>
    <div class="py-12">
    </div>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('Managers')</h4>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('users.create')}}">
                        <span>@lang('Create New Manager')</span>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('Name')</th>
                            <th>@lang('Email')</th>
                            <th>@lang('Actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($managers as $manager)
                            <tr>
                                <td>
                                    <span class="fw-bold">
                                        <a href="{{route('users.show', $manager)}}">{{$manager->name}}</a>
                                    </span>
                                </td>
                                <td><span class="fw-bold">{{$manager->email}}</span></td>
                                <td>
                                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('users.edit', $manager)}}">
                                        <i data-feather="edit-2" class="me-50"></i>
                                        <span>@lang('Edit')</span>
                                    </a>
                                    <a href="{{ route('users.delete', $manager) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">
                                        <i data-feather="trash" class="me-50"></i>
                                        <span>@lang('Delete')</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('users.create')}}">
                <span>@lang('Create New Manager')</span>
            </a>
        </div>
    </div>
</x-app-layout>
