<!DOCTYPE html>
<html lang="en">

<head>
@include("admin.admincss") 
</head>
<body>
  <div class="container-scroller">
  @include("admin.navbar")
  
  <div style="position: relative; top: 60px; right: -150px">
    <h2>Monitor Project</h2>
    <table bgcolor="white" border="3px">
        <tr>
            <th style="padding: 30px">Project ID</th>
            <th style="padding: 30px">Project</th>
            <th style="padding: 30px">Project Leader</th>
            <th style="padding: 30px">Project Stage</th>
            <th style="padding: 30px">Project Status</th>
            <th style="padding: 30px">Actions</th>
        </tr>
        @foreach($data as $proj)
        <tr align="center">
            <td>{{$proj->id}}</td>
            <td>{{$proj->name}}</td>
            <td>{{$proj->pl}}</td>
            <td>{{$proj->stage}}</td>
            <td>{{$proj->status}}</td>
            <td><a href="{{url('/updS', $proj->id)}}">Update</a></td>
        </tr>
        @endforeach
    </table><br/><br/>
  </div>

  </div>
  @include("admin.adminscript")
  
</body>

</html>