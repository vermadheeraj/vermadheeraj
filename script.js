

let data;

const inputBox = document.getElementById("inputBox");
const countryName = document.getElementById("countryName");
const stateName = document.getElementById("stateName");
const cityName = document.getElementById("cityName");
const humidity = document.getElementById("humidity");
const windSpeed = document.getElementById("windSpeed");
const temprature = document.getElementById("temprature");
const logoImage = document.getElementById("logoImage");
const weatherStatus = document.getElementById("weatherStatus");
const localTime = document.getElementById("localTime");
const day = document.getElementById("day");
const cloud = document.getElementById("cloud");
const visibility = document.getElementById("visibility");
const wind = document.getElementById("wind");
const pressure = document.getElementById("pressure");
const realFeels = document.getElementById("realFeels");






const getData = async (event) => {
    event.preventDefault();
    if (!inputBox.value) {
        alert(" Please Enter The City Name: ");
        return;
    }

    const city = inputBox.value;

    const fetchData = await fetch(`https://api.weatherapi.com/v1/current.json?key=9b3457e2e782415b8a774934230603&q=${city}`);
    const orgData = await fetchData.json();
    data = orgData;
    console.log(data);

    countryName.innerHTML = data.location.country;
    stateName.innerHTML = data.location.region;
    cityName.innerHTML = data.location.name;
    
    humidity.innerHTML = data.current.humidity;
    windSpeed.innerHTML = data.current.wind_kph;
    temprature.innerHTML = data.current.temp_c;

    logoImage.src = data.current.condition.icon;
    weatherStatus.innerHTML = data.current.condition.text;
    localTime.innerHTML = data.location.localtime;
    day.innerHTML = data.current.is_day;
    cloud.innerHTML = data.current.cloud;
    visibility.innerHTML = data.current.vis_miles;
    wind.innerHTML = data.current.wind_mph;
    pressure.innerHTML  = data.current.pressure_mb;
    realFeels.innerHTML = data.current.feelslike_c;




};




