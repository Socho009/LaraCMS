

  
      
 @extends('layouts.app')
 
  @section('content')
  <div class="contaner">
     <div class="row">
       <div class="col.md.12">
        <h2>Add Article</h2>
        <div class="card">
                <div class="card-header">Add Article</div>
                <div class="card-body">
                <form action="{{ route('post.store') }}" method="post">
                    {{csrf_field()}}
                    
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                        <div class="error">{{$errors->first('title')}}</div>
                    </div>

                    <div>
                    
                    
                    <textarea class="description" name="description"></textarea>
                    </div>

                   

                    
                  
                    

                    <button class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
       </div>
</div>
</div>

@endsection
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
</script>

