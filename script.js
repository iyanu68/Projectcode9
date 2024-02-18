
const apiKey = 'aebe9a33422749b5b4d7071a1c61ac17'; // Replace 'YOUR_API_KEY' with your actual API key
const apiUrl = `https://api.ipgeolocation.io/ipgeo?apiKey=${apiKey}`;

const modal = document.getElementById('infoModal');

const closeBtn = document.getElementsByClassName('close')[0];

const getInfoBtn = document.getElementById('getInfoBtn');

async function fetchAndDisplayIPInformation() {
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();
        
        document.getElementById('ipAddress').innerText = data.ip;
        document.getElementById('country').innerText = data.country_name;
        document.getElementById('latitude').innerText = data.latitude;
        document.getElementById('longitude').innerText = data.longitude;
        
        modal.style.display = 'block';
        
    } catch (error) {
        console.error('Error fetching IP information:', error);
    }
}

getInfoBtn.addEventListener('click', fetchAndDisplayIPInformation);

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});