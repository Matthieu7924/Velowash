let button = document.querySelector('.buttspe');
let inputValue = document.querySelector('.inputValue');
let nameCity = document.querySelector('.nameCity');
let desc = document.querySelector('.desc');
let temp = document.querySelector('.temp');

if (button) {
    button.addEventListener('click', function () {
        fetch('https://api.openweathermap.org/data/2.5/weather?q=' + inputValue.value + '&appid=c668fbe2523dd327e75f41ea5c50ef49' + '&units=metric&lang=fr')
            .then(response => response.json())
            // .then(data => console.log(data))
            .then(data => {
                let nameValue = data['name'];
                let tempValue = data['main']['temp'];
                let descValue = data['weather'][0]['description'];
                nameCity.innerHTML = nameValue;
                temp.innerHTML = tempValue;
                desc.innerHTML = descValue;
            })
            .catch(err => alert("cette ville n'existe pas!"))
    });
}