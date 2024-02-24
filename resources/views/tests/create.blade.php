<x-app-layout>
    <div class="content-body">
        <section class="bs-validation">
            <div class="row">
                <!-- Bootstrap Validation -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">@lang('Create Test')</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{route('tests.store')}}" >
                                @csrf
                                <div class="mb-1">
                                    <label class="form-label" for="basic-addon-full-name">@lang('Full Name')</label>
                                    <input type="text" id="basic-addon-full-name" name="full_name" class="form-control"
                                           placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon-full-name" required />
                                    <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-addon-location">@lang('Location')</label>
                                    <input type="text" id="basic-addon-location" name="location" class="form-control"
                                           placeholder="location" aria-label="location" aria-describedby="basic-addon-location" required />
                                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="score">@lang('Score')</label>
                                    <input type="number" id="score" name="score" class="form-control"
                                           placeholder="score" aria-label="score" aria-describedby="basic-addon-score" />
                                    <x-input-error :messages="$errors->get('score')" class="mt-2" max="100"/>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="criterion">@lang('Criterion')</label>
                                    <input type="number" id="criterion" name="criterion" class="form-control"
                                           placeholder="criterion" aria-label="criterion" aria-describedby="basic-addon-criterion" readonly/>
                                    <x-input-error :messages="$errors->get('criterion')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basicSelect">@lang('Manager')</label>
                                    <select class="form-select" id="basicSelect" name="manager_id">
                                        @foreach($managers as $manager)
                                            <option value="{{$manager->id}}">{{$manager->name}}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('criterion')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="pd-default">@lang('Test Date')</label>
                                    <input type="text" id="pd-default" name="test_date" class="form-control pickadate picker__input picker__input--active" readonly="" aria-haspopup="true" aria-readonly="false" aria-owns="pd-default_root" required>
                                    <x-input-error :messages="$errors->get('test_date')" class="mt-2" />
                                </div>
                                <button type="submit" class="btn btn-primary">@lang('Create Test')</button>
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

