This is coming from view blade file.

  <P> I'm the Link</P>
 @extends('layouts.app')
 
  @section('content')
  <table class="table">
      <thead>
      <tr>
          <th>name</th>
          <th>URL</th>
          <th>Date | last update</th>
          <th>Operations</th>
          <th>  <div class="p-2 flex-shrink-0 bd-highlight">
          <a href="{{route('link.add')}}" class="mr-3">  
                    Add new URL
                    </a>
           </th>
      </tr>
</thead>
<tbody>
@foreach ($links as $link)
    <tr>
              <td>{{$link->name}} </td>
              <td><a href="{{$link->url}}">{{$link->url}}</td>
              <td>{{$link->created_at}} </td>
            <td> <a href="{{route('link.view', $link->id)}}" class="mr-3" > view </a>
                 <a href="{{route('link.delete', $link->id)}}" class="mr-3" > delete </a>
                 
            </td>
              
              
    </tr>
 @endforeach  
</tbody>
  </table>
{{$links->render()}}

@endsection