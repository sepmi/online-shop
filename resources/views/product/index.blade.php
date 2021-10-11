
<x-layouts.app>
    <x-slot name="title">  Products</x-slot>
    

    <div class="row ">
            @foreach ( $products as $product )
            <div class="card  text-center sepehr6 m-1"  >
        
        
                
        
                    <div class="card-header text-center ">
                        {{$product->name}}
                    </div>
                    <div class="card-body">
                        
                        <div class="mb-2">
                            <img class="w-50 " src="{{asset('images/'.$product->image ->image)}}" alt="this is image file">
                        </div>
        
                        <div class="mb-2">
                            <p>Price: {{$product ->price}}</p>
                           
        
                        </div>
        
                        
                        <a type="button" href="/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                        <a type="button" href="{{route('products.create')}}" class="btn btn-success">New</a>
        
                    </div>
                    
                
            
            </div>
        
            @endforeach  
    </div>

   
</x-layouts.app>