<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

 <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Plans</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach($plans as $plan)
                                        <li class="list-group-item clearfix">
                                            <div class="pull-left">
                                                <h5>{{ $plan->name }}</h5>
                                                <h5>${{ number_format($plan->cost, 2) }} monthly</h5>
                                                <h5>{{ $plan->description }}</h5>
                                                <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-outline-dark pull-right">Choose</a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
   </div>
</div>
</x-app-layout>


