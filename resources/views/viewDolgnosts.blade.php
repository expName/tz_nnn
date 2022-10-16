<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table table-bordered">
                <div><a class="btn btn-outline-success" href="{{route('dolgnosts.create')}}">{{ __('bdSl.add') }}</a></div>
                <thead class="">
                  <tr>
                    <th>Id</th>
                    <th>{{ __('bdSl.name') }}</th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($result as $elem)
                        <tr>
                              <th scope="row">{{ $elem->id }}</th>
                              <td>{{ $elem->name }}</td>
                              <td><a class="btn btn-outline-primary" href="{{route('dolgnosts.show', $elem->id)}}">{{ __('bdSl.view') }}</a></td>
                              <td><a class="btn btn-outline-primary" href="{{route('dolgnosts.edit', $elem->id)}}">{{ __('bdSl.edit') }}</a></td>
                              <form action="{{route('dolgnosts.delete', $elem->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <td><button type="submit" class="btn btn-outline-danger">{{ __('bdSl.delete') }}</button></td>
                              </form>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>   
    </div>
</x-app-layout>