


        function New() {
            form.create.disabled = false;
            form.new.disabled = false;
            form.update.disabled = true;
            form.id.value = "";
        }

        function Up() {
            form.create.disabled = true;
            form.new.disabled = true;
            form.update.disabled = false;
        }

        function instituteStore() {
            var formData = new FormData(document.getElementById("institute"));
            axios({
                    method: 'post',
                    url: 'instituteStore',
                    data: formData,
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    //handle success
                    var contentdiv = document.getElementById("mycontent");
                    contentdiv.innerHTML = response.data;

                })
                .catch(function(response) {
                    //handle error
                    console.log(response);
                });

        }

        function instituteDestroy(id) {
            if (confirm("Esta seguro de Eliminar?")) {
                var formData = new FormData(document.getElementById("institute"));
                formData.append("id", id);
                axios({
                        method: 'post',
                        url: "instituteDestroy",
                        data: formData,
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(function(response) {
                        //handle success
                        var contentdiv = document.getElementById("mycontent");
                        contentdiv.innerHTML = response.data;
                    })
                    .catch(function(response) {
                        //handle error
                        console.log(response);
                    });
            }
        }

        function instituteEdit(id) {
            var formData = new FormData(document.getElementById("institute"));
            formData.append("id", id);
            axios({
                    method: 'post',
                    url: 'instituteEdit',
                    data: formData,
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    //handle success
                    var contentdiv = document.getElementById("mycontent");
                    //   console.log(response.data);
                    institute.id.value = response.data["id"];
                    institute.description.value = response.data["description"];
                })
                .catch(function(response) {
                    //handle error
                    console.log(response);
                });

        }

        function instituteUpdate() {
            var formData = new FormData(document.getElementById("institute"));
            axios({
                    method: 'post',
                    url: 'instituteUpdate',
                    data: formData,
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    //handle success
                    var contentdiv = document.getElementById("mycontent");
                    contentdiv.innerHTML = response.data;
                })
                .catch(function(response) {
                    //handle error
                    console.log(response);
                });

        }

        function instituteShow() {
            var formData = new FormData(document.getElementById("show"));
            axios({
                    method: 'post',
                    url: 'instituteShow',
                    data: formData,
                })
                .then(function(response) {
                    //handle success
                    var contentdiv = document.getElementById("mycontent");
                    contentdiv.innerHTML = response.data;
                })
                .catch(function(response) {
                    //handle error
                    console.log(response);
                });

        }
//
function positionStore() {
    var formData = new FormData(document.getElementById("position"));
    axios({
            method: 'post',
            url: 'positionStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function positionDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("position"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "positionDestroy",
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent");
                contentdiv.innerHTML = response.data;
            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }
}

function positionEdit(id) {
    var formData = new FormData(document.getElementById("position"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: 'positionEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            //   console.log(response.data);
            position.id.value = response.data["id"];
            position.description.value = response.data["description"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function positionUpdate() {
    var formData = new FormData(document.getElementById("position"));
    axios({
            method: 'post',
            url: 'positionUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function positionShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'positionShow',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

