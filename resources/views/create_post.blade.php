<!DOCTYPE html>
<html lang="en">
    @extends('head')
<body>
  

    @extends('navbar')
    <!-- container-->

<div class="container     " style="margin-top:100px">

  <div class="row ">
      @if(session()->get('success'))
      <div class="alert alert-warning alert-dismissible fade show col-3  mx-auto" role="alert">
          {{session()->get('success')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  @endif

    

  </div>

 
    

  <table class="table mx-auto  table-bordered">
    <thead>
      <tr>
      <th>

        N°
       </th>
        <th>Name</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>

      @foreach ($post as $po)
      <tr>
          <td scope="row">{{$po->id}} </td>
          <td>{{$po->name_p}}</td>
          <td>

            <a name="" id="" class="btn btn-primary" data-toggle="modal" data-target="#modelId_edit_{{$po->id}}" href="#" role="button">edit</a>
          <a name="" id="" class="btn btn-danger" href="/post/delete/{{$po->id}}" role="button">delete</a>


          <!-- edit model -->
          
  <!-- Modal -->
  <div class="modal fade" id="modelId_edit_{{$po->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Update post</h5>
                     
              </div>
              <div class="modal-body">
                  
                  <form action="" method="post">
  
  
                      <div class="form-group">
                        <label for="np">Name</label>
                        <input type="text" class="form-control" value="{{$po->name_p}}" name="name_post" id="np" aria-describedby="textHelpId" placeholder="Name post">
                      
                      </div>
  
                      <div class="form-group">
                        <label  for="sp">Category</label>
                        <select value="{{$po->category}}" class="form-control" name="category_post" id="sp">
                          <option value="1">java</option>
                          <option value="2">C++</option>
                          <option value="3">C#</option>
                        </select>
                      </div>
                      
  
                      <div class="form-group">
                        <label for="dp">Description</label>
                        <textarea class="form-control" value="{{$po->disc}}" name="description_post" id="dp" rows="3"></textarea>
                      </div>
  
                      <div class="form-group">
                        <label for="ip">Image</label>
                        <input type="file" class="form-control-file" name="image_post" id="ip" placeholder="Image" aria-describedby="fileHelpId">
                       
                      </div>
                 
  
  
  
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Save</button>
              </div>
            </form>
  
          </div>
      </div>
  </div>
</div>
    
          </td>
        </tr>
      <tr>
      @endforeach
      
      
    </tbody>
  </table>

  <a name="" id="" class="btn btn-danger" href="/post/deleteall/" role="button">delete all</a>
  
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
    Launch
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Create new post</h5>
                     
              </div>
              <div class="modal-body">
                  
                  <form action="/post/store/" method="post">
  
  
                      <div class="form-group">
                        <label for="np">Name</label>
                        <input type="text" class="form-control" name="name_post" id="np" aria-describedby="textHelpId" placeholder="Name post">
                      
                      </div>
  
                      <div class="form-group">
                        <label for="sp">Category</label>
                        <select class="form-control" name="category_post" id="sp">
                          <option value="1">java</option>
                          <option value="2">C++</option>
                          <option value="3">C#</option>
                        </select>
                      </div>
                      
  
                      <div class="form-group">
                        <label for="dp">Description</label>
                        <textarea class="form-control" name="description_post" id="dp" rows="3"></textarea>
                      </div>
  
                      <div class="form-group">
                        <label for="ip">Image</label>
                        <input type="file" class="form-control-file" name="image_post" id="ip" placeholder="Image" aria-describedby="fileHelpId">
                       
                      </div>
                 
  
  
  
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary">Save</button>
              </div>
            </form>
  
          </div>
      </div>
  </div>
</div>
    
  

</body>
</html>