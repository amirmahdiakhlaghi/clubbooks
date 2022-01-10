<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/animate.min.css" />
  <link rel="stylesheet" href="/assets/css/main.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>clubbooks باشگاه کتاب ها</title>
  <script src="{{asset('js/app.js')}}"></script>
  @livewireStyles
</head>

<body dir="rtl">
  <livewire:header />

  {{$slot}}

  <livewire:footer />
  <script src="/assets/js/jquery-3.5.1.min.js"></script>
  <script src="/assets/js/popper.js"></script>
  <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="/assets/js/grid.js"></script>
  <script src="/assets/js/myapp.js"></script>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
  <script>
    window.livewire.on('showAlertAddComment',function(message){
        Swal.fire({
            // position: 'top-start',
            icon: 'success',
            title: message,
            showConfrimButton: false,
            timer: 1500
        })
    })
    // window.onload = function() {
    //     window.livewire.on('getIpJs', function() {

    //         return "hello";
    //         var script = document.createElement("script");
    //         script.type = "text/javascript";
    //         script.src = "https://jsonip.com/?callback=DisplayIP";
    //         document.getElementsByTagName("head")[0].appendChild(script);

    //         function DisplayIP(response) {
    //             document.getElementById("ipaddress").innerHTML = response.ip;
    //         }


    //     })
    // }
  </script>
</body>
</html>
