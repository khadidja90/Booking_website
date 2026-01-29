<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        .form_container {
            background-color: #2d3035;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        label {
            display: inline-block;
            width: 150px;
            color: #ffffff;
            font-weight: bold;
            font-size: 14px;
        }

        .div_deg {
            padding-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        input[type="text"], textarea {
            background-color: #34373d;
            border: 1px solid #444;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            width: 100%;
            transition: 0.3s;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #db6574;
            outline: none;
            box-shadow: 0 0 5px rgba(219, 101, 116, 0.3);
        }

        textarea {
            height: 100px;
        }

        .mail-title {
            color: #ffffff;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            border-bottom: 2px solid #db6574;
            display: inline-block;
            padding-bottom: 10px;
        }

        .btn-send {
            background-color: #db6574;
            border: none;
            color: white;
            padding: 10px 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-send:hover {
            background-color: #c15463;
            transform: scale(1.05);
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          
          <div class="form_container text-center">
            <h1 class="mail-title">Send Email to: <span style="color: #db6574;">{{$data->name}}</span></h1>

            <form action="{{url('mail',$data->id)}}" method="Post">
                @csrf

                <div class="div_deg">
                    <label>Greeting</label>
                    <input type="text" name="greeting" placeholder="e.g. Hello {{$data->name}},">
                </div>

                <div class="div_deg">
                    <label>Main Body</label>
                    <textarea name="body" placeholder="Write your message here..."></textarea>
                </div>

                <div class="div_deg">
                    <label>Action Text</label>
                    <input type="text" name="action_text" placeholder="e.g. Click Here to Confirm">
                </div>

                <div class="div_deg">
                    <label>Action Url</label>
                    <input type="text" name="action_url" placeholder="e.g. https://yourhotel.com/confirm">
                </div>

                <div class="div_deg">
                    <label>End Line</label>
                    <input type="text" name="end_line" placeholder="e.g. Thank you for choosing us!">
                </div>

                <div class="div_deg" style="justify-content: center; padding-top: 20px;">
                    <input class="btn btn-send" type="submit" value="Send Mail Now">
                </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    
    @include('admin.footer')
  </body>
</html>