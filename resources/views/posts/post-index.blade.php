This is coming from view blade file.

  <P> I'm the post </P>
 @extends('layouts.app')
 
  @section('content')
  <table class="table">
      <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Date | last update</th>
          <th>Operations</th>
          <th>  
                   
                    <a href="{{route('post.add')}}" class="mr-3">  
                    Add new Post
                    </a>
                    
               
           </th>
      </tr>
</thead>
<tbody>
@foreach ($posts as $post)
    <tr>
              <td>{{$post->title}} </td>
              <td>{{$post->description}} </td>
              <td>{{$post->created_at}} </td>
            <td> <a href="{{route('post.view', $post->id)}}" class="mr-3" > view </a>
                 <a href="{{route('post.delete', $post->id)}}" class="mr-3" > delete </a>
                 
            </td>
              
              
    </tr>
 @endforeach  
</tbody>
  </table>
{{$posts->render()}}

@endsection