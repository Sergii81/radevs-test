<x-app-layout>
    @php
        $readonly = (auth()->user()->hasRole(\App\Enums\UserRole::Admin)) ? '' : 'readonly';
        $disabled = (auth()->user()->hasRole(\App\Enums\UserRole::Admin)) ? '' : 'disabled';
    @endphp
    <div class="content-body">
        <section class="bs-validation">
            <div class="row">
                <!-- Bootstrap Validation -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">@lang('Edit Test')</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{route('tests.update', $test)}}" >
                                @csrf
                                <input type="hidden" name="id" value="{{$test->id}}">
                                <div class="mb-1">
                                    <label class="form-label" for="basic-addon-full-name">@lang('Full Name')</label>
                                    <input type="text" id="basic-addon-full-name" name="full_name" class="form-control"
                                           placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon-full-name"
                                           required {{$readonly}} value="{{$test->full_name}}"/>
                                    <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-addon-location">@lang('Location')</label>
                                    <input type="text" id="basic-addon-location" name="location" class="form-control"
                                           placeholder="location" aria-label="location" aria-describedby="basic-addon-location"
                                           required {{$readonly}} value="{{$test->location}}"/>
                                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="score">@lang('Score')</label>
                                    <input type="number" id="score" name="score" class="form-control"
                                           placeholder="score" aria-label="score" aria-describedby="basic-addon-score"
                                           value="{{$test->score}}" max="100"/>
                                    <x-input-error :messages="$errors->get('score')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="criterion">@lang('Criterion')</label>
                                    <input type="number" id="criterion" name="criterion" class="form-control"
                                           placeholder="criterion" aria-label="criterion" aria-describedby="basic-addon-criterion"
                                           value="{{$test->criterion}}" readonly/>
                                    <x-input-error :messages="$errors->get('criterion')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basicSelect">@lang('Manager')</label>
                                    <input type="hidden" name="manager_id" value="{{$test->manager->id}}">
                                    <select class="form-select" id="basicSelect" name="manager_id" {{$disabled}}>
                                        @foreach($managers as $manager)
                                            <option value="{{$manager->id}}"
                                                    @if($test->manager_id == $manager->id) selected @endif
                                            >{{$manager->name}}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('criterion')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <input type="hidden" name="test_date" value="{{$test->test_date}}">
                                    <label class="form-label" for="pd-default">@lang('Test Date')</label>
                                    <input type="text" id="pd-default" name="test_date"
                                           class="form-control pickadate picker__input picker__input--active"
                                           {{$disabled}} aria-haspopup="true" required value="{{$test->test_date}}">
                                    <x-input-error :messages="$errors->get('test_date')" class="mt-2" />
                                </div>
                                <button type="submit" class="btn btn-primary">@lang('Update Test')</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Bootstrap Validation -->
            </div>
        </section>
    </div>
    @section('scripts')
        <script src="{{asset('assets/js/calculateCriterion.js')}}"></script>
    @endsection
</x-app-layout>
