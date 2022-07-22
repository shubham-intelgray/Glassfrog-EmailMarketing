async function convertCampaign() {
    const html = document.createElement('html');
    html.innerHTML = document.getElementById('template').value;
    const image = html.querySelector('img');
    const imageFormData = new FormData();
    const imageResult = fetch('./../../api/generate-images.php', {
        method: 'POST',
        body: imageFormData
    });

}