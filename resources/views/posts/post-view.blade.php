@extends('layouts.app')
 
 @section('content')
 <div class="contaner">
    <div class="row">
      <div class="col.md.12">
       <h2>View Article</h2>
       <div class="card">
               <div class="card-header">View Article</div>
               <div class="card-body">
               <form action="{{ route('post.update') }}" method="post">
                   
                   
                   
                       <label for="title">Title</label>
                       <input type="text" name="title" class="form-control" value="{{old('title',$post->title)}}" required>
                       <div class="error">{{$errors->first('title')}}</div>
                   </div>

                   <div>
                   <div> <html>{{$post->description}}</html> </div>

                   <input type="hidden" name="id" value="{{ $post->id }}">
                   <textarea class="description" name="description" ></textarea>
                   </div>

                  

                   
                 
                   

                   <button class="btn btn-primary">Update</button>
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
       height: 300,
       initValue:function () {
        var elm = '{{$post->description}}';
        return !!elm ? elm.href : '';
      }
   });
</script>