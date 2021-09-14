@extends('layouts.app')
 
 @section('content')
 <div class="contaner">
    <div class="row">
      <div class="col.md.12">
       <h2>View Article</h2>
       <div class="card">
               <div class="card-header">View URL</div>
               <div class="card-body">
               <form action="{{ route('link.update') }}" method="post">
                   
                  
                   
                       <label for="name">name</label>
                       <input type="text" name="name" class="form-control" value="{{old('name',$link ?? ''->name)}}" required>
                       <div class="error">{{$errors->first('name')}}</div>
                   </div>

                   <div>
                   <div> <a href="{{$link ?? ''->url}}" > {{$link ?? ''->url}}"</div>

                   <input type="hidden" name="id" value="{{ $link ?? ''->id }}">
                   <input type="url" name="url" value="{{$link ?? ''->url}}">
                   </div>

                  

                   
                 
                   

                   <button class="btn btn-primary">Update</button>
               </form>
               </div>
           </div>
      </div>
</div>
</div>

@endsection
