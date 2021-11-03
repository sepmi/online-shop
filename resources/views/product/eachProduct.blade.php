<x-layouts.app>
    
    
    <x-slot name="title">{{$product->name}}</x-slot>


  
    <div class="card text-center  m-1">
        <div class="card-header text-center">
            <h1>{{$product->name}}</h1>
        </div>
        <div class="card-body">
            <div class="card-body">
                        
                <div class="mb-2">
                    <a href="#">
                        <img class="w-50 " src="{{asset('images/'.$product->image ->image)}}" alt="this is image file">
                    </a>
                </div>

                <div class="mb-2">
                    <p>Price: {{$product ->price}}</p>
                   

                </div>

            </div>
        </div>

    </div>

    @include('comment.commentForProducts')

</x-layouts.app>



