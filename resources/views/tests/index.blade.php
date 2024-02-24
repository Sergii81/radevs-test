<x-app-layout>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('Tests')</h4>
                    @can('test_create')
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('tests.create')}}">
                        <span>@lang('Create New Test')</span>
                    </a>
                    @endcan
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('ID')</th>
                                <th>@lang('Full Name')</th>
                                <th>@lang('Test Date')</th>
                                <th>@lang('Location')</th>
                                <th>@lang('Score')</th>
                                <th>@lang('Criterion')</th>
                                <th>@lang('Manager')</th>
                                <th>@lang('Actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tests as $test)
                            @if(auth()->user()->hasRole(\App\Enums\UserRole::Admin) || $test->manager_id == auth()->user()->id)
                                <tr>
                                    <td>
                                    <span class="fw-bold">
                                        <a href="{{route('tests.show', $test)}}">{{$test->id}}</a>
                                    </span>
                                    </td>
                                    <td>{{$test->full_name}}</td>
                                    <td>{{$test->test_date->format('d-m-Y')}}</td>
                                    <td>{{$test->location}}</td>
                                    <td>{{$test->score}}</td>
                                    <td>{{$test->criterion}}</td>
                                    <td>{{$test->manager->name}}</td>
                                    <td>
                                        <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('tests.edit', $test)}}">
                                            <i data-feather="edit-2" class="me-50"></i>
                                            <span>@lang('Edit')</span>
                                        </a>
                                        @can('test_delete')
                                            <a href="{{ route('tests.delete', $test) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">
                                                <i data-feather="trash" class="me-50"></i>
                                                <span>@lang('Delete')</span>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
