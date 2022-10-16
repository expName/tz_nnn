<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <ul class="list-group">
            <li class="list-group-item">{{$user->id}}</li>
            <li class="list-group-item">{{$user->image}}</li>
            <li class="list-group-item">{{$user->name}}</li>
            <li class="list-group-item">{{$user->dolgnost->name ?? ''}}</li>
            <li class="list-group-item">{{$user->password}}</li>
            <li class="list-group-item">{{$user->created_at}}</li>
          </ul>   
        </div> 
  </div>
</x-app-layout>