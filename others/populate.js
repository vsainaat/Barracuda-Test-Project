var myJson = {
    "country": [
        {
            "name": "United States",
            "id": "usa",
            "states": [
                {
                    "name": "State 1 USA",
                    "id": "usaState1",
                    "cities": [
                        {
                            "name": "City 1",
                            "id": "usaState1City1",
                            "area": "12345 sqkm"
                        },
                        {
                            "name": "City 2",
                            "id": "usaState1City2",
                            "area": "12345 sqkm"
                        }
                    ]
                },
                {
                    "name": "State 2 USA",
                    "id": "usaState2",
                    "cities": [
                        {
                            "name": "City 3",
                            "id": "usaState2City3",
                            "area": "12345 sqkm"
                        },
                        {
                            "name": "City 4",
                            "id": "usaState2City4",
                            "area": "12345 sqkm"
                        }
                    ]
                }
            ]
        },
        {
            "name": "Australia",
            "id": "aus",
            "states": [
                {
                    "name": "State 1 Australia",
                    "id": "ausState1",
                    "cities": [
                        {
                            "name": "City 5",
                            "id": "ausState1City5",
                            "area": "12345 sqkm"
                        },
                        {
                            "name": "City 6",
                            "id": "ausState1City6",
                            "area": "12345 sqkm"
                        }
                    ]
                },
                {
                    "name": "State 2 Australia",
                    "id": "ausState2",
                    "cities": [
                        {
                            "name": "City 7",
                            "id": "ausState2City7",
                            "area": "12345 sqkm"
                        },
                        {
                            "name": "City 8",
                            "id": "ausState2City8",
                            "area": "12345 sqkm"
                        }
                    ]
                }
            ]
        }
    ]
}



$.each(myJson.country, function (index, value) {
    $("#country").append('<option value="'+value.id+'">'+value.name+'</option>');
});

$('#country').on('change', function(){
    $("h1").text($(this).val());
    for(var i = 0; i < myJson.country.length; i++)
    {
      if(myJson.country[i].id == $(this).val())
      {
         $('#state').html('<option value="000">-Select State-</option>');
         $.each(myJson.country[i].states, function (index, value) {
            $("#state").append('<option value="'+value.id+'">'+value.name+'</option>');
        });
      }
    }
});


function getCities() {
    var cities = [];
    for(var i = 0; i < myJson.country.length; i++) {
      var country = myJson.country[i];
      for(var j = 0; j < country.states.length; j++) {
          var state = country.states[j];
          for (var k = 0; k < state.cities.length; k++) {
            var city = state.cities[k];
            cities.push({
                stateId: state.id,
                stateName: state.name,
                cityId: city.id,
                cityName: city.name
            });
          }
      }
    }
    return cities;
}


$('#state').on('change', function(){
    console.log($(this).val());
    var cities = getCities();
    $('#model').html('<option value="000">-Select State-</option>');
    var stateId = $(this).val();
    $.each(cities, function (index, value) {
      if (value.stateId == stateId) {
        $("#model").append('<option value="'+value.cityId +'">'+value.cityName+'</option>');
      }
    });
  });
