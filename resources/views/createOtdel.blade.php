<x-app-layout>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('otdels.add')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">{{ __('bdSl.name') }}</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('bdSl.name') }}">
                  <label for="name">{{ __('bdSl.user_id') }}</label>
                  <input type="text" name="user_id" class="form-control" id="user_id" placeholder="{{ __('bdSl.user_id') }}">
                <button type="submit" class="btn btn-outline-primary">{{ __('bdSl.create') }}</button>
              </form>
                </div>
    </div>
</x-app-layout>