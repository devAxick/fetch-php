const button1 = document.getElementsByClassName('fetch-data__button');
const button2 = document.getElementsByClassName('send-data');

async function sayHi() {
    const response = await fetch('fetchData.php');
    if(response.ok){
        console.log(await response.text())
    }
}

async function sayHi2() {
    const response = await fetch('sendData.php',{
        method: 'POST',
        headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: 'name=Dane'
    });
    if(response.ok){
        console.log(await response.text())
    }
}



button1[0].addEventListener('click', sayHi);
button2[0].addEventListener('click', sayHi2);


