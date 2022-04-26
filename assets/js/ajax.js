let fetch = document.getElementById('fetch');

fetch.addEventListener('click', buttonclick);

function buttonclick() {
    console.log("click done");
    //instatiate an xhr object
    const xhr = new XMLHttpRequest();

    // open the object

    // xhr.open('GET', 'https://jsonplaceholder.typicode.com/todos/1', true);

    xhr.open('GET', 'http://dummy.restapiexample.com/api/v1/employees', true);
    // xhr.getResponseHeader('Content-Type', 'application/json');



    //what to do on progress (optional)

    // xhr.onprogress = function() {
    //     console.log("onprogress");
    // }


    // 200 is respond code of http that means ok
    //what to do when response is ready
    xhr.onload = function() {

        if (this.status === 200) {
            console.log(this.responseText);


        } else {
            console.log("some error");
        }
    }

    // send the request





    xhr.send();

}
let backup = document.getElementById('backup');
backup.addEventListener('click', onback);

function onback() {

    console.log("onback");
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'http://dummy.restapiexample.com/api/v1/employees', true);

    xhr.onload = function() {
        if (this.status === 200) {
            let obj = JSON.parse(this.responseText);
            console.log(obj);
            let list = document.getElementById('list');
            str = "";
            for (key in obj) {
                str += `<li>${obj[key].status} </li>`;
            }
            list.innerHTML = str;
        } else {
            console.log("Some Error");
        }
    }

    xhr.send();


}