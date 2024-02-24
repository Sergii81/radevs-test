<x-app-layout>
    <div class="col-lg-3 col-12 order-2 order-lg-1">
        <!-- about -->
        <div class="card">
            <div class="card-body">
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Full Name')</h5>
                    <p class="card-text">{{$test->full_name}}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Test Date')</h5>
                    <p class="card-text">{{$test->test_date}}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Location')</h5>
                    <p class="card-text">{{$test->location}}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Score')</h5>
                    <p class="card-text">{{$test->score}}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Criterion')</h5>
                    <p class="card-text">{{$test->criterion}}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Manager')</h5>
                    <p class="card-text">{{$test->manager->name}}</p>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('tests.edit', $test)}}">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>@lang('Edit')</span>
                    </a>
                    <a href="{{ route('tests.delete', $test) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">
                        <i data-feather="trash" class="me-50"></i>
                        <span>@lang('Delete')</span>
                    </a>
                </div>
            </div>
        </div>
        <!--/ about -->
    </div>
</x-app-layout>

