var apiURL = 'http://localhost:8080/%E7%95%99%E8%A8%80%E6%9D%BF/PHP/api.php'
var request = new XMLHttpRequest;
request.open('GET', apiURL, true);
request.send();
request.onload = function () {
    if (request.status >= 200 && request.status < 400) {

        member = JSON.parse(request.response);
        console.log(member)
        var vm = new Vue({
            el: "#app",
            data: {
                member
            }

        })

    } else {}
}

console.log("妳好")