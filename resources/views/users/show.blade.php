<x-app-layout>
    <div class="col-lg-3 col-12 order-2 order-lg-1">
        <!-- about -->
        <div class="card">
            <div class="card-body">
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Name')</h5>
                    <p class="card-text">{{$manager->name}}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-75">@lang('Email')</h5>
                    <p class="card-text">{{$manager->email}}</p>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{route('users.edit', $manager)}}">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>@lang('Edit')</span>
                    </a>
                    <a href="{{ route('users.delete', $manager) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">
                        <i data-feather="trash" class="me-50"></i>
                        <span>@lang('Delete')</span>
                    </a>
                </div>
            </div>
        </div>
        <!--/ about -->
    </div>
</x-app-layout>
