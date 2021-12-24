<x-app-layout>

</x-app-layout>
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
    <table bgcolor="grey" border="3px">
        <tr>
            <th style="padding: 30px">Project ID</th>
            <th style="padding: 30px">Project</th>
            <th style="padding: 30px">Project Leader</th>
            <th style="padding: 30px">Project Stage</th>
            <th style="padding: 30px">Project Status</th>
            <th style="padding: 30px">Actions</th>
        </tr>
      
        <tr align="center">
            <td>1</td>
            <td>Twitter Text Analytics</td>
            <td>Project Leader 1</td>
            <td>Inception</td>
            <td>On track</td>
            <td><a href="{{url('/details')}}">Update</a></td>
        </tr>
       
    </table><br/><br/>
  </div>

  </div>
  @include("admin.adminscript")
  
</body>

</html>