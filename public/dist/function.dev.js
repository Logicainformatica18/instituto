"use strict";

function readImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result); // Renderizamos la imagen
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function New() {
  form.create.disabled = false;
  form["new"].disabled = false;
  form.update.disabled = true;
  form.id.value = "";
}

function Up() {
  form.create.disabled = true;
  form["new"].disabled = true;
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
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
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
    }).then(function (response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
    })["catch"](function (response) {
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
  }).then(function (response) {
    //   console.log(response.data);
    institute.id.value = response.data["id"];
    institute.description.value = response.data["description"];
  })["catch"](function (response) {
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
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function instituteShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: 'post',
    url: 'instituteShow',
    data: formData
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
} //


function positionStore() {
  var formData = new FormData(document.getElementById("position"));
  axios({
    method: 'post',
    url: 'positionStore',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
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
    }).then(function (response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
    })["catch"](function (response) {
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
  }).then(function (response) {
    //   console.log(response.data);
    position.id.value = response.data["id"];
    position.description.value = response.data["description"];
  })["catch"](function (response) {
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
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function positionShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: 'post',
    url: 'positionShow',
    data: formData
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
} //


function userStore() {
  var formData = new FormData(document.getElementById("user"));
  axios({
    method: 'post',
    url: 'userStore',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function userDestroy(id) {
  if (confirm("Esta seguro de Eliminar?")) {
    var formData = new FormData(document.getElementById("user"));
    formData.append("id", id);
    axios({
      method: 'post',
      url: "userDestroy",
      data: formData,
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
    })["catch"](function (response) {
      //handle error
      console.log(response);
    });
  }
}

function userEdit(id) {
  var formData = new FormData(document.getElementById("user"));
  formData.append("id", id);
  axios({
    method: 'post',
    url: 'userEdit',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    user.id.value = response.data["id"];
    user.dni.value = response.data["dni"];
    user.positionid.value = response.data["positionid"];
    user.firstname.value = response.data["firstname"];
    user.lastname.value = response.data["lastname"];
    user.names.value = response.data["names"];
    user.fotografia.src = "imageuser/" + response.data["photo"];
    user.email.value = response.data["email"];
    user.cellphone.value = response.data["cellphone"];
    var datebirth = new Date(response.data["datebirth"]);
    user.day.value = datebirth.getDate();
    user.month.value = datebirth.getMonth();
    user.year.value = datebirth.getFullYear();

    if (response.data["sex"] == "M") {
      document.getElementById('M').checked = true;
    } else {
      document.getElementById('F').checked = true;
    }
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function userUpdate() {
  var formData = new FormData(document.getElementById("user"));
  axios({
    method: 'post',
    url: 'userUpdate',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function userShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: 'post',
    url: 'userShow',
    data: formData
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
} //


function specialtyStore() {
  var formData = new FormData(document.getElementById("specialty"));
  axios({
    method: 'post',
    url: 'specialtyStore',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function specialtyDestroy(id) {
  if (confirm("Esta seguro de Eliminar?")) {
    var formData = new FormData(document.getElementById("specialty"));
    formData.append("id", id);
    axios({
      method: 'post',
      url: "specialtyDestroy",
      data: formData,
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
    })["catch"](function (response) {
      //handle error
      console.log(response);
    });
  }
}

function specialtyEdit(id) {
  var formData = new FormData(document.getElementById("specialty"));
  formData.append("id", id);
  axios({
    method: 'post',
    url: 'specialtyEdit',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    specialty.id.value = response.data["id"];
    specialty.description.value = response.data["description"];
    specialty.instituteid.value = response.data["instituteid"]; // console.log(response.data);
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function specialtyUpdate() {
  var formData = new FormData(document.getElementById("specialty"));
  axios({
    method: 'post',
    url: 'specialtyUpdate',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function specialtyShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: 'post',
    url: 'specialtyShow',
    data: formData
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
} //


function courseStore() {
  var formData = new FormData(document.getElementById("course"));
  axios({
    method: 'post',
    url: 'courseStore',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function courseDestroy(id) {
  if (confirm("Esta seguro de Eliminar?")) {
    var formData = new FormData(document.getElementById("course"));
    formData.append("id", id);
    axios({
      method: 'post',
      url: "courseDestroy",
      data: formData,
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
    })["catch"](function (response) {
      //handle error
      console.log(response);
    });
  }
}

function courseEdit(id) {
  var formData = new FormData(document.getElementById("course"));
  formData.append("id", id);
  axios({
    method: 'post',
    url: 'courseEdit',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    course.id.value = response.data["id"];
    course.description.value = response.data["description"];
    course.specialtyid.value = response.data["specialtyid"];
    course.cicle.value = response.data["cicle"]; // console.log(response.data);
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function courseUpdate() {
  var formData = new FormData(document.getElementById("course"));
  axios({
    method: 'post',
    url: 'courseUpdate',
    data: formData,
    headers: {
      'Content-Type': 'multipart/form-data'
    }
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}

function courseShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: 'post',
    url: 'courseShow',
    data: formData
  }).then(function (response) {
    //handle success
    var contentdiv = document.getElementById("mycontent");
    contentdiv.innerHTML = response.data;
  })["catch"](function (response) {
    //handle error
    console.log(response);
  });
}