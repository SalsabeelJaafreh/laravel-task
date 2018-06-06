<!doctype html>
<html>
    <head>
    <title> Weather API</title>
    <p>Weather Forecast </p>
    <script 
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
   </head>
   <body>
    <input id="city"></input>
    <button id="getWeatherForecast">Get Weather</button>
        <div id="showWeatherForecast"></div>

 
        <script type="text/javascript">
            $(document).ready(function(){
                $("#getWeatherForecast").click(function(){
                    var city=$("#city").val();
                    var key='ec6c89c814fe9a17986d1f7c3bbaa288';

                    $.ajax({
                         url:'http://api.openweathermap.org/data/2.5/weather',
                        datatype:'json',
                        type:'GET',
                        data:{q:city , appid:key , units:'imperial'},

                        success:function(data){
                            var wf ='';
                            $.each(data.weather,function(index,val){
                                wf+='<p><b>'+ data.name +' '+
                                data.main.temp + '&deg;F '+ '|' + val.main +",  "+ 
                                val.description
                            });
                            $("#showWeatherForecast").html(wf);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
