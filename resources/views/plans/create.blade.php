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
                        <div class="card" style="width:24rem;margin:auto;">
                            <div class="card-body">
                                <form action="{{route('store.plan')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="plan name">Plan Name:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Plan Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="cost">Cost:</label>
                                        <input type="text" class="form-control" name="cost" placeholder="Enter Cost">
                                    </div>
                                    <div class="form-group">
                                        <label for="cost">Plan Description:</label>
                                        <input type="text" class="form-control" name="description" placeholder="Enter Description">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
         </div>
    </div>
</div>
</x-app-layout>

