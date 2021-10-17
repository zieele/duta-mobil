<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 8 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 Post CRUD Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
   
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Post Title">
               @error('title')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Post Description"></textarea>
                @error('description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Image:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Post Title">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 1
        @endphp
        @foreach ($posts as $post)
        <tr>
            <td>{{ $i }}</td>
            <td><img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @php
            $i++
        @endphp
        @endforeach
    </table>


    @foreach ($posts as $post)
        
    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
 
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Post Title:</strong>
                  <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Post Title">
                  @error('title')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Post Description:</strong>
                  <textarea class="form-control" style="height:150px" name="description" placeholder="Post Description">{{ $post->description }}</textarea>
                  @error('description')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Post Image:</strong>
               <input type="file" name="image" class="form-control" placeholder="Post Title">
              @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
             @enderror
          </div>
          <div class="form-group">

            <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />


          </div>
      </div>
          
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        
      </div>
 
  </form>
    @endforeach


  
    {!! $posts->links() !!}
</body>
</html>