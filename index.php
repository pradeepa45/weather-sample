<html>
    <title>Weather Info</title>
    <link href="style.css" rel="stylesheet">
    <body>
        <div class="header">
            <h1>Weather Info</h1>
        </div>
        <hr>
        <div class="frosted">
            <table>
                <tr>
                    <td><label for="place">Current Place: </label></td>
                    <td><input type="text" name="place" id="location" disabled></td>
                </tr>
                <tr>
                    <td><label for="region">Region: </label></td>
                    <td><input type="text" name="region" id="region" disabled></td>
                </tr>
                <tr>
                    <td><label for="local-time">Time: </label></td>
                    <td><input type="text" name="local-time" id="c-time" disabled></td>
                </tr>
                <tr>
                    <td><label for="utc-offset">UTC Offset: </label></td>
                    <td><input type="text" name="utc-offset" id="utc" disabled></td>
                </tr>
                <tr>
                    <td><label for="temp-c">Temperature (C): </label></td>
                    <td><input type="text" name="temp-c" id="c-temp" disabled></td>
                </tr>
                <tr>
                    <td><label for="temp-f">Temperature (F): </label></td>
                    <td><input type="text" name="temp-f" id="f-temp" disabled></td>
                </tr>
                <tr>
                    <td><label for="feels-like">Feels like </label></td>
                    <td><input type="text" name="feels-like" id="f-like" disabled></td>
                </tr>
                <tr>
                    <td><label for="weather">Weather: </label></td>
                    <td><input type="text" name="weather" id="weather" disabled></td>
                </tr>
                <tr>
                    <td><label for="w-speed">Wind speed: </label></td>
                    <td><input type="text" name="w-speed" id="wind-speed" disabled></td>
                </tr>
                <tr>
                    <td><label for="pressure">Pressure: </label></td>
                    <td><input type="text" name="pressure" id="pressure" disabled></td>
                </tr>
                <tr>
                    <td><label for="humidity">Humidity: </label></td>
                    <td><input type="text" name="humidity" id="humidity" disabled></td>
                </tr>
                <tr>
                    <td><label for="uvi">UV Index: </label></td>
                    <td><input type="text" name="uvi" id="uv-index" disabled></td>
                </tr>
                <tr>
                    <td><label for="vis">Visibility: </label></td>
                    <td><input type="text" name="vis" id="visibility" disabled></td>
                </tr>
            </table>
        <!-- </br> -->
            <p id="last-observation"></p>
        </div>
    </body>
    <script>
            // document.getElementsByTagName("input").disabled= true;
            let url = "http://api.weatherstack.com/current?access_key=220419e1d2eb28444afff031cb1bf17a&query=";
            let req = new XMLHttpRequest();
            req.open("GET",url+"Guntur");
            req.send();
            req.onload = ()=>{
                // console.log(req.req)
                let obj = JSON.parse(req.response);
                console.log(req.response);
                let timeNow = obj.location.localtime;
                if(timeNow < "03:30:00" || timeNow > "19:00:00"){
                    // var period = "early morning";
                    var darkOrLight = "dark";
                }
                else {
                    var darkOrLight = "light"
                }
                let w = obj.current.weather_code;
                if(darkOrLight == "light"){
                    if(w == 113){
                        //sunny or clear sky
                        document.body.style.backgroundImage = "url('clearnight.jpg')";
                    }
                    else if(w == 116){
                        //partly cloudy
                        document.body.style.backgroundImage = "url('partlycloudy.jpg')";
                    }
                    else if(w == 119){
                        //cloudy
                        document.body.style.backgroundImage = "url('cloudy.jpg')";
                    }
                    else if(w == 143){
                        //mist
                        document.body.style.backgroundImage = "url('lightmist.jpg')";
                    }
                    else if(w == 248 || w == 260){
                        //fog
                        document.body.style.backgroundImage = "url('lightfog.jpg')";
                    }
                    else if(w == 281 || w == 311 || w == 286 || w == 296 || w == 176 || w == 263 || w == 185){
                        //light rain
                        //document.body.style.backgroundImage = "url('lightmist.jpg')";
                    }
                    else if(w == 302 || w == 299 || w == 293){
                        //moderate rain
                        document.body.style.backgroundImage = "url('rainy.jpg')";
                    }
                    else if(w == 284 || w == 308 || 305){
                        //heavy rain
                        document.body.style.backgroundImage = "url('heavyrain.jpg')";
                    }
                    else if(w == 227 || w == 179){
                        //snow
                        document.body.style.backgroundImage = "url('snow.jpg')";
                    }
                    else if(w == 200){
                        //thunders
                        document.body.style.backgroundImage = "url('lightthunders.jpg')";
                    }
                    else if(w == 230){
                        //blizzard
                        document.body.style.backgroundImage = "url('blizzard.jpg')";
                    }
                }
                if(darkOrLight == "dark"){
                    if(w == 113){
                        //sunny or clear sky
                        document.body.style.backgroundImage = "url('clearnight.jpg')";
                    }
                    else if(w == 116){
                        //partly cloudy
                        document.body.style.backgroundImage = "url('pcnight.jpg')";
                    }
                    else if(w == 119){
                        //cloudy
                        document.body.style.backgroundImage = "url('cloudy.jpg')";
                    }
                    else if(w == 143){
                        //mist
                        document.body.style.backgroundImage = "url('nightmist.jpg')";
                    }
                    else if(w == 248 || w == 260){
                        //fog
                        document.body.style.backgroundImage = "url('nightmist.jpg')";
                    }
                    else if(w == 281 || w == 311 || w == 286 || w == 296 || w == 176 || w == 263 || w == 185){
                        //light rain
                        document.body.style.backgroundImage = "url('lightmist.jpg')";
                    }
                    else if(w == 302 || w == 299 || w == 293){
                        //moderate rain
                        document.body.style.backgroundImage = "url('rainy.jpg')";
                    }
                    else if(w == 284 || w == 308 || 305){
                        //heavy rain
                        document.body.style.backgroundImage = "url('heavyrain.jpg')";
                    }
                    else if(w == 227 || w == 179){
                        //snow
                        document.body.style.backgroundImage = "url('nightsnow.jpg')";
                    }
                    else if(w == 200){
                        //thunders
                        document.body.style.backgroundImage = "url('darkthunders.jpg')";
                    }
                    else if(w == 230){
                        //blizzard
                        document.body.style.backgroundImage = "url('darkb.jpg')";
                    }
                }
                // console.log(obj.current.temperature);
                document.getElementById("location").value = obj.location.name + ", " + obj.location.country;
                document.getElementById("region").value = obj.location.region;
                document.getElementById("c-time").value = obj.location.localtime;
                document.getElementById("utc").value = obj.location.utc_offset;
                document.getElementById("c-temp").value = obj.current.temperature;
                document.getElementById("f-temp").value = (obj.current.temperature)*1.8 + 32;
                document.getElementById("weather").value = obj.current.weather_descriptions;
                document.getElementById("f-like").value = obj.current.feelslike;
                document.getElementById("wind-speed").value =obj.current.wind_speed;
                document.getElementById("pressure").value = obj.current.pressure;
                document.getElementById("humidity").value = obj.current.humidity;
                document.getElementById("uv-index").value = obj.current.uv_index;
                document.getElementById("visibility").value = obj.current.visibility;
                var observedTimeUTC = obj.current.observation_time;
                var para = document.getElementById("last-observation");
                var t = document.createTextNode("Last observed at " + observedTimeUTC + " UTC");
               para.appendChild(t);
            }
        // console.log(city);
    </script>
</html>
