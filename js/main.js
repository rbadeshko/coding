let id = (id) => document.getElementById(id);
let classes = (classes) => document.getElementsByClassName(classes);

// BURGER MENU
let burger = classes("burger");
let mainNav = classes("header__menu");
let html = document.getElementsByTagName("html")[0];
let body = document.getElementsByTagName("body")[0];
let topBlock = classes("header-top__conatiner");
let headerInfo = classes("header__page-info");

//BURGER MENU ONCLICK
burger[0].addEventListener("click", function () {
    this.classList.toggle("_active");
    mainNav[0].classList.toggle("_show");
    body.classList.toggle("_fixed");
    html.classList.toggle("_fixed");
});

//top line show scroll
window.addEventListener('scroll',(event) => {
    if(window.scrollY > 100){
        topBlock[0].classList.add("_scroll");
        headerInfo[0].classList.add("_scroll");
} else {
    topBlock[0].classList.remove("_scroll");
    headerInfo[0].classList.remove("_scroll");
}
});

let errors_fields = document.querySelectorAll(".error");
console.log(errors_fields[0])

let checkbox = id("checkbox");
let name = id("form-name");
let sname = id("form-sname");
let tel = id("form-tel");
let mail = id("form-mail");
let isCheckbox = false;
let errorCaunt = [];


// isCkecked custom checkbox

if(checkbox) {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            console.log("Checkbox is checked");
            isCheckbox = true;
        } else {
            console.log("Checkbox is not checked");
            isCheckbox = false;
        }
    });
}
let engine = (id, serial) => {
    if (id.value.trim() === "") {
        errors_fields[serial].classList.add("_error-show");
        errorCaunt[serial] = 1;
    } else {
        errors_fields[serial].classList.remove("_error-show");
        errorCaunt[serial] = 0;
    }
}
// FORM SUBMITT AJAX CODE
function submitForm(e, form){
    //get button
    let targetSubmitButton = form.getElementsByClassName('btn__send-message')[0];

    e.preventDefault();
    engine(name, 0);
    engine(sname, 1);
    engine(tel, 2);
    engine(mail, 3);
    !isCheckbox ? errors_fields[4].classList.add("_error-show") : errors_fields[4].classList.remove("_error-show");

   
    // 4 is index of checkbox error
    if (errorCaunt.reduce((sum, a) => sum + a, 0) == 0 && isCheckbox) {
        
	targetSubmitButton.innerHTML = "Espera..."
    var data = new FormData();
	data.append('name',form.name.value);
    data.append('sname',form.sname.value);
    data.append('tel',form.tel.value);
	data.append('mail',form.mail.value);
    data.append('comment',form.comments.value);
	
	fetch(
		'/send.php', 
		{
		method: 'post',
		body: data,
		}
	).then(function(res){ 
		res.ok ? targetSubmitButton.innerHTML = "Enviado!" : targetSubmitButton.innerHTML = "One more time!";
		console.log(res) 
        form.reset();
        isCheckbox = false;
	})
.catch(function(res){ console.log(res) })
}
}

// ANIMATION
let section__cats = classes("section__cats")[0];
let section__cats_item = section__cats.getElementsByClassName('cat-img lazy');
let section__2 = classes("section__second-desc");
let section__3 = classes("products-block");
let section__4 = document.querySelectorAll('.feautured-cat');
let f_images = document.querySelectorAll('.fcat__img');


 for(let i=0; i <= section__cats_item.length; i++) {
    setTimeout(() => {
        section__cats_item[i].classList.add("_loaded")
    }, 350*i+1);
 }
// Section 2 Slide right
let observer_s2 = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        entry.isIntersecting && entry.target.classList.add("_slide-right");
    });
});
observer_s2.observe(section__2[0])
// Section 3 Slide bottom
let observer_s3 = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        setTimeout(() => {
            entry.isIntersecting && entry.target.classList.add("_slide-bottom");
        }, 550);
       
    });
});
observer_s3.observe(section__3[0]);

// Section 4 Slide bottom
let observer_s4 = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            setTimeout(() => {
                for(let i=0; i <= f_images.length; i++) {
                    setTimeout(() => {
                        f_images[i].classList.add("_loaded")
                    }, 350*i+1);
                }
        }, 550);
        }
        
       
    });
});
observer_s4.observe(section__4[0])