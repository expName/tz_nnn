<x-app-layout>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="name">{{ __('bdSl.name') }}</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('bdSl.name') }}" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label for="name">{{ __('bdSl.dolgnost_id') }}</label>
                  <input type="text" name="dolgnost_id" class="form-control" id="dolgnost_id" placeholder="{ __('bdSl.dolgnost_id') }}" value="{{$user->dolgnost->id}}">
                </div>
                <div class="form-group">
                  <label for="email">{{ __('bdSl.email') }}</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="{{ __('bdSl.email') }}" value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label for="password">{{ __('bdSl.password') }}</label>
                  <input type="text" name="password" class="form-control" id="password" placeholder="{{ __('bdSl.password') }}">
                </div>
                      <div class="form-group">
                              <label>{{ __('bdSl.image') }}:</label>
                              <input type="file" name="image" class="form-control" placeholder="{{ __('bdSl.image') }}">
                          </div>        
                <button type="submit" class="btn btn-outline-primary">{{ __('bdSl.update') }}</button>
              </form>
        </div>
    </div>
</x-app-layout>