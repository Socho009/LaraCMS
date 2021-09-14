

  
      
 @extends('layouts.app')
 
 @section('content')
 <div class="contaner">
    <div class="row">
      <div class="col.md.12">
       <h2>Add Article</h2>
       <div class="card">
               <div class="card-header">Add Article</div>
               <div class="card-body">
               <form action="{{ route('link.store') }}" method="post">
                   {{csrf_field()}}
                   
                       <label for="name"> Give a name to your url </label>
                       <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                       <div class="error">{{$errors->first('title')}}</div>
                   </div>

                   <div>
                   
                   
                   <abel for="url">Add your Url:</label>
                    <input type="url" id="url" name="url">
                   </div>

                  

                   
                 
                   

                   <button class="btn btn-primary">Save</button>
               </form>
               </div>
           </div>
      </div>
</div>
</div>

@endsection


