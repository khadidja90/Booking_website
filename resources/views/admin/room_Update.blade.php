<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        /* Main Container setup */
        .div_center {
            text-align: center;
            padding-top: 40px;
            display: flex;
            justify-content: center;
        }

        /* Form Card - slightly lighter than #2D3035 */
        .form_container {
            background-color: #34373d; 
            padding: 40px;
            border-radius: 10px;
            width: 600px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            border: 1px solid #444;
        }

        /* Form Title */
        .title_deg {
            font-size: 30px; 
            font-weight: bold; 
            color: white;
            margin-bottom: 30px;
        }

        /* Row Spacing */
        .div_deg {
            padding-top: 20px;
            display: flex;
            align-items: center;
            text-align: left;
        }

        /* Labels */
        label {
            display: inline-block;
            width: 150px;
            color: #d1d1d1;
            font-weight: bold;
        }

        /* Inputs, Textarea, and Selects */
        input[type="text"], 
        input[type="number"], 
        textarea, 
        select {
            background-color: #2d3035; 
            border: 1px solid #4b4f58;
            border-radius: 5px;
            padding: 10px;
            color: white;
            width: 100%;
            transition: border-color 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #db6574; /* Your accent red/coral */
            outline: none;
        }

        textarea {
            height: 80px;
        }

        /* Image preview styling */
        .current_img {
            border-radius: 8px;
            border: 2px solid #4b4f58;
            margin-bottom: 10px;
        }

        /* Button Styling */
        .btn-update {
            background-color: #db6574;
            border: none;
            color: white;
            padding: 12px 30px;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
            width: 100%; /* Makes button full width of form */
        }

        .btn-update:hover {
            background-color: #c45260;
            transform: translateY(-2px);
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <div class="div_center">
                <div class="form_container">
                    <h1 class="title_deg">Update Room</h1>

                    <form action="{{url('edit_room',$data->id)}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="div_deg">
                            <label>Room Title</label>
                            <input type="text" name="title" value="{{$data->room_title}}">
                        </div>

                        <div class="div_deg">
                            <label>Description</label>
                            <textarea name="description">{{$data->descreption}}</textarea>
                        </div>

                        <div class="div_deg">
                            <label>Price</label>
                            <input type="number" name="price" value="{{$data->price}}">
                        </div>

                        <div class="div_deg">
                            <label>Room Type</label>
                            <select name="type">
                                <option selected value="{{$data->room_type}}">{{$data->room_type}} (Current)</option>
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label>Free Wifi</label>
                            <select name="wifi">
                                <option selected value="{{$data->wifi}}">{{$data->wifi}} (Current)</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                         <div class="div_deg">
                            <label>Current Image</label>
                            <img class="current_img" width="120" src="/room/{{$data->image}}">
                        </div>

                        <div class="div_deg">
                            <label>New Image</label>
                            <input type="file" name="image" style="color: #999;">
                        </div>

                        <div class="div_deg">
                            <input class="btn-update" type="submit" value="Update Room">
                        </div>
                    </form>
                </div>
            </div>

          </div>
        </div>
    </div>
     
    @include('admin.footer')
  </body>
</html>