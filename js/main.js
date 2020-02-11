const button = document.getElementsByClassName('fetch-data__button');

async function sayHi() {
    const response = await fetch('fetchData.php');
    if(response.ok){
        console.log(await response.text())
    }
}



button[0].addEventListener('click', sayHi);

