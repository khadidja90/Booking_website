<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        /* Table Container - matching #2D3035 scheme */
        .table_deg {
            border-collapse: collapse;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
            background-color: #34373d; /* Lighter charcoal for depth */
            font-size: 13px; /* Slightly smaller to fit 12 columns */
            color: #d1d1d1;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #444;
        }

        /* Header Style - Matching the accent color #db6574 */
        .th_deg {
            background-color: #db6574;
            color: #ffffff;
            padding: 15px 5px;
            border-bottom: 2px solid #2d3035;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 1px;
        }

        /* Table cells */
        td {
            padding: 12px 5px;
            border-bottom: 1px solid #3f4249;
            vertical-align: middle;
        }

        /* Zebra striping */
        tr:nth-child(even) {
            background-color: #3b3e45;
        }

        /* Hover Effect */
        tr:hover {
            background-color: #464a52;
        }

        /* Status Badge Styling */
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 10px;
            color: white !important;
            display: inline-block;
            text-transform: uppercase;
        }

        .bg-approve { background-color: #27ae60; }
        .bg-rejected { background-color: #e74c3c; }
        .bg-waiting { background-color: #f39c12; }

        /* Image styling */
        .room_img {
            width: 80px !important;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #555;
        }

        /* Button styling */
        .btn-sm-custom {
            padding: 4px 8px;
            font-size: 10px;
            margin-bottom: 3px;
            display: block;
            width: 80px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 3px;
        }

        /* Strong text for important data */
        .highlight-text {
            color: #ffffff;
            font-weight: bold;
        }

    </style>

  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid" style="overflow-x: auto;"> 
            <table class="table_deg">
                <thead>
                    <tr>
                        <th class="th_deg">Room #</th>
                        <th class="th_deg">Customer</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival</th>
                        <th class="th_deg">Leaving</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Update Status</th>
                    </tr>
                </thead>
                
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->room_id}}</td>                  
                    <td class="highlight-text">{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->start_date}}</td>
                    <td>{{$item->end_date}}</td>
                    <td>
                        @if($item->status == 'approve')
                        <span class="status-badge bg-approve">Approved</span>
                        @elseif($item->status == 'rejected')
                        <span class="status-badge bg-rejected">Rejected</span>
                        @else
                        <span class="status-badge bg-waiting">Waiting</span>
                        @endif
                    </td>
                    <td>{{$item->room->room_title}}</td>
                    <td class="highlight-text" style="color: #db6574;">{{$item->room->price}}</td>
                    <td>
                        <img class="room_img" src="/room/{{$item->room->image}}">
                    </td>
                    <td>
                        <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger btn-sm" href="{{url('delete_booking',$item->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm-custom" href="{{url('approve_book',$item->id)}}">Approve</a>
                        <a class="btn btn-warning btn-sm-custom" href="{{url('rejected_book',$item->id)}}">Reject</a>
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