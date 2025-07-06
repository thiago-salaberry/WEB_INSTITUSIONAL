const why_button = document.getElementById("why_button");
const things_button = document.getElementById("things_button");
const when_button = document.getElementById("when_button");
const subjects_button = document.getElementById("subjects_button");
const data_containers = document.getElementsByClassName("data-container");

const button_subjects = document.getElementsByClassName("button_subjects");
const grade_list = document.getElementsByClassName("grade_subject");

function hide_every_subject(){
    for(let i = 0; i < grade_list.length; i++){
        grade_list[i].classList.remove("d-flex");
        grade_list[i].classList.add("d-none");
    }
}

function show_list(list_index){
    hide_every_subject();
    grade_list[list_index].classList.remove("d-none");
    grade_list[list_index].classList.add("d-flex");
    console.log("HOLAAAA")
}


function hide_every_container(){
    for(let i = 0; i < data_containers.length; i++){
        data_containers[i].classList.remove("d-flex");
        data_containers[i].classList.add("d-none");
    }
}

function show_container(container_index){
    hide_every_container();
    data_containers[container_index].classList.remove("d-none");
    data_containers[container_index].classList.add("d-flex");
}

why_button.onclick = function(){show_container(0);};
things_button.onclick = function(){show_container(1);};
when_button.onclick = function(){show_container(2);};
subjects_button.onclick = function(){show_container(3);};

button_subjects[0].onclick = function(){show_list(0);};
button_subjects[1].onclick = function(){show_list(1);};
button_subjects[2].onclick = function(){show_list(2);};