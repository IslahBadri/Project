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

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card-body">
  
                    <h1 class="page-header">Create Project</h1>
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 class="card-title">Project Name</h4>
                        <input type="text" class="form-control" id="pname" placeholder="Project Name">
                      </div>
                      <label class="form-check-label">
                        <h4 class="card-title">Project Type</h4>
                                <input type="radio" class="form-check-input" name="type"  value="cp" > Consultancy Project <br></br>
                                <input type="radio" class="form-check-input" name="type"  value="rgp" > Research Grant Project <br></br>
                                <i class="input-helper"></i></label>
                      <div class="form-group">
                      <h4 class="card-title">Project Leader</h4>
                     
                      
                        <input type="radio" class="form-check-input" name="name"  value="$data->name" > Project Leader 1 <br></br>
                        <input type="radio" class="form-check-input" name="name"  value="$data->name" > Project Leader 2 <br></br>
                        <input type="radio" class="form-check-input" name="name"  value="$data->name" > Project Leader 3 <br></br>
                   
                                
                                <i class="input-helper"></i></label>
                      </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Create Project</button>
                      
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                    
                    
                  </div>
                </div>
              </div>
    </div>
  </div>
</div>

@include("admin.adminscript")
  </body>
</html>


