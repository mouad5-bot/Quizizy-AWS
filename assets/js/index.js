let index = 0;
let index_progress_bar = 0;
let data = []; 
getData();

  async function getData() 
  {
      try {
        const response = await fetch('question.json');
        const  res = await response.json(); 
        getQuestions(res); //callback
      } catch (error) {
        console.error(error);
      }
  } 

  function getQuestions(questions)
  {
      data=questions.sort(()=>Math.random()-0.5 ); //sort : trier 
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

        
        // document.getElementById("quesH5").innerText = data[index].question;
        // document.getElementById("QCM1").innerText = data[index].choices[0];
        // document.getElementById("QCM2").innerText = data[index].choices[1];
        // document.getElementById("QCM3").innerText = data[index].choices[2];
        // document.getElementById("QCM4").innerText = data[index].choices[3];
        // index++;

        document.getElementById('queston-container').innerHTML = `<h5 id="quesH5"> ${data[index].question} </h5>                
        <div class="row">
          <div class="col-3">
            <input class="mt-3"  type="radio" name="q1" id="q1c" value=""> <br>
          </div>
          <div class="col-8">
            <label for="q1c" id="QCM1">${data[index].choices[0]}</label> <br>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <input class=" mt-3"  type="radio" name="q1" id="q2c" value=""> <br>
          </div>
          <div class="col-8">
            <label for="q2c" id="QCM2">${data[index].choices[1]}</label> <br>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <input class=" mt-3"  type="radio" name="q1" id="q3c" value=""> <br>
          </div>
          <div class="col-8">
            <label for="q3c" id="QCM3">${data[index].choices[2]}</label> <br>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <input class= "mt-3"  type="radio" name="q1" id="q4c" value=""> <br>
          </div>
          <div class="col-8">
            <label for="q4c" id="QCM4">${data[index].choices[3]}</label> <br>
          </div>
        </div>`

        index++; 
    }

  function result()
  {
    info_div.classList.add("d-none");
    question_div.classList.add("d-none");
    result_div.classList.add("d-block");
    
    info_div.classList.remove("d-block");
    question_div.classList.remove("d-block");
    result_div.classList.remove("d-none");


    let resultContent = document.getElementById("result-content");
    
    for(let i = 0; i < data.length; i++)
    {
        resultContent.innerHTML += 
        `
            <div class="question">
              <div class="row">
                <div class="col-3 ms-3 text-start">
                  <p> <b>  question ${i+1} :</b> </p> <br>
                </div>
                <div class="col-8">
                  <label for="q1c" id="QCM1"> ${data[i].question} </label> <br>      
                </div>
              </div>
              <div class="row">
                <div class="col-3 ms-3 text-start">
                  <p> <b>  correct choice :</b> </p> <br>
                </div>
                <div class="col-8 text-start">
                  <label for="q1c" id="QCM1">${data[i].answer}</label> <br>      
                </div>
                <div class="row">
                  <div class="col-3 ms-3 text-start">
                    <p> <b>  description :</b> </p> <br>
                  </div>
                  <div class="col-8 mb-5">
                    <label for="q1c" id="QCM1">${data[i].description} </label> <br>      
                  </div>
            </div>
        </div>   <hr/> ` ;
    }
  }
  


  function testingQuestions()
  {
    let checkRadio = document.querySelector("input:checked");

      if(checkRadio)
      {
          question(); 
          progressBar(); 
      }else
      {
          alert('please select one choice');
      }


  }

  
  function progressBar()
  {
    index_progress_bar += 100/data.length;
    document.querySelector('.progress-bar').style.width = `${index_progress_bar}%`;        
     
  }


function showQuestionComponent(){
    
    info_div.classList.add("d-none");
    question_div.classList.add("d-block");
    result_div.classList.add("d-none");
    
    info_div.classList.remove("d-block");
    question_div.classList.remove("d-none");
    result_div.classList.remove("d-block");

    question();
}

function validateForm() 
{
  console.log("hey");
  // Get the value of the "name" field
  var name = document.forms["myForm"]["name"].value;

  // Check if the name field is empty
  if (name == "") {
    alert("first Name must be filled out");
    return false;
  }


  var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
  if (xhr.readyState == XMLHttpRequest.DONE) {
    if (xhr.status == 200) {
      // Request was successful
      document.getElementById('content').innerHTML = xhr.responseText;
    } else {
      // Request failed
      alert('An error occurred: ' + xhr.status);
    }
  }
};
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '../../index.html', true);
  xhr.send();

  // Return true if the form is valid
  return true;
}