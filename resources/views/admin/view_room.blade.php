<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        /* Table container - matching your dark theme #2D3035 */
        .table_deg {
            border-collapse: collapse;
            margin: auto;
            width: 95%;
            text-align: center;
            margin-top: 40px;
            /* Layered look: slightly lighter than the main background */
            background-color: #34373d; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #444;
        }

        /* Table Header - consistent accent red */
        .th_deg {
            background-color: #db6574; 
            color: white;
            padding: 15px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #2d3035;
        }

        /* Row styling */
        tr {
            border-bottom: 1px solid #3f4249;
            transition: background-color 0.3s ease;
        }

        /* Zebra Striping (Subtle dark version) */
        tr:nth-child(even) {
            background-color: #3b3e45; 
        }

        /* Hover Effect */
        tr:hover {
            background-color: #464a52; 
        }

        /* Data Cells */
        td {
            padding: 15px;
            color: #d1d1d1; /* Soft white for readability */
            font-size: 14px;
        }

        /* Image Styling */
        .img_deg {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #555;
        }
        
        /* Action Button spacing */
        .btn {
            margin: 2px;
            font-size: 13px;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <table class="table_deg">
                <thead>
                    <tr>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Wifi</th>
                        <th class="th_deg">Room Type</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Actions</th> 
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td style="color: white; font-weight: bold;">{{$item->room_title}}</td>                  
                        <td style="font-size: 12px;">{{ \Illuminate\Support\Str::limit($item->descreption, 50) }}</td> 
                        <td><b style="color: #db6574;">{{$item->price}} Da</b></td>
                        <td>{{$item->wifi}}</td>
                        <td>{{$item->room_type}}</td>
                        <td>
                            <img class="img_deg" src="room/{{$item->image}}">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{url('room_Update',$item->id)}}">Update</a>
                            <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('room_delete',$item->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>