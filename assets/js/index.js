fetch("question.json").then(e=>console.log(e.json()))
getData();
async function getData() {
    try {
      const response = await fetch('question.json');
      const data = await response.json();
      console.log(data);
      // data is a JavaScript object now!
    } catch (error) {
      console.error(error);
    }
  } 
  let info_div = document.getElementById("step-1");
  let question_div = document.getElementById("step-2");
  let result_div = document.getElementById("step-3");


  function info()
  {
    info_div.classList.add("d-block");
    question_div.classList.add("d-none");
    result_div.classList.add("d-none");

    info_div.classList.remove("d-none");
    question_div.classList.remove("d-block");
    result_div.classList.remove("d-block");

  }

  function question()
  {
    info_div.classList.add("d-none");
    question_div.classList.add("d-block");
    result_div.classList.add("d-none");
    
    info_div.classList.remove("d-block");
    question_div.classList.remove("d-none");
    result_div.classList.remove("d-block");
    
  }

  function result()
  {
    info_div.classList.add("d-none");
    question_div.classList.add("d-none");
    result_div.classList.add("d-block");
    
    info_div.classList.remove("d-block");
    question_div.classList.remove("d-block");
    result_div.classList.remove("d-none");
    
  }
  