$(document).ready(function() {  
  getWeather(); //Get the initial weather.
  setInterval(getWeather, 600000); //Update the weather every 10 minutes.
});

function getWeather() {
  $.simpleWeather({
    location: '95382',
    unit: 'f',
    success: function(weather) {
      html = '<h2>'+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<li class="currently">'+weather.currently+'</li>';
  
      html += '<table>';
      for(var i=0;i<weather.forecast.length;i++) {
        html += '<tr><td>'+weather.forecast[i].day+':</td><td>'+weather.forecast[i].low+'&deg;'+weather.units.temp+'-'+weather.forecast[i].high+'&deg;'+weather.units.temp+'</td><td>'+weather.forecast[i].text+'</td></tr>';
      }
      html += '</table>';
 
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
}
