let data = []; 
getData();

async function getData() 
{
    try {
      const response = await fetch('question.json');
      const  data = await response.json(); 
      getResult(data);
    } catch (error) {
      console.error(error);
    }
} 

function getResult(res)
{
    data=res.sort(()=>Math.random()-0.5 );
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

        
        document.getElementById("quesH5").innerText = data[0].question;
        document.getElementById("QCM1").innerText = data[0].choices[0];
        document.getElementById("QCM2").innerText = data[0].choices[1];
        document.getElementById("QCM3").innerText = data[0].choices[2];
        document.getElementById("QCM4").innerText = data[0].choices[3];
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