<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  <style>
    /* Table container styling */
    .table_deg {
        border-collapse: collapse;
        margin: auto;
        width: 95%;
        text-align: left;
        margin-top: 40px;
        /* Using a slightly lighter shade than the background to create a "card" look */
        background-color: #34373d; 
        color: #e9ecef; /* Light grey text for readability */
        box-shadow: 0 10px 30px rgba(0,0,0,0.5); 
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #444; /* Subtle border to define the table edges */
    }

    /* Table Header */
    .th_deg {
        /* Primary color for the header - works well with dark themes */
        background-color: #db6574; 
        color: #ffffff;
        padding: 15px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-align: center;
        border-bottom: 2px solid #2d3035;
    }

    /* Row styling */
    tr {
        border-bottom: 1px solid #3f4249; /* Darker dividers */
        transition: background-color 0.3s ease;
    }

    /* Zebra Striping (Dark version) */
    tr:nth-child(even) {
        background-color: #3b3e45; 
    }

    /* Hover effect (Highlighting in the dark) */
    tr:hover {
        background-color: #464a52; 
    }

    /* Data cells */
    td {
        padding: 15px;
        color: #d1d1d1; /* Soft white text to reduce eye strain */
        font-size: 14px;
        line-height: 1.5;
    }

    /* Special handling for the message column */
    .message_cell {
        max-width: 400px;
        word-wrap: break-word;
        color: #b0b3b8; /* Slightly dimmer for longer text */
    }

    /* Column Boldness */
    td:first-child {
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
          <div class="container-fluid">
            
            <table class="table_deg">
                <thead>
                    <tr>
                        <th class="th_deg">Name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Message</th>
                        <th class="th_deg">Send Email</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td style="font-weight: bold;">{{$item->name}}</td>                  
                        <td>{{$item->email}}</td>
                        <td style="color: #2980b9;">{{$item->phone}}</td>
                        <td class="message_cell">{{$item->message}}</td>
                        <td><a class="btn btn-success" href="{{url('send_mail',$item->id)}}">send mail</td>
                        
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