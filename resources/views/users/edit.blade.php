<x-app-layout>
    <div class="content-body">
        <section class="bs-validation">
            <div class="row">
                <!-- Bootstrap Validation -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">@lang('Update Manager')</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{route('users.update', $manager)}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$manager->id}}">
                                <div class="mb-1">
                                    <label class="form-label" for="basic-addon-name">Name</label>
                                    <input type="text" id="basic-addon-name" name="name" class="form-control"
                                           placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name"
                                           required value="{{$manager->name}}">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-default-email1">Email</label>
                                    <input type="email" id="basic-default-email1" name="email" class="form-control"
                                           placeholder="john.doe@email.com" aria-label="john.doe@email.com"
                                           required value="{{$manager->email}}"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="basic-default-password1">Password</label>
                                    <input type="password" id="basic-default-password1" name="password" class="form-control"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <button type="submit" class="btn btn-primary">@lang('Update Manager')</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Bootstrap Validation -->
            </div>
        </section>
    </div>

</x-app-layout>

