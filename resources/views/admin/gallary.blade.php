<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        /* Title Styling */
        .gallery_title {
            font-size: 40px; 
            font-weight: bolder; 
            color: white; 
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Gallery Card Design */
        .gallery_card {
            background-color: #2d3035; /* Matches typical dark admin themes */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s;
        }

        .gallery_card:hover {
            transform: translateY(-5px); /* Lift up effect */
        }

        /* Image Styling */
        .gallery_img {
            height: 200px; 
            width: 100%; 
            object-fit: cover; /* Prevents stretching */
            border-radius: 5px;
            margin-bottom: 15px;
            border: 1px solid #444;
        }

        /* Upload Section Styling */
        .upload_section {
            background-color: #343a40;
            padding: 40px;
            border-radius: 10px;
            margin-top: 50px;
            border: 2px dashed #666; /* Gives it an 'upload zone' look */
        }

        label {
            font-size: 18px;
            margin-right: 20px;
        }

        .btn-delete {
            width: 100%;
            border-radius: 5px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>
                <h1 class="gallery_title">Photo Gallery</h1>

                <div class="row">
                    @foreach ($gallary as $item)
                    <div class="col-md-4">
                        <div class="gallery_card">
                            <img class="gallery_img" src="/gallay/{{$item->image}}">
                            <a class="btn btn-danger btn-delete" onclick="return confirm('Delete this image?')" href="{{url('delete_gallary',$item->id)}}">
                                <i class="fa fa-trash"></i> Delete Image
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="upload_section">
                    <form action="{{url('upload_gallary')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <h3 style="color: white; margin-bottom: 20px;">Add New Image to Gallery</h3>
                        
                        <div class="d-flex justify-content-center align-items-center">
                            <label style="color: white; font-weight:bold;">Select Image:</label>
                            <input type="file" name="image" required style="color: white;">
                            <input class="btn btn-primary" type="submit" value="Upload Now">
                        </div>
                    </form>
                </div>
            </center>
          </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>