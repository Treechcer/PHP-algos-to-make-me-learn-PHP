function sendData(data){
    fetch("main.php", { //sends request to "main.php"
        method: "POST", //POST request
        headers: {"Content-Type": "application/x-www-form-urlencoded"}, // type of the way you send it or whatever
        body : "input=" + encodeURIComponent(data)}) // data sent
    .then(response => response.text()) //after the promiss is okay it will read it as text
    .then(data => console.log(data)); //then it will send it to console
}

var input = "";

while(input != "end"){
    input = prompt("tell me some nuber");
    if (/^\d+$/.test(input)){ //checks the input for only numbers, if only numbers are present it will send the data to server
        sendData(input);
    }
}
