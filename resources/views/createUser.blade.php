<x-app-layout>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('users.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">{{ __('bdSl.name') }}</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('bdSl.name') }}">
                </div>
                <div class="form-group">
                  <label for="email">{{ __('bdSl.email') }}</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="{{ __('bdSl.email') }}">
                </div>
                <div class="form-group">
                  <label for="password">{{ __('bdSl.password') }}</label>
                  <input type="text" name="password" class="form-control" id="password" placeholder="{{ __('bdSl.password') }}">
                </div>
                                <div class="form-group">
                              <label>{{ __('bdSl.image') }}:</label>
                              <input type="file" name="image" class="form-control" placeholder="{{ __('bdSl.image') }}">
                          </div>
                <button type="submit" class="btn btn-outline-primary">{{ __('bdSl.create') }}</button>
              </form>
        </div>
    </div>
</x-app-layout>