 
 <!DOCTYPE html>

 <head>
     <title>IFOCUS PICTURES HANDS ONLINE TRAINING</title>
     <meta charset="utf-8" />
     <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.6/css/bootstrap.css" />
     <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.6/css/react-select.css" />
     <meta name="format-detection" content="telephone=no">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <link type="image/x-icon" rel="shortcut icon" href="{{ asset('backend/assets/vendors/images/logo.png') }}">
 </head>
 
 <body>
    <style>
        .sdk-select {
            height: 34px;
            border-radius: 4px;
        }

        .websdktest button {
            float: right;
            margin-left: 5px;
        }

        #nav-tool {
            margin-bottom: 0px;
        }

        #show-test-tool {
            position: absolute;
            top: 100px;
            left: 0;
            display: block;
            z-index: 99999;
        }

        #display_name {
            width: 250px;
        }


        #websdk-iframe {
            width: 700px;
            height: 500px;
            border: 1px;
            border-color: red;
            border-style: dashed;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            left: 50%;
            margin: 0;
        }
    </style>
 
 
 
 
 
 
 
    <script src="https://source.zoom.us/1.9.6/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.9.6/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.9.6/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.9.6/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.9.6/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-1.9.6.min.js"></script>
 
     <script src="{{ asset('backend/assets/tool.js')}}"></script> 
     <script src="{{ asset('backend/assets/vconsole.min.js')}}"></script> 
     <script src="{{ asset('backend/assets/meeting.js')}}"></script> 
 
     <script>
         (function() {
             // it's option if you want to change the WebSDK dependency link resources. setZoomJSLib must be run at first
             ZoomMtg.setZoomJSLib("https://source.zoom.us/1.9.6/lib", "/av"); // CDN version default
 
             // Prepare Required Files
             ZoomMtg.preLoadWasm();
             ZoomMtg.prepareJssdk();
             const zoomMeeting = document.getElementById("zmmtg-root")
             console.log(zoomMeeting);
             const meetConfig = {
                 apiKey: '{{$api_key}}',
                 meetingNumber: '{{$meeting_number}}',
                 leaveUrl: 'http://ifocustraining/portal/zoom',
                 userName: "{{$user->surname . ' '. $user->othernames }}",
                 userEmail: "{{$user->email}}",
                 passWord: '{{$key}}', // if required
                 role: 0 // 1 for host; 0 for attendee
             };
             ZoomMtg.init({
                 leaveUrl: meetConfig.leaveUrl,
                 isSupportAV: true,
                 success: function() {
                     ZoomMtg.join({
                         signature: '{{$signature}}',
                         apiKey: meetConfig.apiKey,
                         meetingNumber: meetConfig.meetingNumber,
                         userName: meetConfig.userName,
                         passWord: meetConfig.passWord, // password optional; set by Host
                         error(res) {
                             console.log(res)
                         }
                     })
                 }
             });
         })();
     </script>
 </body>
 
 </html>
 