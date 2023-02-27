//course detail
let coursesByName = {
  "Career Courses": ["Data Science", "Advance Hardware & Networking", "Software Development",
    "Diploma in IT Infrastructure", "App Development",
    "Diploma IN DOTNET", "Diploma in Web Development", "Diploma in Software Testing", "Diploma IN JAVA",
    "Diploma in Cloud Computing"
  ],
  "Modular Courses": ["AWS Solutions", "BIG data Hadoop", "Python Certification", "Red Hat Linux Training",
    "Machine Learning", "MCSA", "Programming Logistics & Training", "Database Management", "PHP"
  ],
  "Personality Development": ["Self Enhancement", "Professional etiquettes", "Exclusive communication"],

}

function courselect(value) {
  if (value.length == 0) document.getElementById("courrses").innerHTML = "<option></option>";
  else {
    var citiesOptions = "";
    for (cityId in coursesByName[value]) {
      citiesOptions += "<option value=" + coursesByName[value][cityId] + ">" + coursesByName[value][cityId] +
        "</option>";
    }
    document.getElementById("courrses").innerHTML = citiesOptions;
  }
}



//Pagination
pageSize = 6;
incremSlide = 5;
startPage = 0;
numberPage = 0;

var pageCount = $(".postbox__item").length / pageSize;
var totalSlidepPage = Math.floor(pageCount / incremSlide);

for (var i = 0; i < pageCount; i++) {
  $(".pagin").append('<li><a href="#">' + (i + 1) + '</a></li> ');
  if (i > pageSize) {
    $(".pagin li").eq(i).hide();
  }
}

var prev = $("<li/>").click(function () {
  startPage -= 5;
  incremSlide -= 5;
  numberPage--;
  slide();
});

prev.hide();

var next = $("<li/>").click(function () {
  startPage += 5;
  incremSlide += 5;
  numberPage++;
  slide();
});

$(".pagin").prepend(prev).append(next);

$(".pagin li").first().find("a").addClass("current");

slide = function (sens) {
  $(".pagin li").hide();

  for (t = startPage; t < incremSlide; t++) {
    $(".pagin li").eq(t + 1).show();
  }
  if (startPage == 0) {
    next.show();
    prev.hide();
  } else if (numberPage == totalSlidepPage) {
    next.hide();
    prev.show();
  } else {
    next.show();
    prev.show();
  }


}

showPage = function (page) {
  $(".postbox__item").hide();
  $(".postbox__item").each(function (n) {
    if (n >= pageSize * (page - 1) && n < pageSize * page)
      $(this).show();
  });
}

showPage(1);
$(".pagin li a").eq(0).addClass("current");

$(".pagin li a").click(function () {
  $(".pagin li a").removeClass("current");
  $(this).addClass("current");
  showPage(parseInt($(this).text()));
});


//form submit
$("#contact-form").validate({
  rules: {
    name: {
      required: true,
      maxlength: 20,
    },
    email: {
      required: true,
      email: true,
    },
    contact: {
      required: true,
      number: true,
      minlength: 10,
      maxlength: 10,
    },
    subject: {
      required: true,
    },
    message: {
      required: true
    },
    course: {
      required: true
    },

  }, // rules end
  messages: {
    email: {
      email: "Please enter valid email id."
    }
  }, // messaged end

  errorClass: "text-danger error",
  submitHandler: function (form) {
    let formdata = $('#contact-form').serialize();
    $.ajax({
      url: "form.php",
      method: "POST",
      data: formdata,
      beforeSend: function () {
        $('#ac-wrapper').modal('hide');
        $("#ac-wrapper").css("display","none");
        $('.load-wrapp').toggleClass('loadhide loadshow');
      },
      success: function (response) {
        if (response) {
          $('.load-wrapp').toggleClass('loadhide loadshow');
          $('#ac-wrapper').modal('hide');
          $('form').trigger("reset");
          $('#ac-wrapper').css('display', 'none');
          swal(response);
          console.log(response)
        }
      },
      failure: function () {
        swal("Network Problem, Please Try again Later");
      }
    });
  }
});

  $(document).ready(function(){
$(".clsbtn").on("click",function(){
$("#ac-wrapper").css("display","none");
});
});

$(document).ready(function(){
  $('.category__item').hover(function(){
      $('.category__icon ').css(  '  background-color',' rgb(60, 104, 170) !important');
  });
});

$("#career-form").validate({
  rules: {
    name: {
      required: true,
      maxlength: 20,
    },
    cname: {
      required: true,
    },
    designation: {
      required: true,
    },
    checkbox:{
      required: true,
    },
    experience: {
      required: true,
    },
    location: {
      required: true,
    },
    cctc: {
      required: true,
    },
    ectc: {
      required: true,
    },
    notice: {
      required: true,
    },

  }, // rules end

  errorClass: "text-danger error",
  submitHandler: function (form) {
    let careerformdata = $('#career-form').serialize();
    $.ajax({
      url: "form.php",
      method: "POST",
      data: careerformdata,
      beforeSend: function () {
        $('.load-wrapp').toggleClass('loadhide loadshow');
      },
      success: function (response) {
        if (response) {
          $('.load-wrapp').toggleClass('loadhide loadshow');
          $('form').trigger("reset");
          swal(response);
        }
      },
      failure: function () {
        swal("Network Problem, Please Try again Later");
      }
    });
  }
});

$('.counter-number').each(function() {
  let $this = $(this),
      countTo = $this.attr('data-val');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {
    duration: 6000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
    }
  });  
  

});