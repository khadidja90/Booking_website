<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        /* Main Container */
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
            background-color: #2d3035; /* Matching the main page background */
            border: 1px solid #4b4f58;
            border-radius: 5px;
            padding: 10px;
            color: white;
            width: 100%;
            transition: border-color 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #db6574; /* Using the same accent red from the table */
            outline: none;
        }

        textarea {
            height: 80px;
        }

        /* Button Styling */
        .btn-submit {
            background-color: #db6574;
            border: none;
            color: white;
            padding: 12px 30px;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-submit:hover {
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
                    <h1 class="title_deg">Add Rooms</h1>

                    <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="div_deg">
                            <label>Room Title</label>
                            <input type="text" name="title" placeholder="Enter title">
                        </div>

                        <div class="div_deg">
                            <label>Description</label>
                            <textarea name="description" placeholder="Enter description"></textarea>
                        </div>

                        <div class="div_deg">
                            <label>Price</label>
                            <input type="number" name="price" placeholder="0.00">
                        </div>

                        <div class="div_deg">
                            <label>Room Type</label>
                            <select name="type">
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label>Free Wifi</label>
                            <select name="wifi">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label>Upload Image</label>
                            <input type="file" name="image" style="color: #999;">
                        </div>

                        <div class="div_deg" style="justify-content: center;">
                            <input class="btn-submit" type="submit" value="Add Room">
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