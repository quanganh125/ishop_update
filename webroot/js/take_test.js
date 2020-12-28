function removeAllChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
}

function initialize(parent){
    let row = document.createElement("div");
    row.className = "row";
    parent.appendChild(row);

    let sub1 = document.createElement("div");
    sub1.className = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
    row.appendChild(sub1);

    let title = document.createElement("h2");
    title.style.color = "#fff";
    title.innerHTML = "Good luck!!";
    sub1.appendChild(title);

    let quest_frame = document.createElement("div");
    quest_frame.id = "quest_frame";
    sub1.appendChild(quest_frame);

    let form = document.createElement("form");
    form.id = "quest_form";
    quest_frame.appendChild(form);

    for ( i=0; i< 20 ; i++) {
        let question = document.createElement("div");
        question.id = "question".concat(i);
        
        quest_number = document.createElement("h5");
        quest_number.innerHTML = "Question ".concat(i,": What is JavaScript?");
        quest_number.style.color = "#fff";

        label1 = document.createElement("label");
        input1 = document.createElement("input");
        input1.id = "sub_quest".concat(i);
        input1.type = "checkbox";
        input1.value = "A";
        label1.innerHTML = "A";
        label1.style.color = "#fff";
        label1.appendChild(input1);

        label2 = document.createElement("label");
        input2 = document.createElement("input");
        input2.id = "sub_quest".concat(i);
        input2.type = "checkbox";
        input2.value = "B";
        label2.innerHTML = "B";
        label2.style.color = "#fff";
        label2.appendChild(input2);

        label3 = document.createElement("label");
        input3 = document.createElement("input");
        input3.id = "sub_quest".concat(i);
        input3.type = "checkbox";
        input3.value = "C";
        label3.innerHTML = "C";
        label3.style.color = "#fff";
        label3.appendChild(input3);

        label4 = document.createElement("label");
        input4 = document.createElement("input");
        input4.id = "sub_quest".concat(i);
        input4.type = "checkbox";
        input4.value = "D";
        label4.innerHTML = "D";
        label4.style.color = "#fff";
        label4.appendChild(input4);

        let div1 = document.createElement("div");
        div1.appendChild(label1);
        let div2 = document.createElement("div");
        div2.appendChild(label2);
        let div3 = document.createElement("div");
        div3.appendChild(label3);
        let div4 = document.createElement("div");
        div4.appendChild(label4);

        question.appendChild(quest_number);
        question.appendChild(div1);
        question.appendChild(div2);
        question.appendChild(div3);
        question.appendChild(div4);
        form.appendChild(question);

    }

    button = document.createElement("button");
    button.type = "submit";
    button.className = "btn btn-info btn-sm aligncenter";
    button.innerHTML = "Submit"
    form.appendChild(button)
}

function take_test() {
    let frame = document.getElementById("frame-remove-child");
    removeAllChildNodes(frame);   
    initialize(frame);

}