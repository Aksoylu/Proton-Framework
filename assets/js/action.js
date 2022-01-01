const fetchService = ()=>{
    var request = new XMLHttpRequest();
    request.open('POST', 'whatTimeIsIt.service', true);

    request.onload = function() {
        if (this.status == 200) 
        {
            console.log(this.response);
            let data = JSON.parse(this.response);

            alert(data.msg + data.time);

        } 
    };

    request.send();
};