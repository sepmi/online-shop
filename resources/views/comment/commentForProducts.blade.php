<div class="card text-center m-1">
    <div class="card-body content-center ">
        <div class="col">
            
                <div class="bg-white  row">
                    
                    <form action="{{ route('comment.store',$product->id ) }}" method="POST">
                        @csrf
                        <div class="d-flex mt-1 mb-4">
                            <input type="text" class="form-control me-3" placeholder="Add comment" name="comment">
                            <button class="btn btn-primary " type="submit">Comment</button>
                        </div>
                    </form>
                </div>  
                

                @forelse ($product->comments as $comment)
                    <div class="mt-2 row">
                        <hr>
                        <div class="d-flex flex-row align-items-center ">
                            <h5 class="me-2">{{ $comment->user->fname." ".$comment->user->lname }}</h5>
                        </div>
                        <div class="">
                            <p>
                                {{ $comment ->comment }}
                            </p>
                        </div>

                        @if (Auth::check() && Auth::user()->is_admin == 1)
                            <form action="{{route('comment.destroy', $comment->id)}}" method="POST" >
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                    </div>

                @empty
                    <div>
                        No Comments
                    </div>
                @endforelse
        </div>
    </div>
</div>